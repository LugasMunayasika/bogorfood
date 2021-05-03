<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data['title']="Contact | Bogorfood";
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_contact');
        $this->load->view('template_customer/footer');
	}
}