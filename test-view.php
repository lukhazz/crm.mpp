<!DOCTYPE html>
<html>
<?php 
$pageTitle="Zadání testů"; 
$description="Zadání testů a možnost jejich úpravy."; 
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
		<div class="container">
			<main>
				<?php //$id = ""; ?>	
				<?php require('test-list.php') ?>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>