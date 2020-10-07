<?php

class Transaksi extends Controller
{

    public function index()
    {
        $data['judul'] = "Transaksi";

        $this->view('Templates/header', $data);
        $this->view('Transaksi/index');
        $this->view('Templates/footer');
    }
}
