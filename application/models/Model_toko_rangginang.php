<?php
class Model_toko_rangginang extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function ambil_data($table)
    {
        $this->db->limit(3);
        return $this->db->get($table);
    }
    public function detail_data($id=NULL){
		$query = $this->db->get_where('tbl_rangginang_tuti', array('id_produk' => $id)) ->row();
		return $query;
	}
}
?>