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
        $this->load->model('m_qr');
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
        // $user = $this->session->userdata('nama_user');
        $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliahh(); 
        // $where = array('id' =>$id);
        // $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliahh($where)->result(); 
        // $data3 = new Endroid\QrCode\QrCode('nama');
        

        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/surat', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function suratcuti(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data2['surat_cuti'] = $this->surat_cuti->cuti();
        // $data2['data'] = $this->surat_cuti->get_relasi(); 
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
        $data2['surat_kp'] = $this->surat_kp->kerja_praktek(); 
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
        $data2['surat_mundur'] = $this->surat_mundur->mundur(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/suratmundur', $data2);
        $this->load->view('pimpinan/template/dashboard_footer');
    }
    public function QRcode(){
        // $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        // $where = array('id' =>$id);
        // $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->edit_data($where,'surat_aktif_kuliah')->result();
        $qrCode = new Endroid\QrCode\QrCode($user);
        $qrCode->writeFile( 'assets/qrcode/'.$user.'jpg');
        $fotoqr = $user.'.jpg';
        $datasss = array(
            'qrcode' => $fotoqr 
        );
        $this->m_qr->add_qr($datasss);
        
        // redirect('pimpinan/surat_aktif_kuliah');
    }
    public function editsurataktif($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' =>$id);
        $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->edit_data($where,'surat_aktif_kuliah')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsurataktif', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function detailsurataktif($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $detail = $this->surat_aktif_kuliah->detail_data($id);
        $data['detail'] = $detail;
        
      
    }
    public function updatesurataktif(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');

        $id = $this->input->post('id');   
        $fotoqrr = $user.'jpg';           
           
        $data = array(
            'qrcode' => $fotoqrr 
        );
        $where = array(
            'id' => $id
        );
        $this->surat_aktif_kuliah->update_data($where,$data,'surat_aktif_kuliah');
        
        redirect('pimpinan/surat_aktif_kuliah');
    }
    public function editsuratcuti($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' =>$id);
        $data2['surat_cuti'] = $this->surat_cuti->edit_data($where,'surat_cuti')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsuratcuti', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function updatesuratcuti(){

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        $id = $this->input->post('id');   
        $fotoqrr = $user.'jpg'; 


        $data = array(
            'qrcode'       => $fotoqrr 
        );
        $where = array(
            'id' => $id
        );
        $this->surat_cuti->update_data($where,$data,'surat_cuti');
        redirect('pimpinan/suratcuti');
    }
    public function editsuratkp($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('kp_id' => $id);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where, 'detail_anggota_kp')->result();
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsuratkp', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function updatesuratkp(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        $id_kp = $this->input->post('id');   
        $fotoqrr = $user.'jpg';   
        
        $data = array(
            
            'qrcode'        => $fotoqrr
        );
        $where = array(
            'id_kp' => $id_kp
        );
        $this->surat_kp->update_data($where,$data,'surat_kerja_praktek');
        redirect('pimpinan/suratKP');
    }
    
    public function editsuratmundur($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('mundur_id' =>$id);
        $data2['surat_mundur'] = $this->surat_mundur->edit_data($where,'surat_mundur')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsuratmundur', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function updatesuratmundur(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        $id = $this->input->post('id');   
        $fotoqrr = $user.'jpg';  
        
        $data = array(
            'qrcode'        => $fotoqrr
        );
        $where = array(
            'mundur_id' => $id
        );
        $this->surat_mundur->update_data($where,$data,'surat_mundur');
        redirect('pimpinan/suratmundur');
    }
    public function validasi_ak(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');

        $fotoqrr = $user.'jpg';           
           
        $data = array(
            'qrcode' => $fotoqrr 
        );
       
        $this->surat_aktif_kuliah->validasi($data,'surat_aktif_kuliah');
        
        redirect('pimpinan/surat_aktif_kuliah');
    }
    public function validasi_kp(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');

        $fotoqrr = $user.'jpg';           
           
        $data = array(
            'qrcode' => $fotoqrr 
        );
       
        $this->surat_aktif_kuliah->validasi($data,'surat_kerja_praktek');
        
        redirect('pimpinan/suratKP');
    }
    public function editsurataktif_tolak($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' =>$id);
        $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->edit_data($where,'surat_aktif_kuliah')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsurataktif_tolak', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function updatesurataktif_tolak(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        

        $id = $this->input->post('id');   
        $tolak = $this->input->post('tolak');           
           
        $data = array(
            'penolakan' => $tolak 
        );
        $where = array(
            'id' => $id
        );
        $this->surat_aktif_kuliah->update_data($where,$data,'surat_aktif_kuliah');
        
        redirect('pimpinan/surat_aktif_kuliah');
    }
    public function editsuratcuti_tolak($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' =>$id);
        $data2['surat_cuti'] = $this->surat_cuti->edit_data($where,'surat_cuti')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsuratcuti_tolak', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function updatesuratcuti_tolak(){

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id = $this->input->post('id');   
        $tolak = $this->input->post('tolak'); 


        $data = array(
            'penolakan'       => $tolak 
        );
        $where = array(
            'id' => $id
        );
        $this->surat_cuti->update_data($where,$data,'surat_cuti');
        redirect('pimpinan/suratcuti');
    }
    public function editsuratmundur_tolak($id){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('mundur_id' =>$id);
        $data2['surat_mundur'] = $this->surat_mundur->edit_data($where,'surat_mundur')->result(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('pimpinan/template/dashboard_header');
        $this->load->view('pimpinan/template/dashboard_side', $data);
        $this->load->view('pimpinan/template/dashboard_top', $data);
        $this->load->view('pimpinan/editsuratmundur_tolak', $data2);
        $this->load->view('pimpinan/template/dashboard_footer'); 
    }
    public function updatesuratmundur_tolak(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id = $this->input->post('id');   
        $tolak = $this->input->post('tolak');  
        
        $data = array(
            'penolakan'        => $tolak
        );
        $where = array(
            'mundur_id' => $id
        );
        $this->surat_mundur->update_data($where,$data,'surat_mundur');
        redirect('pimpinan/suratmundur');
    }
}