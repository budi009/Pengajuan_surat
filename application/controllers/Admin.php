<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('surat_cuti');
        $this->load->model('surat_aktif_kuliah');
        $this->load->model('m_relasi');
        
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/dashboard_footer');
        
    }
    public function surat_aktif_kuliah(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        // $data2['surat_cuti'] = $this->surat_cuti->cuti()->result(); 
        $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/surat', $data3);
        $this->load->view('admin/template/dashboard_footer'); 
    }
    public function suratcuti(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_cuti'] = $this->surat_cuti->cuti()->result();
        $data2['data'] = $this->surat_cuti->get_relasi(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratcuti', $data2);
        $this->load->view('admin/template/dashboard_footer'); 

    }
    public function editsuratcuti($id){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' =>$id);
        $data2['surat_cuti'] = $this->surat_cuti->edit_data($where,'surat_cuti')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsuratcuti', $data2);
        $this->load->view('admin/template/dashboard_footer'); 
    }
    public function updatesuratcuti(){
        $id = $this->input->post('id');   
        $nosu = $this->input->post('nosu');   
        $nim = $this->input->post('nim');   
        $nama = $this->input->post('nama');   
        $prodi = $this->input->post('prodi');  
        
        $data = array(
            'nomor_surat'  => $nosu,
            'nim'          => $nim,
            'nama'         => $nama,
            'prodi'        => $prodi
        );
        $where = array(
            'id' => $id
        );
        $this->surat_cuti->update_data($where,$data,'surat_cuti');
        redirect('admin/suratcuti');
    }
    public function pdf($id){

        $this->load->library('mypdf');
        $data['data'] = $this->db->get_where('surat_cuti', ['id'=>$id])->row();
        $this->mypdf->generate('admin/suratcutipdf', $data);

        
        
    }



    public function suratKP(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        // $data2['surat_cuti'] = $this->surat_cuti->cuti()->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratKP');
        $this->load->view('admin/template/dashboard_footer'); 

    }
    public function suratmundur(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        // $data2['surat_cuti'] = $this->surat_cuti->cuti()->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratmundur');
        $this->load->view('admin/template/dashboard_footer'); 

    }

}