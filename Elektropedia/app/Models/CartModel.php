<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $allowedFields = ['idProduk', 'idUser', 'harga'];

    public function getData($username)
    {
        $sql = "SELECT produk.nama, produk.gambar, produk.kategori, cart.harga, cart.id
                FROM cart, users, produk
                WHERE users.id = cart.idUser AND produk.idProduk = cart.idProduk AND users.username = ?";
        $result = $this->db->query($sql, [$username]);
        return $result->getResultArray();
    }

    public function getTotalHarga($username)
    {
        $sql = "SELECT SUM(cart.harga) as totalHarga
        FROM cart, users, produk
        WHERE users.id = cart.idUser AND produk.idProduk = cart.idProduk AND users.username = ?";
        $result = $this->db->query($sql, [$username]);
        return $result->getResultArray();
    }
}
