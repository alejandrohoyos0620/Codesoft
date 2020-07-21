<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
/*
/index carga la vista welcome_message
*/	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}


?>
