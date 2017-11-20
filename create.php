<?php
$new_data = $_POST;

$existing_data = json_decode (file_get_contents("app/data/bakery-data.json"));
$existing_data = objectToArray($existing_data);
updateData($existing_data, $new_data);


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
		if (isset($existing_data[$new_data['product']])) {
			echo "Error";
		}
		else{
			echo "Create Product";
		}
	}
	else{
		echo 'Create Date, Create Product record';
	}
}
