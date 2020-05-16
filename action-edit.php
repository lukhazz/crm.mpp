<?php

function renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray)   {

?>

<!DOCTYPE html>
<html>
<?php 
$pageTitle="Editace šablon akcí"; 
$description="Editace šablon akcí."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>

<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php $userStat = $_SESSION['stat']; ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php //require("functions.php") ?>
		<div class="container">
			<main>
				<section class="form">
					<h2>Upravit akce</h2>
						
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="clearfix">
							<?php $status = $select =""; 
								if ($userStat == "sk") {
									require("select-sk.php"); 
								}
								else {
									require("select.php"); 
								}
							?>
							<label for="date">Datum akce</label><input required="required" type="text" name="date" id="datepicker-today" value="<?php 
							if (!empty($date)) {
								echo $date." \">";
							}
							else {
								echo date("Y-m-d")." \">";
							} 
							?>
							<br>
							<label for="time">Čas</label>
							Od <input type="number" name="time[]" class="clock right" placeholder="8" min="0" max="23" required="require" value="<?php if (!empty($timeArray[0])) { echo $timeArray[0]; } ?>">:<input type="number" name="time[]" class="clock" placeholder="30" min="0" max="59" required="require" value="<?php if ((!empty($timeArray[1])||($timeArray[1]==0))) { echo $timeArray[1]; } ?>">
							&nbsp;&nbsp;Do <input type="number" name="time[]" class="clock right" placeholder="16" min="0" max="23" required="require" value="<?php if (!empty($timeArray[2])) { echo $timeArray[2]; } ?>">:<input type="number" name="time[]" class="clock" placeholder="30" min="0" max="59" required="require" value="<?php if ((!empty($timeArray[3])||($timeArray[3]==0))) { echo $timeArray[3]; } ?>"> <br>
							<div class="error"><?php if(!empty($error_time)) { echo $error_time; } ?></div>

							<label for="time">Pauza (nepovinná)</label><input type="text" name="pause" class="number" placeholder="10:00-16:00" value="<?php if (!empty($pause)) { echo $pause; } ?>"><br>
							<div class="error"><?php if(!empty($error_pause)) { echo $error_pause; } ?></div>

							<label for="goal">Cíl (v Kč nebo &euro;)</label><input type="number" name="goal" class="number" placeholder="0-999999" min="0" max="999999" value="<?php if (!empty($goal)) { echo $goal; } ?>"><br><br>
							<label for="goal-ks">Cíl (kusy)</label><input type="number" name="goal-ks" class="number" placeholder="0-9999" min="0" max="9999" value="<?php if (!empty($goalKs)) { echo $goalKs; } ?>"><br>
							<div class="error"><?php if(!empty($error_goal)) { echo $error_goal; } ?></div>
							<label for="bonus">Bonus (v Kč nebo &euro;)</label><input type="number" name="bonus" class="number" placeholder="0-999999" min="0" max="999999" value="<?php if (!empty($bonus)) { echo $bonus; } ?>" required="required"><br><br>

							<?php require("gs.php"); ?>

							<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>

							<input type="submit" name="submit" id="submit" value="Upravit">
							<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
						</form>
				</section>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>

<?php

}


// connect to the database

