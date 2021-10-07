<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    
    $this->load->model('LoginModel');
  }

  function index(){
    if($this->session->userdata('logged_in') == TRUE){
      redirect('/admin'); // REDIRECT TO ADMIN PAGE IF SESSION EXISTS
    }else{
      $this->load->view('/login'); // LOAD LOGIN VIEW IF SESSION DOESN'T EXISTS
    }
  }

  function auth(){
    $name    = $this->input->post('input-name',TRUE);
    $password = hash('sha512', $this->input->post('input-password',TRUE));
    $validate = $this->LoginModel->validate($name,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_password'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        redirect('/admin');
    }else{
      $data['msgbody'][] = (object) array('msgcontent' => 'Username atau Password salah!' );
      $this->load->view('global_comment', $data);
      $this->load->view('/login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('/home');
  }
}
