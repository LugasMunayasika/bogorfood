<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$data['title']="About | Bogorfood";
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_about');
        $this->load->view('template_customer/footer');
	}
}