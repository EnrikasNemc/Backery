<?php
$new_data = $_POST;

//TODO:
//CHeck if all parameters are rovided



//reading data
$existing_data = json_decode (file_get_contents("app/data/bakery-data.json"));
$existing_data = objectToArray($existing_data);
updateData($existing_data, $new_data);

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
