<?php

function db_connect ()
{
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'gp_bakery';

	$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);

	if (!$conn)
	{
		die("Could not connect");
	}

	$conn->set_charset(`utf8mb4`);

	return $conn;
}

function db_query (string $query)
{

	$conn = db_connect();

	$result = $conn->query ($query);


	if ($result)
		{
			$conn->close();
			return $result;	
		}
	print_r($conn);
	$conn->close();
	die();


}

function db_insertQuery(string $tableName, array $data, bool $uuid = false) : string 
{
	if($uuid)
		$data['id'] = uniqid();

	$keys = $values = '';

	foreach ($data as $key => $value) {
		
		$keys .= "`$key` , ";

		$values .= "'$value' , ";
	}

	$keys = rtrim($keys, ", ");

	$values = rtrim($values, ", ");

	$query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";

  return ($query) ; 
}
/*
		`date`,
		`product_id`,
		`initial`,
		`produced`,
		`damaged`,
		`sold`,
		`closed`) VALUES (" .
		$new_data['date'] . "," .
		$new_data['product'] . "," .
		$new_data['initial'] . "," .
		$new_data['produced'] . "," .
		$new_data['damaged'] . "," .
		$new_data['sold'] . "," .
		$new_data['closed'] . ")";

	$query = "INSERT INTO `bakery_products_history` (

		`date`,
		`product_id`,
		`initial`,
		`produced`,
		`damaged`,
		`sold`,
		`closed`) VALUES (" .
		$new_data['date'] . "," .
		$new_data['product'] . "," .
		$new_data['initial'] . "," .
		$new_data['produced'] . "," .
		$new_data['damaged'] . "," .
		$new_data['sold'] . "," .
		$new_data['closed'] . ")";

}

return;*/

/*$result = $conn->query('SHOW TABLES');

print_r ($result);

foreach ($result as $key => $value) {
	echo ($value['Tables_in_gp_bakery'] . "<br>");

}


//mysqli_close ($conn);

$conn->close();
*/