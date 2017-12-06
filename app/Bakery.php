<?php

namespace app;


use app\controller\ProductController;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET') {
            $view = $_GET['view'];
            $action = $_GET['action'];

            switch ($view) {
                case 'product':
                    $this->show((new ProductController())->create());
                    break;
            }

        } elseif ($method == 'POST') {
            switch ($view) {
                case 'product':
                    $this->show((new ProductController())->store());
                    break;
            }
        }
        echo "Bakery online!!!";
    }

    private function show(string $text)
    {

        echo $text;
    }
}