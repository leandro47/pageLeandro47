<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {


	public function index()
	{
		$this->load->view('includes/head');
		$this->load->view('landing/page');
		$this->load->view('includes/footer');

	}
	public function curriculo(){
		$this->load->helper('download');
        force_download('assets/doc/curriculo.docx', null);
	}

}
