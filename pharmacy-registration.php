<!DOCTYPE html>
<html>
<?php 
$pageTitle="Lékárna"; 
$description="Přidání nové lékárny."; 
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
				<section class="form">
					<h2>Přidání lékárny</h2>
					<?php require("pharmacy-form-send.php"); ?>
					<?php $id=""; require("pharmacy-form.php"); ?>
				</section>
			</main>
		</div>
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>