<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olaten extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Toko Olaten | Bogorfood";
		$data['olaten']= $this->Model_toko_olaten->get_data('tbl_olaten')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_olaten');
        $this->load->view('template_customer/footer');
	}

	public function detail($id)
	{
   		$data['title']="UMKM Olaten | Detail Produk";
    	$detail = $this->Model_toko_olaten->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('template_customer/header',$data);
    	$this->load->view('olaten/v_detail_olaten',$data);
    	$this->load->view('template_customer/footer');
    
   }
}