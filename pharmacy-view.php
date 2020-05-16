<!DOCTYPE html>
<html>
<?php 
$pageTitle="Seznam lékáren"; 
$description="Seznam lékáren a možnost jejich úpravy."; 
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
		<div class="container min-h500">
			<main>
				<section>
					<h2>Hledat lékárny</h2>
					<?php //require('pharmacy-list.php') ?>
					
					<?php require('pharmacy-filter-form.php') ?>

				</section>
			</main>
		</div>	
		<?php require('pharmacy-filter.php') ?>
		<?php require("block-footer.php") ?>
		<?php require('excel.php') ?>
	</div>
</body>
</html>
				<?php //require('pharmacy-filter.php') ?>