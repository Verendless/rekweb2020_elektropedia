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

    public function getProductById($idProduk = false)
    {
        if ($idProduk == false) {
            return $this->findAll();
        }
        return $this->where(['idProduk' => $idProduk])->first();
    }

    public function getProdukByNama($namaBarang = false)
    {
        if ($namaBarang == false) {
            return $this->findAll();
        }
        return $this->where(['nama' => $namaBarang])->first();
    }

    public function getProdukByCategory($kategori)
    {
        $sql = "SELECT * FROM produk WHERE kategori = ?";
        $result = $this->db->query($sql, [$kategori]);
        return $result->getResultArray();
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM produk WHERE kategori LIKE ? OR nama LIKE ?";
        $result = $this->db->query($sql, ['%' . $keyword . '%', '%' . $keyword . '%']);
        return $result->getResultArray();
    }

    public function searchBackEnd($keyword)
    {
        $result = $this->like('nama', $keyword);
        $result = $this->orLike('kategori', $keyword);
        return $result;
    }
}
