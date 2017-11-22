<!DOCTYPE html>
<html>
<head>
	<title>Nauji Duomenys</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<form method="POST" action="create.php">
		<div>Data: </div> <input type="date" name ="date"></br>
		<div>Prekė: </div>
		<select name="product">
			<?php 
			$products = json_decode (file_get_contents("app/data/products.json"), true); 

			foreach ($products as $key => $value) {
				$_key = "<option value= \"$key\">$value</option>";

				echo "$_key";
			}

			?>
		</select>
		<div>Vakarikštis likutis: </div> <input type="number" name ="vl"></br>
		<div>Pagaminta: </div><input type="number" name ="pg"></br>
		<div>Parduota: </div><input type="number" name ="pr"></br>
		<div>Sugadinta: </div><input type="number" name ="sg"></br>
		<div>Galutinis likutis: </div><input type="number" name ="gl"></br>

		<input type="submit" value="Išsaugoti duomenys">

	</form>
</body>
</html>