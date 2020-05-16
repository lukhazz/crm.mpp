<!DOCTYPE html>
<html>
<?php 
$pageTitle="Vytvoření testu"; 
$description="Vytvoření zadání testu."; 
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

		<div class="container">
			<main>
				<section class="form">
					<h2>Vytvoření zadání testu</h2>
					<?php require("test-maker-send.php"); ?>
					<?php if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';	} ?>
					<?php if (!empty($messageError))   { echo '<div class="message-error">'.$messageError.'</div>';	} ?>

					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="form-maker clearfix">

						<input type="text" placeholder="Název testu" class="w100 center" name="nazev" minlength="5" required="required" value="<?php if (!empty($nazevFormulare)){ echo $nazevFormulare; } ?>">

						<?php require("table-tests.php"); ?>
						<br>
						<input type="submit" name="makeform" id="makeform" value="Uložit formulář">
					</form>
				</section>			
			</main>
		</div>
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>