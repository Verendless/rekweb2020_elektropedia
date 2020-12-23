<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Pages extends BaseController
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
            $data = [
                'title' => 'Produk',
                'produk' => $produk,
            ];
            return view('produk/index', $data);
        } else {
            $data = [
                'title' => 'Elektropedia',
                'produkLaptop' => $this->produkModel->getProdukByCategory('laptop'),
                'produkSmartphone' => $this->produkModel->getProdukByCategory('smartphone'),
                'produkKamera' => $this->produkModel->getProdukByCategory('kamera'),
                'produkAksesoris' => $this->produkModel->getProdukByCategory('aksesoris'),

            ];
            return view('pages/home', $data);
        }
    }


    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail'
        ];
        return view('pages/detail', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' =>
            [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. ABC No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Setiabudhi No. 193',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }


    //--------------------------------------------------------------------

}
