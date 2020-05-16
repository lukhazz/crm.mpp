
<table id="produkty">
						<caption>Produkty</caption>
						<thead>
							<tr>
								<th>Promované produkty</th>
								<th>Cena <?php echo $priceCompany[0];?></th>
								<th>Počáteční stav</th>
								<th>Konečný stav</th>
								<th>Prodaných kusů</th>
							</tr>
						</thead>
						<tbody> <?php
						$row = mysqli_fetch_row($data);

						$g = 0;
						for ($i=0; $i <= 39; $i++) {
							$g++;
							$produktTemp = "produkt-".$g."[]";
							//echo "$produktTemp<br>";
							$product = explode("|", $row[$i]);
							if (!empty($product[0])) {
								//if ($revision == true) {
								if (true) {
									for ($j=0; $j < 6; $j++) { 
										//echo $product1[$j];
										//echo $productTemp."<br>";
										switch ($j) {
										case '0':
											$prodNazevTemp = "valueP".$g."Nazev";
											${$prodNazevTemp} = "";
											${$prodNazevTemp} = "$product[0]";
											//echo ${$prodNazevTemp}."<br>";
											break;
										case '1':
											$prodCenaTemp = "valueP".$g."Cena";
											${$prodCenaTemp} = "0";
											${$prodCenaTemp} = "$product[1]";
											//echo ${$prodCenaTemp}."<br>";
											break;
										case '2':
											$prodCenaVocTemp = "valueP".$g."CenaVoc";
											${$prodCenaVocTemp} = "0";
											${$prodCenaVocTemp} = "$product[1]";
											//echo ${$prodCenaVocTemp}."<br>";
											break;
										case '3':
											$prodPocTemp = "valueP".$g."Pocatek";
											${$prodPocTemp} = "0";
											${$prodPocTemp} = "$product[2]";
											//echo ${$prodPocTemp}."<br>";
											if (empty(${$prodPocTemp})) { ${$prodPocTemp} = 0; } 
											//echo ${$prodPocTemp}.".<br>";
											break;
										case '4':
											$prodKonecTemp = "valueP".$g."Konec";
											${$prodKonecTemp} = "0";
											${$prodKonecTemp} = "$product[3]";
											if (empty(${$prodKonecTemp})) { ${$prodKonecTemp} = 0; } 
											//echo ${$prodKonecTemp}."<br>";
											break;
										case '5':
											$prodKusuTemp = "valueP".$g."Kusu";
											${$prodKusuTemp} = "0";
											${$prodKusuTemp} = "$product[4]";
											//echo ${$prodKusuTemp}."<br>";
											break;
											default:
												$error = false;
												$messageError = "Neprovedla se funkce projíždějící produkty";
												break;
										}
									}
								}
								
								else {
									for ($j=0; $j < 6; $j++) { 
										//echo $product1[$j];
										//echo $productTemp."<br>";
										switch ($j) {
										case '0':
											$prodNazevTemp = "valueP".$g."Nazev";
											${$prodNazevTemp} = "";
											${$prodNazevTemp} = "$product[0]";
											//echo ${$prodNazevTemp}."<br>";
											break;
										case '1':
											$prodCenaTemp = "valueP".$g."Cena";
											${$prodCenaTemp} = "0";
											${$prodCenaTemp} = "$product[1]";
											//echo ${$prodCenaTemp}."<br>";
											break;
										case '2':
											$prodCenaVocTemp = "valueP".$g."CenaVoc";
											${$prodCenaVocTemp} = "0";
											${$prodCenaVocTemp} = "$product[2]";
											//echo ${$prodCenaVocTemp}."<br>";
											break;
										case '3':
											$prodPocTemp = "valueP".$g."Pocatek";
											${$prodPocTemp} = "0";
											${$prodPocTemp} = "$product[3]";
											//echo ${$prodPocTemp}."<br>";
											break;
										case '4':
											$prodKonecTemp = "valueP".$g."Konec";
											${$prodKonecTemp} = "0";
											${$prodKonecTemp} = "$product[4]";
											//echo ${$prodKonecTemp}."<br>";
											break;
										case '5':
											$prodKusuTemp = "valueP".$g."Kusu";
											${$prodKusuTemp} = "0";
											${$prodKusuTemp} = "$product[5]";
											//echo ${$prodKusuTemp}."<br>";
											break;
											default:
												$error = false;
												$messageError = "Neprovedla se funkce projíždějící produkty";
												break;
										}
									}
								}

								

								echo "
							<tr>";?>
								<?php
									echo "
								<td class=\"bold\">";?><input type="text" class="invisible display-none" name="<?php echo "$produktTemp"; ?>" id="<?php echo "$produktTemp"; ?>" value="<?php echo removeSqlShowChar(${$prodNazevTemp}); ?>" <?php //echo "$disabledProduct-1"; ?>><?php echo "${$prodNazevTemp}";?></td> 
								<?php 
								if ($priceCompany[0]=='MOC') {
									if (!is_numeric(${$prodCenaTemp})) { ?><td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodCenaTemp}"; ?>" <?php //echo "$disabledPrice-1"; ?> required="required">&nbsp;<?php echo $mena; ?></td>
									<?php
									}
									else { ?><td><input type="number" step="any" class="invisible display-none" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodCenaTemp}"; ?>"><?php echo ${$prodCenaTemp}?>&nbsp;<?php echo $mena; ?></td> 
									<?php } 
								}
								?>
								<?php
								if ($priceCompany[0]=='VOC') { 
								//else {
									if (!is_numeric(${$prodCenaVocTemp})) { ?><td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodCenaVocTemp}"; ?>" <?php //echo "$disabledPrice-1"; ?> required="required">&nbsp;<?php echo $mena; ?></td>
									<?php
									}
									else { ?><td><input type="number" step="any" class="invisible display-none" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodCenaVocTemp}"; ?>"><?php echo ${$prodCenaVocTemp}?>&nbsp;<?php echo $mena; ?></td> 
									<?php }
								}
								?>
								<?php 
									if (!is_numeric(${$prodPocTemp}) || (${$prodPocTemp} == 0) ) { ?><td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodPocTemp}"; ?>" required="required">&nbsp;Ks</td>
									<?php
									}
									else { ?><td><input type="number" class="invisible display-none" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodPocTemp}"; ?>"><?php echo ${$prodPocTemp}?>&nbsp;Ks</td> 
									<?php }
								?>
								<?php 
									if (!is_numeric(${$prodKonecTemp}) || (${$prodKonecTemp} == 0) ) { ?><td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodKonecTemp}"; ?>" required="required">&nbsp;Ks</td>
									<?php } 
									else { ?><td><input type="number" class="invisible display-none" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodKonecTemp}"; ?>"><?php echo ${$prodKonecTemp}?>&nbsp;Ks</td> 
									<?php }
								?>
								<?php 
									if (!is_numeric(${$prodKusuTemp})) { ?><td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodKusuTemp}"; ?>" required="required">&nbsp;Ks</td><?php 
									} else { ?><td><input type="number" class="invisible display-none" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodKusuTemp}"; ?>"><?php echo ${$prodKusuTemp}?>&nbsp;Ks</td> 
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