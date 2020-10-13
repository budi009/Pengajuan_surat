<?php

class dosen_rekap extends CI_Model
{

  function rekap_()
  {
    $this->db->select('*');
    $this->db->from('jawaban_kuisioner');

    $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
    $this->db->join('dosen', 'dosen.id_dosen = jawaban_kuisioner.id_dosen');
    $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');
    
    $this->db->where('dosen.nama_dosen =',$this->session->userdata('nama_user'));

    $result = $this->db->get();
    return $result->result();
  }
  function dosen_()
  {
    $this->db->select('*');
    $this->db->from('dosen');

    // $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
    // $result=$this->db->join('dosen', 'dosen.id_dosen = jawaban_kuisioner.id_dosen');
    // $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');

    // $result = $this->db->get_where('jawaban_kuisioner', ['jawaban_kuisioner.id_user' => 'user_sistem.id_user']);

    $result = $this->db->get();
    return $result->result();
  }
}