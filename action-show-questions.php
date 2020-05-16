
<table id="zapis">
						<caption>Zápis z promodne</caption>
						<thead>
							<tr>
								<th>Otázka pro promotéra</th>
								<th>Odpověď</th>
							</tr>
						</thead>
						<tbody> <?php
						$row = mysqli_fetch_row($data);

						$min4 	= 20;
						$min5 	= 50;
						$min6 	= 100;
						$min8 	= 50;
						$min9 	= 50;
						$min10 	= 100;
						for ($i=0; $i <= 15; $i++) { 
							$minTemp = "min".($i+1);
							if (empty(${$minTemp})) {
								${$minTemp} = 2;
							}
							//echo ${$minTemp};
							//echo "$otazkaTemp<br>";
							$question = explode("|", $row[$i]);
							if (!empty($question[0])) {
								echo "
							<tr>";
								echo "
								<td>$question[0]</td>
								<td>$question[1]</td>";
							echo "
							</tr>";
							}
							else {
								break;
							}
							

							
						}

						?>

						</tbody>
					</table>	