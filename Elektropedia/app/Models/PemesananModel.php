<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $useTimestamps = true;
    protected $createdField = 'tanggalTransaksi';
    protected $updatedField = 'tanggalVerifikasi';
    protected $allowedFields = ['idProduk', 'idUser', 'totalHarga', 'fotoBukti', 'status'];

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getData()
    {
        $sql = "SELECT pemesanan.id, pemesanan.idProduk, pemesanan.totalHarga, pemesanan.tanggalTransaksi, pemesanan.fotoBukti, pemesanan.status, produk.nama, produk.harga, produk.gambar
        FROM pemesanan, users, produk
        WHERE users.id = pemesanan.idUser AND produk.idProduk = pemesanan.idProduk";
        $result = $this->db->query($sql);
        return $result->getResultArray();
    }

    public function getDataByUsername()
    {
        $sql = "SELECT pemesanan.id, pemesanan.idProduk, pemesanan.totalHarga, pemesanan.tanggalTransaksi, pemesanan.fotoBukti, pemesanan.status, produk.nama, produk.harga, produk.gambar
                FROM pemesanan, users, produk
                WHERE users.id = pemesanan.idUser AND produk.idProduk = pemesanan.idProduk AND users.username = ?";
        $result = $this->db->query($sql, [user()->username]);
        return $result->getResultArray();
    }
}
