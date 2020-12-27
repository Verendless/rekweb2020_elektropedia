<?php

namespace App\Controllers;

use App\Models\AlamatModel;
use App\Models\ModelUser;
use App\Models\PemesananModel;
use App\Models\ProdukModel;

class Transaksi extends BaseController
{
    protected $produkModel;
    protected $modelUser;
    protected $alamatModel;
    protected $pemesananModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->modelUser = new ModelUser();
        $this->alamatModel = new AlamatModel();
        $this->pemesananModel = new PemesananModel();
    }

    public function beliLangsung($namaProduk)
    {
        $data = [
            'title' => $namaProduk,
            'produk' => $this->produkModel->getProdukByNama($namaProduk),
            'user' => $this->modelUser->getUserById(user_id()),
            'alamat' => $this->alamatModel->getData(),
        ];
        return view('transaksi/beli_langsung', $data);
    }

    public function pembayaran()
    {
    }
    //--------------------------------------------------------------------

}
