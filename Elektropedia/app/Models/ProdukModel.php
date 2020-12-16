<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $useTimestamps = true;
    protected $allowedFields = ['idBarang', 'nama', 'deskripsi', 'berat', 'kondisi', 'harga', 'gambar', 'idPenjual'];

    public function search($keyword)
    {
        // $builder = $this->table('orang');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('produk')->like('nama', $keyword)->orLike('harga', $keyword);
    }



    public function getProduk()
    {
        return $this->findAll();
    }
}
