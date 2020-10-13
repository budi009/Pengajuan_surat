<?php

class surat_kp extends CI_Model
{

  function kerja_praktek()
  {
    $this->db->select('*');
    $this->db->from('detail_anggota_kp');
    $this->db->join('surat_kerja_praktek', 'surat_kerja_praktek.id_kp = detail_anggota_kp.kp_id');
    $result = $this->db->get();
    // var_dump($result->result()[0]);
    return  $result->result();
  }
  
  function lokasi_kerja_praktek_id(){
    $this->db->select( 'id_kp, nomor_surat, tempat, alamat_tempat, sp_prodi, penolakan, qrcode,status_pengajuan, waktu_mulai, waktu_selesai, status_cetak, tanggal_mengajukan');
    $this->db->from('surat_kerja_praktek');
    $this->db->where("status_pengajuan = 'Proses'");
    // $this->db->join('detail_anggota_kp', 'detail_anggota_kp.kp_id = surat_kerja_praktek.id_kp');
    $result = $this->db->get();
    // var_dump($result->result());
    return $result->result();
  }

  function anggota_kp_lokasi(){
    $this->db->select('detail_anggota_kp.kp_id, detail_anggota_kp.nama, detail_anggota_kp.nim');
    $this->db->from('detail_anggota_kp');
    $this->db->join('surat_kerja_praktek' ,'detail_anggota_kp.kp_id = surat_kerja_praktek.id_kp');
    $this->db->where("surat_kerja_praktek.status_pengajuan = 'Proses'");
    $result = $this->db->get();
    // var_dump($result->result());

    return $result->result();
  }

  function edit_data($where, $table)
  {
    $hasil = $this->db->get_where($table, $where);
    // $this->db->select('*');
    // $this->db->from('detail_anggota_kp');
    // $this->db->join('surat_kerja_praktek', 'surat_kerja_praktek.id_kp = detail_anggota_kp.kp_id');
    // $this->db->where($where, $table);
    // $hasil = $this->db->get();
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
  function status_pengajuan()
    {
        
        // $this->db->join('user_sistem', 'user_sistem.id_user = surat_cuti.nim');
        // $result = $this->db->get_where('surat_kp',['id_kp' => $this->session->userdata('id_user')]);
        // return  $result->result();
    }
  function update_dataku($data, $table)
  {
    $this->db->update($table, $data);
  }
  function pdf($where, $table)
    {

        $hasil = $this->db->get_where($table, $where);
        $this->db->select('*');
        $this->db->from('surat_kerja_praktek');
        // $this->db->join('user_sistem', 'user_sistem.id_user = detail_anggota_kp.nim');
        $this->db->join('prodi', 'prodi.prodi_id = surat_kerja_praktek.prodi');
        // $this->db->group_by('surat_kerja_praktek.id_kp');
        $this->db->where($where, $table);
        $hasil = $this->db->get();
        return $hasil;
    }
  function pdf2()
    {

        // $hasil = $this->db->get_where($table, $where);
        $this->db->select('detail_anggota_kp.kp_id, detail_anggota_kp.nama, detail_anggota_kp.nim');
        $this->db->from('detail_anggota_kp');
        $this->db->join('surat_kerja_praktek' ,'detail_anggota_kp.kp_id = surat_kerja_praktek.id_kp');
        $this->db->where("surat_kerja_praktek.status_pengajuan = 'Proses'");
        // $this->db->join('user_sistem', 'user_sistem.id_user = detail_anggota_kp.nim');
        // $this->db->join('detail_anggota_kp', 'detail_anggota_kp.kp_id = surat_kerja_praktek.id_kp');
        // $this->db->group_by('surat_kerja_praktek.id_kp');
        // $this->db->where($where, $table);
        $hasil = $this->db->get();
        return $hasil;
    }
    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}
