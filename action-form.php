<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">
						<div class="flex space">
							<div class="per50">
								<h3 class="mar-top-0">Vyberte stát, který chcete vyfiltrovat</h3>
									<div>
										<input type="radio" <?php if ($userStat == "vse") { echo "checked=\"checked\""; } ?> name="stat" value="vse" id="vse"><label for="vse" class="check-2">Všechny</label>	
										<input type="radio" <?php if ($userStat == "cz") { echo "checked=\"checked\""; } ?> name="stat" value="cz" id="cz"><label for="cz" class="check-2">Česko</label>
										<input type="radio" <?php if ($userStat == "sk") { echo "checked=\"checked\""; } ?> name="stat" value="sk" id="sk"><label for="sk" class="check-2">Slovensko</label>
									</div>
								<br>
								<br>
								<label for="id_form">ID akce</label><input type="text" name="id_form" id="id_form" value="<?php if(!empty($valueid)){ echo "$valueid"; } ?>">
								<!--<label for="company-nazev">Název firmy</label><input type="text" name="company-nazev" id="company-nazev" value="<?php //if(!empty($valuenazevfirmy)){ echo "$valuenazevfirmy"; }?>">-->
								<label for="nazev">Název lékárny</label><input type="text" name="nazev" id="nazev" value="<?php if(!empty($valuenazev)){ echo "$valuenazev"; }?>">
								<!--<label for="promo">Promotér</label><input type="text" name="promo" id="promo" value="<?php if(!empty($valuepromo)){ echo "$valuepromo"; } ?>"> -->
								<label for="okres">Okres</label><input type="text" name="okres" id="okres" value="<?php if(!empty($valueokres)){ echo "$valueokres"; } ?>">	
								<!--<label for="produkty">Produkty</label><input type="text" name="produkty" id="produkty" value="<?php //if(!empty($valueprodukty)){ echo "$valueprodukty"; } ?>">-->

								
								<div id="date"><?php $from = mktime(0, 0, 0, date("m")-3, date("d"),   date("Y")); $to = mktime(0, 0, 0, date("m")+1, date("d"),   date("Y")); ?>
									<h3>Datum vytvoření</h3>od: <input type="text" name="date-from" class="datepicker-today" value="<?php if ( !empty ( $dateFrom) ) { echo $dateFrom; } else { echo date("Y-m-d", $from); } ?>">&nbsp;&nbsp;&nbsp;do: <input type="text" name="date-to" class="datepicker-today" value="<?php if ( !empty ($dateTo) ) { echo $dateTo; } else { echo date("Y-m-d", $to); } ?>"><br>
								</div>
								<br>


								<h3 class="mar-top-0">Vyberte, zda je akce již vyplněna</h3>
								<div>
									<input type="radio" checked="checked" <?php //if ($valuePriceType == "dohoda") { echo "checked=\"checked\""; } ?> name="filled" value="splneno-vse" id="splneno-vse"><label for="splneno-vse" class="check-2">Splněno i&nbsp;nesplněno</label>	
									<input type="radio" <?php //if ($valuePriceType == "ico") { echo "checked=\"checked\""; } ?> name="filled" value="splneno-ano" id="splneno-ano"><label for="splneno-ano" class="check-2">Splněno</label>
									<input type="radio" <?php //if ($valuePriceType == "ico") { echo "checked=\"checked\""; } ?> name="filled" value="splneno-ne" id="splneno-ne"><label for="splneno-ne" class="check-2">Nesplněno</label>
								</div>
								<br><br>
								<h3>Vyberte, zda je akce již odkontrolována a schválena</h3>
								<div>
									<input type="radio" checked="checked" <?php //if ($valuePriceType == "dohoda") { echo "checked=\"checked\""; } ?> name="approved" value="schvaleno-vse" id="schvaleno-vse"><label for="schvaleno-vse" class="check-2">Schváleno i&nbsp;neschváleno</label>	
									<input type="radio" <?php //if ($valuePriceType == "ico") { echo "checked=\"checked\""; } ?> name="approved" value="schvaleno-ano" id="schvaleno-ano"><label for="schvaleno-ano" class="check-2">Schváleno</label>
									<input type="radio" <?php //if ($valuePriceType == "ico") { echo "checked=\"checked\""; } ?> name="approved" value="schvaleno-ne" id="schvaleno-ne"><label for="schvaleno-ne" class="check-2">Neschváleno</label>
								</div>
								<br><br>
								
								<h3>Seřadit podle</h3>
								<div class="flex">
									<select name="sort-by" id="sort-by" required="required" class="per100">
										<option value="actions.datum" selected="select">Datum akce</option>
										<option value="dat_vytvoreni">Datum vytvoření</option>
										<option value="actions.id_action">ID</option>
										<option value="nazev_formulare">Název</option>
										<option value="splneno">Splněno</option>
										<option value="schvaleno">Schváleno</option>
									</select>

									<select name="sort" id="sort" required="required" class="per100">
										<option value="ASC" selected="select">Vzestupně</option>
										<option value="DESC">Sestupně</option>
									</select>
		 
								</div>

								<h3>Počet záznamů</h3>
								<select name="limit" id="limit" required="required" class="per15">
									<option value="1">1</option>
									<option value="10">10</option>
									<option value="25">25</option>
									<option value="50" selected="select">50</option>
									<option value="100">100</option>
									<option value="500">500</option>
									<option value="1000">1000</option>
									<option value="999999">Všechny</option>
								</select>

								<br>
								<br>
							</div>
							<div class="per50">

								<select name="company[]" id="company" class="multiple-koo-action" multiple>
									<option value="" selected disabled>Vybrat firmu <?php echo "$current_year"; ?></option><?php 
										$i = 0; $status = "";
										$position1 = "Koordinátor";
										$sql = "SELECT id_company, nazev
												FROM company
												WHERE ( nazev LIKE '%$current_year%' ) AND aktivni = 'ano'
												ORDER BY nazev";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												//if ($radek[$i] == $usersKoo) {
												//	$status ="available";
												//}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+1]." (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}
	
									?>
	
								</select>
								<select name="company[]" id="company" class="multiple-koo-action" multiple>
									<option value="" selected disabled>Vybrat starší firmu než <?php echo "$current_year"; ?></option><?php 
										$i = 0; $status = "";
										$position1 = "Koordinátor";
										$sql = "SELECT id_company, nazev
												FROM company
												WHERE nazev NOT LIKE '%$current_year%'
												ORDER BY nazev";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												//if ($radek[$i] == $usersKoo) {
												//	$status ="available";
												//}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+1]." (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}
	
									?>
	
								</select>

								<select name="users-koo[]" id="users-koo" class="multiple-koo-action" multiple>
									<option value="" selected disabled>Vybrat koordinátora</option><?php 
										$i = 0; $status = "";
										$position1 = "Koordinátor";
										$sql = "SELECT id_user, jmeno, prijmeni
												FROM users
												WHERE pozice='$position1' 
												ORDER BY prijmeni";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												//if ($radek[$i] == $usersKoo) {
												//	$status ="available";
												//}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+2]."	 ".$radek[$i+1]." (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}
	
									?>
	
								</select>
								<select name="users[]" id="users" class="multiple-koo-action" multiple>
									<option value="" selected disabled>Vybrat promotéra</option><?php

										$sql = "SELECT id_user, jmeno, prijmeni
												FROM users
												WHERE id_user > 0 AND pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní' AND aktivni='ano'
												ORDER BY prijmeni";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");

										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												if ($radek[$i] == $users) {
													$status ="available";
												}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+2]."	 ".$radek[$i+1]." (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}

									?>

								</select>
								
						
							</div>
						</div>

						
						
						

						<input type="submit" class="per100" name="submit" id="submit" value="Vygenerovat"><br><br>
						<?php 
							if (get_browser_name($_SERVER['HTTP_USER_AGENT'])=="Firefox") {
								?>
								<input type="button" class="per100" onclick="tableToExcel('pharmacy', 'Akce')" value="Export do Excelu">
								<?php
							}
							else {
								?>
								<a download="<?php echo date("ymd"); ?>_MPP_akce.xls" href="#" onclick="return ExcellentExport.excel(this, 'pharmacy', 'Akce');"><input type="button" class="per100 black" value="Export do Excelu"></a><br>
								<?php
							}
						 ?>
					</form>