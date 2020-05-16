<?php $timeArray[0] = $timeArray[1] = $timeArray[2] = $timeArray[3] = $id = $pharmacy = $usersKoo = $form = $users = $company = $status = $goal = $time = $pause = $hours = $tradesman = ""; $bonus = 200; ?>
<?php 

function renderForm($pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray)   {

 ?>

<!DOCTYPE html>
<html>
<?php 
$pageTitle="Vytvoření CZ akci"; 
$description="Vytvoří akci, přiřadí k ní promotérku, daný formulář a lékárnu."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php //require("functions.php") ?>
		<div class="container">
			<main>
				<div id="wrapper">
					<section class="form">
						<h2>Akce CZ</h2>
							
						
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">

							<?php //$timeArray[0] = $timeArray[1] = $timeArray[2] = $timeArray[3] = $id = $pharmacy = $usersKoo = $form = $users = $company = $status = $goal = $time = $pause = $hours = $tradesman = ""; $bonus = 200; ?>
							<?php $status = $id = ""; ?>

							<script>
								$(document).ready(function(){
								    $("#action-country").click(function(){
								        $("#action-cz").toggle(1000, 'swing');
								        $("#action-sk").toggle(1000, 'swing');
								    });
								});
							</script>
							<!--<span style="cursor:pointer" id="action-country">Stát</span>-->
							<?php if (!empty($messageSuccess)) { echo 
							'<div class="message-success">'.$messageSuccess.'</div>';		} ?>
							<?php if (!empty($messageError))   { echo '
							<div class="message-error">'.$messageError.'</div>';	}	 ?>
							<?php $i=0;  $select = "selected";?>

							<?php require('select.php') ?>
							<?php //require('select-sk.php') ?>

							<div class="error">
							<?php if(!empty($error_company)) { echo $error_company."<br>"; } ?>
							<?php if(!empty($error_pharmacy)) { echo $error_pharmacy."<br>"; } ?>
							<?php if(!empty($error_form)) { echo $error_form."<br>"; } ?>
							<?php if(!empty($error_users)) { echo $error_users."<br>"; } ?>
							<?php if(!empty($error_usersKoo)) { echo $error_usersKoo."<br>"; } ?>
							<?php if(!empty($error_tradesman)) { echo $error_tradesman."<br>"; } ?>
							</div>


							<?php require('action-add-inputs.php') ?>
							<?php $skoleni = $topLekarna = $sukl = $idGs = NULL; ?>
							<?php require("gs.php"); ?>
						
							<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>

							<input type="submit" name="submit" id="submit" value="Vygenerovat">
							<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
						</form>
					</section>
				</div>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>

<?php

}

// connect to the database

require_once("login-db.php");
require("functions.php");
$error = false;
$error_time = $error_pause = $error_goal = "";
$messageError = "";
$messageSuccess = "";
$hours = 0;
$time ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) { 
	//echo "zmáčnul se submit <br>";
	//
	require("action-send.php"); 
	//
}

else {
	//echo "NEzmáčnul se submit <br>";

	$id = $goal = $goalKs = $pause = $timeArray[0] = $timeArray[1] = $timeArray[2] = $timeArray[3] = "";
	$valuePharmacy	= "";
	$valueForm		= "";
	$valueUsersKoo	= "";
	$valueDate		= "";
	$valueUsers  	= "";
	$bonus = "200";
	$skoleni = $topLekarna = $sukl = $idGs = NULL;

	//$timeArray[0] = $timeArray[1] = $timeArray[2] = $timeArray[3] = $id = $pharmacy = $usersKoo = $form = $users = $company = $status = $goal = $time = $pause = $hours = $tradesman = ""; $bonus = 200;

	$id = $pharmacy = $form = $usersKoo = $users = $date = $tradesman = $company = $time = $goal = $goalKs  = $messageSuccess = $messageError = $error_goal = $error_time = $error_pause = $pause = $sukl = $idGs = $skoleni = $topLekarna;

	renderForm($pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
}

