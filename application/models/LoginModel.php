<?php
class LoginModel extends CI_Model{

  function validate($name,$password){
    $this->db->where('user_name',$name);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_user',1);
    return $result;
  }
}
