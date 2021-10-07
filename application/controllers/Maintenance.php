<?php
class Maintenance extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  function index(){
  	if($this->checkMaint() > 0)
    {
      $this->load->view('maintenance');
    }
    else
    {
    	redirect('/');
    }
  }

  function checkMaint() // CHECK IS MAINTENANCE
  {
    $this->db->select("(SELECT is_maintenance FROM tbl_user WHERE user_id='1') AS maint",FALSE);
    $varMain = $this->db->get('tbl_user')->row();
    $hasil = $varMain->maint;
    return $hasil;
  }
}
