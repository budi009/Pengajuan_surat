<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/dashboard_footer');
        
    }
    public function surat(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('admin/template/dashboard_header');
        $this->load->view('admin/template/dashboard_side', $data);
        $this->load->view('admin/template/dashboard_top', $data);
        $this->load->view('admin/surat');
        $this->load->view('admin/template/dashboard_footer');
        
    }

}