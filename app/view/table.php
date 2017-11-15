<?php

	$days = $keys = '';
	$rows = [];

	foreach ($data as $key => $value) {
					
		$days.="<th colspan=\"5\">$key</th>";
		$keys.="<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
		

	foreach ($value as $name => $data) {

		if(!isset($rows[$name]))
		{
			$rows[$name] = "<td>$name</td>";
		}

		foreach ($data as $amount) {

			$rows[$name] .= "<td>$amount</td>";
							
		}
					
	}
};
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





<?php

$html = '';

$html .= '<table>';
$html .= '<thead>';



$html .= '</thead>';
$html .= '</table>';

echo ($html);

return;