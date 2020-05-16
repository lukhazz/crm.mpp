<!DOCTYPE html>
<html>
<?php 
$pageTitle="Seznam formulářů"; 
$description="Seznam formulářů a možnost jejich úpravy."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<?php $userStat = $_SESSION['stat']; ?>
		<div class="container min-h450">
			<main>
				<section>
					<h2>Hledat šablony formulářů</h2>
					<?php //require('form-maker-list.php') ?>
					<?php require('form-maker-filter-form.php') ?>
				</section>
			</main>
		</div>	
		<?php require('form-filter.php') ?>
		<?php require("block-footer.php") ?>
		<?php require('excel.php') ?>
	</div>
</body>
</html>