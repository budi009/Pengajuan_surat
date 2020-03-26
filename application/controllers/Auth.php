<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index()
	{
        $this->load->view('template/auth_header');
		$this->load->view('auth/login');
        $this->load->view('template/auth_footer');
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('name','Name', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('template/auth_footer');
        }else {
            echo 'data berhasil ditambah';
        }
    }
}
