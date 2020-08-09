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
    $this->db->get_where('jawaban_kuisioner', ['id_user' => $this->session->userdata('id_user')]);
    
    $result = $this->db->get();
    return  $result->result();
  }
  function get_relasi()
  {
    $return = $this->db->join('dosen', 'dosen.id_dosen = jawaban_kuisioner.id_dosen');
    $return = $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.matkul');
     $return = $this->db->get_where('jawaban_kuisioner', ['id_user' => $this->session->userdata('id_user')]);
    return $return->result();
  }
  function update_dataku($data, $table)
    {
      $return = $this->db->update($table, $data, ['id_user' => $this->session->userdata('id_user')]);
      // $return = $this->db->get_where('jawaban_kuisioner', );
      return $return;
    }
}
