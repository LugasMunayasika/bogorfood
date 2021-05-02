<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desira extends CI_Controller {
	public function index()
	{
		$this->load->view('template_customer/header');
        $this->load->view('v_desira');
        $this->load->view('template_customer/footer');
	}
}