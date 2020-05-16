<?php if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';	} ?>
<?php if (!empty($messageError))   { echo '<div class="message-error">'.$messageError.'</div>';	} ?>
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">
					<label for="name">Název lékárny</label><input type="text" name="name" id="name" value="<?php echo "$valueName"; ?>">
					<div class="error"><?php if(!empty($error_name)) { echo $error_name; } ?></div>

					<label for="chain">Řetězec</label><input type="text" name="chain" id="chain" value="<?php echo "$valueChain"; ?>">
					<div class="error"><?php if(!empty($error_chain)) { echo $error_chain; } ?></div>

					<label for="vdl">VDL</label><input type="number" class="number" name="vdl" min="0" id="vdl" placeholder="123456" value="<?php echo "$valueVdl"; ?>">
					<div class="error"><?php if(!empty($error_vdl)) { echo $error_vdl; } ?></div>

					<label for="rating">Rating</label><input type="text" class="number" name="rating" id="rating" placeholder="A - E" value="<?php echo "$valueRating"; ?>">
					<div class="error"><?php if(!empty($error_rating)) { echo $error_rating; } ?></div>

					<label for="town">Město</label><input type="text" name="town" id="town" value="<?php echo "$valueTown"; ?>">
					<div class="error"><?php if(!empty($error_town)) { echo $error_town; } ?></div>

					<label for="division">Okres</label><input type="text" name="division" id="division" value="<?php echo "$valueDivision"; ?>">
					<div class="error"><?php if(!empty($error_division)) { echo $error_division; } ?></div>

					<label for="address">Ulice</label><input type="text" name="address" id="address" value="<?php echo "$valueAddress"; ?>">
					<div class="error"><?php if(!empty($error_address)) { echo $error_address; } ?></div>

					<input type="radio" <?php if ($valueStat == "cz") { echo "checked=\"checked\""; } ?> name="stat" value="cz" id="cz" checked> <label for="cz" class="check w97">Česko</label> 	
					<input type="radio" <?php if ($valueStat == "sk") { echo "checked=\"checked\""; } ?> name="stat" value="sk" id="sk"><label for="sk" class="check">Slovensko</label>

					<label for="c-person">Kontaktní osoba</label><input type="text" name="c-person" id="c-person" value="<?php echo "$valuecPerson"; ?>">
					<div class="error"><?php if(!empty($error_cPerson)) { echo $error_cPerson; } ?></div>

					<label for="c-phone">Číslo na kont. osobu</label><input type="text" class="number" name="c-phone" id="c-phone" value="<?php echo "$valuecPhone"; ?>">
					<div class="error"><?php if(!empty($error_cPhone)) { echo $error_cPhone; } ?></div>

					<div class="error"><?php if(!empty($error_stat)) { echo $error_stat; } ?></div>	

					<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	
					<input type="submit" name="registeruser" id="registeruser" value="Odeslat">
					<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
				</form>