<?php

Class surat_cuti extends CI_Model{

  // function get($id){
  //   $this->db->from('surat_cuti');
  //   if($id != null){
  //       $this->db->where('id', $id);
  //   }
  //   $query = $this->db->get();
  //   return $query;
  // }
  function cuti(){
            return $this->db->get('surat_cuti');

    }
    function get_relasi(){
      // $this->db->select(['p.nama_prodi', 'p.prodi_id', 'sc.prodi_id', 'sc.id']);
      // $this->db->from('surat_cuti sc');
      // $this->db->join('prodi p', 'sc.prodi_id = p.prodi_id', 'left');
      // $this->db->order_by('nama_prodi', 'asc');
      $return = $this->db->get('surat_cuti');
      return $return->result();
  }
    // function ambil_data($id){
    //     $data = $this->db->where(['id'=>$id])
    //                     ->get("surat_cuti");

    //   if ($data->num_rows() > 0) {
    //       return $data->row();
    //   }
    // }
    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function jml(){
      $jml = "SELECT count(nim) as nim FROM surat_cuti";
      $hasil = $this->db->query($jml);
      return $hasil->row()->nim;
    }
}


