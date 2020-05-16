<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">
						<div>
							<h3 class="mar-top-0">Vyberte stát, který chcete vyfiltrovat</h3>
							
							<input type="radio" <?php if ($userStat == "vse") { echo "checked=\"checked\""; } ?> name="stat" value="vse" id="vse"><label for="vse" class="check-2">Všechny</label>	
							<input type="radio" <?php if ($userStat == "cz") { echo "checked=\"checked\""; } ?> name="stat" value="cz" id="cz"><label for="cz" class="check-2">Česko</label>
							<input type="radio" <?php if ($userStat == "sk") { echo "checked=\"checked\""; } ?> name="stat" value="sk" id="sk"><label for="sk" class="check-2">Slovensko</label>
						</div><br><br>

						<div class="flex space">

						
							<div>
								<label for="nazev">Název</label><input type="text" name="nazev" id="nazev" value="<?php if(!empty($valuenazev)){ echo "$valuenazev"; }?>">
								<label for="okres">Okres</label><input type="text" name="okres" id="okres" value="<?php if(!empty($valueokres)){ echo "$valueokres"; } ?>">
								<label for="vdl">VDL</label><input type="text" name="vdl" id="vdl" value="<?php if(!empty($valuevdl)){ echo "$valuevdl"; } ?>">
								<label for="kontakt">Kontaktní osoby</label><input type="text" name="kontakt" id="kontakt" value="<?php if(!empty($valuekontakt)){ echo "$valuekontakt"; } ?>" >
							</div>
							<div>
								<label for="retezec">Řetězec</label><input type="text" name="retezec" id="retezec" value="<?php if(!empty($valueretezec)){ echo "$valueretezec"; } ?>">
								<label for="mesto">Město</label><input type="text" name="mesto" id="mesto" value="<?php if(!empty($valuemesto)){ echo "$valuemesto"; } ?>">	
								<label for="rating">Rating</label><input type="text" name="rating" id="rating" value="<?php if(!empty($valuerating)){ echo "$valuerating"; } ?>">
								<label for="phone">Telefon</label><input type="text" name="phone" id="phone" value="<?php if(!empty($valuephone)){ echo "$valuephone"; } ?>">
							</div>
						</div><br>
						<h3>Seřadit podle</h3>
						<div class="flex">
							<select name="sort-by" id="sort-by" required="required" class="per100">
								<option value="vdl">VDL</option>
								<option value="rating">Rating</option>
								<option value="retezec">Řetězec</option>
								<option value="nazev" selected="select">Název</option>
								<option value="ulice">Ulice</option>
								<option value="mesto">Město</option>
								<option value="okres">Okres</option>
								<option value="stat">Stát</option>
								<option value="k_jmeno">Kontaktní osoba</option>
								<option value="k_cislo">Telefon</option>
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

						<input type="submit" class="per100" name="submit" id="submit" value="Vygenerovat"><br><br>
						<?php 
							if (get_browser_name($_SERVER['HTTP_USER_AGENT'])=="Firefox") {
								?>
								<input type="button" class="per100" onclick="tableToExcel('pharmacy', 'Lékárny')" value="Export do Excelu">
								<?php
							}
							else {
								?>
								<a download="<?php echo date("ymd"); ?>_MPP_lekarny.xls" href="#" onclick="return ExcellentExport.excel(this, 'pharmacy', 'Lékárny');"><input type="button" class="per100 black" value="Export do Excelu"></a><br>
								<?php
							}
						 ?>
					</form>