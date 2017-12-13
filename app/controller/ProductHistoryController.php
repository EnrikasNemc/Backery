<?php

namespace app\controller;


use app\model\Product;
use app\model\ProductHistory;

class ProductHistoryController
{

    public function __construct()
    {

    }

    public function create()
    {
        $template = new TemplateEngineController('new-product-history');

        $value = $this->getProductOptions();
        $template->set('productOptions',$value);
        $template->echoOutput();

    }


    private function getProductOptions(): string
    {
        $result = (new Product())->list();
        $options = '';

        foreach ($result as $value) {
            $options .= '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
        }
        return $options;
    }

    public function store()
    {
        $model = new ProductHistory();
        $model->create($_POST);

        //Redirecting to list
        header('Location: ?view=product-history&action=list');
        exit();
    }


    public function list()
    {
        $model = new ProductHistory();
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
}