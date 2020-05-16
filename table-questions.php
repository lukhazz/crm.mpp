
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

						//$min4 	= 20;
						//$min5 	= 50;
						//$min6 	= 100;
						//$min8 	= 50;
						//$min9 	= 50;
						//$min10 	= 100;
						$req2 	= "";
						$req3 	= "";
						$req7 	= "";
						//$req1=$req4=$req5=$req6=$req8=$req9=$req10=$req11=$req12=$req13=$req14=$req15 = "required=\"required\"";
						$req1=$req4=$req5=$req6=$req8=$req9=$req10=$req11=$req12=$req13=$req14=$req15 = "";
						for ($i=0; $i <= 15; $i++) { 
							$otazkaTemp = "otazka-".$i."[]";
							$minTemp = "min".($i+1);
							$reqTemp = "req".($i+1);
							if (empty(${$minTemp})) {
								//${$minTemp} = 20;
								${$minTemp} = 0;
							}
							$question = explode("|", $row[$i]);
							if (!empty($question[0])) {
								echo "
							<tr>";
								echo "
								<td>";?><input type="text" id="<?php echo "$otazkaTemp"; ?>" name="<?php echo "$otazkaTemp"; ?>" class="display-none" value="<?php echo removeSqlShowChar($question[0]); ?>"><?php echo removeSqlShowChar($question[0]); ?></td>
								<td><textarea name="<?php echo "$otazkaTemp"; ?>" id="<?php echo "$otazkaTemp"; ?>" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($question[1]); ?>" minlength="<?php echo "${$minTemp}"; ?>" <?php echo "${$reqTemp}"; ?>" required ><?php if ($revision==true) { echo removeSqlShowChar($question[1]); } ?></textarea></td>
							<?php echo "
							</tr>";
							}
							else {
								break;
							}
							

							
						}

						?>

						</tbody>
					</table>	