
<table id="darky">
						<caption>Soupis vydaných dárků</caption>
						<thead>
							<tr>
								<th>Název dárku</th>
								<th>Počet vydaných dárků</th>
							</tr>
						</thead>
						<tbody> <?php
						$row = mysqli_fetch_row($dataGift);
						$rowForm= mysqli_fetch_row($dataGiftForm);
						for ($i=0; $i <= 20; $i++) { 
							$j = $i + 1;
							$darekTemp = "darek-".$j."[]";
							//$minTemp = "min".($i+1);
							//$reqTemp = "req".($i+1);
							//if (empty(${$minTemp})) {
							//	//${$minTemp} = 20;
							//	${$minTemp} = 0;
							//}
							$gift = explode("|", $row[$i]);
							$giftForm = explode("|", $rowForm[$i]);
							if (!empty($gift[0])) {
								echo "
							<tr>";
								echo "
								<td>";?><input type="text" id="<?php echo "$darekTemp"; ?>" name="<?php echo "$darekTemp"; ?>" class="display-none" value="<?php echo "$giftForm[0]"; ?>"><?php echo $giftForm[0]; ?></td>
								<?php 
									if (!is_numeric(${$prodKusuTemp})) { ?><td><input type="number" placeholder="0-999" class="w60 padding03 right" name="<?php echo "$darekTemp"; ?>" min="0" max="9999" value="<?php echo $gift[1]; ?>" required="required">&nbsp;Ks</td><?php 
									} else { ?><td><input type="number" class="invisible display-none" name="<?php echo "$darekTemp"; ?>" value="<?php echo "${$prodKusuTemp}"; ?>"><?php echo $gift[1]; ?>&nbsp;Ks</td> 
									<?php }
								?>
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