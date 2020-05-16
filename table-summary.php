<table id="summary">
						<tr>
							<td>Čas</td>
							<td><?php 
						if ($time!="0:00-0:00") {
							echo $time;
						}
						else { ?>
							Od <input type="number" name="time[]" class="clock right" placeholder="8" min="0" max="23" required="required" value="<?php if (!empty($timeArray[0])) { echo $timeArray[0]; } ?>">:<input type="number" name="time[]" class="clock" placeholder="30" min="0" max="59" required="required" value="<?php if ((!empty($timeArray[1])||($timeArray[1]==0))) { echo $timeArray[1]; } ?>">
							<br>Do <input type="number" name="time[]" class="clock right" placeholder="16" min="0" max="23" required="required" value="<?php if (!empty($timeArray[2])) { echo $timeArray[2]; } ?>">:<input type="number" name="time[]" class="clock" placeholder="30" min="0" max="59" required="required" value="<?php if ((!empty($timeArray[3])||($timeArray[3]==0))) { echo $timeArray[3]; } ?>"> <br>
							<div class="error"><?php if(!empty($error_time)) { echo $error_time; } ?></div>
							<?php
						} 
						?></td>
							<td>Název lékárny</td>
							<td><?php if (!empty($pharmacy)) { echo $pharmacy; } ?></td>
						</tr>
						<tr>
							<td>Datum</td>
							<td><?php 
						if (!empty($date)) {
							echo $date;
						}
						else {
							echo "<input required=\"required\" type=\"text\" name=\"date\" id=\"datepicker-today\" value=\"".date("Y-m-d")."\">";
						} 
						?></td>
							<td>Město</td>
							<td><?php if (!empty($town)) { echo $town; } ?></td>
						</tr>
						<tr>
							<td>Jméno promotéra</td>
							<td><?php if (!empty($user)) { echo $user; } ?></td>
							<td>Cíl</td>
							<td><u><?php if ($goal>0&&$goalKs>0) { echo $goal." $mena<br>".$goalKs; }
										else if ($goal>0&&$goalKs<=0) { echo "$goal $mena"; }
										else if ($goal<=0&&$goalKs>0) { echo $goalKs; }?></u></td>
						</tr>
					</table>