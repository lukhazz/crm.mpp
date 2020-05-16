<?php $k = 1; ?>
<?php 

	for ($i=0; $i <= $counterQuestions; $i++) { 
		$counterRightQustions = 0;
		$counterPismen = 0;
		//echo "test ".($i+1)." = ".$rowTest[$i]."<br>";
		$QuestionArray 	= explode("|", $rowTest[$i]);
		$QuestionAnswerArray 	= explode("|", $rowTestAnswer[$i]);
		for ($k=0; $k < count($QuestionArray); $k++) { 
			if ($QuestionArray[$k]=="trueA" || $QuestionArray[$k]=="trueB" || $QuestionArray[$k]=="trueC" || $QuestionArray[$k]=="trueD" || $QuestionArray[$k]=="trueE" ) {
				$counterRightQustions++;
			}
		}
		//echo " V otázce č.".($i+1)." je správných odpovědí $counterRightQustions.";

		if ($QuestionAnswerArray[0]=="SUCCESS") {
			$about = "true";
			//$disabled = "disabled";
		}
		else {
			$about = "";
			//$disabled = "";
		}

 ?>

<?php 

		if ($QuestionAnswerArray[0]=="SUCCESS") {
			$counterSuccess = 2;
		}	
		else {
			$counterSuccess = 1;
		}

		for ($m=0; $m < $counterSuccess; $m++) { 
			$counterPismen = 0;
			if ($QuestionAnswerArray[0]=="SUCCESS" && $m==0) {
				$disabled = "disabled";
				$invis 	  = "-invisible";
			}
			else {
				$disabled = "";
				$invis 	  = "";
			}

			if ($m==1) {
				$none 	  = "display-none";	
			}
			else {
				$none 	  = "";				
			}


?>

<div class="questions <?php echo "$about $none"; ?>">
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
											if (porovnejStringy($pismeno,$QuestionAnswerArray) && $QuestionAnswerArray[0]=="SUCCESS") {
												$checked = "checked";
											}
											else {
												$checked = "";
											}
											?>

											<input <?php echo $disabled; ?> <?php echo $checked; ?> type="radio" name="question-<?php echo ($i+1)."$invis";?>[]" value="<?php echo "$pismeno";?>" id="question-<?php echo ($i+1);?>-<?php echo "$counterPismen$invis";?>"><label for="question-<?php echo ($i+1);?>-<?php echo "$counterPismen$invis";?>" class="check-2 "><?php echo "$QuestionArray[$j]"; ?></label>	

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
											if (porovnejStringy($pismeno,$QuestionAnswerArray) && $QuestionAnswerArray[0]=="SUCCESS") {
												$checked = "checked";
											}
											else {
												$checked = "";
											}
											?>

											<input <?php echo $disabled; ?> <?php echo $checked; ?> type="checkbox" name="question-<?php echo ($i+1)."$invis";?>[]" value="<?php echo "$pismeno";?>" id="question-<?php echo ($i+1);?>-<?php echo "$counterPismen$invis";?>"><label for="question-<?php echo ($i+1);?>-<?php echo "$counterPismen$invis";?>" class="check-2 "><?php echo "$QuestionArray[$j]"; ?></label>	

											<?php
										}
									}
								}
							?>
						</div>

					




					</div>

<?php 
		}
	}

?>