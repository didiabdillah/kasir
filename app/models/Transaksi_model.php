<?php

class Transaksi_model
{
    protected $table = "transaksi";
    protected $table2 = "transaksi_detil";

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransaksi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getTransaksiDetilById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table2 . ' WHERE no_transaksi=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
}
