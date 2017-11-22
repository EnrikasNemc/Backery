<?php
	$products = json_decode (file_get_contents("app/data/products.json"), true); 

ksort($data);
	$days = $keys = '';
	$rows = [];
	
	foreach ($data as $key => $value) {
					
		$days.="<th colspan=\"5\">$key</th>";
		$keys.="<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
	foreach ($products as $key => $name) {

		if(!isset($rows[$key]))
		{
			$rows[$key] = "<td>$name</td>";
		}
		if (isset($value[$key])) 
		{
			foreach ($value[$key] as $amount) 
			{

				$rows[$key] .= "<td>$amount</td>";
							
			}
		}
		else
		{
			$rows[$key] .="<td></td> <td></td> <td></td> <td></td> <td></td>";
		}			
	}
}
?>
<table class="border1">
	<thead class="backgrounds">
		<tr>
			<th rowspan="2">Kepinys</th>
			<?php echo $days;
			?>
		</tr>
		<tr>
			<?php echo $keys;?>
		</tr>

	</thead>
	<tbody>
		<?php
			foreach ($rows as $row) {
				echo '<tr>'. $row . '</tr>';
			}
		?>
	</tbody>

</table>

