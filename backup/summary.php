<!DOCTYPE html>
<html>
<?php 
$pageTitle="Výpis"; 
$description="Vypsání reportu podle firmy."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<link rel="stylesheet" href="css/lightbox.css">
<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<?php $userStat = $_SESSION['stat']; ?>
		<?php

		//function filter($error_company, $messageSuccess, $messageError)   {
		?>
		<div class="container min-h560">
			<main>
				<section><br><br>
					<?php $id_company = 0; $id = $goal = $time =""; $select = "selected"; ?>	
					<?php require('summary-check.php') ?>
				</section>
			</main>
		</div>	

		<?php
		//}
		?>		
		<?php require('summary-filter.php') ?>
		<script src="js/lightbox.js"></script>
		<?php require("block-footer.php") ?>
		<?php require('excel.php') ?>
	</div>
</body>
</html>
