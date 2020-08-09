<?php

class kuisioner extends CI_Model
{

  function get_kuisioner()
  {
    $this->db->select('*');
    $this->db->from('jawaban_kuisioner');
    $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
    $this->db->join('dosen', 'dosen.id_dosen = jawaban_kuisioner.id_dosen');
    $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.matkul');
    $result = $this->db->get();
    return  $result->result();
  }
  function get_relasi()
  {
     $return = $this->db->get('kuisioner');
    return $return->result();
  }
}
