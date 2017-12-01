<?php

@include_once('database.php');

//Getting prodcut History
$query = 'SELECT * FROM `bakery_products_history` ORDER BY `date`';

$productHistory = db_query($query);

//$data = json_decode(file_get_contents("app/data/bakery-data.json"), true);

//Get product
$query = 'SELECT * FROM `bakery_products` ORDER BY `date`';

$products = db_query($query);


@include_once('view/table.php');