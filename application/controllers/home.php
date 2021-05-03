<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']="Home | Bogorfood";
		$data['dapur']= $this->Model_toko_dapur->ambil_data('tbl_dapur_bujalu')->result();
		$data['desira']= $this->Model_toko_desira->ambil_data('tbl_desira')->result();
		$data['olaten']= $this->Model_toko_olaten->ambil_data('tbl_olaten')->result();
		$data['rangginang']= $this->Model_toko_rangginang->ambil_data('tbl_rangginang_tuti')->result();
		$data['tobo']= $this->Model_toko_tobo->ambil_data('tbl_tobokito')->result();
		$this->load->view('template_customer/header',$data);
		$this->load->view('v_home',$data);
		$this->load->view('template_customer/footer');
	}
}
