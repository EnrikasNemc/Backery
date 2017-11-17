<!DOCTYPE html>
<html>
<head>
	<title>Nauji Duomenys</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<form method="POST" action="create.php">
		<div>Data: </div> <input type="date" name ="data"></br>
		<div>Prekė: </div>
		<select name="product">
			<option value="1">Pyragas</option>
			<option value="2">Bandelė</option>
			<option value="3">Bulkutė</option>
			<option value="4">Sausainis</option>
			<option value="5">Tortas</option>
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