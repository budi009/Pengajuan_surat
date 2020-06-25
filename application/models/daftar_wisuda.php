<?php

Class daftar_wisuda extends CI_Model{

    function wisuda(){
            return $this->db->get('daftar_wisuda');
    }
    function wisudaa(){
        $hasil = $this->db->order_by('id','DESC')->get('daftar_wisuda');
         return  $hasil->result();

    }
    // function detail_data($id = NULL){
    //     $query = $this->db->get_where('surat_mundur', array('mundur_id'=>$id))->row();
    //     return $query;
    // }
    // function edit_data($where,$table){
    //     return $this->db->get_where($table,$where);
    //   }
    // function update_data($where,$data,$table){
    //     $this->db->where($where);
    //     $this->db->update($table,$data);
    // }

}