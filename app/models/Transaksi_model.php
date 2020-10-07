<?php

class Transaksi_model
{
    protected $table = "transaksi";

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

    public function tambahDataTransaksi($data)
    {
        $query = "INSERT INTO transaksi
                    VALUES
                  (:no, :waktu, :total)";

        $this->db->query($query);
        $this->db->bind('waktu', date('Y-m-d H:i:s'));
        $this->db->bind('no', $data['no']);
        $this->db->bind('total', $data['total']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
