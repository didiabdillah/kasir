<?php

class Barang extends Controller
{

    public function index()
    {
        $data['judul'] = "Barang";
        $data['barang'] = $this->model('Barang_model')->getAllBarang();

        $this->view('Templates/header', $data);
        $this->view('Barang/index', $data);
        $this->view('Templates/footer');
    }
}
