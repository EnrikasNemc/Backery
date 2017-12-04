<?php

@include_once('database.php');

//Getting prodcut History
$query = 'SELECT * FROM `bakery_products_history` ORDER BY `date`';

$productHistory = db_query($query);

//Get product
$query = 'SELECT * FROM `bakery_products`';

$products = db_query($query);


@include_once('view/table.php');