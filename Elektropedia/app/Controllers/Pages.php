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
        $data = [
            'title' => 'Elektropedia',
            'produkLaptop' => $this->produkModel->getProdukLaptop(),
            'produkSmartphone' => $this->produkModel->getProdukSmartphone(),
            'produkKamera' => $this->produkModel->getProdukKamera(),
            'produkAksesoris' => $this->produkModel->getProdukAksesoris(),

        ];
        return view('pages/home', $data);
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
