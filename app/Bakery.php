<?php


namespace app;


use app\controller\ProductController;
use app\controller\ProductHistoryController;
use app\controller\UserAuthenticationController;
use app\controller\UsersController;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && (!isset($_GET['view']) || !isset($_GET['action']))){
            (new UsersController())->login();
            die();
        }

        (new UsersController())->isLogged();

        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET')
        {
            (new UsersController())->isLogged();
            switch ($view)
            {

                case 'product':
                    if ($action == 'new'){
                    (new ProductController())-> create();
                    }

                    elseif ($action == 'list'){
                        (new ProductController())->list ();
                    }
                    elseif ($action='edit'){
                        (new ProductController())->edit();
                    }

                    break;

                case 'product-history' :

                        if ($action == 'new')
                            (new ProductHistoryController())-> create();

                        elseif ($action == 'list')
                            (new ProductHistoryController())->list ();

                        break;
                case 'users' :

                    if ($action == 'new')
                    {
                        (new UsersController())-> create();
                    }

                    elseif ($action == 'list')
                        (new UsersController())->list ();

                    break;

            }
        }

        elseif ($method == 'POST') {
            switch ($view) {
                case 'product':
                    (new UsersController())->isLogged();
                    if ($action == 'create')
                        (new ProductController())->store();
                    if ($action== 'update')
                        (new ProductController())->update();

                    break;

                case 'product-history':

                    if ($action == 'create'){
                       (new ProductHistoryController())->store();
                        (new UsersController())->isLogged();
                    }

                    break;
                case 'users' :
                    if ($action == 'new')
                    {
                        (new UsersController())-> create();
                    }

                    if ($action == 'create'){
                        (new UsersController())->isLogged();
                        (new UsersController())-> store();
                    }

                    if ($action == 'auth')
                        (new UsersController())-> auth();
                    break;

            }
        }

       echo "Bakery online!!!";
    }


}