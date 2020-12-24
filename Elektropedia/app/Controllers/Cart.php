<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ModelUser;

class Cart extends BaseController
{
    protected $cartModel;
    public function __construct()
    {
        $this->cartModel = new CartModel();
        $this->modelUser = new ModelUser();
    }

    public function index($username)
    {
        $data = [
            'title' => 'Keranjang',
            'item' => $this->cartModel->getData($username),
            'totalHarga' => $this->cartModel->getTotalHarga($username),

        ];
        return view('transaksi/cart', $data);
    }

    public function checkout($username)
    {
        $data = [
            'title' => 'Checkout',
            'items' => $this->cartModel->getData($username),
            'totalHarga' => $this->cartModel->getTotalHarga($username),
            'user' => $this->modelUser->getUserByUsername($username),

        ];
        return view('transaksi/checkout', $data);
    }

    public function save($idUser)
    {


        $this->cartModel->save([
            'idProduk' => $this->request->getVar('idProduk'),
            'idUser' => $idUser,
            'harga' => $this->request->getVar('harga'),
        ]);

        session()->setFlashData('pesan', 'Produk Berhasil Ditambahkan Ke Keranjang.');
        return redirect()->to('/produk');
    }

    public function delete($id, $username)
    {
        $this->cartModel->delete($id);
        session()->setFlashdata('pesan', 'Produk berhasil dihapus.');

        return redirect()->to('/cart' . '/' . $username);
    }
    //--------------------------------------------------------------------

}