<?php

class KomentarModel extends CI_Model{

      function show_komentar(){
            $hasil = $this->db->query("SELECT * FROM tbl_komentar ORDER BY komentar_id DESC");
            return $hasil;
      }

}