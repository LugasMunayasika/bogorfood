<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desira extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Desira | Bogorfood";
		$data['desira']= $this->Model_toko_desira->get_data('tbl_desira')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_desira');
        $this->load->view('template_customer/footer');
	}

	public function detail($id)
	{
   		$data['title']="UMKM Desira | Detail Produk";
    	$detail = $this->Model_toko_desira->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('template_customer/header',$data);
    	$this->load->view('desira/v_detail_desira',$data);
    	$this->load->view('template_customer/footer');
    
   }
}