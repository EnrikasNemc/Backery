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
	print_r($value);
}


/*
$result = $conn->query('SHOW TABLES');


print_r($result);



mysqli_close($conn);*/