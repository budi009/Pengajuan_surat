<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
        $this->load->model('kuisioner');
        $this->load->model('notif');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();
        $data['jml_aktif'] = $this->surat_aktif_kuliah->jml_surat_aktif();
        $data['jml_cuti'] = $this->surat_cuti->jml();
        $data['jml_kp'] = $this->surat_kp->jml(); 
        $data['jml_mundur'] = $this->surat_mundur->jml();
        $data['jml_wisuda'] = $this->daftar_wisuda->jml();
        // $data['data'] = $this->surat_aktif_kuliah->aktif_kuliahh();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function surat_aktif_kuliah()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliahh();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/surat', $data3);
        $this->load->view('admin/template/dashboard_footer');
    }

    public function detailsurataktif($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('nim' => $id);
        $data2['details'] = $this->surat_aktif_kuliah->detail_data($where, 'surat_aktif_kuliah')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/detailsurataktif', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function pdfsurataktif($id)
    {

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->load->library('mypdfaktif');
        $where = array('nim' => $id);
        $data['datas'] = $this->surat_aktif_kuliah->pdf($where, 'surat_aktif_kuliah')->result();
        
        $this->mypdfaktif->generate('admin/surataktifpdf', $data);
    }
    public function editsurataktif($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' => $id);
        $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->edit_data($where, 'surat_aktif_kuliah')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsurataktif', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }

    public function updatesurataktif()
    {
        $id = $this->input->post('id');
        $nosu = $this->input->post('nosu');
        
        $data = array(
            'nomor_surat'  => $nosu
 
        );
        $where = array(
            'id' => $id
        );
        $this->surat_aktif_kuliah->update_data($where, $data, 'surat_aktif_kuliah');
        redirect('admin/surat_aktif_kuliah');
    }

    public function suratcuti()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['surat_cuti'] = $this->surat_cuti->cuti();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
         
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratcuti', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function detailsuratcuti($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        $where = array('nim' => $id);
        $data2['details'] = $this->surat_cuti->detail_data($where, 'surat_cuti')->result();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/detailsuratcuti', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function editsuratcuti($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id' => $id);
        $data2['surat_cuti'] = $this->surat_cuti->edit_data($where, 'surat_cuti')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        // $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliah()->result(); 
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsuratcuti', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function updatesuratcuti()
    {
        $id = $this->input->post('id');
        $nosu = $this->input->post('nosu');
        
        $data = array(
            'nomor_surat'  => $nosu
 
        );
        $where = array(
            'id' => $id
        );
        $this->surat_cuti->update_data($where, $data, 'surat_cuti');
        redirect('admin/suratcuti');
    }
    public function pdf($id)
    {

        $this->load->library('mypdf');
        $where = array('nim' => $id);
        $data['datas'] = $this->surat_cuti->pdf($where, 'surat_cuti')->result();
        // $data['data'] = $this->db->get_where('surat_cuti', ['id'=>$id])->row();
        $this->mypdf->generate('admin/suratcutipdf', $data);
    }
    public function QRcode()
    {
        // $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->session->userdata('nama_user');
        $qrCode = new Endroid\QrCode\QrCode($user);
        $qrCode->writeFile('assets/qrcode' . '/qrcode.jpg');
        redirect('admin');
    }


    public function suratKP()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        $data2['surat_kp'] = $this->surat_kp->kerja_praktek();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratKP', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function editsuratkp($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('nim1' => $id);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where, 'detail_anggota_kp')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsuratkp', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }

    public function suratkppdf($id_kp)
    {

        $this->load->library('mypdfkp');
        $data['data'] = $this->db->get_where('surat_kerja_praktek', ['id_kp' => $id_kp])->row();
        $this->mypdfkp->generate('admin/suratkppdf', $data);
    }

    public function updatesuratkp()
    {
        $id_kp = $this->input->post('id_kp');
        $nosu = $this->input->post('nosu');
 
        $data = array(
            'nomor_surat'  => $nosu

        );
        $where = array(
            'id_kp' => $id_kp
        );
        $this->surat_kp->update_data($where, $data, 'surat_kerja_praktek');

        redirect('admin/suratKP');
    }

    public function suratmundur()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        $data2['surat_mundur'] = $this->surat_mundur->mundur();
       
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratmundur', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }

    public function detailsuratmundur($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('nim' => $id);
        $data2['details'] = $this->surat_mundur->edit_data($where, 'surat_mundur')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/detailsuratmundur', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function suratmundurpdf($id)
    {

        $this->load->library('mypdfmundur');
        $data['data'] = $this->db->get_where('surat_mundur', ['mundur_id' => $id])->row();
        $this->mypdfmundur->generate('admin/suratmundurpdf', $data);
    }
    public function editsuratmundur($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('mundur_id' => $id);
        $data2['surat_mundur'] = $this->surat_mundur->edit_data($where, 'surat_mundur')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editsuratmundur', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }

    public function updatesuratmundur()
    {
        $id = $this->input->post('id');
        $nosu = $this->input->post('nosu');
        
        $data = array(
            'nomor_surat'  => $nosu
         
        );
        $where = array(
            'mundur_id' => $id
        );
        $this->surat_mundur->update_data($where, $data, 'surat_mundur');
        redirect('admin/suratmundur');
    }
    public function daftar_wisuda()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['wisuda'] = $this->daftar_wisuda->wisuda();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        // $data2['wisuda'] = $this->daftar_wisuda->wisudaa(); 

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/daftar_wisuda', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function kuisioner()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['kuisioner'] = $this->kuisioner->get_kuisioner();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca(); 
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca(); 
        // $data2['wisuda'] = $this->daftar_wisuda->wisudaa(); 

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/kuisioner', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function pdfwisuda($id)
    {

        $this->load->library('mypdfwisuda');
        $data['data'] = $this->db->get_where('daftar_wisuda', ['id' => $id])->row();
        $this->mypdfwisuda->generate('admin/wisudapdf', $data);
    }
    public function notif_ak()
    {

        $data = array(

            'status_baca'        => 1
        );;
        $this->surat_aktif_kuliah->update_dataku($data, 'surat_aktif_kuliah');
        redirect('admin/surat_aktif_kuliah');
    }
    public function notif_sc()
    {

        $data = array(

            'status_baca'        => 1
        );;
        $this->surat_cuti->update_dataku($data, 'surat_cuti');
        redirect('admin/suratcuti');
    }
    public function notif_kp()
    {

        $data = array(

            'status_baca'        => 1
        );;
        $this->surat_kp->update_dataku($data, 'surat_kerja_praktek');
        redirect('admin/suratKP');
    }
    public function notif_md()
    {

        $data = array(

            'status_baca'        => 1
        );;
        $this->surat_mundur->update_dataku($data, 'surat_mundur');
        redirect('admin/suratmundur');
    }
    public function wisudapdf()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $data['jml_wisuda'] = $this->daftar_wisuda->jml();
        $data['wisuda'] = $this->daftar_wisuda->wisuda();

        $this->load->library('mypdfwisuda');
        $data['data'] = $this->db->get('daftar_wisuda');
        $this->mypdfwisuda->generate('admin/wisudapdf', $data);
    }
}
