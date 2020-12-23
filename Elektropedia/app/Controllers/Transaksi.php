<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ProdukModel;

class Transaksi extends BaseController
{
    protected $produkModel;
    protected $modelUser;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->modelUser = new ModelUser();
    }

    public function beliLangsung($namaProduk, $user)
    {
        $data = [
            'title' => $namaProduk,
            'produk' => $this->produkModel->getProdukByNama($namaProduk),
            'user' => $this->modelUser->getUserById($user),
        ];
        return view('transaksi/beli_langsung', $data);
    }

    public function cart()
    {
        $data = [
            'title' => 'Cart',

        ];
        return view('transaksi/cart', $data);
    }
    //--------------------------------------------------------------------

}
