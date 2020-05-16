<?php $k = 1; ?>
<?php 

	for ($i=0; $i <= $counterQuestions; $i++) { 
		$counterRightQustions = 0;
		$counterPismen = 0;
		//echo "test ".($i+1)." = ".$rowTest[$i]."<br>";
		$QuestionArray 			= explode("|", $rowTest[$i]);
		$QuestionAnswerArray 	= explode("|", $rowTestAnswer[$i]);
		for ($k=0; $k < count($QuestionArray); $k++) { 
			if ($QuestionArray[$k]=="trueA" || $QuestionArray[$k]=="trueB" || $QuestionArray[$k]=="trueC" || $QuestionArray[$k]=="trueD" || $QuestionArray[$k]=="trueE" ) {
				$counterRightQustions++;
			}
		}
		//for ($m=0; $m < count($QuestionAnswerArray); $m++) { 
		//
		//}
		if ($QuestionAnswerArray[0]=="SUCCESS") {
			$about = "true";
			$disabled = "disabled";
		}
		else {
			$about = "false";
			$disabled = "disabled";
		}
		//echo " V otázce č.".($i+1)." je správných odpovědí $counterRightQustions.";

 ?>

<?php 

	for ($n=1; $n < count($QuestionAnswerArray); $n++) { 
		//if ($rowTestAnswer[$n]=="") {
		//	break;
		//}
		//echo "$QuestionAnswerArray[$n]<br>";	
		if ($QuestionAnswerArray[$n]=="trueA" ) {
			continue;
		}
	}
	

?>

<div class="questions <?php echo $about; ?>">
						<h3>Otázka <?php echo ($i+1)." z ".($counterQuestions+1); ?></h3>
						<div><?php echo napisNapovedu($counterRightQustions); ?></div>
						<hr>
						<h4><?php echo "$QuestionArray[0]"; ?></h4>
						<div>
							<?php 
								for ($j=1; $j < count($QuestionArray); $j++) {
									if ($counterRightQustions==1) {
										if ($QuestionArray[$j]=="trueA" || $QuestionArray[$j]=="trueB" || $QuestionArray[$j]=="trueC" || $QuestionArray[$j]=="trueD" || $QuestionArray[$j]=="trueE" ) {
											continue;
										}
										else if ($QuestionArray[$j]=="") {
											break;
										}
										else {
											$counterPismen++;
											$pismeno = urciPismeno($counterPismen);
											if (porovnejStringy($pismeno,$QuestionAnswerArray)) {
												$checked = "checked";
											}
											else {
												$checked = "";
											}


											//echo "$pismeno - $check<br>";
											?>

											<input <?php echo $disabled; ?> <?php echo $checked; ?> type="radio" name="question-<?php echo ($i+1);?>[]" value="<?php echo "$pismeno";?>" id="question-<?php echo ($i+1);?>-<?php echo "$counterPismen";?>"><label for="question-<?php echo ($i+1);?>-<?php echo "$counterPismen";?>" class="check-2"><?php echo "$QuestionArray[$j]"; ?></label>	

											<?php
										}
									}
									else {
									if ($QuestionArray[$j]=="trueA" || $QuestionArray[$j]=="trueB" || $QuestionArray[$j]=="trueC" || $QuestionArray[$j]=="trueD" || $QuestionArray[$j]=="trueE" ) {
											continue;
										}
										else if ($QuestionArray[$j]=="") {
											break;
										}
										else {
											$counterPismen++;
											$pismeno = urciPismeno($counterPismen);
											if (porovnejStringy($pismeno,$QuestionAnswerArray)) {
												$checked = "checked";
											}
											else {
												$checked = "";
											}
											?>

											<input <?php echo $disabled; ?> <?php echo $checked; ?>  type="checkbox" name="question-<?php echo ($i+1);?>[]" value="<?php echo "$pismeno";?>" id="question-<?php echo ($i+1);?>-<?php echo "$counterPismen";?>"><label for="question-<?php echo ($i+1);?>-<?php echo "$counterPismen";?>" class="check-2"><?php echo "$QuestionArray[$j]"; ?></label>	

											<?php
										}
									}
								}
							?>
						</div>

					




					</div>

<?php 
	}

?>