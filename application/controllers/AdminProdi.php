<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminProdi extends CI_Controller
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


        $this->load->view('adminprodi/template/dashboard_header');
        $this->load->view('adminprodi/template/dashboard_side', $data);
        $this->load->view('adminprodi/template/dashboard_top', $data);
        $this->load->view('adminprodi/index', $data);
        $this->load->view('adminprodi/template/dashboard_footer');
    }
    public function surat()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['surat_cuti'] = $this->db->get('surat_cuti')->row_array();
        // $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();

        $data2['surat_kp'] = $this->surat_kp->kerja_praktek();

        $this->load->view('adminprodi/template/dashboard_header');
        $this->load->view('adminprodi/template/dashboard_side', $data);
        $this->load->view('adminprodi/template/dashboard_top', $data);
        $this->load->view('adminprodi/surat', $data2);
        $this->load->view('adminprodi/template/dashboard_footer');
    }
    public function editsuratkp($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('nim1' => $id);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where, 'detail_anggota_kp')->result();
        // $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();

        $this->load->view('adminprodi/template/dashboard_header');
        $this->load->view('adminprodi/template/dashboard_side', $data);
        $this->load->view('adminprodi/template/dashboard_top', $data);
        $this->load->view('adminprodi/editsurat', $data2);
        $this->load->view('adminprodi/template/dashboard_footer');
    }

    public function suratkppdf($id_kp)
    {

        $this->load->library('mypdfkp');
        $data['data'] = $this->db->get_where('surat_kerja_praktek', ['id_kp' => $id_kp])->row();
        $this->mypdfkp->generate('adminprodi/suratkppdf', $data);
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

        redirect('adminprodi/surat');
    }
}
