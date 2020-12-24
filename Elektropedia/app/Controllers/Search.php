<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Search extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $produk = $this->produkModel->search($keyword);
            $produkLain = $this->produkModel->getProductById();
            $title = $keyword;
        } else {
            $produk = $this->produkModel->getProductById();
            $title = 'Produk';
        }
        $data = [
            'title' => $title,
            'produk' => $produk,
            'produkLain' => $produkLain,
        ];
        return view('produk/index', $data);
    }
    //--------------------------------------------------------------------
}
