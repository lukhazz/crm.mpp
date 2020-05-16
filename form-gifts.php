<?php 



 ?>


<table id="darky">
						<caption>Rozdané dárky</caption>
						<thead>
							<tr>
								<th>Název dárku</th>
								<th>Počet rozdaných dárků</th>
							</tr>
						</thead>
						<tbody>
							<tr class="<?php //echo "$hidden-1"; ?>">
								<td><input type="text" placeholder="Dárek1" class="w96 padding03" name="darek-1[]" id="darek-1" value="<?php echo removeSqlShowChar($valueD1Nazev); ?>" <?php //echo "$disabledProduct-1"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-1[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD1Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-2"; ?>">
								<td><input type="text" placeholder="Dárek2" class="w96 padding03" name="darek-2[]" id="darek-2" value="<?php echo removeSqlShowChar($valueD2Nazev); ?>" <?php //echo "$disabledProduct-2"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-2[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD2Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-3"; ?>">
								<td><input type="text" placeholder="Dárek3" class="w96 padding03" name="darek-3[]" id="darek-3" value="<?php echo removeSqlShowChar($valueD3Nazev); ?>" <?php //echo "$disabledProduct-3"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-3[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD3Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-4"; ?>">
								<td><input type="text" placeholder="Dárek4" class="w96 padding03" name="darek-4[]" id="darek-4" value="<?php echo removeSqlShowChar($valueD4Nazev); ?>" <?php //echo "$disabledProduct-4"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-4[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD4Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-5"; ?>">
								<td><input type="text" placeholder="Dárek5" class="w96 padding03" name="darek-5[]" id="darek-5" value="<?php echo removeSqlShowChar($valueD5Nazev); ?>" <?php //echo "$disabledProduct-5"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-5[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD5Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-6"; ?>">
								<td><input type="text" placeholder="Dárek6" class="w96 padding03" name="darek-6[]" id="darek-6" value="<?php echo removeSqlShowChar($valueD6Nazev); ?>" <?php //echo "$disabledProduct-6"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-6[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD6Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-7"; ?>">
								<td><input type="text" placeholder="Dárek7" class="w96 padding03" name="darek-7[]" id="darek-7" value="<?php echo removeSqlShowChar($valueD7Nazev); ?>" <?php //echo "$disabledProduct-7"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-7[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD7Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-8"; ?>">
								<td><input type="text" placeholder="Dárek8" class="w96 padding03" name="darek-8[]" id="darek-8" value="<?php echo removeSqlShowChar($valueD8Nazev); ?>" <?php //echo "$disabledProduct-8"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-8[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD8Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-9"; ?>">
								<td><input type="text" placeholder="Dárek9" class="w96 padding03" name="darek-9[]" id="darek-9" value="<?php echo removeSqlShowChar($valueD9Nazev); ?>" <?php //echo "$disabledProduct-9"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-9[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD9Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-10"; ?>">
								<td><input type="text" placeholder="Dárek10" class="w96 padding03" name="darek-10[]" id="darek-10" value="<?php echo removeSqlShowChar($valueD10Nazev); ?>" <?php //echo "$disabledProduct-10"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-10[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD10Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-11"; ?>">
								<td><input type="text" placeholder="Dárek11" class="w96 padding03" name="darek-11[]" id="darek-11" value="<?php echo removeSqlShowChar($valueD11Nazev); ?>" <?php //echo "$disabledProduct-11"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-11[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD11Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-12"; ?>">
								<td><input type="text" placeholder="Dárek12" class="w96 padding03" name="darek-12[]" id="darek-12" value="<?php echo removeSqlShowChar($valueD12Nazev); ?>" <?php //echo "$disabledProduct-12"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-12[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD12Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-13"; ?>">
								<td><input type="text" placeholder="Dárek13" class="w96 padding03" name="darek-13[]" id="darek-13" value="<?php echo removeSqlShowChar($valueD13Nazev); ?>" <?php //echo "$disabledProduct-13"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-13[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD13Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-14"; ?>">
								<td><input type="text" placeholder="Dárek14" class="w96 padding03" name="darek-14[]" id="darek-14" value="<?php echo removeSqlShowChar($valueD14Nazev); ?>" <?php //echo "$disabledProduct-14"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-14[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD14Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-15"; ?>">
								<td><input type="text" placeholder="Dárek15" class="w96 padding03" name="darek-15[]" id="darek-15" value="<?php echo removeSqlShowChar($valueD15Nazev); ?>" <?php //echo "$disabledProduct-15"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-15[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD15Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-16"; ?>">
								<td><input type="text" placeholder="Dárek16" class="w96 padding03" name="darek-16[]" id="darek-16" value="<?php echo removeSqlShowChar($valueD16Nazev); ?>" <?php //echo "$disabledProduct-16"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-16[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD16Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-17"; ?>">
								<td><input type="text" placeholder="Dárek17" class="w96 padding03" name="darek-17[]" id="darek-17" value="<?php echo removeSqlShowChar($valueD17Nazev); ?>" <?php //echo "$disabledProduct-17"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-17[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD17Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-18"; ?>">
								<td><input type="text" placeholder="Dárek18" class="w96 padding03" name="darek-18[]" id="darek-18" value="<?php echo removeSqlShowChar($valueD18Nazev); ?>" <?php //echo "$disabledProduct-18"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-18[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD18Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-19"; ?>">
								<td><input type="text" placeholder="Dárek19" class="w96 padding03" name="darek-19[]" id="darek-19" value="<?php echo removeSqlShowChar($valueD19Nazev); ?>" <?php //echo "$disabledProduct-19"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-19[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD19Kusu); ?>">&nbsp;Ks</td>
							</tr>
							<tr class="<?php //echo "$hidden-20"; ?>">
								<td><input type="text" placeholder="Dárek20" class="w96 padding03" name="darek-20[]" id="darek-20" value="<?php echo removeSqlShowChar($valueD20Nazev); ?>" <?php //echo "$disabledProduct-20"; ?>></td>
								<td><input type="number" placeholder="0-9999" class="w60 padding03 right" name="darek-20[]" min="0" max="9999" value="<?php echo removeSqlShowChar($valueD20Kusu); ?>">&nbsp;Ks</td>
							</tr>
						</tbody>
					</table>