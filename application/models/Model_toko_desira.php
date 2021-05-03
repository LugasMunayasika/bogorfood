<?php
class Model_toko_desira extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function ambil_data($table)
    {
        $this->db->limit(2);
        return $this->db->get($table);
    }
}
?>