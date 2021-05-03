<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Dapur Bujalu | Bogorfood";
		$data['dapur']= $this->Model_toko_dapur->get_data('tbl_dapur_bujalu')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_menu');
        $this->load->view('template_customer/footer');
	}
}