<!DOCTYPE html>
<html>
<?php 
$pageTitle="Přiřadit testy"; 
$description="Přiřadit testy k promotérovi."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<div class="container">
			<main>
				<div id="wrapper">
					<section class="form">
						<h2>Přiřadit testy</h2>
							<?php require("test-send.php"); ?>
						
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">

							<?php $select = "selected"; $test = 0; $try = 3; $questions = ""; $timeArray[0] = $timeArray[1] = $timeArray[2] = $timeArray[3] = $id = $pharmacy = $usersKoo = $form = $users = $company = $status =  $time = $pause = $hours = ""; $bonus = 200; ?>
							<?php require('test-select.php') ?>
						</form>
					</section>
				</div>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>