<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Mypdfkp {
    protected $ci;
		
	public function __construct() {
			
		$this->ci =& get_instance()
;		
    }
    public function generate($view, $data = array(), $filename = 'SuratKerjaPraktek', $paper = 'F4', $orientation = 'potrait' ){
        
        
        $html = $this->ci->load->view($view,$data, TRUE);

        $dompdf= new Dompdf();

        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
        


    }
	
}