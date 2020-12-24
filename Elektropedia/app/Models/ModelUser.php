<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'users';
    protected $userTimestamps = true;
    protected $allowedFields = ['id', 'email', 'username', 'fullname', 'noTelp', 'user_image'];

    public function getUser()
    {
        return $this->findAll();
    }

    public function getUserById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getUserByUsername($username)
    {
        return $this->where(['username' => $username])->first();
    }

    public function search($keyword)
    {
        $sql = "SELECT DISTINCT  *
                FROM users, auth_groups
                JOIN auth_groups_users ON auth_groups.id = auth_groups_users.group_id
                WHERE users.id = auth_groups_users.user_id AND ( auth_groups.name LIKE ? OR users.username LIKE ? OR users.email LIKE ?)";
        $result = $this->db->query($sql, ['%' . $keyword . '%', '%' . $keyword . '%', '%' . $keyword . '%']);
        return $result->getResultArray();
    }

    public function getUserRole()
    {
        $sql = "SELECT * 
                FROM users, auth_groups
                INNER JOIN auth_groups_users ON auth_groups.id = auth_groups_users.group_id
                WHERE users.id = auth_groups_users.user_id";
        $result = $this->db->query($sql);
        return $result->getResultArray();
    }
}
