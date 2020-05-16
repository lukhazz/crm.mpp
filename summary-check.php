<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">
	<div class="flex space">
		<div class="col-1">
			<div id="company">
				<?php echo ""; ?>
				<select name="company" id="company" required="required" class="per100">
					<option value="" selected disabled>Vybrat klientskou firmu</option><?php
						
						$sql = "SELECT id_company, nazev
								FROM company
								WHERE ( nazev LIKE '%".$last_year."%' OR nazev LIKE '%".$current_year."%' ) AND aktivni = 'ano'
								ORDER BY nazev";
						$conn = dbConnect();
						mysqli_query($conn, "SET NAMES utf8");

						$dataInputs = mysqli_query($conn, $sql);
						while($radek = mysqli_fetch_row($dataInputs)) {
							$i=0;
							if ($radek%3==1) {
								//if ($radek[$i=0] == $company) {
								//	$status ="available";
								//}
								//for($i=0;$i<count($radek);$i++) {
									//$i=0;
								//echo $radek[$i];
								echo "
					<option value=\"$radek[$i]\" ";?><?php echo ">".$radek[$i+1]." (".	$radek[$i].")</option>";
								//}
							}
							$status ="";
						}

					?>

				</select>
				
			</div>
				<h3>Vyberte stát, který chcete vyfiltrovat</h3>
				<div>
					<input type="radio" <?php if ($userStat == "vse") { echo "checked=\"checked\""; } ?> name="stat" value="vse" id="vse"><label for="vse" class="check-2">Všechny</label>
					<input type="radio" <?php if ($userStat == "cz") { echo "checked=\"checked\""; } ?> name="stat" value="cz" id="cz" required><label for="cz" class="check-2">Česko</label>
					<input type="radio" <?php if ($userStat == "sk") { echo "checked=\"checked\""; } ?> name="stat" value="sk" id="sk"><label for="sk" class="check-2">Slovensko</label>
				</div>
				<br>
			
			<div id="date"><?php $from = mktime(0, 0, 0, date("m")-3, date("d"),   date("Y")); ?><br>
				Období od: <input type="text" name="date-from" class="datepicker-today" value="<?php if ( !empty ( $dateFrom) ) { echo $dateFrom; } else { echo date("Y-m-d", $from); } ?>">&nbsp;&nbsp;do:&nbsp;<input type="text" name="date-to" class="datepicker-today" value="<?php if ( !empty ($dateTo) ) { echo $dateTo; } else { echo date("Y-m-d"); } ?>"><br>
			</div>

			<div >
				<h3>Vyberte, zda je akce již vyplněna</h3>
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
			</div>

			<h3>Seřadit podle</h3>
			<div class="flex">
				<select name="sort-by" id="sort-by" required="required" class="per100">
					<option value="actions.odeslano">Datum splnění</option>
					<option value="pharmacy.vdl">VDL</option>
					<option value="actions.id_gs">ID GS</option>
					<option value="actions.sukl">SUKL</option>
					<option value="actions.skoleni">Školení</option>
					<option value="actions.top_lekarna">Top lékárna</option>
					<option value="pharmacy.nazev">Lékárna</option>>
					<option value="tradesman.prijmeni">Reprezentant</option>
					<option value="tradesman.telefon">Telefon reprezentanta</option>
					<option value="pharmacy.ulice">Ulice</option>
					<option value="pharmacy.mesto">Město</option>
					<option value="pharmacy.okres">Obec</option>
					<option value="pharmacy.retezec">Řetězec</option>
					<option value="actions.datum" selected="select">Datum akce</option>
					<option value="actions.cas">Pracovní doba s pauzou</option>
					<option value="actions.poc_hodin">Počet hodin bez pauzy</option>
					<option value="actions.pauza">Čas pauzy</option>
					<option value="users.prijmeni">Promotérka</option>
					<option value="users.telefon">Telefon promotérky</option>
					<option value="users.prijmeni">Koordinátor</option>
					<option value="users.telefon">Telefon koordinátora</option>
					<option value="actions.splneno">Počet akcí</option>
					<option value="actions.schvaleno">Schváleno</option>
					<option value="actions.cil">Minimum pro dosažení motivace v korunách</option>
					<option value="actions.cil_ks">Minimum pro dosažení motivace v kusech</option>
					<option value="actions.celkem_trzba">Celková tržba</option>
					<option value="actions.celkem_kusu">Celkový počet prodaných produktů (promované i nepromované)</option>
					<option value="actions.celkem_zakazniku">Počet oslovených zákazníků</option>
					<option value="actions.bonus">Motivace promotérky</option>
					<option value="actions.celkem_darku">Počet vydaných dárků</option>
				</select>

				<select name="sort" id="sort" required="required" class="per100">
					<option value="ASC" selected="select">Vzestupně</option>
					<option value="DESC">Sestupně</option>
				</select>

			</div>
			<br>

			<div>
				<label for="id">ID akce</label><input type="text" name="id" id="id" value="<?php if(!empty($valueid)){ echo "$valueid"; }?>">
				<label for="nazev">Lékárna</label><input type="text" name="nazev" id="nazev" value="<?php if(!empty($valuenazev)){ echo "$valuenazev"; }?>">
				<label for="ulice">Ulice</label><input type="text" name="ulice" id="ulice" value="<?php if(!empty($valueulice)){ echo "$valueulice"; } ?>">	
				<label for="mesto">Město</label><input type="text" name="mesto" id="mesto" value="<?php if(!empty($valuemesto)){ echo "$valuemesto"; } ?>">	
				<label for="okres">Obec</label><input type="text" name="okres" id="okres" value="<?php if(!empty($valueokres)){ echo "$valueokres"; } ?>">
				<label for="retezec">Řetězec</label><input type="text" name="retezec" id="retezec" value="<?php if(!empty($valueretezec)){ echo "$valueretezec"; } ?>">
				<label for="rating">Rating</label><input type="text" name="rating" id="rating" value="<?php if(!empty($valuerating)){ echo "$valuerating"; } ?>">
				<label for="vdl">VDL</label><input type="text" name="vdl" id="vdl" value="<?php if(!empty($valuevdl)){ echo "$valuevdl"; } ?>">
				<label for="kontakt">Kont. osoba</label><input type="text" name="kontakt" id="kontakt" value="<?php if(!empty($valuekontakt)){ echo "$valuekontakt"; } ?>" >
				<label for="kontakt">Reprezentant</label><input type="text" name="reprezentant" id="reprezentant" value="<?php if(!empty($valuereprezentant)){ echo "$valuereprezentant"; } ?>" >
			</div>

			<br>
			

			<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>
			<input type="submit" class="per100" name="submit" id="submit" value="Vygenerovat"><br><br>
			<!--<input type="button" class="per100" onclick="tableToExcel('summary', 'MPP')" value="Export do Excelu">-->
			<?php //echo get_browser_name($_SERVER['HTTP_USER_AGENT']); ?>
			<?php 
				if (get_browser_name($_SERVER['HTTP_USER_AGENT'])=="Firefox") {
					?>
					<input type="button" class="per100" onclick="tableToExcel('summary', 'Prodeje')" value="Export do Excelu">
					<?php
				}
				else {
					?>
					<a download="<?php echo date("ymd"); ?>_MPP_prodeje.xls" href="#" onclick="return ExcellentExport.excel(this, 'summary', 'Prodeje');"><input type="button" class="per100 black" value="Export do Excelu"></a><br>
					<?php
				}
			 ?>
		</div>
		<div class="column-space"></div>
		<!--<div><h3>Vyberte sloupce</h3>-->

		<div class="col-3">
			<select name="users-koo[]" id="users-koo" class="multiple-koo" multiple>
				<option value="" selected disabled>Vybrat koordinátora</option><?php 
					$i = 0; $status = "";
					$position1 = "Koordinátor";
					$sql = "SELECT id_user, jmeno, prijmeni
							FROM users
							WHERE pozice='$position1' AND aktivni='ano'
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

			<select name="users[]" id="users" class="multiple-koo" multiple>
				<option value="" selected disabled>Vybrat promotéra</option><?php

					$sql = "SELECT id_user, jmeno, prijmeni
							FROM users
							WHERE id_user > 0 AND aktivni='ano' AND ( pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní' )
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

			<select name="choose[]" class="select-summary" multiple>
				<option value="edit">Editace</option>
				<option value="odeslano">Datum splnění</option>
				<option value="vdl" selected="select">VDL</option>
				<option value="id-gs">ID GS</option>
				<option value="sukl">SUKL</option>
				<option value="skoleni">Školení</option>
				<option value="top-lekarna">Top lékárna</option>
				<option value="tradesman-prijmeni" selected="select">Reprezentant</option>
				<option value="tradesman-telefon">Telefon reprezentanta</option>
				<option value="pharmacy" selected="select">Lékárna</option>
				<option value="ulice" selected="select">Ulice</option>
				<option value="mesto" selected="select">Město</option>
				<option value="okres" selected="select">Obec</option>
				<option value="retezec" selected="select">Řetězec</option>
				<option value="datum-akce" selected="select">Datum akce</option>
				<option value="pracovni-doba" selected="select">Pracovní doba s pauzou</option>
				<option value="pocet-hodin" selected="select">Počet hodin bez pauzy</option>
				<option value="pauza" selected="select">Čas pauzy</option>
				<option value="promo" selected="select">Promotérka</option>
				<option value="koo" selected="select">Koordinátor</option>
				<option value="filled" selected="select">Počet akcí</option>
				<option value="schvaleno">Schváleno</option>
				<option value="min-kc" selected="select">Minimum pro dosažení motivace v korunách</option>
				<option value="min-ks" selected="select">Minimum pro dosažení motivace v kusech</option>
				<option value="trzba" selected="select">Celková tržba</option>
				<option value="celkem-kusu" selected="select">Celkový počet prodaných produktů (promované i nepromované)</option>
				<option value="pocet-oslovenych" selected="select">Počet oslovených zákazníků</option>
				<option value="vyplata">Základní mzda promotérky</option>
				<option value="bonus" selected="select">Motivace promotérky</option>
				<option value="pocet-darku" selected="select">Dárky</option>
				<option value="poznamky" selected="select">Poznámky k akci</option>
				<option value="photo" selected="select">Fotografie</option>
				<option value="produkty" selected="select">Produkty</option>
			</select>
		</div>
		<!--</div>-->
	</div>
</form>
<?php //if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';		} ?>
<?php if (!empty($messageError))   { echo '
						<div class="message-error">'.$messageError.'</div>';	}	 ?>

