<?php

function renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck)   {

?>

<!DOCTYPE html>
<html>
<?php 
$pageTitle="Editace firem"; 
$description="Editace firem."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>

<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php $permArrayCurrent = array("editace-firem-formularu"); ?>
		<?php require("block-header.php"); ?>
		<?php //require("functions.php") ?>

		<div class="container">
			<main>
				<section class="form">
					<h2>Upravit firmu</h2>
					<?php require("company-form.php"); ?>
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


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) { // confirm that the 'id' value is a valid integer before getting the form data

	//echo "Zmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

		$valueName = $name 					= $_POST['name'];   // Uložíme si hodnoty do vlastních proměnných
		$valueCompanyPrice = $companyPrice 	= $_POST['company-price']; 
		$id 								= $_POST['id_company'];
		$userStat  		= $_POST['stat']; 
		$valueStat 		= $userStat;
		if (isset($_POST['active'])) { $active = "ano"; $valueActive = "ano"; $valueActiveCheck = "checked=\"checked\"";}
		else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; }

		if(empty($valueName)) { 
			$error_name = "Zadejte prosím jméno firmy.";
			$valueName  = "";
			$error = true;
		}

		if ( $error == false ) {
			$conn = dbConnect(); // Připojíme se k databázi
			mysqli_query($conn, "SET NAMES utf8");

			//Kontrola, zda není firma v databázi
			$sql  = "SELECT nazev FROM company WHERE nazev='$name' AND id_company!='$id'";
			//$data = mysqli_query($conn, $sql);
			if ( $data = mysqli_query($conn, $sql) ) {
				$row  = mysqli_fetch_row($data);

				//$row = NULL;

				if ($row != NULL) {
					$messageError = "Nelze přidat, firma s tímto jménem a adresou již je v databázi.";
					//echo "Nelze přidat, firma s tímto jménem a adresou již je v databázi.";
					dbClose($conn);
					renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
				}
				else {
					$sql = "UPDATE company SET nazev = '$valueName', cena_firmy = '$valueCompanyPrice', stat = '$userStat', aktivni='$valueActive' WHERE id_company='$id'";
					if (mysqli_query($conn, $sql)) {
						
						$messageSuccess = "Firma upravena.";
						//echo "Firma upravena.";
						renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
						//$valueName     	= "";
						//$valueTown		= "";
						//$valueAddress  	= "";

					}
					else {
						$messageError = "Nepodařilo se upravit firmu.";
						//echo "Nepodařilo se upravit firmu.";
						dbClose($conn);
						renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);

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
				renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
			}
		}
		else {
			$messageError = "Nelze přidat, nejsou vyplněna všechna pole.";
			//echo "Nelze přidat, nejsou vyplněna všechna pole.";
			dbClose($conn);
			renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
		}
	}
	else {
		$messageError = "ID není číselné.";
		//echo "ID není číselné.";
		renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
	}
}
else {
	$messageError = "Nezmáčkl se submit.";
	//echo "Nezmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) { // query db

		$conn = dbConnect();
		$id = $_GET['id'];
		$sql = "SELECT * FROM company WHERE id_company=$id";
		mysqli_query($conn, "SET NAMES utf8");
		$result = mysqli_query($conn, $sql);

		//$row = mysql_fetch_array($result);

		// check that the 'id' matches up with a row in the databse

		if ( $row = mysqli_fetch_row($result) ) { // get data from db
			$valueName 			= $row[1];
			$valueCompanyPrice  = $row[2];
			$userStat   		= $row[3];
			$valueActive   		= $row[4];

			$messageError = "";
			//echo "Načti z databáze";
			dbClose($conn);

			if ($valueActive == "ano") { $active = "ano"; ; $valueActiveCheck = "checked=\"checked\"";}
			else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; }
			
			renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
		}
		else {
			$messageError = "Nepovedlo se načíst údaje v databázi.";
			//echo "Nepovedlo se načíst údaje v databázi.";
			dbClose($conn);
			renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
		}
		
	}
	else {
		$messageError = "Nepovedlo se změnit údaje v databázi.";
		//echo "Nepovedlo se změnit údaje v databázi.";
		renderForm($id, $valueName, $valueCompanyPrice, $messageSuccess, $messageError, $userStat, $valueActive, $valueActiveCheck);
	}

}

?>