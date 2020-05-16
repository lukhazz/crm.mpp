<?php 



 ?>


<table id="produkty">
						<caption>Produkty</caption>
						<thead>
							<tr>
								<th>Promované produkty</th>
								<th>Cena MOC</th>
								<th>Cena VOC</th>
								<th>Počáteční stav</th>
								<th>Konečný stav</th>
								<th>Prodaných kusů</th>
							</tr>
						</thead>
						<tbody>
							<tr class="<?php //echo "$hidden-1"; ?>">
								<td><input type="text" placeholder="Produkt 1" class="w96 padding03" name="produkt-1[]" id="produkt-1" value="<?php echo removeSqlShowChar($valueP1Nazev); ?>" <?php //echo "$disabledProduct-1"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-1[]" min="0" max="9999" value="<?php echo "$valueP1Cena"; ?>" <?php //echo "$disabledPrice-1"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-1[]" min="0" max="9999" value="<?php echo "$valueP1CenaVoc"; ?>" <?php //echo "$disabledPrice-1"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-1[]" min="0" max="9999" value="<?php echo "$valueP1Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-1[]" min="0" max="9999" value="<?php echo "$valueP1Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-1[]" min="0" max="9999" value="<?php echo "$valueP1Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-2"; ?>">
								<td><input type="text" placeholder="Produkt 2" class="w96 padding03" name="produkt-2[]" id="produkt-2" value="<?php echo removeSqlShowChar($valueP2Nazev); ?>" <?php //echo "$disabledProduct-2"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-2[]" min="0" max="9999" value="<?php echo "$valueP2Cena"; ?>" <?php //echo "$disabledPrice-2"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-2[]" min="0" max="9999" value="<?php echo "$valueP2CenaVoc"; ?>" <?php //echo "$disabledPrice-2"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-2[]" min="0" max="9999" value="<?php echo "$valueP2Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-2[]" min="0" max="9999" value="<?php echo "$valueP2Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-2[]" min="0" max="9999" value="<?php echo "$valueP2Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-3"; ?>">
								<td><input type="text" placeholder="Produkt 3" class="w96 padding03" name="produkt-3[]" id="produkt-3" value="<?php echo removeSqlShowChar($valueP3Nazev); ?>" <?php //echo "$disabledProduct-3"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-3[]" min="0" max="9999" value="<?php echo "$valueP3Cena"; ?>" <?php //echo "$disabledPrice-3"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-3[]" min="0" max="9999" value="<?php echo "$valueP3CenaVoc"; ?>" <?php //echo "$disabledPrice-3"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-3[]" min="0" max="9999" value="<?php echo "$valueP3Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-3[]" min="0" max="9999" value="<?php echo "$valueP3Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-3[]" min="0" max="9999" value="<?php echo "$valueP3Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-4"; ?>">
								<td><input type="text" placeholder="Produkt 4" class="w96 padding03" name="produkt-4[]" id="produkt-4" value="<?php echo removeSqlShowChar($valueP4Nazev); ?>" <?php //echo "$disabledProduct-4"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-4[]" min="0" max="9999" value="<?php echo "$valueP4Cena"; ?>" <?php //echo "$disabledPrice-4"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-4[]" min="0" max="9999" value="<?php echo "$valueP4CenaVoc"; ?>" <?php //echo "$disabledPrice-4"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-4[]" min="0" max="9999" value="<?php echo "$valueP4Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-4[]" min="0" max="9999" value="<?php echo "$valueP4Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-4[]" min="0" max="9999" value="<?php echo "$valueP4Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-5"; ?>">
								<td><input type="text" placeholder="Produkt 5" class="w96 padding03" name="produkt-5[]" id="produkt-5" value="<?php echo removeSqlShowChar($valueP5Nazev); ?>" <?php //echo "$disabledProduct-5"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-5[]" min="0" max="9999" value="<?php echo "$valueP5Cena"; ?>" <?php //echo "$disabledPrice-5"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-5[]" min="0" max="9999" value="<?php echo "$valueP5CenaVoc"; ?>" <?php //echo "$disabledPrice-5"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-5[]" min="0" max="9999" value="<?php echo "$valueP5Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-5[]" min="0" max="9999" value="<?php echo "$valueP5Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-5[]" min="0" max="9999" value="<?php echo "$valueP5Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-6"; ?>">
								<td><input type="text" placeholder="Produkt 6" class="w96 padding03" name="produkt-6[]" id="produkt-6" value="<?php echo removeSqlShowChar($valueP6Nazev); ?>" <?php //echo "$disabledProduct-6"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-6[]" min="0" max="9999" value="<?php echo "$valueP6Cena"; ?>" <?php //echo "$disabledPrice-6"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-6[]" min="0" max="9999" value="<?php echo "$valueP6CenaVoc"; ?>" <?php //echo "$disabledPrice-6"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-6[]" min="0" max="9999" value="<?php echo "$valueP6Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-6[]" min="0" max="9999" value="<?php echo "$valueP6Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-6[]" min="0" max="9999" value="<?php echo "$valueP6Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-7"; ?>">
								<td><input type="text" placeholder="Produkt 7" class="w96 padding03" name="produkt-7[]" id="produkt-7" value="<?php echo removeSqlShowChar($valueP7Nazev); ?>" <?php //echo "$disabledProduct-7"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-7[]" min="0" max="9999" value="<?php echo "$valueP7Cena"; ?>" <?php //echo "$disabledPrice-7"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-7[]" min="0" max="9999" value="<?php echo "$valueP7CenaVoc"; ?>" <?php //echo "$disabledPrice-7"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-7[]" min="0" max="9999" value="<?php echo "$valueP7Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-7[]" min="0" max="9999" value="<?php echo "$valueP7Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-7[]" min="0" max="9999" value="<?php echo "$valueP7Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-8"; ?>">
								<td><input type="text" placeholder="Produkt 8" class="w96 padding03" name="produkt-8[]" id="produkt-8" value="<?php echo removeSqlShowChar($valueP8Nazev); ?>" <?php //echo "$disabledProduct-8"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-8[]" min="0" max="9999" value="<?php echo "$valueP8Cena"; ?>" <?php //echo "$disabledPrice-8"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-8[]" min="0" max="9999" value="<?php echo "$valueP8CenaVoc"; ?>" <?php //echo "$disabledPrice-8"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-8[]" min="0" max="9999" value="<?php echo "$valueP8Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-8[]" min="0" max="9999" value="<?php echo "$valueP8Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-8[]" min="0" max="9999" value="<?php echo "$valueP8Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-9"; ?>">
								<td><input type="text" placeholder="Produkt 9" class="w96 padding03" name="produkt-9[]" id="produkt-9" value="<?php echo removeSqlShowChar($valueP9Nazev); ?>" <?php //echo "$disabledProduct-9"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-9[]" min="0" max="9999" value="<?php echo "$valueP9Cena"; ?>" <?php //echo "$disabledPrice-9"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-9[]" min="0" max="9999" value="<?php echo "$valueP9CenaVoc"; ?>" <?php //echo "$disabledPrice-9"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-9[]" min="0" max="9999" value="<?php echo "$valueP9Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-9[]" min="0" max="9999" value="<?php echo "$valueP9Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-9[]" min="0" max="9999" value="<?php echo "$valueP9Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-10"; ?>">
								<td><input type="text" placeholder="Produkt 10" class="w96 padding03" name="produkt-10[]" id="produkt-10" value="<?php echo removeSqlShowChar($valueP10Nazev); ?>" <?php //echo "$disabledProduct-10"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-10[]" min="0" max="9999" value="<?php echo "$valueP10Cena"; ?>" <?php //echo "$disabledPrice-10"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-10[]" min="0" max="9999" value="<?php echo "$valueP10CenaVoc"; ?>" <?php //echo "$disabledPrice-10"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-10[]" min="0" max="9999" value="<?php echo "$valueP10Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-10[]" min="0" max="9999" value="<?php echo "$valueP10Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-10[]" min="0" max="9999" value="<?php echo "$valueP10Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-11"; ?>">
								<td><input type="text" placeholder="Produkt 11" class="w96 padding03" name="produkt-11[]" id="produkt-11" value="<?php echo removeSqlShowChar($valueP11Nazev); ?>" <?php //echo "$disabledProduct-11"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-11[]" min="0" max="9999" value="<?php echo "$valueP11Cena"; ?>" <?php //echo "$disabledPrice-11"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-11[]" min="0" max="9999" value="<?php echo "$valueP11CenaVoc"; ?>" <?php //echo "$disabledPrice-11"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-11[]" min="0" max="9999" value="<?php echo "$valueP11Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-11[]" min="0" max="9999" value="<?php echo "$valueP11Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-11[]" min="0" max="9999" value="<?php echo "$valueP11Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-12"; ?>">
								<td><input type="text" placeholder="Produkt 12" class="w96 padding03" name="produkt-12[]" id="produkt-12" value="<?php echo removeSqlShowChar($valueP12Nazev); ?>" <?php //echo "$disabledProduct-12"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-12[]" min="0" max="9999" value="<?php echo "$valueP12Cena"; ?>" <?php //echo "$disabledPrice-12"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-12[]" min="0" max="9999" value="<?php echo "$valueP12CenaVoc"; ?>" <?php //echo "$disabledPrice-12"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-12[]" min="0" max="9999" value="<?php echo "$valueP12Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-12[]" min="0" max="9999" value="<?php echo "$valueP12Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-12[]" min="0" max="9999" value="<?php echo "$valueP12Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-13"; ?>">
								<td><input type="text" placeholder="Produkt 13" class="w96 padding03" name="produkt-13[]" id="produkt-13" value="<?php echo removeSqlShowChar($valueP13Nazev); ?>" <?php //echo "$disabledProduct-13"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-13[]" min="0" max="9999" value="<?php echo "$valueP13Cena"; ?>" <?php //echo "$disabledPrice-13"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-13[]" min="0" max="9999" value="<?php echo "$valueP13CenaVoc"; ?>" <?php //echo "$disabledPrice-13"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-13[]" min="0" max="9999" value="<?php echo "$valueP13Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-13[]" min="0" max="9999" value="<?php echo "$valueP13Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-13[]" min="0" max="9999" value="<?php echo "$valueP13Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-14"; ?>">
								<td><input type="text" placeholder="Produkt 14" class="w96 padding03" name="produkt-14[]" id="produkt-14" value="<?php echo removeSqlShowChar($valueP14Nazev); ?>" <?php //echo "$disabledProduct-14"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-14[]" min="0" max="9999" value="<?php echo "$valueP14Cena"; ?>" <?php //echo "$disabledPrice-14"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-14[]" min="0" max="9999" value="<?php echo "$valueP14CenaVoc"; ?>" <?php //echo "$disabledPrice-14"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-14[]" min="0" max="9999" value="<?php echo "$valueP14Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-14[]" min="0" max="9999" value="<?php echo "$valueP14Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-14[]" min="0" max="9999" value="<?php echo "$valueP14Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-15"; ?>">
								<td><input type="text" placeholder="Produkt 15" class="w96 padding03" name="produkt-15[]" id="produkt-15" value="<?php echo removeSqlShowChar($valueP15Nazev); ?>" <?php //echo "$disabledProduct-15"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-15[]" min="0" max="9999" value="<?php echo "$valueP15Cena"; ?>" <?php //echo "$disabledPrice-15"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-15[]" min="0" max="9999" value="<?php echo "$valueP15CenaVoc"; ?>" <?php //echo "$disabledPrice-15"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-15[]" min="0" max="9999" value="<?php echo "$valueP15Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-15[]" min="0" max="9999" value="<?php echo "$valueP15Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-15[]" min="0" max="9999" value="<?php echo "$valueP15Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-16"; ?>">
								<td><input type="text" placeholder="Produkt 16" class="w96 padding03" name="produkt-16[]" id="produkt-16" value="<?php echo removeSqlShowChar($valueP16Nazev); ?>" <?php //echo "$disabledProduct-16"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-16[]" min="0" max="9999" value="<?php echo "$valueP16Cena"; ?>" <?php //echo "$disabledPrice-16"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-16[]" min="0" max="9999" value="<?php echo "$valueP16CenaVoc"; ?>" <?php //echo "$disabledPrice-16"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-16[]" min="0" max="9999" value="<?php echo "$valueP16Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-16[]" min="0" max="9999" value="<?php echo "$valueP16Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-16[]" min="0" max="9999" value="<?php echo "$valueP16Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-17"; ?>">
								<td><input type="text" placeholder="Produkt 17" class="w96 padding03" name="produkt-17[]" id="produkt-17" value="<?php echo removeSqlShowChar($valueP17Nazev); ?>" <?php //echo "$disabledProduct-17"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-17[]" min="0" max="9999" value="<?php echo "$valueP17Cena"; ?>" <?php //echo "$disabledPrice-17"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-17[]" min="0" max="9999" value="<?php echo "$valueP17CenaVoc"; ?>" <?php //echo "$disabledPrice-17"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-17[]" min="0" max="9999" value="<?php echo "$valueP17Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-17[]" min="0" max="9999" value="<?php echo "$valueP17Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-17[]" min="0" max="9999" value="<?php echo "$valueP17Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-18"; ?>">
								<td><input type="text" placeholder="Produkt 18" class="w96 padding03" name="produkt-18[]" id="produkt-18" value="<?php echo removeSqlShowChar($valueP18Nazev); ?>" <?php //echo "$disabledProduct-18"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-18[]" min="0" max="9999" value="<?php echo "$valueP18Cena"; ?>" <?php //echo "$disabledPrice-18"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-18[]" min="0" max="9999" value="<?php echo "$valueP18CenaVoc"; ?>" <?php //echo "$disabledPrice-18"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-18[]" min="0" max="9999" value="<?php echo "$valueP18Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-18[]" min="0" max="9999" value="<?php echo "$valueP18Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-18[]" min="0" max="9999" value="<?php echo "$valueP18Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-19"; ?>">
								<td><input type="text" placeholder="Produkt 19" class="w96 padding03" name="produkt-19[]" id="produkt-19" value="<?php echo removeSqlShowChar($valueP19Nazev); ?>" <?php //echo "$disabledProduct-19"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-19[]" min="0" max="9999" value="<?php echo "$valueP19Cena"; ?>" <?php //echo "$disabledPrice-19"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-19[]" min="0" max="9999" value="<?php echo "$valueP19CenaVoc"; ?>" <?php //echo "$disabledPrice-19"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-19[]" min="0" max="9999" value="<?php echo "$valueP19Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-19[]" min="0" max="9999" value="<?php echo "$valueP19Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-19[]" min="0" max="9999" value="<?php echo "$valueP19Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-20"; ?>">
								<td><input type="text" placeholder="Produkt 20" class="w96 padding03" name="produkt-20[]" id="produkt-20" value="<?php echo removeSqlShowChar($valueP20Nazev); ?>" <?php //echo "$disabledProduct-20"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-20[]" min="0" max="9999" value="<?php echo "$valueP20Cena"; ?>" <?php //echo "$disabledPrice-20"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-20[]" min="0" max="9999" value="<?php echo "$valueP20CenaVoc"; ?>" <?php //echo "$disabledPrice-20"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-20[]" min="0" max="9999" value="<?php echo "$valueP20Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-20[]" min="0" max="9999" value="<?php echo "$valueP20Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-20[]" min="0" max="9999" value="<?php echo "$valueP20Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-1"; ?>">
								<td><input type="text" placeholder="Produkt 21" class="w96 padding03" name="produkt-21[]" id="produkt-21" value="<?php echo removeSqlShowChar($valueP21Nazev); ?>" <?php //echo "$disabledProduct-1"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-21[]" min="0" max="9999" value="<?php echo "$valueP21Cena"; ?>" <?php //echo "$disabledPrice-1"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-21[]" min="0" max="9999" value="<?php echo "$valueP21CenaVoc"; ?>" <?php //echo "$disabledPrice-1"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-21[]" min="0" max="9999" value="<?php echo "$valueP21Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-21[]" min="0" max="9999" value="<?php echo "$valueP21Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-21[]" min="0" max="9999" value="<?php echo "$valueP21Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-2"; ?>">
								<td><input type="text" placeholder="Produkt 22" class="w96 padding03" name="produkt-22[]" id="produkt-22" value="<?php echo removeSqlShowChar($valueP22Nazev); ?>" <?php //echo "$disabledProduct-2"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-22[]" min="0" max="9999" value="<?php echo "$valueP22Cena"; ?>" <?php //echo "$disabledPrice-2"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-22[]" min="0" max="9999" value="<?php echo "$valueP22CenaVoc"; ?>" <?php //echo "$disabledPrice-2"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-22[]" min="0" max="9999" value="<?php echo "$valueP22Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-22[]" min="0" max="9999" value="<?php echo "$valueP22Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-22[]" min="0" max="9999" value="<?php echo "$valueP22Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-3"; ?>">
								<td><input type="text" placeholder="Produkt 23" class="w96 padding03" name="produkt-23[]" id="produkt-23" value="<?php echo removeSqlShowChar($valueP23Nazev); ?>" <?php //echo "$disabledProduct-3"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-23[]" min="0" max="9999" value="<?php echo "$valueP23Cena"; ?>" <?php //echo "$disabledPrice-3"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-23[]" min="0" max="9999" value="<?php echo "$valueP23CenaVoc"; ?>" <?php //echo "$disabledPrice-3"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-23[]" min="0" max="9999" value="<?php echo "$valueP23Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-23[]" min="0" max="9999" value="<?php echo "$valueP23Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-23[]" min="0" max="9999" value="<?php echo "$valueP23Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-4"; ?>">
								<td><input type="text" placeholder="Produkt 24" class="w96 padding03" name="produkt-24[]" id="produkt-24" value="<?php echo removeSqlShowChar($valueP24Nazev); ?>" <?php //echo "$disabledProduct-4"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-24[]" min="0" max="9999" value="<?php echo "$valueP24Cena"; ?>" <?php //echo "$disabledPrice-4"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-24[]" min="0" max="9999" value="<?php echo "$valueP24CenaVoc"; ?>" <?php //echo "$disabledPrice-4"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-24[]" min="0" max="9999" value="<?php echo "$valueP24Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-24[]" min="0" max="9999" value="<?php echo "$valueP24Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-24[]" min="0" max="9999" value="<?php echo "$valueP24Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-5"; ?>">
								<td><input type="text" placeholder="Produkt 25" class="w96 padding03" name="produkt-25[]" id="produkt-25" value="<?php echo removeSqlShowChar($valueP25Nazev); ?>" <?php //echo "$disabledProduct-5"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-25[]" min="0" max="9999" value="<?php echo "$valueP25Cena"; ?>" <?php //echo "$disabledPrice-5"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-25[]" min="0" max="9999" value="<?php echo "$valueP25CenaVoc"; ?>" <?php //echo "$disabledPrice-5"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-25[]" min="0" max="9999" value="<?php echo "$valueP25Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-25[]" min="0" max="9999" value="<?php echo "$valueP25Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-25[]" min="0" max="9999" value="<?php echo "$valueP25Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-6"; ?>">
								<td><input type="text" placeholder="Produkt 26" class="w96 padding03" name="produkt-26[]" id="produkt-26" value="<?php echo removeSqlShowChar($valueP26Nazev); ?>" <?php //echo "$disabledProduct-6"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-26[]" min="0" max="9999" value="<?php echo "$valueP26Cena"; ?>" <?php //echo "$disabledPrice-6"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-26[]" min="0" max="9999" value="<?php echo "$valueP26CenaVoc"; ?>" <?php //echo "$disabledPrice-6"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-26[]" min="0" max="9999" value="<?php echo "$valueP26Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-26[]" min="0" max="9999" value="<?php echo "$valueP26Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-26[]" min="0" max="9999" value="<?php echo "$valueP26Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-7"; ?>">
								<td><input type="text" placeholder="Produkt 27" class="w96 padding03" name="produkt-27[]" id="produkt-27" value="<?php echo removeSqlShowChar($valueP27Nazev); ?>" <?php //echo "$disabledProduct-7"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-27[]" min="0" max="9999" value="<?php echo "$valueP27Cena"; ?>" <?php //echo "$disabledPrice-7"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-27[]" min="0" max="9999" value="<?php echo "$valueP27CenaVoc"; ?>" <?php //echo "$disabledPrice-7"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-27[]" min="0" max="9999" value="<?php echo "$valueP27Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-27[]" min="0" max="9999" value="<?php echo "$valueP27Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-27[]" min="0" max="9999" value="<?php echo "$valueP27Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-8"; ?>">
								<td><input type="text" placeholder="Produkt 28" class="w96 padding03" name="produkt-28[]" id="produkt-28" value="<?php echo removeSqlShowChar($valueP28Nazev); ?>" <?php //echo "$disabledProduct-8"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-28[]" min="0" max="9999" value="<?php echo "$valueP28Cena"; ?>" <?php //echo "$disabledPrice-8"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-28[]" min="0" max="9999" value="<?php echo "$valueP28CenaVoc"; ?>" <?php //echo "$disabledPrice-8"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-28[]" min="0" max="9999" value="<?php echo "$valueP28Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-28[]" min="0" max="9999" value="<?php echo "$valueP28Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-28[]" min="0" max="9999" value="<?php echo "$valueP28Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-9"; ?>">
								<td><input type="text" placeholder="Produkt 29" class="w96 padding03" name="produkt-29[]" id="produkt-29" value="<?php echo removeSqlShowChar($valueP29Nazev); ?>" <?php //echo "$disabledProduct-9"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-29[]" min="0" max="9999" value="<?php echo "$valueP29Cena"; ?>" <?php //echo "$disabledPrice-9"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-29[]" min="0" max="9999" value="<?php echo "$valueP29CenaVoc"; ?>" <?php //echo "$disabledPrice-9"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-29[]" min="0" max="9999" value="<?php echo "$valueP29Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-29[]" min="0" max="9999" value="<?php echo "$valueP29Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-29[]" min="0" max="9999" value="<?php echo "$valueP29Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-10"; ?>">
								<td><input type="text" placeholder="Produkt 30" class="w96 padding03" name="produkt-30[]" id="produkt-30" value="<?php echo removeSqlShowChar($valueP30Nazev); ?>" <?php //echo "$disabledProduct-10"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-30[]" min="0" max="9999" value="<?php echo "$valueP30Cena"; ?>" <?php //echo "$disabledPrice-10"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-30[]" min="0" max="9999" value="<?php echo "$valueP30CenaVoc"; ?>" <?php //echo "$disabledPrice-10"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-30[]" min="0" max="9999" value="<?php echo "$valueP30Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-30[]" min="0" max="9999" value="<?php echo "$valueP30Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-30[]" min="0" max="9999" value="<?php echo "$valueP30Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-11"; ?>">
								<td><input type="text" placeholder="Produkt 31" class="w96 padding03" name="produkt-31[]" id="produkt-31" value="<?php echo removeSqlShowChar($valueP31Nazev); ?>" <?php //echo "$disabledProduct-11"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-31[]" min="0" max="9999" value="<?php echo "$valueP31Cena"; ?>" <?php //echo "$disabledPrice-11"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-31[]" min="0" max="9999" value="<?php echo "$valueP31CenaVoc"; ?>" <?php //echo "$disabledPrice-11"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-31[]" min="0" max="9999" value="<?php echo "$valueP31Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-31[]" min="0" max="9999" value="<?php echo "$valueP31Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-31[]" min="0" max="9999" value="<?php echo "$valueP31Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-12"; ?>">
								<td><input type="text" placeholder="Produkt 32" class="w96 padding03" name="produkt-32[]" id="produkt-32" value="<?php echo removeSqlShowChar($valueP32Nazev); ?>" <?php //echo "$disabledProduct-12"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-32[]" min="0" max="9999" value="<?php echo "$valueP32Cena"; ?>" <?php //echo "$disabledPrice-12"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-32[]" min="0" max="9999" value="<?php echo "$valueP32CenaVoc"; ?>" <?php //echo "$disabledPrice-12"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-32[]" min="0" max="9999" value="<?php echo "$valueP32Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-32[]" min="0" max="9999" value="<?php echo "$valueP32Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-32[]" min="0" max="9999" value="<?php echo "$valueP32Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-13"; ?>">
								<td><input type="text" placeholder="Produkt 33" class="w96 padding03" name="produkt-33[]" id="produkt-33" value="<?php echo removeSqlShowChar($valueP33Nazev); ?>" <?php //echo "$disabledProduct-13"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-33[]" min="0" max="9999" value="<?php echo "$valueP33Cena"; ?>" <?php //echo "$disabledPrice-13"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-33[]" min="0" max="9999" value="<?php echo "$valueP33CenaVoc"; ?>" <?php //echo "$disabledPrice-13"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-33[]" min="0" max="9999" value="<?php echo "$valueP33Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-33[]" min="0" max="9999" value="<?php echo "$valueP33Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-33[]" min="0" max="9999" value="<?php echo "$valueP33Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-14"; ?>">
								<td><input type="text" placeholder="Produkt 34" class="w96 padding03" name="produkt-34[]" id="produkt-34" value="<?php echo removeSqlShowChar($valueP34Nazev); ?>" <?php //echo "$disabledProduct-14"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-34[]" min="0" max="9999" value="<?php echo "$valueP34Cena"; ?>" <?php //echo "$disabledPrice-14"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-34[]" min="0" max="9999" value="<?php echo "$valueP34CenaVoc"; ?>" <?php //echo "$disabledPrice-14"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-34[]" min="0" max="9999" value="<?php echo "$valueP34Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-34[]" min="0" max="9999" value="<?php echo "$valueP34Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-34[]" min="0" max="9999" value="<?php echo "$valueP34Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-15"; ?>">
								<td><input type="text" placeholder="Produkt 35" class="w96 padding03" name="produkt-35[]" id="produkt-35" value="<?php echo removeSqlShowChar($valueP35Nazev); ?>" <?php //echo "$disabledProduct-15"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-35[]" min="0" max="9999" value="<?php echo "$valueP35Cena"; ?>" <?php //echo "$disabledPrice-15"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-35[]" min="0" max="9999" value="<?php echo "$valueP35CenaVoc"; ?>" <?php //echo "$disabledPrice-15"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-35[]" min="0" max="9999" value="<?php echo "$valueP35Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-35[]" min="0" max="9999" value="<?php echo "$valueP35Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-35[]" min="0" max="9999" value="<?php echo "$valueP35Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-16"; ?>">
								<td><input type="text" placeholder="Produkt 36" class="w96 padding03" name="produkt-36[]" id="produkt-36" value="<?php echo removeSqlShowChar($valueP36Nazev); ?>" <?php //echo "$disabledProduct-16"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-36[]" min="0" max="9999" value="<?php echo "$valueP36Cena"; ?>" <?php //echo "$disabledPrice-16"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-36[]" min="0" max="9999" value="<?php echo "$valueP36CenaVoc"; ?>" <?php //echo "$disabledPrice-16"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-36[]" min="0" max="9999" value="<?php echo "$valueP36Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-36[]" min="0" max="9999" value="<?php echo "$valueP36Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-36[]" min="0" max="9999" value="<?php echo "$valueP36Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-17"; ?>">
								<td><input type="text" placeholder="Produkt 37" class="w96 padding03" name="produkt-37[]" id="produkt-37" value="<?php echo removeSqlShowChar($valueP37Nazev); ?>" <?php //echo "$disabledProduct-17"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-37[]" min="0" max="9999" value="<?php echo "$valueP37Cena"; ?>" <?php //echo "$disabledPrice-17"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-37[]" min="0" max="9999" value="<?php echo "$valueP37CenaVoc"; ?>" <?php //echo "$disabledPrice-17"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-37[]" min="0" max="9999" value="<?php echo "$valueP37Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-37[]" min="0" max="9999" value="<?php echo "$valueP37Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-37[]" min="0" max="9999" value="<?php echo "$valueP37Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-18"; ?>">
								<td><input type="text" placeholder="Produkt 38" class="w96 padding03" name="produkt-38[]" id="produkt-38" value="<?php echo removeSqlShowChar($valueP38Nazev); ?>" <?php //echo "$disabledProduct-18"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-38[]" min="0" max="9999" value="<?php echo "$valueP38Cena"; ?>" <?php //echo "$disabledPrice-18"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-38[]" min="0" max="9999" value="<?php echo "$valueP38CenaVoc"; ?>" <?php //echo "$disabledPrice-18"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-38[]" min="0" max="9999" value="<?php echo "$valueP38Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-38[]" min="0" max="9999" value="<?php echo "$valueP38Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-38[]" min="0" max="9999" value="<?php echo "$valueP38Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-19"; ?>">
								<td><input type="text" placeholder="Produkt 39" class="w96 padding03" name="produkt-39[]" id="produkt-39" value="<?php echo removeSqlShowChar($valueP39Nazev); ?>" <?php //echo "$disabledProduct-19"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-39[]" min="0" max="9999" value="<?php echo "$valueP39Cena"; ?>" <?php //echo "$disabledPrice-19"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-39[]" min="0" max="9999" value="<?php echo "$valueP39CenaVoc"; ?>" <?php //echo "$disabledPrice-19"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-39[]" min="0" max="9999" value="<?php echo "$valueP39Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-39[]" min="0" max="9999" value="<?php echo "$valueP39Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-39[]" min="0" max="9999" value="<?php echo "$valueP39Kusu"; ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-20"; ?>">
								<td><input type="text" placeholder="Produkt 40" class="w96 padding03" name="produkt-40[]" id="produkt-40" value="<?php echo removeSqlShowChar($valueP40Nazev); ?>" <?php //echo "$disabledProduct-20"; ?>></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-40[]" min="0" max="9999" value="<?php echo "$valueP40Cena"; ?>" <?php //echo "$disabledPrice-20"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="19.90" step="any" class="w60 padding03 right" name="produkt-40[]" min="0" max="9999" value="<?php echo "$valueP40CenaVoc"; ?>" <?php //echo "$disabledPrice-20"; ?>>&nbsp;<?php echo "$mena"; ?></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-40[]" min="0" max="9999" value="<?php echo "$valueP40Pocatek"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-40[]" min="0" max="9999" value="<?php echo "$valueP40Konec"; ?>">&nbsp;Ks</td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="produkt-40[]" min="0" max="9999" value="<?php echo "$valueP40Kusu"; ?>">&nbsp;Ks</td>
							</tr>
						</tbody>
					</table>