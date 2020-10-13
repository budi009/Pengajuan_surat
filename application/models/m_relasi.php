<?php

class m_relasi extends CI_Model
{

    function ambil_prodi()
    {
        return $this->db->get('prodi');

        // return $this->db->get('prodi');
    }
    function get_prodi($id_user)
    {
        $this->db->select('*');
        $this->db->from('user_sistem');
        $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
        $this->db->where('user_sistem.id_user', $id_user);
        $result = $this->db->get();
        return $result->result();
        // return $this->db->get('prodi');
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
    function get_kelas($id_user)
    {
        $this->db->select('*');
        $this->db->from('user_sistem');
        $this->db->join('kelas', 'kelas.id_kelas = user_sistem.id_kelas');
        $this->db->where('user_sistem.id_user', $id_user);
        $result = $this->db->get();
        return $result->result();
    }

    function get_detail_matkul($id_kelas)
    {
        $this->db->select('*');
        $this->db->from('detail_kelas');
        $this->db->join('kelas', 'kelas.id_kelas = detail_kelas.id_kelas');
        $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = detail_kelas.id_mata_kuliah');
        $this->db->join('dosen', 'dosen.id_dosen = detail_kelas.id_dosen');
        $this->db->join('prodi', 'prodi.prodi_id = detail_kelas.id_prodi');
        $this->db->join('user_sistem', 'user_sistem.id_kelas = detail_kelas.id_kelas');
        $this->db->where('user_sistem.id_user', $this->session->userdata('id_user'));
        // $this->db->group_by('detail_kelas.id_mata_kuliah');
        $this->db->where('detail_kelas.id_kelas', $id_kelas);
        $this->db->where('detail_kelas.id_prodi', $this->session->userdata('prodi'));
        $result = $this->db->get();
        // print_r($result->result());
        // die;
        return $result->result();
    }


    function get_detail_dosen($id_matkul, $id_kelas)
    {
        $this->db->select('*');
        $this->db->from('detail_kelas');
        $this->db->join('kelas', 'kelas.id_kelas = detail_kelas.id_kelas');
        $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = detail_kelas.id_mata_kuliah');
        $this->db->join('dosen', 'dosen.id_dosen = detail_kelas.id_dosen');
        $this->db->where('detail_kelas.id_kelas', $id_kelas);
        $this->db->where('detail_kelas.id_mata_kuliah', $id_matkul);
        $result = $this->db->get();
        return $result->result();
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

    function profil($id_user)
    {
        $this->db->select('*');
        $this->db->from('user_sistem');
        $this->db->join('kelas', 'kelas.id_kelas = user_sistem.id_kelas');
        $this->db->where('user_sistem.id_user', $id_user);
        $result = $this->db->get();
        return $result->result();
    }
    function d_profil()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        // $this->db->join('user_sistem', 'user_sistem.id_kelas = kelas.id_kelas');
        // $this->db->where('user_sistem.id_user', $id_user);

        $result = $this->db->get();
        return $result->result();
    }
    function edit_profil($table, $where)
    {
        $this->db->get_where($table, $where);
    }
    function update_profil($data, $table)
    {
        $this->db->update($table, $data);
    }
    function cek_kuisioner()
    {
        $this->db->select('*');
        $this->db->from('jawaban_kuisioner');
        $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
        // $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
        $this->db->group_by('user_sistem.id_user');
        // $this->db->where('user_sistem.id_user = user_sistem.id_user');
        $query = $this->db->get();
        return $query->result();
        // print_r($query->result());


    }
    function cek_kuisioner2()
    {
        $this->db->select('*');
        $this->db->from('user_sistem');
        $query = $this->db->get();
        return $query->result();
        // print_r($query->result());


    }
    function ambil_id_user()
    {
        $this->db->select('id_user');
        $this->db->from('user_sistem');
        // $this->db->join('jawaban_kuisioner', 'jawaban_kuisioner.id_user != user_sistem.id_user');
        // $this->db->join('prodi', 'prodi.prodi_id = user_sistem.id_prodi');
        // $this->db->group_by('user_sistem.id_user');
        // $this->db->where('user_sistem.id_user =', $id_user);
        $query = $this->db->get();
        return $query->result();
        // print_r($query->result());


    }
    function update_status($data_sudah, $where){
        $this->db->where($where);
        $this->db->update('user_sistem', $data_sudah);
    }


    function jum_mat1($id_user)
    {
        $this->db->select('count(detail_kelas.id_mata_kuliah) as jum');
        $this->db->from('detail_kelas');
        $this->db->join('user_sistem', 'user_sistem.id_kelas = detail_kelas.id_kelas');
        $this->db->join('jawaban_kuisioner', 'user_sistem.id_user = jawaban_kuisioner.id_user');
        $this->db->where('jawaban_kuisioner.id_user =', $id_user);
        $query = $this->db->get();
        return $query->result();
        
    }














}
