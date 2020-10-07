<?php

class Transaksi extends Controller
{

    public function index()
    {
        $data['judul'] = "Transaksi";
        $data['transaksi'] = $this->model('Transaksi_model')->getAllTransaksi();

        $this->view('Templates/header', $data);
        $this->view('Transaksi/index', $data);
        $this->view('Templates/footer');
    }

    public function show($id)
    {
        $data['judul'] = 'Detail Transaksi';
        $data['transaksi'] = $this->model('Transaksi_model')->getTransaksiDetilById($id);

        $this->view('Templates/header', $data);
        $this->view('Transaksi/show', $data);
        $this->view('Templates/footer');
    }
}
