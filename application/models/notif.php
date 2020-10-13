<?php

class notif extends CI_Model
{
    function jml_surat_aktif_baca()
    {
        $jml_baca = "SELECT count(status_baca) as status_baca FROM surat_aktif_kuliah WHERE status_baca=0";
        $hasil = $this->db->query($jml_baca);
        return $hasil->row()->status_baca;
    }
    function jml_surat_cuti_baca()
    {
        $jml_baca = "SELECT count(status_baca) as status_baca FROM surat_cuti WHERE status_baca=0";
        $hasil = $this->db->query($jml_baca);
        return $hasil->row()->status_baca;
    }
    function jml_surat_kp_baca()
    {
        $jml_baca = "SELECT count(status_baca) as status_baca FROM surat_kerja_praktek WHERE status_baca=0";
        $hasil = $this->db->query($jml_baca);
        return $hasil->row()->status_baca;
    }
    function jml_surat_kp_baca2()
    {
        $jml_ = "SELECT count(sp_prodi) as sp_prodi FROM surat_kerja_praktek WHERE sp_prodi = NULL";
        $hasil = $this->db->query($jml_);
        return $hasil->row()->sp_prodi;
    }
    function jml_surat_mundur_baca()
    {
        $jml_baca = "SELECT count(status_baca) as status_baca FROM surat_mundur WHERE status_baca=0";
        $hasil = $this->db->query($jml_baca);
        return $hasil->row()->status_baca;
    }
}
