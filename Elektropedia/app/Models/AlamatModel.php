<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatModel extends Model
{
    protected $table = 'alamat';
    protected $allowedFields = ['id', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'idUser'];

    public function getData()
    {
        return $this->from('users AS user, alamat AS a')
            ->where('user.id = a.idUser')
            ->where('a.idUser', user_id())->first();
    }
}
