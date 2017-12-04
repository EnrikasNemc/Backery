<?php
	

$days = [];
$rows = [];
$keys = '';



foreach ($products as $value) {

	if(!isset($rows[$value['id']]))
	{
		$rows[$value['id']] = [];
		$rows[$value['id']]['name'] = '<td>'.$value['name'].'</td>';
	}
}


foreach ($productHistory as $value) {

	if(!isset($days[$value['date']]))
	{
			$days[$value['date']] =true;
			$keys.="<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";


			foreach ($rows as &$product) {
			$product[$value['date']]= '<td></td><td></td><td></td><td></td><td></td>';
		}
		
	}
	$rows[$value['product']][$value['date']] = '<td>'.$value['initial'].'</td><td>'.$value['produced'].'</td><td>'.$value['sold'].'</td><td>'.$value['damaged'].'</td><td>'.$value['closed'].'</td>';
}
		



?>
<table class="border1">
	<thead class="backgrounds">
		<tr>
			<th rowspan="2">Kepinys</th>
			<?php

			foreach ($days as $date => $value) {
				echo '<th colspan = "5">'. $date . '</th>';
			}

			?>
		</tr>
		<tr>
		 <?php echo $keys;?>
		</tr>

	</thead>
	<tbody>
		<?php
			foreach ($rows as $date) {
				echo '<tr>';
				foreach ($date as $key => $value) {
					echo $value;	

				}
				echo '</tr>';
			}
		?>
	</tbody>

</table>

