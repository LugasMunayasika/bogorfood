<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Dapur Bujalu | Bogorfood";
		$data['dapur']= $this->Model_toko_dapur->get_data('tbl_dapur_bujalu')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_menu',$data);
        $this->load->view('template_customer/footer');
	}

	public function detail($id)
	{
   		$data['title']="UMKM Dapur Bujalu | Detail Produk";
    	$detail = $this->Model_toko_dapur->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('template_customer/header',$data);
    	$this->load->view('dapur_bujalu/v_detail_dapur',$data);
    	$this->load->view('template_customer/footer');
    
   }
}