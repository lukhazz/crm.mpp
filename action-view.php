<!DOCTYPE html>
<html>
<?php 
$pageTitle="Seznam akcí"; 
$description="Seznam akcí a možnost jejich úpravy."; 
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
		<?php $userStat = $_SESSION['stat']; $users = ""; ?>
		<div class="container min-h560">
			<main>
				<section>
					<h2>Hledat akce</h2>
					<?php //$current_year = 2019; ?>
					<?php require('action-form.php') ?>
					<?php //require('action-list.php') ?>
				</section>
			</main>
		</div>	
		<?php require('action-filter.php') ?>
		<script src="js/lightbox.js"></script>
		<?php require("block-footer.php") ?>
		<?php require('excel.php') ?>
	</div>
</body>
</html>