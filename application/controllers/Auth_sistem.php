<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_sistem extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_relasi');
    }
    public function index()
    {
        $this->form_validation->set_rules('id_user', 'User', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            // $this->load->view('template/auth_header', $data);
            $this->load->view('auth_sistem/login', $data);
            // $this->load->view('template/auth_footer');
        } else {

            //validasi berhasil
            $this->login();
        }
    }
    private function login()
    {
        $id_user = $this->input->post('id_user');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user_sistem', ['id_user' => $id_user])->row_array();

        if ($user) {
            //usernya ada
            if ($user['status_user'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'nama_user' => $user['nama_user'],
                        'prodi' => $user['prodi'],
                        'id_kelas' => $user['id_kelas'],
                        'gambar' => $user['gambar'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('adminprodi');
                    } elseif ($user['role_id'] == 3) {
                        redirect('pimpinan');
                    } elseif ($user['role_id'] == 5) {
                        redirect('pimpinan_prodi');
                    } elseif ($user['role_id'] == 6) {
                        redirect('dosen');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password salah</div>');
                    redirect('auth_sistem');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Username Tidak Ada</div>');
                redirect('auth_sistem');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Username Salah</div>');
            redirect('auth_sistem');
        }
    }



    public function registrasi()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('id_user', 'User', 'required|trim');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user_sistem.email]', [
            'is_unique' => 'email telah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Registrasi';
            $data['prodi'] = $this->m_relasi->ambil_prodi();
            $data['kelas'] = $this->m_relasi->d_profil();

            $this->load->view('auth_sistem/registrasi', $data);
        } else {
            $data2 = [
                'nama_user' => htmlspecialchars($this->input->post('nama', true)),
                'id_user' => htmlspecialchars($this->input->post('id_user', true)),
                'prodi' => htmlspecialchars($this->input->post('prodi', true)),
                'id_kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'status_user' => 1,
                'role_id' => 4,
                'tanggal_buat' => time()
            ];
            $this->db->insert('user_sistem', $data2);
            redirect('auth_sistem');
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Registrasi Berhasil</div>');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('role_id');
        //    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert"> Berhasil Logout</div>');
        redirect('auth_sistem');
    }
}
