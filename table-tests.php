
<table id="test">
						<caption>Testy</caption>
						<thead>
							<tr>
								<th>#</th>
								<th>Otázka pro promotéra</th>
								<th>Možnosti | správnost</th>
							</tr>
						</thead>
						<tbody> <?php
						//$row = mysqli_fetch_row($data);

						for ($i=0; $i < 20; $i++) { 
							$testTemp = "test-".($i+1)."[]";
							//echo "${$testTemp}<br>";
							$testQuestion = "testQuestion".($i+1);
							$answerA 	= "answerA".($i+1);
							$answerB 	= "answerB".($i+1);
							$answerC 	= "answerC".($i+1);
							$answerD 	= "answerD".($i+1);
							$answerE 	= "answerE".($i+1);
							$checkedTrueA 		= "checkedTrueA".($i+1);
							$checkedTrueB 		= "checkedTrueB".($i+1);
							$checkedTrueC 		= "checkedTrueC".($i+1);
							$checkedTrueD 		= "checkedTrueD".($i+1);
							$checkedTrueE 		= "checkedTrueE".($i+1);
							$default = NULL;
								echo "
							<tr>";
								echo "
								";?>
								<td><?php echo ($i+1); ?></td>
								<td>
									<textarea name="<?php echo "$testTemp"; ?>" id="<?php echo "$testTemp"; ?>" rows="10" class="w98"><?php if(!empty(${$testQuestion})) { echo "${$testQuestion}"; } ?></textarea>
								</td>
								<td>
									<div>
										<input type="text" id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" class="test-text" value="<?php if(!empty(${$answerA})) { echo "${$answerA}"; } else { echo "$default"; } ?>">
										<input type="checkbox" <?php if(!empty(${$checkedTrueA})) { echo "${$checkedTrueA}"; } ?> id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" value="trueA" class="test-check">
									</div>
									<div>
										<input type="text" id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" class="test-text" value="<?php if(!empty(${$answerB})) { echo "${$answerB}"; } else { echo "$default"; } ?>">
										<input type="checkbox" <?php if(!empty(${$checkedTrueB})) { echo "${$checkedTrueB}"; } ?> id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" value="trueB" class="test-check">
									</div>
									<div>
										<input type="text" id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" class="test-text" value="<?php if(!empty(${$answerC})) { echo "${$answerC}"; } else { echo "$default"; } ?>">
										<input type="checkbox" <?php if(!empty(${$checkedTrueC})) { echo "${$checkedTrueC}"; } ?> id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" value="trueC" class="test-check">
									</div>
									<div>
										<input type="text" id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" class="test-text" value="<?php if(!empty(${$answerD})) { echo "${$answerD}"; } else { echo "$default"; } ?>">
										<input type="checkbox" <?php if(!empty(${$checkedTrueD})) { echo "${$checkedTrueD}"; } ?> id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" value="trueD" class="test-check">
									</div>
									<div>
										<input type="text" id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" class="test-text" value="<?php if(!empty(${$answerE})) { echo "${$answerE}"; } else { echo "$default"; } ?>">
										<input type="checkbox" <?php if(!empty(${$checkedTrueE})) { echo "${$checkedTrueE}"; } ?> id="<?php echo "$testTemp"; ?>" name="<?php echo "$testTemp"; ?>" value="trueE" class="test-check">
									</div>		
								</td>
							<?php echo "
							</tr>";
							

							
						}

						?>

						</tbody>
					</table>	