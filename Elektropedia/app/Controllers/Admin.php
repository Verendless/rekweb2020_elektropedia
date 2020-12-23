<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ProdukModel;

class Admin extends BaseController
{
    protected $modelUser;
    protected $produkModel;
    public function __construct()
    {
        $this->modelUser = new ModelUser();
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'user' => $this->modelUser->getUser(),
            'produk' => $this->produkModel->getProductById(),
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
            $user = $this->modelUser->search($keyword);
        } else {
            $user = $this->modelUser->getUserRole();
        }

        $data = [
            'title' => 'Daftar User',
            'users' => $user,
            // 'pagination' => $user->paginate(10, 'users'),
            'pager' => $this->modelUser->pager,
            'currentPage' => $currentPage


        ];
        return view('admin/user', $data);
    }

    //--------------------------------------------------------------------

}
