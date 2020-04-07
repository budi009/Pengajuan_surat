<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProdi extends CI_Controller 
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        $this->load->view('adminprodi/template/dashboard_header');
        $this->load->view('adminprodi/template/dashboard_side', $data);
        $this->load->view('adminprodi/template/dashboard_top',$data);
        $this->load->view('adminprodi/index', $data);
        $this->load->view('adminprodi/template/dashboard_footer');
        
    }
    public function surat(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
    
        $this->load->view('adminprodi/template/dashboard_header');
        $this->load->view('adminprodi/template/dashboard_side', $data);
        $this->load->view('adminprodi/template/dashboard_top',$data);
        $this->load->view('adminprodi/surat', $data);
        $this->load->view('adminprodi/template/dashboard_footer');

    }

}