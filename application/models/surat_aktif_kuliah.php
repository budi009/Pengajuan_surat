<?php

use Zxing\Result;

class surat_aktif_kuliah extends CI_Model
{

    function aktif_kuliah()
    {
        return $this->db->get('surat_aktif_kuliah');
    }
    function aktif_kuliahh()
    {
        $this->db->select('*');
        $this->db->from('surat_aktif_kuliah');
        $this->db->join('user_sistem', 'user_sistem.id_user = surat_aktif_kuliah.nim', 'left');
        $result = $this->db->get();
        return  $result->result();
    }

    function pdf($where, $table)
    {

        $hasil = $this->db->get_where($table, $where);
        $this->db->select('*');
        $this->db->from('surat_aktif_kuliah');
        $this->db->join('user_sistem', 'user_sistem.id_user = surat_aktif_kuliah.nim');
        $this->db->where($where, $table);
        $hasil = $this->db->get();
        return $hasil;
    }

    function detail_data($where, $table)
    {
        $hasil = $this->db->get_where($table, $where);
        $this->db->select('*');
        $this->db->from('surat_aktif_kuliah');
        $this->db->join('user_sistem', 'user_sistem.id_user = surat_aktif_kuliah.nim');
        $this->db->where($where, $table);
        $hasil = $this->db->get();
        return $hasil;
    }
    function edit_data($where, $table)
    {
        $hasil = $this->db->get_where($table, $where);
        $this->db->select('*');
        $this->db->from('surat_aktif_kuliah');
        $this->db->join('user_sistem', 'user_sistem.id_user = surat_aktif_kuliah.nim');
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
    function jml_surat_aktif()
    {
        $jml = "SELECT count(nim) as nim FROM surat_aktif_kuliah";
        $hasil = $this->db->query($jml);
        return $hasil->row()->nim;
    }
    function update_dataku($data, $table)
    {
        $this->db->update($table, $data);
    }
}
