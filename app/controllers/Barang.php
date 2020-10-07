<?php

class Barang extends Controller
{

    public function index()
    {
        $data['judul'] = "Barang";

        $this->view('Templates/header', $data);
        $this->view('Barang/index');
        $this->view('Templates/footer');
    }
}
