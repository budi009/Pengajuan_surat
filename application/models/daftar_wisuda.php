<?php

class daftar_wisuda extends CI_Model
{

    function wisuda()
    {
        $this->db->select('*');
        $this->db->from('daftar_wisuda');
        $this->db->join('user_sistem', 'user_sistem.id_user = daftar_wisuda.nim');
        $result = $this->db->get();
        return  $result->result();
    }
    function wisudaa()
    {
        $hasil = $this->db->order_by('id', 'DESC')->get('daftar_wisuda');
        return  $hasil->result();
    }
    function jml()
    {
        $jml = "SELECT count(nim) as nim FROM daftar_wisuda";
        $hasil = $this->db->query($jml);
        return $hasil->row()->nim;
    }
}
