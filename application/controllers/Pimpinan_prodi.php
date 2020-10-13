<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan_prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('Ciqrcode');
        $this->load->model('surat_cuti');
        $this->load->model('surat_kp');
        $this->load->model('surat_aktif_kuliah');
        $this->load->model('surat_mundur');
        $this->load->model('daftar_wisuda');
        $this->load->model('m_qr');
        $this->load->model('m_relasi');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();


        $this->load->view('pimpinan_prodi/template/dashboard_header');
        $this->load->view('pimpinan_prodi/template/dashboard_side', $data);
        $this->load->view('pimpinan_prodi/template/dashboard_top', $data);
        $this->load->view('pimpinan_prodi/index', $data);
        $this->load->view('pimpinan_prodi/template/dashboard_footer');
    }
    
    public function validasi_pimpinan_prodi(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_kp'] = $this->surat_kp->kerja_praktek();
        $data2['lokasi_id'] = $this->surat_kp->lokasi_kerja_praktek_id();
        $data2['anggota_kp'] = $this->surat_kp->anggota_kp_lokasi();
        $this->load->view('pimpinan_prodi/template/dashboard_header');
        $this->load->view('pimpinan_prodi/template/dashboard_side', $data);
        $this->load->view('pimpinan_prodi/template/dashboard_top', $data);
        $this->load->view('pimpinan_prodi/suratKP_prodi', $data2);
        $this->load->view('pimpinan_prodi/template/dashboard_footer');
    }
    public function editsuratkp($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id_kp' => $id);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where, 'surat_kerja_praktek')->result();
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan_prodi/template/dashboard_header');
        $this->load->view('pimpinan_prodi/template/dashboard_side', $data);
        $this->load->view('pimpinan_prodi/template/dashboard_top', $data);
        $this->load->view('pimpinan_prodi/editsuratkp', $data2);
        $this->load->view('pimpinan_prodi/template/dashboard_footer');
    }
    public function editsuratkp_tolak($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id_kp' => $id);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where, 'surat_kerja_praktek')->result();
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan_prodi/template/dashboard_header');
        $this->load->view('pimpinan_prodi/template/dashboard_side', $data);
        $this->load->view('pimpinan_prodi/template/dashboard_top', $data);
        $this->load->view('pimpinan_prodi/editsuratkp_tolak', $data2);
        $this->load->view('pimpinan_prodi/template/dashboard_footer');
    }
    public function updatesuratkp()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        $id_kp = $this->input->post('id');
        $fotoqrr = $user . 'jpg';

        $data = array(

            'qrcode'        => $fotoqrr
        );
        $where = array(
            'id_kp' => $id_kp
        );
        $this->surat_kp->update_data($where, $data, 'surat_kerja_praktek');
        redirect('pimpinan_prodi/validasi_pimpinan_prodi');
    }
}
