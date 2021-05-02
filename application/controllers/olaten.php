<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olaten extends CI_Controller {
	public function index()
	{
		$this->load->view('template_customer/header');
        $this->load->view('v_olaten');
        $this->load->view('template_customer/footer');
	}
}