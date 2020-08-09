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
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/template/dashboard_footer');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/template/dashboard_footer');
    }
    public function edit_profil()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $where = array('nim' => $id);
        // $data2['profile'] = $this->m_relasi->edit_profile($where, 'user_sistem')->result();
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/edit_profil', $data);
        $this->load->view('user/template/dashboard_footer');
    }
    public function update_profil()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $where = array('nim' => $id);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/edit_profil', $data);
        $this->load->view('user/template/dashboard_footer');
        }else{
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
            $gambar= $_FILES['gambar'];
            
            if($gambar){
                $config['allowed_types']='gif|jpg|png';
                $config['max_size']='2048';
                $config['upload_path']='assets/img/profil/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('gambar')) {
                    $gambar_lama = $data['user']['gambar'];
                    if($gambar_lama != 'default.jpg'){
                        unlink(FCPATH . 'assets/img/profil/'. $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar_baru);

                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama_user',$nama );
            $this->db->where('id_user',$nim );
            $this->db->update('user_sistem');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Profil Berhasil</div>');
            redirect('user/profile');
        }
    }

    public function surat1()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['prodi'] = $this->m_relasi->get_prodi();
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
        $this->form_validation->set_rules('optionsRadios', 'Pilihan', 'required|trim');
        // $this->form_validation->set_rules('ktp_ortu', 'KTP', 'required|trim');
        // $this->form_validation->set_rules('ktm_mhs', 'KTM', 'required|trim');
        // $this->form_validation->set_rules('pedoman', 'Pedoman', 'required|trim');
        $this->form_validation->set_rules('lainnya', 'Pilihan', 'trim');

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
                'keperluan' => htmlspecialchars($this->input->post('optionsRadios', true)),
                'fc_ktp_ortu' => $ktp,
                'fc_ktm_mhs' =>  $ktm,
                'fc_buku_pedoman' =>  $pedoman,
                'lainnya' => htmlspecialchars($this->input->post('lainnya', true))

            ];
            $this->db->insert('surat_aktif_kuliah', $data3);
            redirect('user/surat1');
        }
    }
    public function surat2()
    {
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // $data2['data'] = $this->m_relasi->get_relasi();
        $data2['prodi'] = $this->m_relasi->get_prodi();
        $data2['semester'] = $this->m_relasi->get_semester();
        $data2['user_data'] = $this->m_relasi->get_relasi_surat_cuti();
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
            $data2 = [
                'nim' => htmlspecialchars($this->input->post('nim', true)),
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
        $this->form_validation->set_rules('tempat', 'Tempat', 'required|trim');
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
                'alamat_tempat' => htmlspecialchars($this->input->post('alamat', true))

            ];
            $this->db->insert('surat_kerja_praktek', $data2);
            $data_id_kp = $this->db->insert_id();

            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama1'),
                'nim' => $this->input->post('nim1')
            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama2'),
                'nim' => $this->input->post('nim2')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama3'),
                'nim' => $this->input->post('nim3')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama4'),
                'nim' => $this->input->post('nim4')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
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
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
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
                'sp_prodi' => $sp_prodi

            ];
            $this->db->insert('surat_kerja_praktek', $data2);
            $data_id_kp = $this->db->insert_id();

            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama1'),
                'nim' => $this->input->post('nim1')
            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama2'),
                'nim' => $this->input->post('nim2')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama3'),
                'nim' => $this->input->post('nim3')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
                'nama' => $this->input->post('nama4'),
                'nim' => $this->input->post('nim4')

            ];
            $this->db->insert('detail_anggota_kp', $data3);
            $data3 = [

                'id_kp' => $data_id_kp,
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
        $data2['prodi'] = $this->m_relasi->get_prodi();
        $data2['semester'] = $this->m_relasi->get_semester();

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
            $data2 = [
                // 'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                // 'prodi_id' => htmlspecialchars($this->input->post('prodi', true)),
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
        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['prodi'] = $this->m_relasi->get_prodi();


        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('ttl1', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('ttl2', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('hp', 'HP', 'required|trim');
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
                $config['max_size']='2048';
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
                'kp_indo' => htmlspecialchars($this->input->post('kp1', true)),
                'kp_ing' => htmlspecialchars($this->input->post('kp2', true)),
                'pa_indo' => htmlspecialchars($this->input->post('ta1', true)),
                'pa_ing' => htmlspecialchars($this->input->post('ta2', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'sosmed' => htmlspecialchars($this->input->post('sosmed', true)),
                'foto' => $foto
            ];
            $this->db->insert('daftar_wisuda', $data2);
            redirect('user/daftar_wisuda');
        }
    }

    public function kuisioner()
    {

        $data['user'] = $this->db->get_where('user_sistem', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data2['dosen'] = $this->m_relasi->get_dosen();
        $data2['prodi'] = $this->m_relasi->get_prodi();
        $data2['kelas'] = $this->m_relasi->get_kelas();
        $data2['dosenmatkul'] = $this->m_relasi->ambil_matkul();
        $data2['dosenmat'] = $this->kuisioner->get_relasi();
       
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        // $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        // $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('dosen', 'Dosen', 'required|trim');
        $this->form_validation->set_rules('matkul', 'Matkul', 'required|trim');
        $this->form_validation->set_rules('optionsRadios', 'Pilihan', 'required|trim');
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

        if ($this->form_validation->run() == false) {

            $this->load->view('user/template/dashboard_header');
            $this->load->view('user/template/dashboard_side', $data);
            $this->load->view('user/template/dashboard_top', $data);
            $this->load->view('user/kuisioner', $data2, $data);
            $this->load->view('user/template/dashboard_footer');
        } else {
           

            $data2 = [
                'id_user' => htmlspecialchars($this->input->post('nim', true)),
                'id_dosen' => htmlspecialchars($this->input->post('dosen', true)),
                'matkul' => htmlspecialchars($this->input->post('matkul', true)),
                'p' => htmlspecialchars($this->input->post('optionsRadios', true)),
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
            redirect('user/kuisioner');
        }
    }
    public function pilih_dosen()
    {
        if ($this->input->post('id_mata_kuliah')) {
            echo $this->m_relasi->ambil_dosen($this->input->post('id_mata_kuliah'));
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
}