require_once("login-db.php");
require("functions.php");
$error = false;
$error_time = $error_pause = $error_goal = "";
$messageError = "";
$messageSuccess = "";
$hours = 0;
$time ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) { // confirm that the 'id' value is a valid integer before getting the form data

	//echo "Zmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

		(int)$pharmacy 		= $_POST['pharmacy'];
		(int)$form 			= $_POST['form'];
		(int)$usersKoo 		= $_POST['users-koo'];
		$date 				= $_POST['date'];
		(int)$users 		= $_POST['users'];
		(int)$tradesman		= $_POST['tradesman'];
		(int)$company 		= $_POST['company'];
		(int)$bonus 		= $_POST['bonus'];
		//(int)$goal 			= $_POST['goal'];
		if (isset($_POST['time'])) {
			$timeArray 			= $_POST['time'];
		}
		else {
			$timeArray 			= "";
		}

		if (isset($_POST['sukl'])) 			{ $sukl 		= $_POST['sukl']; } 		else { $sukl = NULL; }
		if (isset($_POST['id_gs'])) 		{ $idGs 		= $_POST['id_gs']; } 		else { $idGs = NULL; }
		if (isset($_POST['skoleni'])) 		{ $skoleni 		= $_POST['skoleni']; } 		else { $skoleni = NULL; }
		if (isset($_POST['top-lekarna'])) 	{ $topLekarna 	= $_POST['top-lekarna']; } 	else { $topLekarna = NULL; }

		if (isset($_POST['pause'])) {
			$pause 			= $_POST['pause'];
		}
		else {
			$pause 			= NULL;
		}

		$id 				= $_POST['id_action'];

		if (!empty($_POST['goal']) && !empty($_POST['goal-ks'])) {
			(int)$goal 			= $_POST['goal'];
			(int)$goalKs 		= $_POST['goal-ks'];
		}

		else if (!empty($_POST['goal'])) {
			(int)$goal 			= $_POST['goal'];
			$goalKs 			= 0;

		}

		else if (!empty($_POST['goal-ks'])) {
			(int)$goal 			= 0;
			(int)$goalKs 		= $_POST['goal-ks'];
		}
		else {
			(int)$goal 			= 0;
			(int)$goalKs 		= 0;
			$error 				= true;
			$messageError 		= "Není zadán cíl.";
			$error_goal = "Musí být zadán alespoň jeden cíl.";
		}

		if (strlen($timeArray[0])>0) {
			//echo "Chci vypsat čas<br>";
			$time = implode("|", $timeArray);
			//echo vypisCas($timeArray)."<br>";
			//$hours = $timeArray[2]-$timeArray[0];
			//echo $time."<br>";
			$hours = (($timeArray[2]*60+$timeArray[3])-($timeArray[0]*60+$timeArray[1])-30)/60;
			//echo (($hours)*60+30)."<br>";
			if ((($hours)*60+30)<=0) {
				$error = true; //zakomentovat pak
				$error_time = "Čas \"Od\" musí být menší než \"Do\"";
			}
		}

		if(!empty($_POST['pause'])) { 
			$reg_pause     = "#^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]-([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$#";
			//echo $pause."<br>";
			$pause = str_replace(' ', '', $pause);
			//echo $pause."<br>";
			if(!preg_match($reg_pause, $pause)) {
				$error_pause = "Pauza by měla být napsána ve tvaru \"HH:MM-HH:MM\".";
				$pause  = "";
				$error = true;
			}
		}

		if(empty($_POST['pharmacy'])) { 
			$error_pharmacy = "Vyberte prosím lékárnu.";
			//$valuePharmacy  = "";
			//$error = true;
		}

		if(empty($_POST['form'])) { 
			$error_form = "Vyberte prosím formulář.";
			//$valueForm  = "";
			//$error = true;
		}

		if(empty($_POST['users-koo'])) { 
			$error_usersKoo = "Vyberte prosím odpovědnou koordinátorku.";
			//$valueUsersKoo  = "";
			//$error = true;
		}

		if(empty($_POST['date'])) { 
			$error_date = "Vyberte prosím datum akce.";
			//$valueDate  = "";
			//$error = true;
		}

		if(empty($_POST['users'])) { 
			$error_users = "Vyberte prosím promotéra.";
			//$valueUsers  = "";
			//$error = true;
		}

		if(empty($_POST['tradesman'])) { 
			$error_users = "Vyberte prosím reprezentanta.";
			//$valueUsers  = "";
			//$error = true;
		}

		if(empty($_POST['company'])) { 
			$error_company = "Vyberte prosím firmu klienta.";
			//$valueCompany  = "";
			//$error = true;
		}

		//if($goal<0 && $goalKs<0) { 
		//	//$valueGoal  = "";
		//	$error = true;
		//	$error_goal = "Musí být zadán alespoň jeden cíl.";
		//}

		if ( $error == false ) {
			$conn = dbConnect(); // Připojíme se k databázi
			mysqli_query($conn, "SET NAMES utf8");

			//Kontrola, zda není lékárna v databázi
				$sql  = "SELECT * FROM actions WHERE id_user='$users' AND id_pharmacy='$pharmacy' AND id_form='$form' AND datum='$date' AND id_tradesman='$tradesman' AND id_action!='$id'";
			//$data = mysqli_query($conn, $sql);
			if ( $data = mysqli_query($conn, $sql) ) {
				$row  = mysqli_fetch_row($data);

				//$row = NULL;

				if ($row != NULL) {
					$messageError = "Nelze přidat, akce s těmito parametry již je v databázi.";
					//echo "Nelze přidat, akce s tímto jménem a adresou již je v databázi.";
					dbClose($conn);
					renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
				}
				else {
					$time = implode("|", $timeArray);
					$timeArray = explode("|", $time);
					//echo $tradesman;
					//$tradesman = (int)$tradesman;
					$sql = "UPDATE actions SET id_pharmacy = '$pharmacy', id_form = '$form', id_user = '$users', id_tradesman = '$tradesman', id_user_koo = '$usersKoo', id_company = '$company', datum = '$date', cil = '$goal', cil_ks = '$goalKs', cas = '$time', poc_hodin = '$hours', pauza = '$pause', id_gs = '$idGs', sukl = '$sukl', skoleni = '$skoleni', top_lekarna = '$topLekarna', bonus = '$bonus' WHERE id_action='$id'";
					//echo "<br><br>".$sql;
					if (mysqli_query($conn, $sql)) {
						
						$messageSuccess = "Akce upravena.";
						//echo "Akce upravena.";
						renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
						//$valueName     	= "";
						//$valueTown		= "";
						//$valueAddress  	= "";

					}
					else {
						$messageError = "Nepodařilo se upravit akci.";
						//echo "Nepodařilo se upravit akci.";
						dbClose($conn);
						renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);

						//mysqli_query($conn, $sql);
						//$row  = mysqli_fetch_row($data);
						//$messageError = $row;
					}
				}
			}
			else {
				$messageError = "Chyba dotazu.";
				//echo "Chyba dotazu.";
				dbClose($conn);
				renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
			}
		}
		else {
			$messageError = "Nelze přidat, nejsou vyplněna správně všechna pole.";
			//echo "Nelze přidat, nejsou vyplněna všechna pole.";
			//dbClose($conn);
			renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
		}
	}
	else {
		$messageError = "ID není číselné.";
		//echo "ID není číselné.";
		renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
	}
}
else {
	$messageError = "Nezmáčkl se submit.";
	//echo "Nezmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) { // query db

		$conn = dbConnect();
		$id = $_GET['id'];
		//$sql = "SELECT * FROM actions WHERE id_action=$id";
		$sql = "SELECT id_action, id_user, id_user_koo, id_pharmacy, id_company, id_form, id_tradesman, datum, podklady, cil, cil_ks, cas, pauza, bonus, id_gs, sukl, skoleni, top_lekarna FROM actions WHERE id_action=$id";
		mysqli_query($conn, "SET NAMES utf8");
		$result = mysqli_query($conn, $sql);

		//$row = mysql_fetch_array($result);

		// check that the 'id' matches up with a row in the databse

		if ( $row = mysqli_fetch_row($result) ) { // get data from db
			$users 		= $row[1];
			$usersKoo 	= $row[2];
			$pharmacy 	= $row[3];
			$company 	= $row[4];
			$form 		= $row[5];
			$tradesman	= $row[6];
			$date 		= $row[7];
			$materials	= $row[8];
			$goal 		= $row[9];
			$goalKs		= $row[10];
			$time 		= $row[11];
			$pause		= $row[12];
			$bonus		= $row[13];
			$idGs 		= $row[14];
			$sukl		= $row[15];
			$skoleni	= $row[16];
			$topLekarna	= $row[17];
			$timeArray = explode("|", $time);

			$messageError = "";
			//echo "Načti z databáze";
			dbClose($conn);
			
			renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
		}
		else {
			$messageError = "Nepovedlo se načíst údaje v databázi.";
			//echo "Nepovedlo se načíst údaje v databázi.";
			dbClose($conn);
			renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
		}
		
	}
	else {
		$messageError = "Nepovedlo se změnit údaje v databázi.";
		//echo "Nepovedlo se změnit údaje v databázi.";
		renderForm($id, $pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
	}

}

?>