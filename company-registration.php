<!DOCTYPE html>
<html>
<?php 
$pageTitle="Firma"; 
$description="Přidání nové firmy."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php $permArrayCurrent = array("pridani-firem-formularu"); ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<?php $userStat = $_SESSION['stat']; ?>
		<div class="container">
			<main>
				<section class="form">
					<h2>Přidání firmy</h2>
					<?php require("company-form-send.php"); ?>
					<?php $id=""; $valueCompanyPrice =""; require("company-form.php"); ?>
				</section>
			</main>
		</div>
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>