<!DOCTYPE html>
<html>
<head>
	<title>Backery</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

<table id="border1">
	<thead id="backgrounds">
		<tr>
			<td rowspan="2">Kepinys</td>
			<td colspan="5">2017-11-09</td>
			<td colspan="5">2017-11-10</td>
		</tr>
		<tr>
			<td>VL</td><!--Vakarykštis likutis -->
			<td>PG</td><!--Pagaminta -->
			<td>PR</td><!--Parduota -->
			<td>SG</td><!--Sugadinta -->
			<td>GL</td><!--Galutinis -->
			<td>VL</td><!--Vakarykštis likutis -->
			<td>PG</td><!--Pagaminta -->
			<td>PR</td><!--Parduota -->
			<td>SG</td><!--Sugadinta -->
			<td>GL</td><!--Galutinis -->
		</tr>
	</thead>
	<tbody id="border1">
		
		<tr>
			<td>Pyragas</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
		</tr>
		<tr>
			<td>Bandelė</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>1</td>
			<td>5</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>1</td>
			<td>5</td>
		</tr>
		<tr>
			<td>Bulkutė</td>
			<td>0</td>
			<td>20</td>
			<td>19</td>
			<td>1</td>
			<td>0</td>
			<td>0</td>
			<td>20</td>
			<td>19</td>
			<td>1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>Sausainis</td>
			<td>9</td>
			<td>20</td>
			<td>27</td>
			<td>0</td>
			<td>2</td>
			<td>9</td>
			<td>20</td>
			<td>27</td>
			<td>0</td>
			<td>2</td>
		</tr>
		<tr>
			<td>Tortas</td>
			<td>8</td>
			<td>20</td>
			<td>19</td>
			<td>7</td>
			<td>2</td>
			<td>8</td>
			<td>20</td>
			<td>19</td>
			<td>7</td>
			<td>2</td>
		</tr>
	</tbody>
</table>

</body>

<script type="text/javascript">
/*	
	var _da = [
{"date": "2017-11-09",
	{
		"name": "Pyragas",
		"leftovers": "8",
		"count": "5",
		"sold": "12",
		"left": "1"

	},
	{
		"name":"Bandelė", 
		"leftovers": "8",
		"count": "5",
		"sold": "12",
		"left": "1"

	},
	{
		"name": "Bulkutė",
		"leftovers": "8",
		"count": "5",
		"sold": "12",
		"left": "1"
	},
	{
		"name": "Sausainis",
		"leftovers": "8",
		"count": "5",
		"sold": "12",
		"left": "1"
	},
	{
		"name":"Tortas",
		"leftovers": "8",
		"count": "5",
		"sold": "12",
		"left": "1"

	},
}

];
*/

var ne = [
	{
		date: "2017-11-09",
		product:"s",
		data: [2, 5, 5, 8, 6]
	},
	{
		date: "2017-11-10",
		product:"d",
		data: [2, 5, 5, 8, 6]
	},
	{
		date: "2017-11-11",
		product:"k",
		data: [2, 5, 5, 8, 6]
	}

]

var sortByDay = {
	"2017-11-09":
	[
		{
			"product":"Pyragas",
			data:  [2, 5, 5, 8, 6]
		}
	],
	"2017-11-10":
	[
		{
			"product":"Pyragas",
			data:  [2, 5, 5, 8, 6]
		}
	],
	"2017-11-11":
	[
		{
			"product":"Pyragas",
			data:  [2, 5, 5, 8, 6]
		}
	],
	"2017-11-12":
	[
		{
			"product":"Pyragas",
			data:  [2, 5, 5, 8, 6]
		}
	],
	"2017-11-13":
	[
		{
			"product":"Pyragas",
			data:  [2, 5, 5, 8, 6]
		}
	]
}

var sortByProduct = {
	"Pyragas":
	[
		{
			"date":"2017-11-09",
			data:  [2, 5, 5, 8, 6]
		}
	]
}

var optimizedBydDate = {
	"2017-11-09":
	{
		
				"Pyragas":[2, 5, 5, 8, 6],
				"Bandelė":[2, 5, 5, 8, 6],
				"Bulkutė":[2, 5, 5, 8, 6],
				"Sausainis":[2, 5, 5, 8, 6],
				"Tortas":[2, 5, 5, 8, 6],

				
			
		},
}

var optimizedByProduct = {
	"Pyragas":
	{
		
				"2017-11-09":[2, 5, 5, 8, 6],
				"2017-11-10":[2, 5, 5, 8, 6],
				"2017-11-11":[2, 5, 5, 8, 6],
				"2017-11-12":[2, 5, 5, 8, 6],
				"2017-11-13":[2, 5, 5, 8, 6],

				
			
		},
}

var products={
	"P-1":"Pyragas"
	"P-2":"Sausainis"
}
var finalByProduct{
	"P-1":{
		"2017-11-09":[2, 5, 5, 8, 6],
		"2017-11-10":[2, 5, 5, 8, 6],
		"2017-11-11":[2, 5, 5, 8, 6],
		"2017-11-12":[2, 5, 5, 8, 6],
		"2017-11-13":[2, 5, 5, 8, 6],


	}
}





console.log(optimizedbydate);
console.log(optimizedbyproduct)
</script>
</html>