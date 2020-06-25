<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 


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
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/dashboard_footer');
        
    }
    public function surat_aktif_kuliah(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliahh(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/surat', $data3);
        $this->load->view('admin/template/dashboard_footer'); 
    }

    public function detailsurataktif($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $detail = $this->surat_aktif_kuliah->detail_data($id);
        $data['detail'] = $detail;
        
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/detailsurataktif', $data);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function pdfsurataktif($id){

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->load->library('mypdfaktif');
        $data['data'] = $this->db->get_where('surat_aktif_kuliah', ['id'=>$id])->row();
        $this->mypdfaktif->generate('admin/surataktifpdf', $data);  
    }
    public function editsurataktif($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' =>$id);
        $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->edit_data($where,'surat_aktif_kuliah')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsurataktif', $data2);
        $this->load->view('admin/template/dashboard_footer'); 
    }

    public function updatesurataktif(){
        $id = $this->input->post('id');   
        $nosu = $this->input->post('nosu');   
        $nim = $this->input->post('nim');   
        $nama = $this->input->post('nama');   
        $prodi = $this->input->post('prodi');  
        
        $data = array(
            'nomor_surat'  => $nosu,
            'nim'          => $nim,
            'nama'         => $nama,
            'prodi_id'        => $prodi
        );
        $where = array(
            'id' => $id
        );
        $this->surat_aktif_kuliah->update_data($where,$data,'surat_aktif_kuliah');
        redirect('admin/surat_aktif_kuliah');
    }

    public function suratcuti(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
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
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
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
            'prodi_id'        => $prodi
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
    public function QRcode(){
        // $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        $qrCode = new Endroid\QrCode\QrCode($user);
        $qrCode->writeFile('assets/qrcode'.'/qrcode.jpg');
        redirect('admin');
    }


    public function suratKP(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_kp'] = $this->surat_kp->kerja_praktek()->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratKP', $data2);
        $this->load->view('admin/template/dashboard_footer'); 

    }
    public function editsuratkp($id_kp){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id_kp' =>$id_kp);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where,'surat_kerja_praktek')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsuratkp', $data2);
        $this->load->view('admin/template/dashboard_footer'); 
    }

    public function suratkppdf($id_kp){

        $this->load->library('mypdfkp');
        $data['data'] = $this->db->get_where('surat_kerja_praktek', ['id_kp'=>$id_kp])->row();
        $this->mypdfkp->generate('admin/suratkppdf', $data);  
    }

    public function updatesuratkp(){
        $id_kp = $this->input->post('id_kp');   
        $nosu = $this->input->post('nosu');   
        $nim = $this->input->post('nim');   
        $nama = $this->input->post('nama');   
        $tempat = $this->input->post('tempat');  
        
        $data = array(
            'nomor_surat'  => $nosu,
            'nim'          => $nim,
            'nama'         => $nama,
            'tempat'        => $tempat
        );
        $where = array(
            'id_kp' => $id_kp
        );
        $this->surat_kp->update_data($where,$data,'surat_kerja_praktek');
        redirect('admin/suratKP');
    }

    public function suratmundur(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_mundur'] = $this->surat_mundur->mundur()->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratmundur', $data2);
        $this->load->view('admin/template/dashboard_footer'); 

    }

    public function detailsuratmundur($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $detail = $this->surat_mundur->detail_data($id);
        $data['detail'] = $detail;
        
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/detailsuratmundur', $data);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function suratmundurpdf($id){

        $this->load->library('mypdfmundur');
        $data['data'] = $this->db->get_where('surat_mundur', ['mundur_id'=>$id])->row();
        $this->mypdfmundur->generate('admin/suratmundurpdf', $data);  
    }
    public function editsuratmundur($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('mundur_id' =>$id);
        $data2['surat_mundur'] = $this->surat_mundur->edit_data($where,'surat_mundur')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsuratmundur', $data2);
        $this->load->view('admin/template/dashboard_footer'); 
    }

    public function updatesuratmundur(){
        $id = $this->input->post('id');   
        $nosu = $this->input->post('nosu');   
        $nim = $this->input->post('nim');   
        $nama = $this->input->post('nama');   
        $prodi = $this->input->post('prodi');  
        
        $data = array(
            'nomor_surat'  => $nosu,
            'nim'          => $nim,
            'nama'         => $nama,
            'prodi_id'        => $prodi
        );
        $where = array(
            'mundur_id' => $id
        );
        $this->surat_mundur->update_data($where,$data,'surat_mundur');
        redirect('admin/suratmundur');
    }
    public function daftar_wisuda(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['wisuda'] = $this->daftar_wisuda->wisuda()->result(); 
        $data2['wisuda'] = $this->daftar_wisuda->wisudaa(); 
         
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/daftar_wisuda', $data2);
        $this->load->view('admin/template/dashboard_footer'); 

    }


}