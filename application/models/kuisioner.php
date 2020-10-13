<?php

class kuisioner extends CI_Model
{

  function get_kuisioner()
  {
    $this->db->select('*');
    $this->db->from('jawaban_kuisioner');

    $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
    $result=$this->db->join('dosen', 'dosen.id_dosen = jawaban_kuisioner.id_dosen');
    $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');

    // $result = $this->db->get_where('jawaban_kuisioner', ['jawaban_kuisioner.id_user' => 'user_sistem.id_user']);

    $result = $this->db->get();
    return $result->result();
  }
  function get_kuisioner2()
  {
    $this->db->select('*');
    $this->db->from('jawaban_kuisioner');
    // $this->db->where_in('id_dosen, matkul');
    // $this->db->group_by('jawaban_kuisioner.id_user');
    $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
    $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');
    $this->db->join('kelas', 'kelas.id_kelas = user_sistem.id_kelas');
    // $this->db->where('jawaban_kuisioner.status_mengisi = 0');
    $this->db->group_by('jawaban_kuisioner.id_user');

    return $this->db->get()->result();
    // $result->result();
  }
  function get_kuisioner3()
  {
    $this->db->select('*');
    $this->db->from('user_sistem');
    $this->db->join('jawaban_kuisioner', 'jawaban_kuisioner.id_user = user_sistem.id_user');
    $this->db->join('prodi', 'prodi.prodi_id = user_sistem.prodi');
    $this->db->group_by('user_sistem.id_user');
    return $this->db->get()->result();
   }
  function get_relasi()
  {
    $this->db->select('*');
    $this->db->from('jawaban_kuisioner');
    $this->db->join('detail_kelas', 'detail_kelas.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');
    $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = detail_kelas.id_mata_kuliah');
    $this->db->join('dosen', 'dosen.id_dosen = detail_kelas.id_dosen');
    $this->db->join('user_sistem', 'user_sistem.id_kelas = detail_kelas.id_kelas');
    $this->db->where('user_sistem.id_user', $this->session->userdata('id_user'));
    $this->db->where('detail_kelas.id_mata_kuliah !=', 'jawaban_kuisioner.id_mata_kuliah');
    // $this->db->group_by('detail_kelas.id_mata_kuliah');
    // $this->db->where('jawaban_kuisioner.id_mata_kuliah', 'detail_kelas.id_mata_kuliah');
    // $this->db->where('jawaban_kuisioner.id_dosen', 'detail_kelas.id_dosen');
    
    return $this->db->get()->result();
  }
  function get_jk()
  {
    $this->db->select('jawaban_kuisioner.id_user, jawaban_kuisioner.id_mata_kuliah, jawaban_kuisioner.id_dosen');
    $this->db->from('jawaban_kuisioner');
    $this->db->join('detail_kelas', 'detail_kelas.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');
    $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = detail_kelas.id_mata_kuliah');
    $this->db->join('dosen', 'dosen.id_dosen = detail_kelas.id_dosen');
    $this->db->join('user_sistem', 'user_sistem.id_kelas = detail_kelas.id_kelas');
    $this->db->where('user_sistem.id_user', $this->session->userdata('id_user'));
    // $this->db->where('detail_kelas.id_mata_kuliah !=', 'jawaban_kuisioner.id_mata_kuliah');
    // $this->db->where('jawaban_kuisioner.status_mengisi = 0');
    // $this->db->from('jawaban_kuisioner');
    // $this->db->join('detail_kelas', 'detail_kelas.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');
    // $this->db->join('user_sistem', 'user_sistem.id_user = jawaban_kuisioner.id_user');
    // // $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.id_mata_kuliah');
    // // $this->db->join('dosen', 'dosen.id_dosen = jawaban_kuisioner.id_dosen');
    // $this->db->where('user_sistem.id_user', $this->session->userdata('id_user'));
    // $this->db->where('jawaban_kuisioner.id_mata_kuliah != detail_kelas.id_mata_kuliah');
    return $this->db->get()->result();
  }
  function get_dk($id_kelas)
  {
    $this->db->select('*');
    $this->db->from('detail_kelas');
    // $this->db->where('detail_kelas.id_mata_kuliah', $id_mata_kuliah);
    // $this->db->where('detail_kelas.id_dosen', $id_dosen);
    $this->db->where('detail_kelas.id_kelas', $id_kelas);
    return $this->db->get()->result();
  }
  // function get_relasi()
  // {
  //     $return = $this->db->join('dosen', 'dosen.nama_dosen = jawaban_kuisioner.dosen');
  //     $return = $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = jawaban_kuisioner.id_matkul');
  //     $return = $this->db->get_where('jawaban_kuisioner', ['id_user' => $this->session->userdata('id_user')]);
  //     return $return->result();
  // }
  function update_dataku($data, $table)
  {
    $return = $this->db->update($table, $data, ['id_user' => $this->session->userdata('id_user')]);
    // $return = $this->db->get_where('jawaban_kuisioner', );
    return $return;
  }
  function pilih_matkul($where)
  {
    // $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from('detail_kelas');
        $this->db->join('kelas', 'kelas.id_kelas = detail_kelas.id_kelas');
        $this->db->join('mata_kuliah', 'mata_kuliah.id_mata_kuliah = detail_kelas.id_mata_kuliah');
        $this->db->join('dosen', 'dosen.id_dosen = detail_kelas.id_dosen');
        $this->db->join('prodi', 'prodi.prodi_id = detail_kelas.id_prodi');
        $this->db->join('user_sistem', 'user_sistem.id_kelas = detail_kelas.id_kelas');
        $this->db->where('detail_kelas.id_mata_kuliah' ,$where);
        $this->db->where('user_sistem.id_user', $this->session->userdata('id_user'));
        // // $this->db->group_by('detail_kelas.id_mata_kuliah');
        $this->db->where('detail_kelas.id_dosen = dosen.id_dosen');
        $this->db->where('detail_kelas.id_prodi', $this->session->userdata('prodi'));
    return $this->db->get()->result();
  }
  function pertanyaan_kuisioner(){
    $this->db->select('*');
    $this->db->from('pertanyaan_kuisioner');
    return $this->db->get()->result();
  }
  function edit_tanya($where, $table)
  {
      $hasil = $this->db->get_where($table, $where);
      // $this->db->select('*');
      // $this->db->from('surat_aktif_kuliah');
      // $this->db->join('user_sistem', 'user_sistem.id_user = surat_aktif_kuliah.nim');
      $this->db->where($where, $table);
      // $hasil = $this->db->get();
      return $hasil;
  }
  function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}
