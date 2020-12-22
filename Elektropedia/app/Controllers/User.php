<?php

namespace App\Controllers;

use App\Models\ModelUser;

class User extends BaseController
{
    protected $modelUser;
    public function __construct()
    {
        $this->modelUser = new ModelUser();
    }

    public function index()
    {
        $data = [
            'title' => 'My Profile',
            'user' => $this->modelUser->getUser(),
        ];
        return view('user/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Diri',
            'validation' => \Config\Services::validation(),
            'user' => $this->modelUser->getUserById($id)
        ];
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $userLama = $this->modelUser->getUserById($this->request->getVar('id'));
        if ($userLama['username'] == $this->request->getVar('username')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[produk.nama]';
        }

        //validasi input
        if (!$this->validate([
            'username' => [
                'rules' => $rule_nama,
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
        ])) {
            return redirect()->to('/user/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        $gambarLama = $this->request->getVar('gambarLama');
        // cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarLama;
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('img', $namaGambar);
            // hapus file lama
            $user = $this->modelUser->find(($id));
            if ($user['user_image'] != 'default.jpg') {
                unlink('img/' . $this->request->getVar('gambarLama'));
            }
        }

        $this->modelUser->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'user_image' => $namaGambar,

        ]);

        session()->setFlashData('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/user');
    }

    //--------------------------------------------------------------------

}
