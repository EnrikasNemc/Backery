<?php 

$new_data = ($_POST);
//TODO
// check if all parameters are provided

$required_fields = ["date", "product_id", "initial", "produced", "damaged", "sold", "closed"];

foreach ($required_fields as $value) {

	$validData = true;

	if (!isset($new_data[$value]) || empty ($new_data[$value]))
	{
		$validData = false;
		echo "nerastas parametras: $value <br>";
	}
}

if (!$validData)
	return;


@include_once('app/database.php');



$query = db_insertQuery ("bakery_products_history", $new_data, true);


$result = db_query ($query);

print_r($result);

//reading data
/*$existing_data = json_decode (file_get_contents('data/bakery-data.json'));

$existing_data = objectToArray ($existing_data);

updateData($existing_data, $new_data);

file_put_contents('data/bakery-data.json', json_encode($existing_data));



function formatOfData(array &$data)
{

}



function objectToArray (stdClass $obj) : array
{
	$obj = (array) $obj;

	foreach ($obj as $key => &$value) {

		if( gettype ($value) == 'object')
		{
			$value = objectToArray ($value);
		}

	}


	return $obj;
}

function updateData (&$existing_data, $new_data)
{

	if (isset($existing_data [ $new_data ['data']]))
	{
 
		if (isset($existing_data [ $new_data ['data'] ][$new_data ['product'] ]))
		{
			echo "ERROR";
		}	
		else
		{
			//createProduct ();
		}
	}
	else
	{

		$existing_data[$new_data['data']] = [];

		$existing_data = createNewProduct($existing_data, $new_data);
	}
}

function createNewProduct ($existing_data, $new_data)
{
		$existing_data [ $new_data ['data'] ][$new_data ['product'] ] = [

			(int) $new_data["VL"],
			(int) $new_data["PG"],
			(int) $new_data["PR"],
			(int) $new_data["SG"],
			(int) $new_data["GL"]
		];
	return $existing_data;
	
}*/

