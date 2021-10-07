<?php

class WisataModel extends CI_Model{

      function show_wisata(){
            $hasil = $this->db->query("SELECT * FROM tbl_wisata");
            return $hasil;
      }

}