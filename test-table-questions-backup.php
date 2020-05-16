<?php $j = 1; ?>
<?php 

	for ($i=0; $i <= $counterQuestions; $i++) { 
		$counterRightQustions = 0;
		$counterPismen = 0;
		echo "test $i = ".$rowTest[$i]."<br>";
		$QuestionArray 	= explode("|", $rowTest[$i]);
		for ($j=0; $j < count($QuestionArray); $j++) { 
			if ($QuestionArray[$j]=="trueA" || $QuestionArray[$j]=="trueB" || $QuestionArray[$j]=="trueC" || $QuestionArray[$j]=="trueD" || $QuestionArray[$j]=="trueE" ) {
				$counterRightQustions++;
			}
		}
		//echo " V otázce č.".($i+1)." je správných odpovědí $counterRightQustions.";

 ?>

<?php 

	

?>

<div class="questions">
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
										else {
											$counterPismen++;
											//$pismeno = urciPismeno($counterPismen);
											?>

											<input type="radio" name="question-<?php echo "$i";?>[]" value="true" id="question-<?php echo "$i";?>-<?php echo "$counterPismen";?>"><label for="question-<?php echo "$i";?>-<?php echo "$counterPismen";?>" class="check-2"><?php echo "$QuestionArray[$j]"; ?></label>	

											<?php
										}
									}
									else {
									if ($QuestionArray[$j]=="trueA" || $QuestionArray[$j]=="trueB" || $QuestionArray[$j]=="trueC" || $QuestionArray[$j]=="trueD" || $QuestionArray[$j]=="trueE" ) {
											continue;
										}
										else {
											$counterPismen++;
											//$pismeno = urciPismeno($counterPismen);
											?>

											<input type="checkbox" name="question-<?php echo "$i";?>[]" value="true" id="question-<?php echo "$i";?>-<?php echo "$counterPismen";?>"><label for="question-<?php echo "$i";?>-<?php echo "$counterPismen";?>" class="check-2"><?php echo "$QuestionArray[$j]"; ?></label>	

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