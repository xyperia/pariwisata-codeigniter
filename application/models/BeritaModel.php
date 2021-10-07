<?php

class BeritaModel extends CI_Model{

      function show_berita_limit(){
            $hasil = $this->db->query("SELECT * FROM tbl_berita ORDER BY berita_date DESC LIMIT 3");
            return $hasil;
      }
      function show_berita(){
            $hasil = $this->db->query("SELECT * FROM tbl_berita ORDER BY berita_date DESC");
            return $hasil;
      }
}