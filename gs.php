
						<fieldset>
							<legend>pouze u GS:</legend>
							<div class="flex flex-row">
								<div class="flex-item" id="skoleni">
									<h3>Proškolený promotér</h3>
									<input type="radio" <?php if ($skoleni == "ano") { echo "checked=\"checked\""; } ?> name="skoleni" value="ano" id="skoleni-ano"><label for="skoleni-ano" class="check">Ano</label>	
									<input type="radio" <?php if ($skoleni == "ne") { echo "checked=\"checked\""; } ?> name="skoleni" value="ne" id="skoleni-ne"><label for="skoleni-ne" class="check">Ne</label>
								</div>
								<div class="flex-item" id="top-lekarna">
									<h3>Top lékárna</h3>
									<input type="radio" <?php if ($topLekarna == "ano") { echo "checked=\"checked\""; } ?> name="top-lekarna" value="ano" id="top-lekarna-ano"><label for="top-lekarna-ano" class="check">Ano</label>	
									<input type="radio" <?php if ($topLekarna == "ne") { echo "checked=\"checked\""; } ?> name="top-lekarna" value="ne" id="top-lekarna-ne"><label for="top-lekarna-ne" class="check">Ne</label>
								</div>
								<div class="flex-item">
									<h3>SUKL</h3>
									<input type="text" name="sukl" id="sukl" placeholder="123456" value="<?php echo "$sukl"; ?>">
								</div>
								<div class="flex-item">
									<h3>ID GS</h3>
									<input type="text" name="id_gs" id="id_gs" placeholder="123456" value="<?php echo "$idGs"; ?>">
								</div>
							</div>
						</fieldset>