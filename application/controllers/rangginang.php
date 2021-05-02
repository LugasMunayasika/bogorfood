<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rangginang extends CI_Controller {
	public function index()
	{
		$this->load->view('template_customer/header');
        $this->load->view('v_rangginang');
        $this->load->view('template_customer/footer');
	}
}