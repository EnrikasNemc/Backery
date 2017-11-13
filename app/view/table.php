<?php

$days = $keys = '';

foreach ($data as $key => $value) {
				
					$days.="<td colspan=\"5\">$key</td>";
					$keys.="<td>VL</td><td>PG</td><td>PR</td><td>SG</td><td>GL</td>";

				};
				foreach ($value as $name => $data) {
					"Pyragas"=>[2, 5, 5, 8, 6],

					foreach ($data as $amount) {
						
					}
					
				
			?>
<table class="border1 backgrounds">
	<thead>
		<tr>
			<th rowspan="2">Kepinys</th>
			<?php echo $days;
			?>
		</tr>
		<tr>
			<?php echo$keys;
			?>
		</tr>
	</thead>

</table>





<?php

$html = '';

$html .= '<table>';
$html .= '<thead>';



$html .= '</thead>';
$html .= '</table>';

echo ($html);

return;