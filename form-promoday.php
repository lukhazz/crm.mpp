<table id="zapis">
						<caption>Zápis z promodne</caption>
						<thead>
							<tr>
								<th>Otázka pro promotéra</th>
								<th><?php echo removeSqlShowChar($odpoved); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic1); ?></div><textarea name="otazka-1[]" id="otazka-1[]" rows="2" class="w98 <?php //echo "$promoHidden1"; ?>" placeholder="<?php //echo "$placeholderQuestion1"; ?>" "><?php echo removeSqlShowChar($promoQuestion1); ?></textarea></td>
								<td><textarea name="otazka-1[]" id="otazka-1[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer1); ?>" minlength="3" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer1)){echo "$promoAnswer1";} else { echo "$placeholderAnswer1"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic2); ?></div><textarea name="otazka-2[]" id="otazka-2[]" rows="2" class="w98 <?php //echo "$promoHidden2"; ?>" placeholder="<?php //echo "$placeholderQuestion2"; ?>" "><?php echo removeSqlShowChar($promoQuestion2);  ?></textarea></td>
								<td><textarea name="otazka-2[]" id="otazka-2[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer2); ?>" minlength="10" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer2)){echo "$promoAnswer2";} else { echo "$placeholderAnswer2"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic3); ?></div><textarea name="otazka-3[]" id="otazka-3[]" rows="2" class="w98 <?php //echo "$promoHidden3"; ?>" placeholder="<?php //echo "$placeholderQuestion3"; ?>" "><?php echo removeSqlShowChar($promoQuestion3);  ?></textarea></td>
								<td><textarea name="otazka-3[]" id="otazka-3[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer3); ?>" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer3)){echo "$promoAnswer3";} else { echo "$placeholderAnswer3"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic4); ?></div><textarea name="otazka-4[]" id="otazka-4[]" rows="2" class="w98 <?php //echo "$promoHidden4"; ?>" placeholder="<?php //echo "$placeholderQuestion4"; ?>" "><?php echo removeSqlShowChar($promoQuestion4);  ?></textarea></td>
								<td><textarea name="otazka-4[]" id="otazka-4[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer4); ?>" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer4)){echo "$promoAnswer4";} else { echo "$placeholderAnswer4"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic5); ?></div><textarea name="otazka-5[]" id="otazka-5[]" rows="2" class="w98 <?php //echo "$promoHidden5"; ?>" placeholder="<?php //echo "$placeholderQuestion5"; ?>" "><?php echo removeSqlShowChar($promoQuestion5);  ?></textarea></td>
								<td><textarea name="otazka-5[]" id="otazka-5[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer5); ?>" minlength="3" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer5)){echo "$promoAnswer5";} else { echo "$placeholderAnswer5"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic6); ?></div><textarea name="otazka-6[]" id="otazka-6[]" rows="2" class="w98 <?php //echo "$promoHidden6"; ?>" placeholder="<?php //echo "$placeholderQuestion6"; ?>" "><?php echo removeSqlShowChar($promoQuestion6);  ?></textarea></td>
								<td><textarea name="otazka-6[]" id="otazka-6[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer6); ?>" minlength="3" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer6)){echo "$promoAnswer6";} else { echo "$placeholderAnswer6"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic7); ?></div><textarea name="otazka-7[]" id="otazka-7[]" rows="2" class="w98 <?php //echo "$promoHidden7"; ?>" placeholder="<?php //echo "$placeholderQuestion7"; ?>" "><?php echo removeSqlShowChar($promoQuestion7);  ?></textarea></td>
								<td><textarea name="otazka-7[]" id="otazka-7[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer7); ?>" minlength="2" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer7)){echo "$promoAnswer7";} else { echo "$placeholderAnswer7"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic8); ?></div><textarea name="otazka-8[]" id="otazka-8[]" rows="2" class="w98 <?php //echo "$promoHidden8"; ?>" placeholder="<?php //echo "$placeholderQuestion8"; ?>" "><?php echo removeSqlShowChar($promoQuestion8);  ?></textarea></td>
								<td><textarea name="otazka-8[]" id="otazka-8[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer8); ?>" minlength="5" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer8)){echo "$promoAnswer8";} else { echo "$placeholderAnswer8"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic9); ?></div><textarea name="otazka-9[]" id="otazka-9[]" rows="2" class="w98 <?php //echo "$promoHidden9"; ?>" placeholder="<?php //echo "$placeholderQuestion9"; ?>" "><?php echo removeSqlShowChar($promoQuestion9);  ?></textarea></td>
								<td><textarea name="otazka-9[]" id="otazka-9[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer9); ?>" minlength="5" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer9)){echo "$promoAnswer9";} else { echo "$placeholderAnswer9"; } ?></textarea></td>		
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic10); ?></div><textarea name="otazka-10[]" id="otazka-10[]" rows="2" class="w98 <?php //echo "$promoHidden10"; ?>" placeholder="<?php //echo "$placeholderQuestion10"; ?>" "><?php echo removeSqlShowChar($promoQuestion10);  ?></textarea></td>
								<td><textarea name="otazka-10[]" id="otazka-10[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer10); ?>" minlength="5" <?php //echo "$required"; ?>><?php if(!empty($promoAnswer10)){echo "$promoAnswer10";} else { echo "$placeholderAnswer10"; } ?></textarea></td>	
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic11); ?></div><textarea name="otazka-11[]" id="otazka-11[]" rows="2" class="w98 <?php //echo "$promoHidden11"; ?>" placeholder="<?php //echo "$placeholderQuestion11"; ?>"><?php echo removeSqlShowChar($promoQuestion11);  ?></textarea></td>
								<td><textarea name="otazka-11[]" id="otazka-11[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer11); ?>" minlength="5"><?php if(!empty($promoAnswer11)){echo "$promoAnswer11";} else { echo "$placeholderAnswer11"; } ?></textarea></td>	
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic12); ?></div><textarea name="otazka-12[]" id="otazka-12[]" rows="2" class="w98 <?php //echo "$promoHidden12"; ?>" placeholder="<?php //echo "$placeholderQuestion12"; ?>"><?php echo removeSqlShowChar($promoQuestion12);  ?></textarea></td>
								<td><textarea name="otazka-12[]" id="otazka-12[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer12); ?>" minlength="5"><?php if(!empty($promoAnswer12)){echo "$promoAnswer12";} else { echo "$placeholderAnswer12"; } ?></textarea></td>	
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic13); ?></div><textarea name="otazka-13[]" id="otazka-13[]" rows="2" class="w98 <?php //echo "$promoHidden13"; ?>" placeholder="<?php //echo "$placeholderQuestion13"; ?>"><?php echo removeSqlShowChar($promoQuestion13);  ?></textarea></td>
								<td><textarea name="otazka-13[]" id="otazka-13[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer13); ?>" minlength="5"><?php if(!empty($promoAnswer13)){echo "$promoAnswer13";} else { echo "$placeholderAnswer13"; } ?></textarea></td>	
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic14); ?></div><textarea name="otazka-14[]" id="otazka-14[]" rows="2" class="w98 <?php //echo "$promoHidden14"; ?>" placeholder="<?php //echo "$placeholderQuestion14"; ?>"><?php echo removeSqlShowChar($promoQuestion14);  ?></textarea></td>
								<td><textarea name="otazka-14[]" id="otazka-14[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer14); ?>" minlength="5"><?php if(!empty($promoAnswer14)){echo "$promoAnswer14";} else { echo "$placeholderAnswer14"; } ?></textarea></td>	
							</tr>
							<tr>
								<td><div class=""><?php echo removeSqlShowChar($questionStatic15); ?></div><textarea name="otazka-15[]" id="otazka-15[]" rows="2" class="w98 <?php //echo "$promoHidden15"; ?>" placeholder="<?php //echo "$placeholderQuestion15"; ?>"><?php echo removeSqlShowChar($promoQuestion15);  ?></textarea></td>
								<td><textarea name="otazka-15[]" id="otazka-15[]" rows="2" class="w98" placeholder="<?php echo removeSqlShowChar($placeholderAnswer15); ?>" minlength="5"><?php if(!empty($promoAnswer15)){echo "$promoAnswer15";} else { echo "$placeholderAnswer15"; } ?></textarea></td>	
							</tr>
						</tbody>
					</table>