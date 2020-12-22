<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'My Profile',
            'user' => $this->userModel->getUserRole(),
        ];
        return view('user/index', $data);
    }

    //--------------------------------------------------------------------

}
