<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Admin extends BaseController
{
    // protected $db, $builder;
    public function __construct()
    {
        // $this->db = \Config\Database::connect();
        // $this->builder = $this->db->table('users');
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard'
        ];
        return view('admin/index', $data);
    }

    public function user()
    {


        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        // $this->builder->select('users.id as userid,username,email,name');
        // $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $query = $this->builder->get();
        // $data['users'] = $query->getResult();

        $currentPage = $this->request->getVar('page_produk') ? $this->request->getVar('page_produk') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $user = $this->userModel->search($keyword);
        } else {
            $user = $this->userModel;
        }

        $data = [
            'title' => 'Daftar User',
            'users' => $user->paginate(10, 'users'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage


        ];
        return view('admin/user', $data);
    }


    // public function detail($id = 0)
    // {
    //     $data['title'] = 'Daftar User';

    //     // $users = new \Myth\Auth\Models\UserModel();
    //     // $data['users'] = $users->findAll();

    //     $this->builder->select('users.id as userid,username,email,fullname,user_image,name');
    //     $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
    //     $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    //     $this->builder->where('users.id', $id);
    //     $query = $this->builder->get();
    //     $data['users'] = $query->getRow();

    //     if (empty($data['users'])) {
    //         return redirect()->to('/admin');
    //     }

    //     return view('admin/detail', $data);
    // }





    //--------------------------------------------------------------------

}
