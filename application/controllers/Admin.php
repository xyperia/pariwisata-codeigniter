<?php // LOCALHOST
class Admin extends CI_Controller{
  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') == TRUE){
      
    }else{
      redirect('/login');
    }

    $this->load->model('WisataModel');
    $this->load->model('BeritaModel');
    $this->load->model('KomentarModel');
  }

  function index()
  {
  	$this->beranda();
  }

  function beranda()
  {
    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/adm_base');
    $this->load->view('footer');
  }

  // SECTION DISPLAY VIEW
  function wisata()
  {
    $data['content'] = $this->WisataModel->show_wisata();

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/adm_wisata', $data);
    $this->load->view('footer');
  }

  function berita()
  {
    $data['content'] = $this->BeritaModel->show_berita();

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/adm_berita', $data);
    $this->load->view('footer');
  }

  function komentar()
  {
    $data['content'] = $this->KomentarModel->show_komentar();

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/adm_komentar', $data);
    $this->load->view('footer');
  }

  function tambah_wisata()
  {
    $data['content'] = $this->WisataModel->show_wisata();

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/action/tambah_wisata', $data);
    $this->load->view('footer');
  }

  function tambah_berita()
  {
    $data['content'] = $this->BeritaModel->show_berita();

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/action/tambah_berita', $data);
    $this->load->view('footer');
  }

  // SECTION TOOLS
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

  // SECTION VIEW TABLE
  function wisata_detail( $ciphertext = NULL )
  {
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $kode = $this->decrypt($ciphertext);
    $this->db->where('wisata_id', $kode);
    $data['content']=$this->db->get('tbl_wisata');

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/action/edit_wisata', $data);
    $this->load->view('footer');
  }

  function berita_detail( $ciphertext = NULL )
  {
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY
    
    $kode = $this->decrypt($ciphertext);
    $this->db->where('berita_id', $kode);
    $data['content']=$this->db->get('tbl_berita');

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/action/edit_berita', $data);
    $this->load->view('footer');
  }

  function akun_detail( $kode = 1 ){
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $this->db->where('user_id', $kode);
    $data['content']=$this->db->get('tbl_user');

    $this->load->view('admin/adm_navbar');
    $this->load->view('admin/action/edit_akun', $data);
    $this->load->view('footer');
  }

  // SECTION TAMBAH
  function aksi_tambah_wisata()
  {
    $_name = $this->input->post('wisata_name');
    $_desc = $this->input->post('wisata_desc');
    $_lat = $this->input->post('wisata_lat');
    $_lng = $this->input->post('wisata_lng');
    $_url = $this->input->post('wisata_url');
    $_pic = $this->input->post('wisata_pic');

    $this->checkdirectscript($_name, TRUE); // CHECKING SCRIPT VALIDITY

    $data = array(
      'wisata_name' => $_name,
      'wisata_desc' => $_desc, 
      'wisata_lat' => $_lat,
      'wisata_lng' => $_lng,
      'wisata_url' => $_url,
      'wisata_pic' => $_pic  
    );

    $config['upload_path']          = './uploads/wisata/'; // URL TEMPAT FOTO DIUPLOAD
    $config['allowed_types']        = 'gif|jpg|jpeg|png'; // TIPE FILE
    $config['max_size']             = 10000000; // UKURAN MAKSIMUM FILE YANG DIUPLOAD
    $config['encrypt_name']         = TRUE; // NAMA FILE YANG DIUPLOAD MENYESUAIKAN DENGAN VARIABEL $_ID
    $config['overwrite']            = TRUE;
    $this->load->library('upload', $config);
    if ( !$this->upload->do_upload('wisata_url'))
    {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
    }
    else
    {
      $upload_data = $this->upload->data();
      $file_name = $upload_data['file_name'];
      $data['wisata_url']=$file_name;
      if ($this->db->insert('tbl_wisata', $data)) {
        redirect('/admin/wisata','refresh');
      }
    }
  }

  function aksi_tambah_berita()
  {
    $_title = $this->input->post('berita_title');
    $_desc = $this->input->post('berita_desc');
    $_date = $this->input->post('berita_date');
    $_url = $this->input->post('berita_url');

    $this->checkdirectscript($_title, TRUE); // CHECKING SCRIPT VALIDITY

    $data = array(
      'berita_title' => $_title,
      'berita_desc' => $_desc, 
      'berita_date' => $_date,
      'berita_url' => $_url
    );

    $config['upload_path']          = './uploads/berita/'; // URL TEMPAT FOTO DIUPLOAD
    $config['allowed_types']        = 'gif|jpg|jpeg|png'; // TIPE FILE
    $config['max_size']             = 10000000; // UKURAN MAKSIMUM FILE YANG DIUPLOAD
    $config['encrypt_name']         = TRUE; // NAMA FILE YANG DIUPLOAD MENYESUAIKAN DENGAN VARIABEL $_ID
    $config['overwrite']            = TRUE;
    $this->load->library('upload', $config);
    if ( !$this->upload->do_upload('berita_url'))
    {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
    }
    else
    {
      $upload_data = $this->upload->data();
      $file_name = $upload_data['file_name'];
      $data['berita_url']=$file_name;
      if ($this->db->insert('tbl_berita', $data)) {
        redirect('/admin/berita','refresh');
      }
    }
  }

  // SECTION HAPUS
  function aksi_hapus_wisata( $ciphertext = NULL )
  {
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $kode = $this->decrypt($ciphertext);
    $this->db->where('wisata_id', $kode);
    if($this->db->delete('tbl_wisata')){
      redirect('/admin/wisata','refresh');
    }
  }

  function aksi_hapus_berita( $ciphertext = NULL )
  {
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $kode = $this->decrypt($ciphertext);
    $this->db->where('berita_id', $kode);
    if($this->db->delete('tbl_berita')){
      redirect('/admin/berita','refresh');
    }
  }

  function aksi_hapus_komentar( $ciphertext = NULL )
  {
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    $kode = $this->decrypt($ciphertext);
    $this->db->where('komentar_id', $kode);
    if($this->db->delete('tbl_komentar')){
      redirect('/admin/komentar','refresh');
    }
  }

  function aksi_hapus_semua_komentar()
  {
  	$this->checkdirectscript($this->input->post('validation'), TRUE); // CHECKING SCRIPT VALIDITY

    if($this->db->truncate('tbl_komentar')){
      redirect('admin/komentar','refresh');
    }
  }

  // SECTION UPDATE
  function aksi_update_wisata( $ciphertext = NULL )
  {
    $kode = $this->decrypt($ciphertext);
    $_id = $kode;
    $_name = $this->input->post('wisata_name');
    $_desc = $this->input->post('wisata_desc');
    $_lat = $this->input->post('wisata_lat');
    $_lng = $this->input->post('wisata_lng');
    $_url = $this->input->post('wisata_url');
    $_pic = $this->input->post('wisata_pic');

    $this->checkdirectscript($_name, TRUE); // CHECKING SCRIPT VALIDITY

    $this->db->where('wisata_id', $_id);

    $data = array(
      'wisata_id' => $_id,
      'wisata_name' => $_name,
      'wisata_desc' => $_desc, 
      'wisata_lat' => $_lat,
      'wisata_lng' => $_lng,
      'wisata_url' => $_url,
      'wisata_pic' => $_pic  
    );

    $config['upload_path']          = './uploads/wisata/'; // URL TEMPAT FOTO DIUPLOAD
    $config['allowed_types']        = 'gif|jpg|jpeg|png'; // TIPE FILE
    $config['max_size']             = 10000000; // UKURAN MAKSIMUM FILE YANG DIUPLOAD
    $config['encrypt_name']         = TRUE; // NAMA FILE YANG DIUPLOAD MENYESUAIKAN DENGAN VARIABEL $_ID
    $config['overwrite']            = TRUE;
    $this->load->library('upload', $config);
    if ( !$this->upload->do_upload('wisata_url'))
    {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
    }
    else
    {
      $upload_data = $this->upload->data();
      $file_name = $upload_data['file_name'];
      $data['wisata_url']=$file_name;
      if ($this->db->update('tbl_wisata', $data)) {
        redirect('/admin/wisata','refresh');
      }
    }
  }

  function aksi_update_berita( $ciphertext = NULL )
  {
    $kode = $this->decrypt($ciphertext);
    $_id = $kode;
    $_title = $this->input->post('berita_title');
    $_desc = $this->input->post('berita_desc');
    $_date = $this->input->post('berita_date');
    $_url = $this->input->post('berita_url');

    $this->checkdirectscript($_title, TRUE); // CHECKING SCRIPT VALIDITY

    $this->db->where('berita_id', $_id);

    $data = array(
      'berita_id' => $_id,
      'berita_title' => $_title,
      'berita_desc' => $_desc, 
      'berita_date' => $_date,
      'berita_url' => $_url
    );

    $config['upload_path']          = './uploads/berita/'; // URL TEMPAT FOTO DIUPLOAD
    $config['allowed_types']        = 'gif|jpg|jpeg|png'; // TIPE FILE
    $config['max_size']             = 10000000; // UKURAN MAKSIMUM FILE YANG DIUPLOAD
    $config['encrypt_name']         = TRUE; // NAMA FILE YANG DIUPLOAD MENYESUAIKAN DENGAN VARIABEL $_ID
    $config['overwrite']            = TRUE;
    $this->load->library('upload', $config);
    if ( !$this->upload->do_upload('berita_url'))
    {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
    }
    else
    {
      $upload_data = $this->upload->data();
      $file_name = $upload_data['file_name'];
      $data['berita_url']=$file_name;
      if ($this->db->update('tbl_berita', $data)) {
        redirect('admin/berita','refresh');
      }
    }
  }

  function aksi_update_akun( $kode = 1 )
  {
    $_id = $kode;
    $_name = $this->input->post('user_name');
    $_password = $this->input->post('user_password');
    $_commenb = $this->input->post('comment_enabled');
    $_maint = $this->input->post('is_maintenance');

    $this->checkdirectscript($_name, TRUE); // CHECKING SCRIPT VALIDITY

    $this->db->where('user_id', $_id);

    $data = array(
      'user_id' => $_id,
      'user_name' => $_name,
      'user_password' => hash('sha512', $_password),
      'comment_enabled' => $_commenb,
      'is_maintenance' => $_maint
    );

    if ($this->db->update('tbl_user', $data)) {
      $this->session->sess_destroy();
      redirect('admin');
    }
  }
  
}
