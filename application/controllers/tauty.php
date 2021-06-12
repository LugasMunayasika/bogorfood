<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tauty extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Tauty Cake | Bogorfood";
		$data['tauty']= $this->Model_toko_tauty->get_data('tbl_tauty_cake')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_tauty');
        $this->load->view('template_customer/footer');
	}

	public function detail($id)
	{
   		$data['title']="UMKM Tauty Cake | Detail Produk";
    	$detail = $this->Model_toko_tauty->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('template_customer/header',$data);
    	$this->load->view('tauty/v_detail_tauty',$data);
    	$this->load->view('template_customer/footer');
    
   }
}