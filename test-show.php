<!DOCTYPE html>
<html>
<?php 
$pageTitle="Test"; 
$description="Vyplnit test."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php //$revisionEdit = false; ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php $permArrayViewOthers = array("nahled-akci"); ?>
		<?php $permArrayTemp = array("editace-akci"); checkPermByIdTest($permArrayTemp); ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>

		 <?php $test = ""; ?>

		<div class="container">
			<main>
				<section class="form">
					<?php require('test-show-list.php') ?>
					<h2>Vyplnění testu "<?php echo "$test"; ?>"</h2>
					<?php $id = ""; ?>	
					<?php //require('test-show-send.php') ?>
					<?php if (!empty($messageSuccess)) { echo 
						'<div class="message-success">'.$messageSuccess.'</div>';		} ?>
					<?php if (!empty($messageError))   { echo '
						<div class="message-error">'.$messageError.'</div>';	}	 ?>


					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="register" class="clearfix">
						<?php require('test-table-summary.php') ?>

						<?php require('test-table-questions-show.php') ?>

						<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>

						<!--<input type="submit" name="submit" id="submit" value="Odeslat">-->
						<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
					</form>

				</section>
			</main>
		</div>	
		<?php dbClose($conn); // Odpojíme se z DB ?>
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>