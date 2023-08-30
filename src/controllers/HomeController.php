<?php

namespace src\controllers;


class HomeController
{
    public function index() 
    {
        echo 'Controller index';
    }

    public function find()
    {
        echo 'find ok';
        // $model = new Users();
        // $model->select();
    }
}