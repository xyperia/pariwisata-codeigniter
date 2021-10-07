<?php
class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if($this->checkMaint() > 0)
    {
      redirect('/maintenance', 'refresh');
    }

    $this->load->model('WisataModel');
    $this->load->model('BeritaModel');
  }

  function index()
  {
    $data['content'] = $this->BeritaModel->show_berita_limit();

    $this->load->view('navbar');
    $this->load->view('home', $data);
    $this->load->view('footer');
  }

  function checkMaint() // CHECK IS MAINTENANCE
  {
    $this->db->select("(SELECT is_maintenance FROM tbl_user WHERE user_id='1') AS maint",FALSE);
    $varMain = $this->db->get('tbl_user')->row();
    $hasil = $varMain->maint;
    return $hasil;
  }

  function checkCommt() // CHECK IS COMMENTS ARE ENABLED
  {
    $this->db->select("(SELECT comment_enabled FROM tbl_user WHERE user_id='1') AS commnt",FALSE);
    $varMain = $this->db->get('tbl_user')->row();
    $hasil = $varMain->commnt;
    return $hasil;
  }

  function encrypt( $plaintext = NULL )
  {
    $cryptkey = '5b3bb3e5458e02aa356f2fc671ae08d9'; // MD5
    $ivkey = '3ba6bbc5b6d58568bfb6f0023379b5ec'; // MD5

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $cryptkey );
    $iv = substr( hash( 'sha256', $ivkey ), 0, 16 );
    $output = base64_encode( openssl_encrypt( $plaintext, $encrypt_method, $key, 0, $iv ) );

    return $output;
  }

  function decrypt( $ciphertext = NULL )
  {
    $cryptkey = '5b3bb3e5458e02aa356f2fc671ae08d9'; // MD5
    $ivkey = '3ba6bbc5b6d58568bfb6f0023379b5ec'; // MD5

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $cryptkey );
    $iv = substr( hash( 'sha256', $ivkey ), 0, 16 );
    $output = openssl_decrypt( base64_decode( $ciphertext ), $encrypt_method, $key, 0, $iv );

    return $output;
  }

  function checkdirectscript( $key = NULL, $validity = FALSE )
  {
    if(empty($key) || $validity == FALSE)
    {
      $this->session->set_flashdata('err_sess', TRUE);
      redirect('errorcontrol/direct_script'); // REDIRECT IF DIRECT SCRIPT DETECTED
    }
  }

  public function galeri()
  {
    $data['content'] = $this->WisataModel->show_wisata();

    $this->load->view('navbar');
    $this->load->view('gallery', $data);
    $this->load->view('footer');
  }

  public function berita()
  {
    $data['content'] = $this->BeritaModel->show_berita();

    $this->load->view('navbar');
    $this->load->view('news', $data);
    $this->load->view('footer');
  }

  public function kontak()
  {
    $this->load->view('navbar');
    $this->load->view('contact');
    $this->load->view('footer');
  }

  function show_wisata_detail( $ciphertext = NULL )
  {
    $this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $kode = $this->decrypt($ciphertext);
    $this->db->where('wisata_id', $kode);
    $data['content']=$this->db->get('tbl_wisata');

    $this->load->view('navbar');
    $this->load->view('action/view_wisata', $data);
    $this->load->view('footer');
  }

  function show_berita_detail( $ciphertext = NULL )
  {
    $this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $kode = $this->decrypt($ciphertext);
    $this->db->where('berita_id', $kode);
    $data['content']=$this->db->get('tbl_berita');

    $this->load->view('navbar');
    $this->load->view('action/view_berita', $data);
    $this->load->view('footer');
  }

  function kirim_komentar()
  {
    if($this->checkCommt() == 1)
    {
      $name = $this->input->post('input-name');
      $email = $this->input->post('input-email');
      $comment = $this->input->post('input-comment');

      $this->checkdirectscript($name, TRUE); // CHECKING SCRIPT VALIDITY

      $data = array(
            'komentar_id' => NULL,
            'komentar_author' => $name,
            'komentar_email' => $email,
            'komentar_content' => $comment
      );

      if($this->db->insert('tbl_komentar', $data)){
        $data['msgbody'][] = (object) array('msgcontent' => 'Komentar terkirim!' );
        $this->load->view('global_comment', $data);
        $this->kontak();
      }
    }
    else
    {
      $data['msgbody'][] = (object) array('msgcontent' => 'Kolom komentar dinonaktifkan!' );
      $this->load->view('global_comment', $data);
      $this->kontak();
    }
  }
}
