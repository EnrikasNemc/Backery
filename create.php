<?php
$new_data = $_POST;
//TODO:
//Check if all parameters are provided

$required_fields = ["date", "product", "initial","produced","sold","damaged","closed",];

$validData = true;

foreach ($required_fields as $value) 
{

	if(!isset($new_data[$value]) || empty($new_data[$value]))
	{
		$validData = false;
		echo "Nerastas parametras: $value <br>";
	}
}
		
if(!$validData)
return;

include_once('app/database.php');

$query = db_insertQuery("bakery_products_history",$new_data, true);

$result = db_query($query);

print_r($result);



/*//reading data
$existing_data = json_decode (file_get_contents("app/data/bakery-data.json"), true);
// $existing_data = objectToArray($existing_data);
updateData($existing_data, $new_data);

file_put_contents ("app/data/bakery-data.json", json_encode($existing_data) );

/*function objectToArray(stdClass $obj) : array
{	
	$obj = (array) $obj;

	foreach ($obj as $key => &$value) {

		if (gettype($value) == 'object')
		{
			$value = objectToArray($value);
		}
	}
	return $obj;
}
*/


/*
function updateData(&$existing_data, $new_data){
	if(isset($existing_data[$new_data['date']]))
{
	if (isset($existing_data[$new_data['date']][$new_data['product']])) {
		echo "Error";
	}
	else{
		$existing_data = createProduct($existing_data, $new_data);
	}
}
	else{
		$existing_data[$new_data['date']] = [];

		$existing_data = createProduct($existing_data, $new_data);
								
	}
}

function createProduct(&$existing_data, $new_data){

	$existing_data[$new_data['date']][$new_data['product']] = 
	[
		(int) $new_data["vl"],
		(int) $new_data["pg"],
		(int) $new_data["pr"],
		(int) $new_data["sg"],
		(int) $new_data["gl"]
	];
	return $existing_data;
}
*/