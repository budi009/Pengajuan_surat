<?php

class surat_mundur extends CI_Model
{

  function mundur()
  {
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
    $result = $this->db->get();
    return  $result->result();
  }
  function mundur2()
  {
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
    $this->db->where( 'surat_mundur.nim =', $this->session->userdata('id_user'));

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
    $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
    $this->db->where($where, $table);
    $hasil = $this->db->get();
    return $hasil;
  }
  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function update_data_form($where, $data, $table)
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
  function status_pengajuan()
  {
      
      $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
      $result = $this->db->get_where('surat_mundur',['nim' => $this->session->userdata('id_user')]);
      return  $result->result();
  }
  function update_dataku($data, $table)
  {
    $this->db->update($table, $data);
  }
  function pdf($where, $table)
  {

    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
    $this->db->where($where, $table);
    $hasil = $this->db->get();

    return $hasil;
  }
  function pdf_form()
  {

    // $hasil = $this->db->get_where($table);
    $this->db->select('*');
    $this->db->from('surat_mundur');
    $this->db->join('user_sistem', 'user_sistem.id_user = surat_mundur.nim');
    $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');

    $this->db->where( 'surat_mundur.nim =', $this->session->userdata('id_user'));
    $hasil = $this->db->get();

    return $hasil;
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
