<?php
$new_data = $_POST;

//TODO:
//Check if all parameters are provided

function checkIfSet(&$existing_data, $new_data){
	if (isset($new_data["vl"])==true) {
		if (isset($new_data["pg"])==true) {
			if (isset($new_data["pr"])==true) {
				if (isset($new_data["sg"])==true) {
					if (isset($new_data["gl"])==true) {
						updateData($existing_data, $new_data);

					}
				}
			}
		}
	}
	else{
		echo "one or more is not set";
	}
}	

//reading data
$existing_data = json_decode (file_get_contents("app/data/bakery-data.json"));
$existing_data = objectToArray($existing_data);

checkIfSet($existing_data,$new_data);

print_r(json_encode($existing_data));

file_put_contents ("app/data/bakery-data.json", json_encode($existing_data) );

function objectToArray(stdClass $obj) : array
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

function createProduct($existing_data, $new_data){

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
