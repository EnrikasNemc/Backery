<?php


namespace app\controller;


use app\model\users;

class UsersController
{

    public function __construct()
    {

    }

    public function create()
    {
        $template = new TemplateEngineController('users');
        $template->echoOutput();
    }

    public function store()
    {
        $data = $_POST;
        $data['password']= sha1($data['password'].SALT);

        $model = new users();
        $model->create($data);

        //Redirecting to list
        header('Location: ?view=users&action=list');
        exit();
    }

    public function list()
    {
        $model = new users();
        $result = $model->list ();
        $header = '';
        $date = '';

        foreach ($result as $item)
        {
            if ($header == '')
            {
                foreach ($item as $key => $value)
                {
                    $header .= '<th>' . $key . '</th>';
                }
            }

            $date .= '<tr>';

            foreach ($item as $key => $value)
            {
                $date .= '<td>' . $value .= '</td>';
            }

            $date .=  '</tr>';
        }

        $template = new TemplateEngineController('table-list');
        $template->set('header', $header);
        $template->set('date', $date);
        $template-> echoOutput();

    }

    public function login()
    {
        $template = new TemplateEngineController('login');
        $template-> echoOutput();
    }

    public function auth()
    {
        $data = $_POST;
        $data['password']=sha1($data['password'].SALT);

        $model = new users();
        $result = $model->auth($data);

        print_r($result);
    }
}