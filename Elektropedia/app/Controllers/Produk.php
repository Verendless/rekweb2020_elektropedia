<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{


    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Produk',
            'produk' => $this->produkModel->getProduk()

        ];
        return view('produk/index', $data);
    }
    public function detail($idBarang = 0)
    {

        $data = [
            'title' => 'Produk',
            'produk' => $this->produkModel->getProduk($idBarang)

        ];
        if (empty($data['produk'])) {

            return redirect()->to('/produk');
        }
        return view('produk/detail', $data);
    }

    public function create()
    {
        // $komik =  $this->komikModel->findAll();
        $data = [
            'title' => 'Produk',
            'validation' => \Config\Services::validation()
        ];
        return view('produk/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            // 'judul' => 'required|is_unique[komik.judul]'
            'nama' => [
                'rules' => 'required|is_unique[produk.nama]',
                'errors' => [
                    'required' => '{field} Produk harus diisi',
                    'is_unique' => '{field} Produk sudah terdaftar'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => 'Anda Tidak memilih gambar',
                    'mime_in' => 'Anda Tidak memilih gambar'
                ]
            ],
            'berat' => [
                'rules' => 'required',
                'errors' =>
                [
                    'required' => '{field} Berat harus diisi',
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' =>
                [
                    'required' => '{field} Harga harus diisi',
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' =>
                [
                    'required' => '{field} Kategori harus diisi',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' =>
                [
                    'required' => '{field} Deskripsi harus diisi',
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);]
            return redirect()->to('/produk/create')->withInput();
        }
        //ambil gambar
        $fileSampul = $this->request->getFile('gambar');
        //apakah ada gambar?
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.png';
        } else {

            //generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        // //ambil nama file sampul
        // $namaSampul = $fileSampul->getName();

        $this->produkModel->save([
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'berat' => $this->request->getVar('berat'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori'),

            'gambar' => $namaSampul

        ]);

        session()->setFlashData('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/produk');
        // $komik =  $this->komikModel->findAll();

    }


    //--------------------------------------------------------------------

}
