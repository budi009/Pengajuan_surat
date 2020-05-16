<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_relasi');

    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/template/dashboard_footer');

    }
    public function surat1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data2['prodi']= $this->m_relasi->get_prodi();
        $data2['semester']= $this->m_relasi->get_semester();
        $data2['th_angkatan']= $this->m_relasi->get_th_angkatan();
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/surat1', $data2);
        $this->load->view('user/template/dashboard_footer');

    }
    public function surat2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['data'] = $this->m_relasi->get_relasi();
        $data2['prodi']= $this->m_relasi->get_prodi();
        
        $this->form_validation->set_rules('nim','NIM', 'required|trim');
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('prodi','Prodi', 'required|trim');
        $this->form_validation->set_rules('semester','Semester', 'required|trim');
        $this->form_validation->set_rules('cuti1','Lama_Cuti', 'required|trim');
        $this->form_validation->set_rules('cuti2','Mulai_Cuti', 'required|trim');
        $this->form_validation->set_rules('cuti3','batas_cuti', 'required|trim');
        $this->form_validation->set_rules('cuti4','Alasan', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side',$data);
        $this->load->view('user/template/dashboard_top',$data);
        $this->load->view('user/surat2', $data2);
        $this->load->view('user/template/dashboard_footer');
        }else{
            $data2 = [
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'prodi_id' => htmlspecialchars($this->input->post('prodi', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'lama_cuti' => htmlspecialchars($this->input->post('cuti1', true)),
                'mulai_cuti' => htmlspecialchars($this->input->post('cuti2', true)),
                'batas_cuti' => htmlspecialchars($this->input->post('cuti3', true)),
                'alasan' => htmlspecialchars($this->input->post('cuti4', true))
            ];
            $this->db->insert('surat_cuti', $data2);
            redirect('user/surat2');
        }
    }
    // function tambahdata(){
    //     $nama = $this->input->post('nama');
    //     $nim = $this->input->post('nim');
    //     $prodi = $this->input->post('prodi');
    //     $semester = $this->input->post('semester');
    //     $lama_cuti = $this->input->post('lama_cuti');
    //     $mulai_cuti = $this->input->post('mulai_cuti');
    //     $batas_cuti = $this->input->post('batas_cuti');
    //     $alasan_cuti = $this->input->post('alasan');
    
    //     $data = [
        //             'nama' => htmlspecialchars('nama', true),
        //             'nim' => htmlspecialchars('nim', true),
        //             'prodi' => "TI",
        //             'semester' => 1,
        //             'lama_cuti' => htmlspecialchars('cuti1', true),
        //             'mulai_cuti' => htmlspecialchars('cuti2', true),
        //             'batas_cuti' => htmlspecialchars('cuti3', true),
        //             'alasan' => htmlspecialchars('cuti4', true)
        //         ];
        //     $this->db->insert($data,'surat_cuti');
        //     redirect('user/surat2');
        
        // }
        
        public function surat3()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
    
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat3', $data);
            $this->load->view('user/template/dashboard_footer');
    
        }
        public function surat4()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
    
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat4', $data);
            $this->load->view('user/template/dashboard_footer');
    
        }
        public function daftar_wisuda()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
            
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/daftar_wisuda', $data);
            $this->load->view('user/template/dashboard_footer');
            
    }
    
}