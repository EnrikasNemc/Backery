<?php

$new_data = $_POST;

$required_fields = ["date", "product", "initial", "produced", "sold", "damaged", "closed"];

$validData = true;

	foreach ($required_fields as $value) {

		if(!isset($new_data[$value]) || strlen($new_data[$value]) < 1 || ($new_data[$value] < 0 )) {
			$validData = false;
			Echo "Problema su $value Laukeliu </br>";
		}
	}

	if(!$validData){
		echo '<a href="index.php">Pradžia</a>';
		return;
	}

	@include_once('./app/database.php');

	$query = db_insertQuery ('bakery_products_history', $new_data, true);

	$result = db_query($query);

	print_r($query);


echo '<a href="index.php">Pradžia</a>';
