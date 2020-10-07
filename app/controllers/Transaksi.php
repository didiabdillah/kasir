<?php

class Transaksi extends Controller
{

    public function index()
    {
        $data['judul'] = "Transaksi";
        //$data['transaksi'] = $this->model('Transaksi_model')->getAllTransaksi();

        $this->view('Templates/header', $data);
        $this->view('Transaksi/index');
        $this->view('Templates/footer');
    }
}
