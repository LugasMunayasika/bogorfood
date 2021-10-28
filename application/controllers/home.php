<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']="Home | Bogorfood";
		$data['dapur']= $this->Model_toko_dapur->ambil_data('tbl_dapur_bujalu')->result();
		$data['tauty']= $this->Model_toko_tauty->ambil_data('tbl_tauty_cake')->result();
		$data['rangginang']= $this->Model_toko_rangginang->ambil_data('tbl_rangginang_tuti')->result();
		$this->load->view('template_customer/header',$data);
		$this->load->view('v_home',$data);
		$this->load->view('template_customer/footer');
	}
}
