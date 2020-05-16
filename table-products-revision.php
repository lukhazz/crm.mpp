
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
						$rowForm = mysqli_fetch_row($dataForm);

						$g = 0;
						for ($i=0; $i <= 39; $i++) {
							$g++;
							$produktTemp = "produkt-".$g."[]";
							//echo "$produktTemp<br>";
							$product 		= explode("|", $row[$i]);
							$productForm 	= explode("|", $rowForm[$i]);
							if (!empty($product[0])) {
								for ($j=0; $j < 6; $j++) { 
									//echo $product1[$j];
									//echo $productTemp."<br>";
									switch ($j) {
									case '0':
										$prodNazevTemp = "valueP".$g."Nazev";
										${$prodNazevTemp} = "";
										if (!empty($productForm[0])) {
											${$prodNazevTemp} = "$productForm[0]";
										}
										else {
											${$prodNazevTemp} = "$product[0]";
										}
										//echo ${$prodNazevTemp}."<br>";
										break;
									case '1':
										$prodCenaTemp = "valueP".$g."Cena";
										${$prodCenaTemp} = "0";
										if (!empty($productForm[1])) {
											${$prodCenaTemp} = "$productForm[1]";
										}
										else {
											${$prodCenaTemp} = "$product[1]";
										}
										//echo ${$prodCenaTemp}."<br>";
										break;
									case '2':
										$prodCenaVocTemp = "valueP".$g."CenaVoc";
										${$prodCenaVocTemp} = "0";
										if (!empty($productForm[1])) {
											${$prodCenaVocTemp} = "$productForm[1]";
										}
										else {
											${$prodCenaVocTemp} = "$product[1]";
										}
										//echo ${$prodCenaVocTemp}."<br>";
										break;
									case '3':
										$prodPocTemp = "valueP".$g."Pocatek";
										${$prodPocTemp} = "0";
										if (!empty($productForm[2])) {
											${$prodPocTemp} = "$productForm[2]";
										}
										else {
											${$prodPocTemp} = "$product[2]";
										}
										//echo ${$prodPocTemp}."<br>";
										break;
									case '4':
										$prodKonecTemp = "valueP".$g."Konec";
										${$prodKonecTemp} = "0";
										if (!empty($productForm[3])) {
											${$prodKonecTemp} = "$productForm[3]";
										}
										else {
											${$prodKonecTemp} = "$product[3]";
										}
										//echo ${$prodKonecTemp}."<br>";
										break;
									case '5':
										$prodKusuTemp = "valueP".$g."Kusu";
										${$prodKusuTemp} = "0";
										if (!empty($productForm[4])) {
											${$prodKusuTemp} = "$productForm[4]";
										}
										else {
											${$prodKusuTemp} = "$product[4]";
										}
										//echo ${$prodKusuTemp}."<br>";
										break;
										default:
											$error = false;
											$messageError = "Neprovedla se funkce projíždějící produkty";
											break;
									}
								}

								echo "
							<tr>";?>
								<?php
									echo "
								<td class=\"bold\">";?><input type="text" name="<?php echo "$produktTemp"; ?>" id="<?php echo "$produktTemp"; ?>" value="<?php echo removeSqlShowChar(${$prodNazevTemp}); ?>" <?php //echo "$disabledProduct-1"; ?>><?php //echo "${$prodNazevTemp}";?></td> 
								<?php 
								if ($priceCompany[0]=='MOC') {
									if (!is_numeric(${$prodCenaTemp})) { ?><td><input type="number" step="any" placeholder="19.90" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodCenaTemp}"; ?>" <?php //echo "$disabledPrice-1"; ?> required="required">&nbsp;<?php echo $mena; ?></td>
									<?php
									}
									else { ?><td><input type="number" step="any" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodCenaTemp}"; ?>"><?php //echo ${$prodCenaTemp}?>&nbsp;<?php echo $mena; ?></td> 
									<?php } 
								}
								?>
								<?php
								if ($priceCompany[0]=='VOC') { 
								//else {
									if (!is_numeric(${$prodCenaVocTemp})) { ?><td><input type="number" step="any" placeholder="19.90" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodCenaVocTemp}"; ?>" <?php //echo "$disabledPrice-1"; ?> required="required">&nbsp;<?php echo $mena; ?></td>
									<?php
									}
									else { ?><td><input type="number" step="any" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodCenaVocTemp}"; ?>"><?php //echo ${$prodCenaVocTemp}?>&nbsp;<?php echo $mena; ?></td> 
									<?php }
								}
								?>
								<?php 
									if (!is_numeric(${$prodPocTemp})) { ?><td><input type="number" step="any" placeholder="0-9999" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodPocTemp}"; ?>" required="required">&nbsp;Ks</td>
									<?php
									}
									else { ?><td><input type="number" step="any" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodPocTemp}"; ?>"><?php //echo ${$prodPocTemp}?>&nbsp;Ks</td> 
									<?php }
								?>
								<?php 
									if (!is_numeric(${$prodKonecTemp})) { ?><td><input type="number" step="any" placeholder="0-9999" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodKonecTemp}"; ?>" required="required">&nbsp;Ks</td>
									<?php } else { ?><td><input type="number" step="any" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodKonecTemp}"; ?>"><?php //echo ${$prodKonecTemp}?>&nbsp;Ks</td> 
									<?php }
								?>
								<?php 
									if (!is_numeric(${$prodKusuTemp})) { ?><td><input type="number" step="any" placeholder="0-9999" class="w60 padding03 right" name="<?php echo "$produktTemp"; ?>" min="0" max="9999" value="<?php echo "${$prodKusuTemp}"; ?>" required="required">&nbsp;Ks</td><?php 
									} else { ?><td><input type="number" step="any" name="<?php echo "$produktTemp"; ?>" value="<?php echo "${$prodKusuTemp}"; ?>"><?php //echo ${$prodKusuTemp}?>&nbsp;Ks</td> 
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