<?php
class M_kelas extends CI_Model
{

    private $_table = "tbl_kelas";

    function tampil_data()
    {
        return $this->db->get('tbl_kelas');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_kelas)
    {
        $hsl = $this->db->query("DELETE FROM tbl_kelas WHERE id_kelas='$id_kelas'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_kelas.id_kelas) as jumlah');
        $hsl = $this->db->get('tbl_kelas');
        return $hsl;
    }
}
