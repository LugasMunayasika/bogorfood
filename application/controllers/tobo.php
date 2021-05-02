<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tobo extends CI_Controller {
	public function index()
	{
		$this->load->view('template_customer/header');
        $this->load->view('v_tobo');
        $this->load->view('template_customer/footer');
	}
}