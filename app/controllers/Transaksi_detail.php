<?php

class Transaksi_detail extends Controller
{

    public function index()
    {
        $data['judul'] = "Transaksi Detail";
        $data['trd'] = $this->model('Transaksi_detail_model')->getAllTransaksi();

        $this->view('Templates/header', $data);
        $this->view('Transaksi_detail/index', $data);
        $this->view('Templates/footer');
    }
}
