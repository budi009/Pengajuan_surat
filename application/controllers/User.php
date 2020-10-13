<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_relasi');
        $this->load->model('kuisioner');
        $this->load->model('surat_aktif_kuliah');
        $this->load->model('surat_cuti');
        $this->load->model('surat_kp');
        $this->load->model('surat_mundur');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['status_surat_aktif'] = $this->surat_aktif_kuliah->status_pengajuan();
        $data['status_surat_cuti'] = $this->surat_cuti->status_pengajuan();
        $data['status_surat_kp'] = $this->surat_kp->status_pengajuan();
        $data['status_surat_mundur'] = $this->surat_mundur->status_pengajuan();
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/template/dashboard_footer');
    }
    public function profile()
    {
        $data2['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');
        $data2['kelas'] = $this->m_relasi->profil($id_user);

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data2);
        $this->load->view('user/template/dashboard_top', $data2);
        $this->load->view('user/profile', $data2);
        $this->load->view('user/template/dashboard_footer');
    }
    public function edit_profil()
    {
        $data2['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');
        $data2['kelas'] = $this->m_relasi->d_profil($id_user);
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data2);
        $this->load->view('user/template/dashboard_top', $data2);
        $this->load->view('user/edit_profil', $data2);
        $this->load->view('user/template/dashboard_footer');
    }
    public function update_profil()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $where = array('nim' => $id);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/edit_profil', $data);
            $this->load->view('user/template/dashboard_footer');
        } else {
            $nama = $this->input->post('nama');
            $kelas = $this->input->post('kelas');
            $nim = $this->input->post('nim');
            $gambar = $_FILES['gambar'];

            if ($gambar) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/img/profil/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar_lama = $data['user']['gambar'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profil/' . $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama_user', $nama);
            $this->db->set('id_kelas', $kelas);
            $this->db->where('id_user', $nim);
            $this->db->update('user_sistem');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Profil Berhasil</div>');
            redirect('user/profile');
        }
    }

    public function surat1()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');

        $data2['prodi'] = $this->m_relasi->get_prodi($id_user);
        $data2['semester'] = $this->m_relasi->get_semester();
        $data2['th_angkatan'] = $this->m_relasi->get_th_angkatan();
        $data2['user_data'] = $this->m_relasi->get_relasi_surat_aktif();

        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('th_angkatan', 'Tahun Angkatan', 'required|trim');
        $this->form_validation->set_rules('th_akademik', 'Tahun Akademik', 'required|trim');
        $this->form_validation->set_rules('nama_ortu', 'Nama Ortu', 'required|trim');
        $this->form_validation->set_rules('pekerjaan_ortu', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nip_ortu', 'NIP', 'trim');
        $this->form_validation->set_rules('jabatan_ortu', 'Jabatan', 'trim');
        $this->form_validation->set_rules('instansi_ortu', 'instansi', 'trim');
        $this->form_validation->set_rules('alamat_ortu', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('optionsRadios', 'Pilihan', 'required|trim');
        // $this->form_validation->set_rules('ktp_ortu', 'KTP', 'required|trim');
        // $this->form_validation->set_rules('ktm_mhs', 'KTM', 'required|trim');
        // $this->form_validation->set_rules('pedoman', 'Pedoman', 'required|trim');
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat1', $data2);
            $this->load->view('user/template/dashboard_footer');
        } else {
            $ktp   = $_FILES['ktp_ortu'];
            if ($ktp = '') {
            } else {
                $config['upload_path']      = 'assets/img/aktif_kuliah';
                $config['allowed_types']      = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ktp_ortu')) {

                    echo "Gambar Salah";
                } else {
                    $ktp = $this->upload->data('file_name');
                }
            }
            $ktm   = $_FILES['ktm_mhs'];
            if ($ktm = '') {
            } else {
                $config['upload_path']      = 'assets/img/aktif_kuliah';
                $config['allowed_types']      = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ktm_mhs')) {

                    echo "Gambar Salah";
                } else {
                    $ktm = $this->upload->data('file_name');
                }
            }
            $pedoman   = $_FILES['pedoman'];
            if ($pedoman = '') {
            } else {
                $config['upload_path']      = 'assets/img/aktif_kuliah';
                $config['allowed_types']      = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pedoman')) {

                    echo "Gambar Salah";
                } else {
                    $pedoman = $this->upload->data('file_name');
                }
            }
            $data3 = [
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'th_angkatan' => htmlspecialchars($this->input->post('th_angkatan', true)),
                'th_akademik' => htmlspecialchars($this->input->post('th_akademik', true)),
                'nama_ortu' => htmlspecialchars($this->input->post('nama_ortu', true)),
                'pekerjaan_ortu' => htmlspecialchars($this->input->post('pekerjaan_ortu', true)),
                'nip_ortu' => htmlspecialchars($this->input->post('nip_ortu', true)),
                'jabatan' => htmlspecialchars($this->input->post('jabatan_ortu', true)),
                'instansi' => htmlspecialchars($this->input->post('instansi_ortu', true)),
                'alamat_ortu' => htmlspecialchars($this->input->post('alamat_ortu', true)),
                'keperluan' => htmlspecialchars($this->input->post('keperluan', true)),
                'fc_ktp_ortu' => $ktp,
                'fc_ktm_mhs' =>  $ktm,
                'tanggal_mengajukan' => date('Y-m-d'),
                'fc_buku_pedoman' =>  $pedoman


            ];
            $this->db->insert('surat_aktif_kuliah', $data3);
            redirect('user/surat1');
        }
    }
    public function surat2()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['data'] = $this->m_relasi->get_relasi();
        $id_user = $this->session->userdata('id_user');
        $data2['prodi'] = $this->m_relasi->get_prodi($id_user);
        $data2['semester'] = $this->m_relasi->get_semester();
        $data2['user_data'] = $this->m_relasi->get_relasi_surat_cuti();
        $data2['data_cuti'] = $this->surat_cuti->cuti2();
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('cuti1', 'Lama_Cuti', 'required|trim');
        $this->form_validation->set_rules('cuti2', 'Mulai_Cuti', 'required|trim');
        $this->form_validation->set_rules('cuti3', 'batas_cuti', 'required|trim');
        $this->form_validation->set_rules('cuti4', 'Alasan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat2', $data2);
            $this->load->view('user/template/dashboard_footer');
        } else {

            // $form_c   = $_FILES['form_c'];
            // if ($form_c = '') {
            // } else {
            //     $config['upload_path']      = 'assets/img/cuti';
            //     $config['allowed_types']      = 'jpg|png|gif';

            //     $this->load->library('upload', $config);
            //     if (!$this->upload->do_upload('form_c')) {

            //         echo "Gambar Salah";
            //     } else {
            //         $form_c = $this->upload->data('file_name');
            //     }
            // }
            $data2 = [
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'lama_cuti' => htmlspecialchars($this->input->post('cuti1', true)),
                'mulai_cuti' => htmlspecialchars($this->input->post('cuti2', true)),
                'batas_cuti' => htmlspecialchars($this->input->post('cuti3', true)),
                'tanggal_mengajukan' => date('Y-m-d'),
                'alasan' => htmlspecialchars($this->input->post('cuti4', true)),
                // 'form_surat_cuti' => $form_c
            ];
            $this->db->insert('surat_cuti', $data2);
            // var_dump($this->db->insert('surat_cuti', $data2));
            // die;
            redirect('user/surat2');
        }
    }
    
    public function pengajuancuti(){

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['prodi'] = $this->m_relasi->get_prodi($id_user);
        $data2['semester'] = $this->m_relasi->get_semester();
        $data2['user_data'] = $this->m_relasi->get_relasi_surat_cuti();
        $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/pengajuan_cuti', $data2);
            $this->load->view('user/template/dashboard_footer');

    }

    public function surat3()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->form_validation->set_rules('nama1', 'Anggota1', 'required|trim');
        $this->form_validation->set_rules('nama2', 'Anggota2', 'trim');
        $this->form_validation->set_rules('nama3', 'Anggota3', 'trim');
        $this->form_validation->set_rules('nama4', 'Anggota4', 'trim');
        $this->form_validation->set_rules('nama5', 'Anggota5', 'trim');
        $this->form_validation->set_rules('nim1', 'Nim1', 'required|trim');
        $this->form_validation->set_rules('nim2', 'Nim2', 'trim');
        $this->form_validation->set_rules('nim3', 'Nim3', 'trim');
        $this->form_validation->set_rules('nim4', 'Nim4', 'trim');
        $this->form_validation->set_rules('nim5', 'Nim5', 'trim');
        $this->form_validation->set_rules('waktu_mulai', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('waktu_selesai', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat3', $data);
            $this->load->view('user/template/dashboard_footer');
        } else {
            $data2 = [
                'tempat' => htmlspecialchars($this->input->post('tempat', true)),
                'waktu_mulai' => htmlspecialchars($this->input->post('waktu_mulai', true)),
                'waktu_selesai' => htmlspecialchars($this->input->post('waktu_selesai', true)),
                'tanggal_mengajukan' => date('Y-m-d'),
                'alamat_tempat' => htmlspecialchars($this->input->post('alamat', true))
            ];
            $this->db->insert('surat_kerja_praktek', $data2);
            $data_id_kp = $this->db->insert_id();

            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama1'),
                'nim' => $this->input->post('nim1')
            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama2'),
                'nim' => $this->input->post('nim2')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama3'),
                'nim' => $this->input->post('nim3')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama4'),
                'nim' => $this->input->post('nim4')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama5'),
                'nim' => $this->input->post('nim5')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            redirect('user/surat3');
        }
    }
    public function surat3_1()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['prodi']= $this->m_relasi->ambil_prodi();
        $this->form_validation->set_rules('nama1', 'Anggota1', 'required|trim');
        $this->form_validation->set_rules('nama2', 'Anggota2', 'trim');
        $this->form_validation->set_rules('nama3', 'Anggota3', 'trim');
        $this->form_validation->set_rules('nama4', 'Anggota4', 'trim');
        $this->form_validation->set_rules('nama5', 'Anggota5', 'trim');
        $this->form_validation->set_rules('nim1', 'Nim1', 'required|trim');
        $this->form_validation->set_rules('nim2', 'Nim2', 'trim');
        $this->form_validation->set_rules('nim3', 'Nim3', 'trim');
        $this->form_validation->set_rules('nim4', 'Nim4', 'trim');
        $this->form_validation->set_rules('nim5', 'Nim5', 'trim');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required|trim');
        $this->form_validation->set_rules('waktu_mulai', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('waktu_selesai', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        // $this->form_validation->set_rules('sp_prodi', 'Pengantar', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat3_1', $data);
            $this->load->view('user/template/dashboard_footer');
        } else {

            $sp_prodi   = $_FILES['sp_prodi'];
            if ($sp_prodi = '') {
            } else {
                $config['upload_path']      = 'assets/img/kp';
                $config['allowed_types']      = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('sp_prodi')) {

                    echo "Gambar Salah";
                } else {
                    $sp_prodi = $this->upload->data('file_name');
                }
            }
            $data2 = [
                'tempat' => htmlspecialchars($this->input->post('tempat', true)),
                'alamat_tempat' => htmlspecialchars($this->input->post('alamat', true)),
                'waktu_mulai' => htmlspecialchars($this->input->post('waktu_mulai', true)),
                'waktu_selesai' => htmlspecialchars($this->input->post('waktu_selesai', true)),
                'prodi' => htmlspecialchars($this->input->post('prodi', true)),
                'tanggal_mengajukan' => date('Y-m-d'),
                'sp_prodi' => $sp_prodi
            ];
            $this->db->insert('surat_kerja_praktek', $data2);
            $data_id_kp = $this->db->insert_id();

            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama1'),
                'nim' => $this->input->post('nim1')
            ];
            $this->db->insert('detail_anggota_kp', $data3);
            
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama2'),
                'nim' => $this->input->post('nim2')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama3'),
                'nim' => $this->input->post('nim3')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama4'),
                'nim' => $this->input->post('nim4')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'kp_id' => $data_id_kp,
                'nama' => $this->input->post('nama5'),
                'nim' => $this->input->post('nim5')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            redirect('user/surat3_1');
        }
    }
    public function surat4()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');
        $data2['prodi'] = $this->m_relasi->get_prodi($id_user);
        $data2['semester'] = $this->m_relasi->get_semester();
        $data2['data_mundur'] = $this->surat_mundur->mundur2();

        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('hp1', 'Telp1', 'required|trim');
        $this->form_validation->set_rules('hp2', 'telp2', 'required|trim');
        $this->form_validation->set_rules('alasankeluar', 'Alasan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/surat4', $data2);
            $this->load->view('user/template/dashboard_footer');
        } else {
            // $form_m   = $_FILES['form_m'];
            // if ($form_m = '') {
            // } else {
            //     $config['upload_path']      = 'assets/img/mundur';
            //     $config['allowed_types']      = 'jpg|png|gif';

            //     $this->load->library('upload', $config);
            //     if (!$this->upload->do_upload('form_m')) {

            //         echo "Gambar Salah";
            //     } else {
            //         $form_m = $this->upload->data('file_name');
            //     }
            // }
            $data2 = [
                // 'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                // 'prodi_id' => htmlspecialchars($this->input->post('prodi', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'telp_mhs' => htmlspecialchars($this->input->post('hp1', true)),
                'telp_ortu' => htmlspecialchars($this->input->post('hp2', true)),
                'tanggal_mengajukan' => date('Y-m-d'),
                'alasan' => htmlspecialchars($this->input->post('alasankeluar', true)),
                // 'form_surat_mundur' => $form_m
            ];
            $this->db->insert('surat_mundur', $data2);
            redirect('user/surat4');
        }
    }
    public function daftar_wisuda()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');
        $data2['prodi'] = $this->m_relasi->get_prodi($id_user);


        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('ttl1', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('ttl2', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('hp', 'HP', 'required|trim');
        $this->form_validation->set_rules('sidang', 'Sidang', 'required|trim');
        $this->form_validation->set_rules('kp1', 'KP Indo', 'required|trim');
        $this->form_validation->set_rules('kp2', 'KP Eng', 'required|trim');
        $this->form_validation->set_rules('ta1', 'TA Indo', 'required|trim');
        $this->form_validation->set_rules('ta2', 'TA Eng', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('sosmed', 'sosmed', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/daftar_wisuda', $data2);
            $this->load->view('user/template/dashboard_footer');
        } else {

            $foto   = $_FILES['foto'];
            if ($foto = '') {
            } else {
                $config['upload_path']      = 'assets/img/daftar_wisuda';
                $config['allowed_types']      = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {

                    echo "Gambar Salah";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            
            $data2 = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'nik_ktp' => htmlspecialchars($this->input->post('nik', true)),
                // 'prodi_id' => htmlspecialchars($this->input->post('prodi', true)),
                'jns_kelamin' => htmlspecialchars($this->input->post('jk', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('ttl1', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('ttl2', true)),
                'no_hp' => htmlspecialchars($this->input->post('hp', true)),
                'sidang' => htmlspecialchars($this->input->post('sidang', true)),
                'kp_indo' => htmlspecialchars($this->input->post('kp1', true)),
                'kp_ing' => htmlspecialchars($this->input->post('kp2', true)),
                'pa_indo' => htmlspecialchars($this->input->post('ta1', true)),
                'pa_ing' => htmlspecialchars($this->input->post('ta2', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'sosmed' => htmlspecialchars($this->input->post('sosmed', true)),
                'foto' => $foto,
                'tahun_daftar' => date('Y-m-d')
            ];
            
            $this->db->insert('daftar_wisuda', $data2);
            redirect('user/daftar_wisuda');
        }
    }
    
    public function kuisioner()
    {

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id_user = $this->session->userdata('id_user');
        $data2['dosen'] = $this->m_relasi->get_dosen();
        $data2['prodi'] = $this->m_relasi->get_prodi($id_user);

        $data2['kelas'] = $this->m_relasi->get_kelas($id_user);
        foreach ($data2['kelas'] as $x) {
            $datamatkul = array(
                'id_kelas' => $x->id_kelas
            );
            $id_kelas = $datamatkul['id_kelas'];
            $data2['matkul'] = $this->m_relasi->get_detail_matkul($id_kelas);
        }
        $data2['dosenmatkul'] = $this->m_relasi->ambil_matkul();
        $data2['dosenmat'] = $this->kuisioner->get_relasi();
        $data2['dosenmat2'] = $this->kuisioner->get_jk();
        $this->pilih_dosen('dosen');
        

            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/kuisioner', $data2);
            $this->load->view('user/template/dashboard_footer');
       
    }
    public function isi_kuisioner($id_mata_kuliah){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $where = array('id_mata_kuliah' => $id_mata_kuliah);
        $w = $id_mata_kuliah;
        $data3['dosen'] = $this->kuisioner->pilih_matkul($w);
        // $data_matkul = $this->kuisioner->pilih_matkul('detail_kelas');
        $data3['pertanyaan'] = $this->kuisioner->pertanyaan_kuisioner(); 

        // $data2['idmatkul'] = $this->db->select('id_mata_kuliah')->get_where('detail_kelas', ['id_mata_kuliah' => $id_mata_kuliah])->row_array();
        $data3['matkul'] = $this->db->get_where('mata_kuliah', $where)->row_array();
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/isi_kuisioner',$data3);
        $this->load->view('user/template/dashboard_footer');
        // var_dump($data2['matkul'] = $this->kuisioner->pilih_matkul($where, 'detail_kelas'));
        // die;
    }
    public function isi_kuisioner2(){
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        
        $id_user = $this->session->userdata('id_user');
        $data2['dosen'] = $this->m_relasi->get_dosen();
        $data2['prodi'] = $this->m_relasi->get_prodi($id_user);

        $data2['kelas'] = $this->m_relasi->get_kelas($id_user);
        foreach ($data2['kelas'] as $x) {
            $datamatkul = array(
                'id_kelas' => $x->id_kelas
            );
            $id_kelas = $datamatkul['id_kelas'];
            $data2['matkul'] = $this->m_relasi->get_detail_matkul($id_kelas);
        }
        $data2['dosenmatkul'] = $this->m_relasi->ambil_matkul();
        $data2['dosenmat'] = $this->kuisioner->get_relasi();
        $data2['dosenmat2'] = $this->kuisioner->get_jk();
        $this->pilih_dosen('dosen');
        // $data_matkul = $this->kuisioner->pilih_matkul('detail_kelas');
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        // $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        // $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('dosen', 'Dosen', 'required|trim');
        $this->form_validation->set_rules('matkul', 'Matkul', 'required|trim');
        $this->form_validation->set_rules('optionsRadios36', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios1', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios2', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios3', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios4', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios5', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios6', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios7', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios8', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios9', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios10', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios11', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios12', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios13', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios14', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios15', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios16', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios17', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios18', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios19', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios20', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios21', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios22', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios23', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios24', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios25', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios26', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios27', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios28', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios29', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios30', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios31', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios32', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios33', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios34', 'Pilihan', 'required|trim');
        $this->form_validation->set_rules('optionsRadios35', 'Pilihan', 'required|trim');
        // $data2['idmatkul'] = $this->db->select('id_mata_kuliah')->get_where('detail_kelas', ['id_mata_kuliah' => $id_mata_kuliah])->row_array();
        // $data3['matkul'] = $this->db->get_where('mata_kuliah', $where)->row_array();
        if ($this->form_validation->run() == false) {
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/isi_kuisioner',$data2);
        $this->load->view('user/template/dashboard_footer');
        // var_dump($data2['matkul'] = $this->kuisioner->pilih_matkul($where, 'detail_kelas'));
        // die;
    } else {


        $data2 = [
            'id_user' => htmlspecialchars($this->input->post('nim', true)),
            'id_dosen' => htmlspecialchars($this->input->post('dosen', true)),
            'id_mata_kuliah' => htmlspecialchars($this->input->post('matkul', true)),
            'p36' => htmlspecialchars($this->input->post('optionsRadios36', true)),
            'p1' => htmlspecialchars($this->input->post('optionsRadios1', true)),
            'p2' => htmlspecialchars($this->input->post('optionsRadios2', true)),
            'p3' => htmlspecialchars($this->input->post('optionsRadios3', true)),
            'p4' => htmlspecialchars($this->input->post('optionsRadios4', true)),
            'p5' => htmlspecialchars($this->input->post('optionsRadios5', true)),
            'p6' => htmlspecialchars($this->input->post('optionsRadios6', true)),
            'p7' => htmlspecialchars($this->input->post('optionsRadios7', true)),
            'p8' => htmlspecialchars($this->input->post('optionsRadios8', true)),
            'p9' => htmlspecialchars($this->input->post('optionsRadios9', true)),
            'p10' => htmlspecialchars($this->input->post('optionsRadios10', true)),
            'p11' => htmlspecialchars($this->input->post('optionsRadios11', true)),
            'p12' => htmlspecialchars($this->input->post('optionsRadios12', true)),
            'p13' => htmlspecialchars($this->input->post('optionsRadios13', true)),
            'p14' => htmlspecialchars($this->input->post('optionsRadios14', true)),
            'p15' => htmlspecialchars($this->input->post('optionsRadios15', true)),
            'p16' => htmlspecialchars($this->input->post('optionsRadios16', true)),
            'p17' => htmlspecialchars($this->input->post('optionsRadios17', true)),
            'p18' => htmlspecialchars($this->input->post('optionsRadios18', true)),
            'p19' => htmlspecialchars($this->input->post('optionsRadios19', true)),
            'p20' => htmlspecialchars($this->input->post('optionsRadios20', true)),
            'p21' => htmlspecialchars($this->input->post('optionsRadios21', true)),
            'p22' => htmlspecialchars($this->input->post('optionsRadios22', true)),
            'p23' => htmlspecialchars($this->input->post('optionsRadios23', true)),
            'p24' => htmlspecialchars($this->input->post('optionsRadios24', true)),
            'p25' => htmlspecialchars($this->input->post('optionsRadios25', true)),
            'p26' => htmlspecialchars($this->input->post('optionsRadios26', true)),
            'p27' => htmlspecialchars($this->input->post('optionsRadios27', true)),
            'p28' => htmlspecialchars($this->input->post('optionsRadios28', true)),
            'p29' => htmlspecialchars($this->input->post('optionsRadios29', true)),
            'p30' => htmlspecialchars($this->input->post('optionsRadios30', true)),
            'p31' => htmlspecialchars($this->input->post('optionsRadios31', true)),
            'p32' => htmlspecialchars($this->input->post('optionsRadios32', true)),
            'p33' => htmlspecialchars($this->input->post('optionsRadios33', true)),
            'p34' => htmlspecialchars($this->input->post('optionsRadios34', true)),
            'p35' => htmlspecialchars($this->input->post('optionsRadios35', true))


        ];
        $this->db->insert('jawaban_kuisioner', $data2);
        // $data2['kelas'] = $this->m_relasi->get_kelas($id_user);
        // foreach ($data2['kelas'] as $x) {
        //     $datamatkul = array(
        //         'id_kelas' => $x->id_kelas
        //     );
        //     $id_kelas = $datamatkul['id_kelas'];
        //     $data2['matkul'] = $this->m_relasi->get_detail_matkul($id_kelas);
        //     foreach ($data2['matkul'] as $dsm):
        //         $jml_matkul = $this->db->query("SELECT count(detail_kelas.id_mata_kuliah) FROM detail_kelas
        //                        JOIN user_sistem ON user_sistem.id_kelas = detail_kelas.id_kelas
        //                        JOIN jawaban_kuisioner ON user_sistem.id_user = jawaban_kuisioner.id_user
        //                        WHERE jawaban_kuisioner.id_user = $id_user");




        //         $jml_mengisi = "SELECT * FROM jawaban_kuisioner WHERE id_user = $id_user";
        //     endforeach;
        // }
        
        $where = array('id_user' => $id_user);

        $data_sudah= array(
            'status_mengisi_kuisioner' => 'Sudah'
        );
         $this->m_relasi->update_status($data_sudah,$where);
         redirect('user/kuisioner');
        // echo $data2['matkul']->num_rows();

    }
    }
    public function pilih_dosen()
    {

        if ($this->input->post('id_mata_kuliah')) {
            $id_user = $this->session->userdata('id_user');
            $data2['kelas'] = $this->m_relasi->get_kelas($id_user);
            foreach ($data2['kelas'] as $x) {
                $datamatkul = array(
                    'id_kelas' => $x->id_kelas
                );
                $id_kelas = $datamatkul['id_kelas'];
                $datadosen = $this->m_relasi->get_detail_dosen($this->input->post('id_mata_kuliah'), $id_kelas);
                foreach ($datadosen as $dsm) {
                    // echo '<option value="' . $dsm->id_dosen . '">' . $dsm->nama_dosen . '</option>';
                    echo '<input class="form-control" id="dosen" name="dosen" disabled value="' . $dsm->nama_dosen . '">' .  '</input>';
                    echo '<input class="form-control" id="dosen" name="dosen" type="hidden"  value="' . $dsm->id_dosen . '">' .  '</input>';
                    // echo  $dsm->nama_dosen; 
                }
            }
        }
    }
    public function update_kuisioner()
    {
        $data = array(

            'status_mengisi'        => 1
        );
        $this->kuisioner->update_dataku($data, 'jawaban_kuisioner');
        redirect('user/kuisioner');
    }
    // public function konfigurasi_kuisioner(){
    //     $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

    //     $data['jml_aktif_baca'] = $this->notif->jml_surat_aktif_baca();
    //     $data['jml_cuti_baca'] = $this->notif->jml_surat_cuti_baca();
    //     $data['jml_kp_baca'] = $this->notif->jml_surat_kp_baca();
    //     $data['jml_mundur_baca'] = $this->notif->jml_surat_mundur_baca();
    //     // $id_user = $this->session->userdata('id_user');
    //     $data2['pertanyaan'] = $this->kuisioner->pertanyaan_kuisioner(); 

    //     $this->load->view('admin/template/dashboard_header');
    //     $this->load->view('admin/template/dashboard_side', $data);
    //     $this->load->view('admin/template/dashboard_top', $data);
    //     $this->load->view('admin/konfigurasi_kuisioner',$data2);
    //     $this->load->view('admin/template/dashboard_footer');
    // }
    public function form_mundur()
    {
        // $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        // $data['jml_wisuda'] = $this->daftar_wisuda->jml();
        // $data['wisuda'] = $this->daftar_wisuda->wisuda();

        $this->load->library('formsurat');
        $data['datas'] = $this->surat_mundur->pdf_form('surat_mundur')->result();
        $this->formsurat->generate('user/formsurat_mundur', $data);
    }
    public function form_cuti()
    {
        // $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        // $data['jml_wisuda'] = $this->daftar_wisuda->jml();
        // $data['wisuda'] = $this->daftar_wisuda->wisuda();

        $this->load->library('formsurat');
        // $where = $this->session->userdata('id_user');
        $data['datas'] = $this->surat_cuti->pdf_form('surat_cuti')->result();
        $this->formsurat->generate2('user/formsurat_cuti',$data);
    }
    public function update_formcuti()
    {
        $id = $this->input->post('nim2');
        $form_c   = $_FILES['form_c'];
            if ($form_c = '') {
            } else {
                $config['upload_path']      = 'assets/img/cuti';
                $config['allowed_types']      = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('form_c')) {

                    echo "Gambar Salah";
                } else {
                    $form_c = $this->upload->data('file_name');
                }
            }
        // $form = $this->input->post('form_c');

        $data = array(
            // 'nomor_surat'  => $nosu,
            'form_surat_cuti'  => $form_c
        );
        $where = array(
            'nim' => $id
        );
        $this->surat_cuti->update_data_form($where, $data, 'surat_cuti');
        redirect('user/surat2');
    }
    public function update_formmundur()
    {
        $id = $this->input->post('nim2');
        $form_m   = $_FILES['form_m'];
            if ($form_m = '') {
            } else {
                $config['upload_path']      = 'assets/img/mundur';
                $config['allowed_types']      = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('form_m')) {

                    echo "Gambar Salah";
                } else {
                    $form_m = $this->upload->data('file_name');
                }
            }
        // $form = $this->input->post('form_c');

        $data = array(
            // 'nomor_surat'  => $nosu,
            'form_surat_mundur'  => $form_m
        );
        $where = array(
            'nim' => $id
        );
        $this->surat_mundur->update_data_form($where, $data, 'surat_mundur');
        redirect('user/surat4');
    }
}
