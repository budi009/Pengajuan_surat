<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
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
        $this->load->model('dosen_rekap');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();


        $this->load->view('dosen/template/dashboard_header');
        $this->load->view('dosen/template/dashboard_side', $data);
        $this->load->view('dosen/template/dashboard_top', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('dosen/template/dashboard_footer');
    }
    
    public function kuisioner_rekap(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
       $data2['rekap'] = $this->dosen_rekap->rekap_();
       $data2['dosen'] = $this->dosen_rekap->dosen_();
        $this->load->view('dosen/template/dashboard_header');
        $this->load->view('dosen/template/dashboard_side', $data);
        $this->load->view('dosen/template/dashboard_top', $data);
        $this->load->view('dosen/kuisioner_rekap', $data2);
        $this->load->view('dosen/template/dashboard_footer');
    }
    
}
