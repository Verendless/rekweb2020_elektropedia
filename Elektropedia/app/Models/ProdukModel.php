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

    public function getProdukLaptop()
    {
        $sql = "SELECT * FROM produk WHERE kategori = ?";
        $result = $this->db->query($sql, ['laptop']);
        return $result->getResultArray();
    }

    public function getProdukSmartphone()
    {
        $sql = "SELECT * FROM produk WHERE kategori = ?";
        $result = $this->db->query($sql, ['smartphone']);
        return $result->getResultArray();
    }

    public function getProdukKamera()
    {
        $sql = "SELECT * FROM produk WHERE kategori = ?";
        $result = $this->db->query($sql, ['kamera']);
        return $result->getResultArray();
    }

    public function getProdukAksesoris()
    {
        $sql = "SELECT * FROM produk WHERE kategori = ?";
        $result = $this->db->query($sql, ['aksesoris']);
        return $result->getResultArray();
    }

    public function search($keyword)
    {
        return $this->table('produk')->like('nama', $keyword)->orLike('kategori', $keyword);
    }
}
