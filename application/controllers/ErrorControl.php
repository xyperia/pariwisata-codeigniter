<?php
class ErrorControl extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('err_sess') == FALSE)
    {
      show_404();
  	}
  }

  function direct_script() // DIRECT SCRIPT ERROR
  {
    $this->load->view('errors/html/error_direct_script');
  }
}
