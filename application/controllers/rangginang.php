<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rangginang extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Toko Rangginang Ceu Tuti| Bogorfood";
		$data['rangginang_tuti']= $this->Model_toko_olaten->get_data('tbl_rangginang_tuti')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_rangginang');
        $this->load->view('template_customer/footer');
	}
}