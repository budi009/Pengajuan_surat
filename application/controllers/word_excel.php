<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class word_excel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('daftar_wisuda');
       
    }
	function wisudaword()
    {
        $filename = 'Buku Kenangan';
        header('content-type: application/vnd.ms-word');
        header('content-disposition: attachment;filename="'. $filename .'.doc"');
        $data2['wisuda'] = $this->daftar_wisuda->wisuda();
        $data['jml_wisuda'] = $this->daftar_wisuda->jml();

        
        
        $this->load->view('admin/wisuda/wisudaword', $data2);
        
    }

	function wisudaexcel()
    {
        $filename = 'Laporan Pendaftar Wisuda';
        header('content-type: application/vnd.ms-excel');
        header('content-disposition: attachment;filename="'. $filename .'.xls"');
        $data2['wisuda'] = $this->daftar_wisuda->wisuda();
        $data['jml_wisuda'] = $this->daftar_wisuda->jml();

        
        
        $this->load->view('admin/wisuda/wisudaexcel', $data2);
        
    }
}