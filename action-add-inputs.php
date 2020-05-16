<label for="date">Datum akce</label><input type="text" name="date" id="datepicker-today" value="<?php echo date("Y-m-d"); ?>"><br>
							<label for="time">Čas</label>
							Od <input type="number" name="time[]" class="clock right" placeholder="8" min="0" max="23" required="require" value="<?php if (!empty($timeArray[0])) { echo $timeArray[0]; } ?>">:<input type="number" name="time[]" class="clock" placeholder="30" min="0" max="59" required="require" value="<?php if ((!empty($timeArray[1])||($timeArray[1]==0))) { echo $timeArray[1]; } ?>">
							&nbsp;&nbsp;Do <input type="number" name="time[]" class="clock right" placeholder="16" min="0" max="23" required="require" value="<?php if (!empty($timeArray[2])) { echo $timeArray[2]; } ?>">:<input type="number" name="time[]" class="clock" placeholder="30" min="0" max="59" required="require" value="<?php if ((!empty($timeArray[3])||($timeArray[3]==0))) { echo $timeArray[3]; } ?>"> <br>
							<div class="error"><?php if(!empty($error_time)) { echo $error_time; } ?></div>

							<label for="time">Pauza (nepovinná)</label><input type="text" name="pause" class="number" placeholder="10:00-16:00" value="<?php if (!empty($pause)) { echo $pause; } ?>"><br>
							<div class="error"><?php if(!empty($error_pause)) { echo $error_pause; } ?></div>
							
							<label for="goal">Cíl (v Kč nebo &euro;)</label><input type="number" step="any"name="goal" class="number" placeholder="0-999999" min="0" max="999999" value="<?php if (!empty($goal)) { echo $goal; } ?>"><br><br>
							<label for="goal-ks">Cíl (kusy)</label><input type="number" name="goal-ks" class="number" placeholder="0-9999" min="0" max="9999" value="<?php if (!empty($goalKs)) { echo $goalKs; } ?>"><br>
							<div class="error"><?php if(!empty($error_goal)) { echo $error_goal; } ?></div>
							<label for="bonus">Bonus (v Kč nebo &euro;)</label><input type="number" step="any"name="bonus" class="number" placeholder="0-999999" min="0" max="999999" value="<?php if (!empty($bonus)) { echo $bonus; } ?>" required="required"><br><br>