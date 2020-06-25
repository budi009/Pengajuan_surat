<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller 
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
        $this->load->model('m_relasi');
        
        
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        

        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top',$data);
        $this->load->view('pimpinan/index', $data);
        $this->load->view('pimpinan/template/dashboard_footer');
        
    }
    public function surat_aktif_kuliah(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliahh(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/surat', $data3);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function suratcuti(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_cuti'] = $this->surat_cuti->cuti()->result();
        $data2['data'] = $this->surat_cuti->get_relasi(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/suratcuti', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function suratKP(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_kp'] = $this->surat_kp->kerja_praktek()->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/suratKP', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 

    }
    public function suratmundur(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_mundur'] = $this->surat_mundur->mundur()->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/suratmundur', $data2);
        $this->load->view('pimpinan/template/dashboard_footer');
    }

}