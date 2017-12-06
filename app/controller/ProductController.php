<?php

namespace app\controller;


use app\model\product;

class ProductController
{
    public function create(): string
    {
        return file_get_contents('app\view\product\new.php');
    }

    public function store(): string
    {

        $model = new product();

        print_r($_POST);
        return '';
    }
}