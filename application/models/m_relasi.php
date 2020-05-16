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
}