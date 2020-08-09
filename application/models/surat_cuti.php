<?php

class surat_cuti extends CI_Model
{
  function cuti()
  {
    $this->db->select('*');
    $this->db->from('surat_cuti');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_cuti.nim');
    $result = $this->db->get();
    return  $result->result();
  }
  function get_relasi()
  {
    $return = $this->db->get('surat_cuti');
    return $return->result();
  }
  function detail_data($where, $table)
  {
    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('surat_cuti');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_cuti.nim');
    $this->db->where($where, $table);
    $hasil = $this->db->get();
    return $hasil;
  }
  function edit_data($where, $table)
  {
    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('surat_cuti');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_cuti.nim');
    $this->db->where($where, $table);
    $hasil = $this->db->get();
    return $hasil;
  }
  function pdf($where, $table)
  {

    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('surat_cuti');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_cuti.nim');
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
    $jml = "SELECT count(nim) as nim FROM surat_cuti";
    $hasil = $this->db->query($jml);
    return $hasil->row()->nim;
  }
  function update_dataku($data, $table)
  {
    $this->db->update($table, $data);
  }
}
