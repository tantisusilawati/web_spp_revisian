<?php
class M_info_bayar extends CI_Model
{

    private $_table = "tbl_info_bayar";

    function tampil_data()
    {
        return $this->db->get('tbl_info_bayar');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_info_bayar)
    {
        $hsl = $this->db->query("DELETE FROM tbl_info_bayar WHERE id_info_bayar='$id_info_bayar'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_info_bayar.id_info_bayar) as jumlah');
        $hsl = $this->db->get('tbl_info_bayar');
        return $hsl;
    }
}
