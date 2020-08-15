<?php

defined('BASEPATH') || exit('No direct script access allowed');

class VisualizarSolicitudesDisenoControladora extends CI_Controller { 
  


	public function index()
	{    
		$this->load->view('header');
        $this->load->view('vistaVisualizarSolicitudesDiseno');           
		
    }

    
}
?>
