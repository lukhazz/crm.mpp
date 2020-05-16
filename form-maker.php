<!DOCTYPE html>
<html>
<?php 
$pageTitle="Formulář"; 
$description="Vytvoření hodnotícího formuláře."; 
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
					<h2>Vytvoření hodnotícího formuláře</h2>
					<?php require("form-maker-default-values.php"); ?>
					<?php require("form-send.php"); ?>
					<?php 
						$userStatTemp = $_SESSION['stat'];
						$mena = "Kč,-";
						if ($userStatTemp=="sk") {
							$mena = "&euro;";
						}
					?>
					<?php if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';	} ?>
					<?php if (!empty($messageError))   { echo '<div class="message-error">'.$messageError.'</div>';	} ?>

					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="form-maker clearfix">

						<input type="text" placeholder="Název formuláře včetně roku" class="w100 center" name="nazev" minlength="5" required="required" value="<?php echo $nazevFormulare; ?>">

						<?php require("country.php"); ?>
						<br>
						<?php require("form-products.php"); ?>
						<br>
						<?php require("form-gifts.php"); ?>
						<br>
						<?php require("form-promoday.php"); ?>
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