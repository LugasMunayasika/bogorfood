<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tobo extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Tobokito| Bogorfood";
		$data['tobo']= $this->Model_toko_tobo->get_data('tbl_tobokito')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_tobo');
        $this->load->view('template_customer/footer');
	}
}