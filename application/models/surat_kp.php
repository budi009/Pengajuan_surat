<?php

Class surat_kp extends CI_Model{

    function kerja_praktek(){
            return $this->db->get('surat_kerja_praktek');
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
      }
  
      function update_data($where,$data,$table){
          $this->db->where($where);
          $this->db->update($table,$data);
      }
      function jml(){
        $jml = "SELECT count(nim) as nim FROM surat_kerja_praktek";
        $hasil = $this->db->query($jml);
        return $hasil->row()->nim;
      }
}


