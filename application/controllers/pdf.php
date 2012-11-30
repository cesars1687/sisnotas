<?php

class Pdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('rol')==1){
            redirect(base_url().'login_admin','refresh');
        }
    }
    public function pdf() {
         echo 'ola';
        $this->load->library('dompdf_lib');
        $html = '<html>
				<head></head>
				<body>
					<h1>HELLO WORLD!</h1>
				</body>
				</html>
				';

        $pdf_filename  = 'report';

        $this->dompdf_lib->createPDF($html, $pdf_filename, true);

        }
}