<?php
class M_guru extends CI_Model
{

    private $_table = "tbl_guru";

    function tampil_data()
    {
        return $this->db->get('tbl_guru');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_guru)
    {
        $hsl = $this->db->query("DELETE FROM tbl_guru WHERE id_guru='$id_guru'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_guru.id_guru) as jumlah');
        $hsl = $this->db->get('tbl_guru');
        return $hsl;
    }
}
