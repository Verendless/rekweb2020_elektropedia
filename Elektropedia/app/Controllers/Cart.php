<?php

namespace App\Controllers;

use App\Models\AlamatModel;
use App\Models\CartModel;
use App\Models\ModelUser;
use App\Models\ProdukModel;

class Cart extends BaseController
{
    protected $cartModel;
    protected $modelUser;
    protected $produkModel;
    protected $alamatModel;
    public function __construct()
    {
        $this->cartModel = new CartModel();
        $this->modelUser = new ModelUser();
        $this->produkModel = new ProdukModel();
        $this->alamatModel = new AlamatModel();
    }

    public function index($username)
    {
        $data = [
            'title' => 'Keranjang',
            'item' => $this->cartModel->getData($username),
            'totalHarga' => $this->cartModel->getTotalHarga($username),
            'produk' => $this->produkModel->getProductById(),
            'alamat' => $this->alamatModel->getData(),

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
            'alamat' => $this->alamatModel->getData(),

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
