<?php

function renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive)   {

?>

<!DOCTYPE html>
<html>
<?php 
$pageTitle="Editace reprezentanta"; 
$description="Editace reprezentanta."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>

<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php require("block-header.php"); ?>
		<?php //require("functions.php") ?>
		<?php 
			//if (isset($_POST['active'])) { $active = "ano"; $valueActive = "ano"; $valueActiveCheck = "checked=\"checked\"";}
			//else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; } 
		?>
		<div class="container">
			<main>
				<section class="form">
					<h2>Upravit reprezentanta</h2>
					<?php $status=""; require("tradesman-form.php"); ?>
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
$messageError = "";
$messageSuccess = "";
$error_phone = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) { // confirm that the 'id' value is a valid integer before getting the form data

	//echo "Zmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

		$valueName 	= $name 	= $_POST['name']; 
		$valuePhone = $phone 	= $_POST['phone'];  
		$valueEmail = $email 	= $_POST['email'];  
		(int)$company 			= $_POST['company']; 
		$id 					= $_POST['id_tradesman'];
		$userStat  				= $_POST['stat']; 
		$valueStat 				= $userStat;
		$reg_phone    = "#^[0-9+][0-9]*$#";

		if (isset($_POST['active'])) { $active = "ano"; $valueActive = "ano"; $valueActiveCheck = "checked=\"checked\"";}
		else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; }

		if(empty($valueName)) { 
			$error_name = "Zadejte prosím příjmení reprezentanta.";
			$valueName  = "";
			$error = true;
		}

		//if(empty($valueEmail)) { 
		//	$error_email = "Zadejte prosím emailovou adresu.";
		//	$valueEmail  = "";
		//	$error = true;
		//}

		if(empty($_POST['company'])) { 
			$error_company = "Vyberte prosím firmu klienta.";
			$valueCompany  = "";
			$error = true;
		}

		if(!preg_match($reg_phone, $phone)) { // Projde string, zda se NEshoduje s podmínkami reg. výrazů
			$error_phone = "Telefon by měl být bez mezer. Napřklad ve tvaru: +420123456789 nebo 123456789.";
			$valuePhone  = "";
			$error = true;
		}

		if ( $error == false ) {
			$conn = dbConnect(); // Připojíme se k databázi
			mysqli_query($conn, "SET NAMES utf8");

			//Kontrola, zda není firma v databázi
			$sql  = "SELECT telefon FROM tradesman WHERE telefon='$phone' AND prijmeni='$name' AND id_tradesman!='$id'";
			//$data = mysqli_query($conn, $sql);
			if ( $data = mysqli_query($conn, $sql) ) {
				$row  = mysqli_fetch_row($data);

				//$row = NULL;

				if ($row != NULL) {
					$messageError = "Nelze upravit, reprezentant s tímto příjmením  a telefonem již je v databázi.";
					//echo "Nelze přidat, firma s tímto jménem a adresou již je v databázi.";
					dbClose($conn);
					renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
				}
				else {
					$sql = "UPDATE tradesman SET prijmeni = '$valueName', telefon = '$valuePhone', email = '$valueEmail', id_company = '$company', stat = '$userStat', aktivni='$valueActive' WHERE id_tradesman='$id'";
					if (mysqli_query($conn, $sql)) {
						
						$messageSuccess = "Reprezentant upraven.";
						//echo "Firma upravena.";
						renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
						//$valueName     	= "";
						//$valueTown		= "";
						//$valueAddress  	= "";

					}
					else {
						$messageError = "Nepodařilo se upravit reprezentanta.";
						//echo "Nepodařilo se upravit firmu.";
						dbClose($conn);
						renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);

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
				renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
			}
		}
		else {
			$messageError = "Nelze upravit, nejsou vyplněna všechna pole.";
			//echo "Nelze přidat, nejsou vyplněna všechna pole.";
			//dbClose($conn);
			renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
		}
	}
	else {
		$messageError = "ID není číselné.";
		//echo "ID není číselné.";
		renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
	}
}
else {
	$messageError = "Nezmáčkl se submit.";
	//echo "Nezmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) { // query db

		$conn = dbConnect();
		$id = $_GET['id'];
		$sql = "SELECT * FROM tradesman WHERE id_tradesman=$id";
		mysqli_query($conn, "SET NAMES utf8");
		$result = mysqli_query($conn, $sql);

		//$row = mysql_fetch_array($result);

		// check that the 'id' matches up with a row in the databse

		if ( $row = mysqli_fetch_row($result) ) { // get data from db
			$company  			= $row[1];
			$valueName 			= $row[2];
			$valuePhone			= $row[3];
			$userStat   		= $row[4];
			$valueEmail   		= $row[5];
			$valueActive   		= $row[6];

			if ($valueActive == "ano") { $valueActive = $active = "ano"; ; $valueActiveCheck = "checked=\"checked\"";}
			else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; }

			$messageError = "";
			//echo "Načti z databáze";
			dbClose($conn);
			
			renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
		}
		else {
			$messageError = "Nepovedlo se načíst údaje v databázi.";
			//echo "Nepovedlo se načíst údaje v databázi.";
			dbClose($conn);
			renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
		}
		
	}
	else {
		$messageError = "Nepovedlo se změnit údaje v databázi.";
		//echo "Nepovedlo se změnit údaje v databázi.";
		renderForm($id, $valueName, $valuePhone, $valueEmail, $company, $messageSuccess, $messageError, $error_phone, $userStat, $valueActiveCheck, $valueActive);
	}

}

?>