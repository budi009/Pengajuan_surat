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
        // $data['jml_kp_baca2'] = $this->notif->jml_surat_kp_baca2();
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
        // $id_user=  $this->db->get_where('user_sistem')->result();
        
        $data3['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->aktif_kuliahh();
        // $data3['prodi'] = $this->surat_aktif_kuliah->get_prodi($id_user);
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
        $where = array('nomor_surat' => $id);
        $data['datas'] = $this->surat_aktif_kuliah->pdf($where, 'surat_aktif_kuliah')->result();

        $this->mypdfaktif->generate('admin/surataktifpdf', $data);
    }
    public function editsurataktif($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('nomor_surat' => $id);
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
        // $this->form_validation->set_message('is_unique[surat_aktif_kuliah.nomor_surat]', 'The nomor_surat is already taken');
        // $this->form_validation->set_rules('nosu', 'Nomor', 'required|trim|is_unique[surat_aktif_kuliah.nomor_surat]', [
        //     'is_unique'=> 'nomor surat telah digunakan']);
            // $where = array('nim' => $id);
            // $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->edit_data($where, 'surat_aktif_kuliah')->result();

        // if ($this->form_validation->run() == false) {
            // redirect ($this->load->view('admin/editsurataktif'));
        // } else {   
        $id = $this->input->post('id');
        // $nosu = $this->input->post('nosu');
        $status_pe = $this->input->post('status_pe');
        $cetak = $this->input->post('cetak');

        $data = array(
            // 'nomor_surat'  => $nosu,
            'status_pengajuan'  => $status_pe,
            'status_cetak'  => $cetak

        );
        $where = array(
            'nomor_surat' => $id
        );
        $this->surat_aktif_kuliah->update_data($where, $data, 'surat_aktif_kuliah');
        redirect('admin/surat_aktif_kuliah');
    }
    // }
    public function hapussurataktif($id){
        $where = array('nomor_surat' => $id);
          $data2['surat_aktif_kuliah'] = $this->surat_aktif_kuliah->hapus_data($where, 'surat_aktif_kuliah');
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
        $where = array('nomor_surat' => $id);
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
        // $nosu = $this->input->post('nosu');
        $status_pe = $this->input->post('status_pe');
        $cetak = $this->input->post('cetak');

        $data = array(
            // 'nomor_surat'  => $nosu,
            'status_pengajuan'  => $status_pe,
            'status_cetak'  => $cetak
        );
        $where = array(
            'nomor_surat' => $id
        );
        $this->surat_cuti->update_data($where, $data, 'surat_cuti');
        redirect('admin/suratcuti');
    }
    public function pdf($id)
    {

        $this->load->library('mypdf');
        $where = array('nomor_surat' => $id);
        $data['datas'] = $this->surat_cuti->pdf($where, 'surat_cuti')->result();
        // $data['data'] = $this->db->get_where('surat_cuti', ['id'=>$id])->row();
        $this->mypdf->generate('admin/suratcutipdf', $data);
    }
    public function QRcode()
    {
        // $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $user = $this->session->userdata('Eka Mistiko Rini, S.Kom., M.Kom.');
        $qrCode = new Endroid\QrCode\QrCode('Eka Mistiko Rini, S.Kom., M.Kom.');
        $qrCode->writeFile('assets/qrcode/' . 'Eka Mistiko Rini, S.Kom., M.Kom.' . 'jpg');
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
        $data2['lokasi_id'] = $this->surat_kp->lokasi_kerja_praktek_id();
        $data2['anggota_kp'] = $this->surat_kp->anggota_kp_lokasi();
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/suratKP', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function editsuratkp($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id_kp' => $id);
        $data2['surat_kp'] = $this->surat_kp->edit_data($where, 'surat_kerja_praktek')->result();
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
        $where = array('id_kp' => $id_kp);
        $data['datas'] = $this->surat_kp->pdf($where, 'surat_kerja_praktek')->result();
        $data['datas2'] = $this->surat_kp->pdf2('surat_kerja_praktek')->result();
        $this->mypdfkp->generate('admin/suratkppdf', $data);
    }

    public function updatesuratkp()
    {
        $id_kp = $this->input->post('id_kp');
        // $nosu = $this->input->post('nosu');
        $status_pe = $this->input->post('status_pe');
        $cetak = $this->input->post('cetak');

        $data = array(
            // 'nomor_surat'  => $nosu,
            'status_pengajuan'  => $status_pe,
            'status_cetak'  => $cetak
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
        $where = array('nomor_surat' => $id);
        $data['datas'] = $this->surat_mundur->pdf($where, 'surat_mundur')->result();
        // $data['data'] = $this->db->get_where('surat_mundur', ['mundur_id' => $id])->row();
        $this->mypdfmundur->generate('admin/suratmundurpdf', $data);
    }
    public function editsuratmundur($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('nomor_surat' => $id);
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
        // $nosu = $this->input->post('nosu');
        $status_pe = $this->input->post('status_pe');
        $cetak = $this->input->post('cetak');

        $data = array(
            // 'nomor_surat'  => $nosu,
            'status_pengajuan'  => $status_pe,
            'status_cetak'  => $cetak
        );
        $where = array(
            'nomor_surat' => $id
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
        // $data2 = array();
        $data2['kuisioner'] = $this->kuisioner->get_kuisioner();
        $data2['kuisioner2'] = $this->kuisioner->get_kuisioner2();
        $data2['kuisioner3'] = $this->kuisioner->get_kuisioner3();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();
        // $id_user = $this->session->userdata('id_user');
        // $data2['prodi'] = $this->m_relasi->get_prodi($id_user); 

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
    public function pengisi_kuisioner()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');
     
        $data2['kelas'] = $this->m_relasi->get_kelas($id_user);
        foreach ($data2['kelas'] as $x) {
            $datamatkul = array(
                'id_kelas' => $x->id_kelas
            );
            $id_kelas = $datamatkul['id_kelas'];
            $matkul = $this->m_relasi->get_detail_matkul($id_kelas);
        }

               $sql_kelas = "SELECT user_sistem.id_user, jawaban_kuisioner.id_user 
                          FROM jawaban_kuisioner, user_sistem
                          WHERE jawaban_kuisioner.id_user = user_sistem.id_user 
                          ";
            $sql_kelas2 = "SELECT user_sistem.id_user 
                          FROM user_sistem
                          
                          ";
        // }
        $data_pengisi = $this->m_relasi->cek_kuisioner();
        $data['jawabankuisioner'] = $data_pengisi;
        $data_pengisi2 = $this->m_relasi->cek_kuisioner2();
        $data['jawabankuisioner2'] = $data_pengisi2;

        foreach ($data_pengisi2 as $jm) {

            $response = array();
            $response = array(
               $jm->id_user,
               $jm->status_mengisi_kuisioner
            );
        echo json_encode($response, TRUE);
        }
       
    }
    public function konfigurasi_kuisioner(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();
        // $id_user = $this->session->userdata('id_user');
        $data2['pertanyaan'] = $this->kuisioner->pertanyaan_kuisioner(); 

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/konfigurasi_kuisioner',$data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function editpertanyaan($id)
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id_pertanyaan' => $id);
        $data2['edit_tanya'] = $this->kuisioner->edit_tanya($where, 'pertanyaan_kuisioner')->result();
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/editpertanyaan', $data2);
        $this->load->view('admin/template/dashboard_footer');
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
       
        $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
        $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
        $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
        $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();

        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/tambah_kuisioner');
        $this->load->view('admin/template/dashboard_footer');
    }
    public function tambahpertanyaan()
    {
         
        $this->form_validation->set_rules('pertanyaan', 'Per', 'required|trim');
        $per = $this->input->post('pertanyaan');

        $data = array(
            'pertanyaan'  => $per

        );
        // $where = array(
        //     'id_pertanyaan' => $id
        // );
        $this->db->insert('pertanyaan_kuisioner', $data);
        redirect('admin/konfigurasi_kuisioner');
    }
    public function updatepertanyaan()
    {
        $id = $this->input->post('id');
        $per = $this->input->post('pertanyaan');

        $data = array(
            'pertanyaan'  => $per

        );
        $where = array(
            'id_pertanyaan' => $id
        );
        $this->kuisioner->update_data($where, $data, 'pertanyaan_kuisioner');
        redirect('admin/konfigurasi_kuisioner');
    }
    public function hapuspertanyaan($id){
        $where = array('id_pertanyaan' => $id);
          $data2['pertanyaan'] = $this->kuisioner->hapus_data($where, 'pertanyaan_kuisioner');
        redirect('admin/konfigurasi_kuisioner');
      } 
}
