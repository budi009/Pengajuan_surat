<?php

Class m_relasi extends CI_Model{

    function get_relasi(){
        $this->db->select(['p.nama_prodi', 'p.prodi_id', 'sc.nim', 'sc.id']);
        $this->db->from('surat_cuti sc');
        $this->db->join('prodi p', 'sc.prodi_id = p.prodi_id', 'left');
        $this->db->order_by('nama_prodi', 'asc');
        $return = $this->db->get('');
        return $return->result();
    }
    function get_prodi(){
        return $this->db->get('prodi');
    }
    function get_semester(){
        return $this->db->get('semester');
    }
    function get_th_angkatan(){
        return $this->db->get('tahun_angkatan');
    }
    function get_dosen(){
        return $this->db->get('dosen');
    }
    function get_kelas(){
        return $this->db->get('kelas');
    }

    function get_relasi_dosenmatkul(){
        $this->db->select('*');
        $this->db->from('mata_kuliah');
        $this->db->join('dosen','dosen.id_dosen = mata_kuliah.id_dosen');
        $result = $this->db->get();
        return $result->result();

    } 
}