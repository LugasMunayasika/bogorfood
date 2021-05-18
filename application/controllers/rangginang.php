<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rangginang extends CI_Controller {
	public function index()
	{
		$data['title']="UMKM Rangginang Ceu Tuti| Bogorfood";
		$data['rangginang_tuti']= $this->Model_toko_rangginang->get_data('tbl_rangginang_tuti')->result();
		$this->load->view('template_customer/header',$data);
        $this->load->view('v_rangginang');
        $this->load->view('template_customer/footer');
	}

	public function detail($id)
	{
   		$data['title']="UMKM Rangginang Ceu Tuti | Detail Produk";
    	$detail = $this->Model_toko_rangginang->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('template_customer/header',$data);
    	$this->load->view('rangginang_ceu_tuti/v_detail_rangginang',$data);
    	$this->load->view('template_customer/footer');
    
   }
}