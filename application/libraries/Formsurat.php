<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Formsurat {
    protected $ci;
		
	public function __construct() {
			
		$this->ci =& get_instance()
;		
    }
    public function generate($view, $data = array(), $filename = 'SuratCuti', $paper = 'A4', $orientation = 'portrait' ){
        
        
        $html = $this->ci->load->view($view,$data, TRUE);

        $dompdf= new Dompdf();

        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
        


    }
    public function generate2($view, $data = array(), $filename = 'SuratMundur', $paper = 'A4', $orientation = 'portrait' ){
        
        
        $html = $this->ci->load->view($view,$data, TRUE);

        $dompdf= new Dompdf();

        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
        


    }
	
}