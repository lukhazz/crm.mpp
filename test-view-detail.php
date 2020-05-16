<!DOCTYPE html>
<html>
<?php 
$pageTitle="Seznam testů"; 
$description="Seznam testů a možnost jejich úpravy."; 
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
		<div class="container per100">
			<main>
				<?php //$id = ""; ?>	
				<?php require('test-list-detail.php') ?>
				<input type="hidden" name="id_action" value="<?php echo $id; ?>"/><br><br>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>