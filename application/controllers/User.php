<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/template/dashboard_footer');

    }
    public function surat1()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/surat1', $data);
        $this->load->view('user/template/dashboard_footer');

    }
    public function surat2()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        $this->load->view('user/template/dashboard_header');
        $this->load->view('user/template/dashboard_side', $data);
        $this->load->view('user/template/dashboard_top', $data);
        $this->load->view('user/surat2', $data);
        $this->load->view('user/template/dashboard_footer');

    }


}