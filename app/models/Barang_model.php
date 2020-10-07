<?php

class Barang_model
{
    protected $table = "barang";

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO barang
                    VALUES
                  ('', :kode_barang, :nama_barang, :satuan, :harga)";

        $this->db->query($query);
        $this->db->bind('kode_barang', $data['kode']);
        $this->db->bind('nama_barang', $data['nama']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('harga', $data['harga']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
