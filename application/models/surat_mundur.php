<?php

class surat_mundur extends CI_Model
{

  function mundur()
  {
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $result = $this->db->get();
    return  $result->result();
  }
  function detail_data($table, $where)
  {
    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $this->db->where($where, $table);
    $hasil = $this->db->get();
    return $hasil;
  }
  function edit_data($where, $table)
  {
    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $this->db->where($where, $table);
    $hasil = $this->db->get();
    return $hasil;
  }
  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function jml()
  {
    $jml = "SELECT count(nim) as nim FROM surat_mundur";
    $hasil = $this->db->query($jml);
    return $hasil->row()->nim;
  }
  function update_dataku($data, $table)
  {
    $this->db->update($table, $data);
  }
}
