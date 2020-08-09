<?php

class surat_kp extends CI_Model
{

  function kerja_praktek()
  {
    $this->db->select('*');
    $this->db->from('detail_anggota_kp');
    $this->db->join('surat_kerja_praktek', 'surat_kerja_praktek.id_kp = detail_anggota_kp.kp_id');
    $result = $this->db->get();
    return  $result->result();
  }

  function edit_data($where, $table)
  {
    $hasil = $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('detail_anggota_kp');
    $this->db->join('surat_kerja_praktek', 'surat_kerja_praktek.id_kp = detail_anggota_kp.kp_id');
    $this->db->where($where, $table);
    $hasil = $this->db->get();
    return $hasil;
  }
  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function validasi($data, $table)
    {
       
        $this->db->update($table, $data);
    }
  function jml()
  {
    $jml = "SELECT count(sp_prodi) as sp_prodi FROM surat_kerja_praktek WHERE sp_prodi != '' ";
    $hasil = $this->db->query($jml);
    return $hasil->row()->sp_prodi;
  }
  // function jml_l()
  // {
  //   $this->db->from('surat_kerja_praktek');
  //   $this->db->where('surat_kerja_praktek.sp_prodi = "NULL"');
  //   $query = $this->db->get();
  //   if($query->num_rows()>0){
  //     return $query->num_rows();
  //   }else{
  //     return 0;
  //   }
  // }
  function update_dataku($data, $table)
  {
    $this->db->update($table, $data);
  }
}
