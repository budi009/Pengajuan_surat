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

        
        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('nim','NIM', 'required|trim');
        $this->form_validation->set_rules('prodi','Prodi', 'required|trim');
        $this->form_validation->set_rules('semester','Semester', 'required|trim');
        $this->form_validation->set_rules('th_angkatan','Tahun Angkatan', 'required|trim');
        $this->form_validation->set_rules('th_akademik','Tahun Akademik', 'required|trim');
        $this->form_validation->set_rules('nama_ortu','Nama Ortu', 'required|trim');
        $this->form_validation->set_rules('pekerjaan_ortu','Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nip_ortu','NIP', 'trim');
        $this->form_validation->set_rules('jabatan_ortu','Jabatan', 'trim');
        $this->form_validation->set_rules('instansi_ortu','instansi', 'trim');
        $this->form_validation->set_rules('alamat_ortu','Alamat', 'required|trim');
        $this->form_validation->set_rules('optionsRadios','Pilihan', 'required|trim');
        $this->form_validation->set_rules('lainnya','Pilihan', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/surat1', $data2);
        $this->load->view('user/template/dashboard_footer');
        }else{
            $data3 = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'prodi_id' => htmlspecialchars($this->input->post('prodi', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'th_angkatan' => htmlspecialchars($this->input->post('th_angkatan', true)),
                'th_akademik' => htmlspecialchars($this->input->post('th_akademik', true)),
                'nama_ortu' => htmlspecialchars($this->input->post('nama_ortu', true)),
                'pekerjaan_ortu' => htmlspecialchars($this->input->post('pekerjaan_ortu', true)),
                'nip_ortu' => htmlspecialchars($this->input->post('nip_ortu', true)),
                'jabatan' => htmlspecialchars($this->input->post('jabatan_ortu', true)),
                'instansi' => htmlspecialchars($this->input->post('instansi_ortu', true)),
                'alamat_ortu' => htmlspecialchars($this->input->post('alamat_ortu', true)),
                'keperluan' => htmlspecialchars($this->input->post('optionsRadios', true)),
                'fc_ktp_ortu' => 'ktp.jpg',
                'fc_ktm_mhs' =>  'ktm.jpg',
                'fc_buku_pedoman' =>  'pedoman.jpg',
                'lainnya' => htmlspecialchars($this->input->post('lainnya', true))
            ];
            $this->db->insert('surat_aktif_kuliah', $data3);
            redirect('user/surat1');
        }
        
        

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
            
            $this->form_validation->set_rules('nama1','Anggota1', 'required|trim');
            $this->form_validation->set_rules('nama2','Anggota2', 'trim');
            $this->form_validation->set_rules('nama3','Anggota3', 'trim');
            $this->form_validation->set_rules('nama4','Anggota4', 'trim');
            $this->form_validation->set_rules('nama5','Anggota5', 'trim');
            $this->form_validation->set_rules('nim1','Nim1', 'required|trim');
            $this->form_validation->set_rules('nim2','Nim2', 'trim');
            $this->form_validation->set_rules('nim3','Nim3', 'trim');
            $this->form_validation->set_rules('nim4','Nim4', 'trim');
            $this->form_validation->set_rules('nim5','Nim5', 'trim');
            $this->form_validation->set_rules('tempat','Tempat', 'required|trim');
            $this->form_validation->set_rules('alamat','Alamat', 'required|trim');
            

            if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat3', $data);
            $this->load->view('user/template/dashboard_footer');
        }else{
            $data2 = [
                'nama' => htmlspecialchars($this->input->post('nama1', true)),
                'nama2' => htmlspecialchars($this->input->post('nama2', true)),
                'nama3' => htmlspecialchars($this->input->post('nama3', true)),
                'nama4' => htmlspecialchars($this->input->post('nama4', true)),
                'nama5' => htmlspecialchars($this->input->post('nama5', true)),
                'nim' => htmlspecialchars($this->input->post('nim1', true)),
                'nim2' => htmlspecialchars($this->input->post('nim2', true)),
                'nim3' => htmlspecialchars($this->input->post('nim3', true)),
                'nim4' => htmlspecialchars($this->input->post('nim4', true)),
                'nim5' => htmlspecialchars($this->input->post('nim5', true)),
                'tempat' => htmlspecialchars($this->input->post('tempat', true)),
                'alamat_tempat' => htmlspecialchars($this->input->post('alamat', true))
                
            ];
            $this->db->insert('surat_kerja_praktek', $data2);
            redirect('user/surat3');
        }
    
        }
        public function surat4()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data2['prodi']= $this->m_relasi->get_prodi();
            $data2['semester']= $this->m_relasi->get_semester();

            $this->form_validation->set_rules('nim','NIM', 'required|trim');
            $this->form_validation->set_rules('nama','Nama', 'required|trim');
            $this->form_validation->set_rules('prodi','Prodi', 'required|trim');
            $this->form_validation->set_rules('semester','Semester', 'required|trim');
            $this->form_validation->set_rules('hp1','Telp1', 'required|trim');
            $this->form_validation->set_rules('hp2','telp2', 'required|trim');
            $this->form_validation->set_rules('alasankeluar','Alasan', 'required|trim');
            

            if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat4', $data2);
            $this->load->view('user/template/dashboard_footer');
            }else{
            $data2 = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'prodi_id' => htmlspecialchars($this->input->post('prodi', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'telp_mhs' => htmlspecialchars($this->input->post('hp1', true)),
                'telp_ortu' => htmlspecialchars($this->input->post('hp2', true)),
                'alasan' => htmlspecialchars($this->input->post('alasankeluar', true))
            ];
            $this->db->insert('surat_mundur', $data2);
            redirect('user/surat4');
        }
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