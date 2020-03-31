<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

        $this->load->view('admin/dashboard_header');
        $this->load->view('user/index', $data);
        $this->load->view('admin/dashboard_footer');

    }

}