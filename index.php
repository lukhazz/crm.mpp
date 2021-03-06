<!DOCTYPE html>
<html>
<?php 
$pageTitle="Přihlášení | CRM"; 
$description="Přihlášení uživatele do CRM systému firmy MEDICAL & PHARMA PROMOTION, s.r.o."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<body>
	<div class="page">
		<?php require("check-perm.php"); ?>
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require("block-header-old.php"); ?>
		<?php require("block-menu-user.php"); ?>
		<div class="container">
				<!--<h1 class="center">Informační systém na ukládání reportů z promoakcí</h1>-->
				<section class="per30">
					<h2 class="center">Přihlášení do systému</h2>
					<?php //echo $_SERVER['HTTP_HOST']; ?>
					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="login">
					
						<input type="text" name="username" placeholder="Uživatelské jméno">
						<div class="error"><?php if(!empty($error_username)) { echo $error_username; } ?></div>

						<input type="password" name="heslo" placeholder="Heslo">
						<div class="error"><?php if(!empty($error_heslo)) { echo $error_heslo; } ?></div>

						<div class="captcha_wrapper">
							<div class="per100 g-recaptcha" data-sitekey="6Le933MUAAAAAOI6FtcjaoNEuUYRuOkWmcmj88Z5"></div>
						</div>						
						<div class="error"><?php if(!empty($error_captcha)) { echo $error_captcha; } ?></div>


						<input type="submit" name="submit" value="Přihlásit se">

					</form>
					<?php if (!empty($login)) { echo "<p class=\"message-error\">$login</p>"; } ?>

				</section>
			</div>		
		</main>
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>