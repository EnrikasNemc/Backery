<?php 

@include_once('database.php');

//GETTING PRODUCTS HISTORY
$query = 'SELECT * FROM `bakery_products_history` ORDER BY `date`';

$productHistory = db_query($query);

//GET PRODUCTS
$query = 'SELECT * FROM `bakery_products`';
$products = db_query($query);

//$data = json_decode(file_get_contents('data/bakery-data.json'), true);
@include_once('view/data-table.php');



