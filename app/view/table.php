<?php

$days = $keys = $names = $amounts = '';

			foreach ($data as $key => $value) {
				
					$days.="<th colspan=\"5\">$key</th>";
					$keys.="<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
			};	

			foreach ($value as $name => $data) {

					foreach ($data as $amount) {
						
					$amounts .="<td>$amount</td>";
				};
				$names.= "<tr><td>$name</td><td>$amounts</td></tr>";

				//echo "<tr>";

				
				//echo "</tr>";
			};
			?>
<table class="border1 backgrounds">
	<thead>
		<tr>
			<th rowspan="2">Kepinys</th>
			<?php echo $days;
			?>
		</tr>
		<tr>
			<?php echo $keys;?>
		</tr>

	</thead>
	<body>
		<?php 
			echo $names; 
			//echo $amounts;
		?>
			
	</body>

</table>





<?php

$html = '';

$html .= '<table>';
$html .= '<thead>';



$html .= '</thead>';
$html .= '</table>';

echo ($html);

return;