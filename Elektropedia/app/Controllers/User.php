<?php

namespace App\Controllers;

use App\Models\AlamatModel;
use App\Models\ModelUser;

class User extends BaseController
{
    protected $modelUser;
    protected $alamatModel;
    public function __construct()
    {
        $this->modelUser = new ModelUser();
        $this->alamatModel = new AlamatModel();
    }

    public function profile($username)
    {
        $data = [
            'title' => 'Profile ' . $username,
            'user' => $this->modelUser->getUserByUsername($username),
            'alamat' => $this->alamatModel->getData(),
        ];
        return view('user/profile', $data);
    }

    public function edit_profile($id)
    {
        $data = [
            'title' => 'Form Ubah Data Diri',
            'validation' => \Config\Services::validation(),
            'user' => $this->modelUser->getUserById($id),
            'alamat' => $this->alamatModel->getData($id),
        ];
        return view('user/edit_profile', $data);
    }

    public function edit_alamat($id)
    {
        $data = [
            'title' => 'Form Ubah Alamat',
            'user' => $this->modelUser->getUserById($id),
            'alamat' => $this->alamatModel->getData($id),
        ];
        return view('user/edit_alamat', $data);
    }

    public function update_alamat($id)
    {
        $alamat = $this->alamatModel->getData();
        if ($alamat != null) {
            $this->alamatModel->where('idUser', $id)
                ->set([
                    'provinsi' => $this->request->getVar('provinsi'),
                    'kota' => $this->request->getVar('kota'),
                    'kecamatan' => $this->request->getVar('kecamatan'),
                    'kelurahan' => $this->request->getVar('kelurahan'),
                    'idUser' => $id
                ])
                ->update();
        } else {
            $this->alamatModel->save([
                'provinsi' => $this->request->getVar('provinsi'),
                'kota' => $this->request->getVar('kota'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kelurahan' => $this->request->getVar('kelurahan'),
                'idUser' => $id,
            ]);
        }

        session()->setFlashData('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/user/profile/' . user()->username);
    }

    public function add_alamat_at_checkout()
    {
        $this->modelUser->save([
            'id' => user_id(),
            'fullname' => $this->request->getVar('nama'),
            'noTelp' => $this->request->getVar('notelp'),
        ]);

        $this->alamatModel->save([
            'provinsi' => $this->request->getVar('provinsi'),
            'kota' => $this->request->getVar('kota'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan' => $this->request->getVar('kelurahan'),
            'idUser' => user_id(),
        ]);
        session()->setFlashData('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/cart/checkout/' . user()->username);
    }

    public function add_alamat_at_beli_langsung()
    {
        $this->modelUser->save([
            'id' => user_id(),
            'fullname' => $this->request->getVar('nama'),
            'noTelp' => $this->request->getVar('notelp'),
        ]);

        $produk = $this->request->getVar('namaProduk');
        $this->alamatModel->save([
            'provinsi' => $this->request->getVar('provinsi'),
            'kota' => $this->request->getVar('kota'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan' => $this->request->getVar('kelurahan'),
            'idUser' => user_id(),
        ]);
        session()->setFlashData('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/transaksi/beliLangsung/' . $produk . '/' . user_id());
    }

    public function update_profile($id)
    {
        $userLama = $this->modelUser->getUserById($this->request->getVar('id'));
        if ($userLama['username'] == $this->request->getVar('username')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[users.username]';
        }

        //validasi input
        if (!$this->validate([
            'username' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
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
            'noTelp' => $this->request->getVar('noTelp'),
            'user_image' => $namaGambar,

        ]);

        session()->setFlashData('pesan', 'Data Berhasil Diupdate.');
        return redirect()->to('/user/profile/' . $this->request->getVar('username'));
    }

    //--------------------------------------------------------------------

}
