					<table id="produkty-neprom">
						<caption>Ostatní nepromované produkty</caption>
						<thead>
							<tr>
								<th>Prodané nepromované produkty</th>
								<th>Počet kusů celkem</th>
								<th>Cena celkem</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><textarea name="others-summary" rows="2" class="w98" placeholder="Vypište prosím prodané nepromované produkty" required="required"><?php echo removeSqlShowChar($othersSummary); ?></textarea></td>
								<td><input type="number" step="any" placeholder="50" class="w60 padding03 right" name="others-ks" min="0" max="999" value="<?php echo "$othersKs"; ?>">&nbsp;Ks</td>
								<td><input type="number" step="any" placeholder="5000" class="w60 padding03 right" name="others-price" min="0" max="99999" value="<?php echo "$othersKc"; ?>">&nbsp;<?php echo $mena; ?></td>					
							</tr>
						</tbody>
					</table>
					<table id="darky-zakaznici">
						<caption>Oslovení zákaznící a vydané dárky</caption>
						<thead>
							<tr>
								<th>Počet oslovených zákazníků</th>
								<th>Počet vydaných dárků celkem</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="number" step="any" placeholder="100" class="w60 padding03 right" name="customer" min="0" max="999" value="<?php echo "$customer"; ?>">&nbsp;</td>
								<td><input type="number" step="any" placeholder="10" class="w60 padding03 right" name="gift" min="0" max="99999" value="<?php echo "$gift"; ?>">&nbsp;Ks</td>					
							</tr>
						</tbody>
					</table>		