<?php

use Zxing\Result;

Class surat_aktif_kuliah extends CI_Model{

    function aktif_kuliah(){
            return $this->db->get('surat_aktif_kuliah');
            

    }
    function aktif_kuliahh(){
        
        $hasil = $this->db->order_by('nim','DESC')->get('surat_aktif_kuliah');
        return  $hasil->result();

    }

    function detail_data($id = NULL){
        $query = $this->db->get_where('surat_aktif_kuliah', array('id'=>$id))->row();
        return $query;
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
      }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function jml_surat_aktif(){
        $jml = "SELECT count(nim) as nim FROM surat_aktif_kuliah";
        $hasil = $this->db->query($jml);
        return $hasil->row()->nim;
    }
    


}


