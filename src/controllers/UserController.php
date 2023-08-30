<?php

namespace src\controllers;

use src\models\UserModel;

class UserController
{
    public function index() 
    {
        echo 'user index';
    }

    public function teste()
    {
        $user = new UserModel();
        $user->find();

    }
}
