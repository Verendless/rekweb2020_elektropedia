<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $useTimestamps = true;
    protected $primaryKey = 'idProduk';
    protected $createdField = 'tanggalEntry';
    protected $updatedField = 'tanggalEdit';
    protected $allowedFields = ['idProduk', 'nama', 'kategori', 'deskripsi', 'berat', 'harga', 'stok', 'gambar'];

    public function getProduk($idProduk = false)
    {
        if ($idProduk == false) {
            return $this->findAll();
        }

        return $this->where(['idProduk' => $idProduk])->first();
    }
}
