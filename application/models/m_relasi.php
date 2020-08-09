<?php

class m_relasi extends CI_Model
{

    function get_prodi()
    {
        return $this->db->get('prodi');
    }
    function get_semester()
    {
        return $this->db->get('semester');
    }
    function get_th_angkatan()
    {
        return $this->db->get('tahun_angkatan');
    }
    function get_dosen()
    {
        return $this->db->get('dosen');
    }
    function get_kelas()
    {
        return $this->db->get('kelas');
    }

    function get_relasi_surat_aktif()
    {
        $this->db->select('*');
        $this->db->from('surat_aktif_kuliah');
        $this->db->join('user_sistem', 'surat_aktif_kuliah.nim = user_sistem.id_user', 'right');
        $result = $this->db->get();
        return $result->result();
    }
    function get_relasi_surat_cuti()
    {
        $this->db->select('*');
        $this->db->from('surat_cuti');
        $this->db->join('user_sistem', 'surat_cuti.nim = user_sistem.id_user', 'right');
        $result = $this->db->get();
        return $result->result();
    }
    function ambil_matkul()
    {
        $this->db->order_by('mata_kuliah', 'asc');
        $matkul = $this->db->get('mata_kuliah');
        return $matkul->result();
    }
    function ambil_dosen($id_mata_kuliah)
    {
        $this->db->where('id_mata_kuliah', $id_mata_kuliah);
        $this->db->order_by('nama_dosen', 'asc');
        $dosen = $this->db->get('dosen');
        $hasil = '<option value=""> -Pilih Dosen- </option>';
        foreach ($dosen->result() as $ds) {
            $hasil .= '<option value="' . $ds->id_dosen . '">' . $ds->nama_dosen . '</option>';
        }
        return $hasil;
    }
    function edit_profil($table, $where){
        $hasil = $this->db->get_where($table, $where);
        $hasil = $this->db->get();
        return $hasil;
    }
    function update_profil($data, $table)
    {
    $this->db->update($table, $data);
    }
}
