<?php

function db_connect(){

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'en_bakery';

	$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

	if (!$conn) {
		die("could not connect");
	}

	$conn->set_charset('utf8mb4'); 
	
	return $conn;
}

function db_query(string $query){

	$conn = db_connect();

	$result = $conn->query ($query);

	$conn->close();

	return $result;
}

$query = "SELECT `id`,`name` FROM `bakery_products` ORDER BY `name` ASC";

$result = db_query($query);

foreach ($result as $key => $value) {
	
}

function db_insertQuery(string $tableName, array $data, bool $uuid = false) : string
{
	if($uuid)
		$data['id'] = uniqid();

	$keys  = $values = '';

	foreach ($data as $key => $value) {
		$keys .= "`$key`, " ;
		$values .= "$value, ";
	}

	$keys = rtrim($keys, ", ");
	$values = rtrim($values, ", ");

	print_r($values);

	$query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";

return $query;
}

/*
$result = $conn->query('SHOW TABLES');


print_r($result);

mysqli_close($conn);*/