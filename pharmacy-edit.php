<?php

$error_name = $error_stat = $error_town = $error_address = $error_division = $error_cPerson = $error_chain = $error_rating = $error_vdl = $error_cPhone = "";

function renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone)   {

?>

<!DOCTYPE html>
<html>
<?php 
$pageTitle="Editace lékáren"; 
$description="Editace lékáren."; 
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
		<div class="container">
			<main>
				<section class="form">
					<h2>Upravit lékárnu</h2>
					<?php require("pharmacy-form.php"); ?>
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

	if (isset($_POST['vdl'])) {

		$name 			= mb_strtoupper($_POST['name'], 'UTF-8');   // Uložíme si hodnoty do vlastních proměnných
		$town 			= mb_strtoupper($_POST['town'], 'UTF-8');
		$address 		= mb_strtoupper($_POST['address'], 'UTF-8');
		(int)$vdl 		= $_POST['vdl'];
		$rating 		= mb_strtoupper($_POST['rating'], 'UTF-8');
		$division 		= mb_strtoupper($_POST['division'], 'UTF-8');
		$cPerson 		= $_POST['c-person'];
		$cPhone 		= $_POST['c-phone'];
		$id  			= $_GET['id'];

		$valueName		= $name;
		$valueTown		= $town;
		$valueAddress	= $address;
		$valueDivision  = $division;
		$stat 			= $_POST['stat']; 
		$valueStat 		= $stat;
		$valuecPerson  	= $cPerson;
		$valuecPhone  	= $cPhone;
		if (empty($_POST['chain'])) { $chain = NULL; } else { $chain = mb_strtoupper($_POST['chain'], 'UTF-8'); }
		$valueChain 	= $chain;
		(int)$valueVdl  = (int)$vdl;
		$valueRating	= $rating;

		$reg_phone    = "#^[0-9+][0-9]*$#";

		if(empty($valueName)) { 
			$error_name = "Zadejte prosím jméno lékárny.";
			$valueName  = "";
			$error = true;
		}

		if(empty($valueTown)) { 
			$error_town = "Zadejte prosím město, kde se lékárna nachází.";
			$valueTown  = "";
			$error = true;
		}

		if(empty($valueAddress)) { 
			$error_address = "Zadejte prosím ulici lékárny.";
			$valueAddress  = "";
			$error = true;
		}

		if(empty($valueDivision)) { 
			$error_division = "Zadejte prosím celou okres lékárny.";
			$valueDivision  = "";
			$error = true;
		}

		if(empty($valuecPerson)) { 
			$error_cPerson = "Zadejte prosím jméno kontaktní osoby.";
			$valuecPerson  = "";
			$error = true;
		}

		if(empty($valueStat)) { 
			$error_stat = "Zadejte prosím v jakém státě se lékárna nachází.";
			$valueStat  = "";
			$error = true;
		}
		/*
		if(empty($valueChain)) { 
			$error_chain = "Zadejte řetězec, pod který lékárna spadá.";
			$valuecChain  = "";
			$error = true;
		}
		*/
		if(strlen($rating)!=1) { 
			$error_rating = "Zadejte prosím 1 znak - A, B, C, D, E.";
			$valueRating  = "";
			$error = true;
		}

		if(!is_numeric($vdl)||empty($vdl)) { 
			$error_vdl = "Identifikátor VDL musí být vyplněn a číselný.";
			$valueVdl  = "";
			$error = true;
		}

		if(!preg_match($reg_phone, $cPhone)) { // Projde string, zda se NEshoduje s podmínkami reg. výrazů
			$error_cPhone = "Telefon by měl být bez mezer. Napřklad ve tvaru: +420123456789 nebo 123456789.";
			$valuecPhone  = "";
			$error = true;
		}

		if ( $error == false ) {
			$conn = dbConnect(); // Připojíme se k databázi
			mysqli_query($conn, "SET NAMES utf8");

			//Kontrola, zda není lékárna v databázi

			
			//$sql  = "SELECT COUNT(vdl)vdl FROM pharmacy WHERE vdl='$vdl'";
			//echo $id."<br>";
			$sql  = "SELECT vdl FROM pharmacy WHERE vdl=$vdl AND id_pharmacy!='$id'";
			if ( $data = mysqli_query($conn, $sql) ) {
				$row  = mysqli_fetch_row($data);

				//$row = NULL;
				//echo $row[0]."<br>";
				if ($row[0] > 1) {
					$messageError = "Nelze přidat, lékárna s tímto identifikátorem VDL již je v databázi.";
					//echo "Nelze přidat, lékárna s tímto jménem a adresou již je v databázi.";
					dbClose($conn);
					renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
				}
				else {
					$sql = "UPDATE pharmacy SET rating = '$valueRating', vdl = '$valueVdl', retezec = '$valueChain', nazev = '$valueName', ulice = '$valueAddress', mesto = '$valueTown', okres = '$valueDivision', stat = '$valueStat', k_jmeno = '$valuecPerson', k_cislo = '$valuecPhone' WHERE id_pharmacy='$id'";
					if (mysqli_query($conn, $sql)) {
						
						$messageSuccess = "Lékárna upravena.";
						//echo "Lékárna upravena.";
						renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
						//$valueName     	= "";
						//$valueTown		= "";
						//$valueAddress  	= "";

					}
					else {
						$messageError = "Nepodařilo se upravit lékárnu.";
						//echo "Nepodařilo se upravit lékárnu.";
						dbClose($conn);
						renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);

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
				renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
			}
		}
		else {
			$messageError = "Nelze přidat, nejsou vyplněna všechna pole.";
			//echo "Nelze přidat, nejsou vyplněna všechna pole.";
			//dbClose($conn);
			renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
		}
	}
	else {
		$messageError = "ID není číselné.";
		//echo "ID není číselné.";
		renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
	}
}
else {
	$messageError = "Nezmáčkl se submit.";
	//echo "Nezmáčkl se submit.";

	if (isset($_GET['id'])) { // query db
		$valueName		= "";
		$valueTown		= "";
		$valueAddress	= "";
		$valueDivision  = "";
		$valuecPerson  	= "";
		$valuecPhone  	= "";
		$valueChain 	= "";
		$valueVdl  		= "";
		$valueStat  	= "";
		$id  			= $_GET['id'];
		$valueRating	= "";

		

		$conn = dbConnect();
		$sql = "SELECT * FROM pharmacy WHERE id_pharmacy=$id";
		mysqli_query($conn, "SET NAMES utf8");
		$result = mysqli_query($conn, $sql);

		//$row = mysql_fetch_array($result);

		// check that the 'id' matches up with a row in the databse

		if ( $row = mysqli_fetch_row($result) ) { // get data from db
			$valueVdl 		= $row[1];
			$valueRating 	= $row[2];
			$valueChain 	= $row[3];
			$valueName 		= $row[4];
			$valueAddress 	= $row[5];
			$valueTown 		= $row[6];
			$valueDivision 	= $row[7];
			$valueStat 		= $row[8];
			$valuecPerson 	= $row[9];
			$valuecPhone 	= $row[10];
			

			$messageError = "";
			//echo "Načti z databáze";
			dbClose($conn);
			
			renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
		}
		else {
			$messageError = "Nepovedlo se načíst údaje v databázi.";
			//echo "Nepovedlo se načíst údaje v databázi.";
			dbClose($conn);
			renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
		}
		
	}
	else {
		$messageError = "Nepovedlo se změnit údaje v databázi.";
		//echo "Nepovedlo se změnit údaje v databázi.";
		renderForm($id, $valueVdl, $valueRating, $valueChain, $valueName, $valueAddress, $valueTown, $valueDivision, $valueStat, $valuecPerson, $valuecPhone, $messageSuccess, $messageError, $error_name, $error_town, $error_address, $error_division, $error_stat, $error_cPerson, $error_chain, $error_rating, $error_vdl, $error_cPhone);
	}

}

?>