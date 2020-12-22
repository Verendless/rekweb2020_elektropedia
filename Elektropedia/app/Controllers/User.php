<?php

namespace App\Controllers;

use App\Models\ModelUser;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new ModelUser();
    }

    public function index()
    {
        $data = [
            'title' => 'My Profile',
            'user' => $this->userModel->getUser(),
        ];
        return view('user/index', $data);
    }

    //--------------------------------------------------------------------

}
