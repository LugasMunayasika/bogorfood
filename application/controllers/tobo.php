<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tobo extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Tobo Kito| Bogorfood";
		$data['tobo']= $this->Model_toko_tobo->get_data('tbl_tobokito')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_tobo');
        $this->load->view('template_customer/footer');
	}

	public function detail($id)
	{
   		$data['title']="UMKM Tobo Kito | Detail Produk";
    	$detail = $this->Model_toko_tobo->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('template_customer/header',$data);
    	$this->load->view('tobo_kito/v_detail_tobo',$data);
    	$this->load->view('template_customer/footer');
    
   }
}