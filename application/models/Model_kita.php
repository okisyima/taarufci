<?php

class Model_kita extends CI_Model
{
    function ambil_Data()
    {
        return $this->db->get('pengguna');
    }

    public function addData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function editData($dimana, $table)
    {
        return $this->db->get_where($table, $dimana);
    }

    public function editDataAct($dimana, $data, $table)
    {
        $this->db->where($dimana);
        $this->db->update($table, $data);
    }

    public function iniData($number, $offset)
    {
        return $query = $this->db->get('pengguna', $number, $offset)->result();
    }

    public function jumData()
    {
        return $this->db->get('pengguna')->num_rows();
    }

    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
