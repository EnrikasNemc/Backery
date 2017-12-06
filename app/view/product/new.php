<!DOCTYPE html>
<html>
<head>
    <title>Naujas Produktas</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body style="text-align: center">
<form method="POST" action="?view=product&action=create">

    <div>EAN:</div>
    <input type="number" name="ean"><br>
    <select>
        <option value="KG">Kg</option>
        <option value="PCS">Vnt</option>
    </select>

    <div><br></div>

    <div>Pavadinimas:</div>
    <input type="text" name="Name"><br>

    <div>Svoris</div>
    <input type="number" step="0.001" name="weight"><br>

    <div>Savikaina:</div>
    <input type="number" step="0.001" name="prime_cost"><br>

    <div>Pardavimo Kaina:</div>
    <input type="number" step="0.001" name="sell_price"><br>

    <input type="submit" value="Išsaugoti duomenys">

</form>
</body>
</html>