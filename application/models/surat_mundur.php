<?php

Class surat_mundur extends CI_Model{

    function mundur(){
            return $this->db->get('surat_mundur');
    }
    function detail_data($id = NULL){
        $query = $this->db->get_where('surat_mundur', array('mundur_id'=>$id))->row();
        return $query;
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
      }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function jml(){
        $jml = "SELECT count(nim) as nim FROM surat_mundur";
        $hasil = $this->db->query($jml);
        return $hasil->row()->nim;
      }
}



