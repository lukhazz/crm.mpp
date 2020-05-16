<?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$error = false;
	$messageError = "";
	$messageSuccess = "";

	
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "0";
	}
	//echo "ID je: ".$id."<br>";


	$sqlProtocol = "SELECT actions.datum, actions.cas, actions.cil, actions.cil_ks, pharmacy.nazev, users.prijmeni, users.jmeno, pharmacy.mesto, pharmacy.stat
	FROM actions 

	INNER JOIN pharmacy
	ON actions.id_pharmacy=pharmacy.id_pharmacy

	INNER JOIN users
	ON actions.id_user=users.id_user

	WHERE actions.id_action=$id";

	date_default_timezone_set('Europe/Prague');	// Pásmo
	setlocale(LC_MONETARY, 'it_IT');
	SetLocale(LC_ALL, "Czech");

	$data 		= mysqli_query($conn, $sqlProtocol);
	$row 		= mysqli_fetch_row($data);
	$date 		= date("d. m. Y", strtotime($row[0]));
	$timeArray 	= explode("|", $row[1]);
	$time 		= vypisCas( $timeArray );
	$goal 		= number_format($row[2], 0, ',', ' ');
	$goalKs 	= $row[3]." Ks";
	$pharmacy 	= $row[4];
	$user 		= $row[5]." ".$row[6];
	$town		= $row[7];
	$pharmacyCountry = $row[8];

	$mena = "Kč,-";
	if ($pharmacyCountry=="sk") {
		$mena = "&euro;";
	}

	//echo "$pharmacyCountry";

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) { // confirm that the 'id' value is a valid integer before getting the form data

		//echo "Zmáčkl se submit.<br>";

		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
			//echo "ID je číselné.";


		}
		else {
			$messageError = "ID není číselné.";
			//echo "ID není číselné.";
		}
	}

	else {
		$messageError = "Nezmáčkl se submit.";
		//echo "Nezmáčkl se submit.";

		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] = 0) { // query db

		}
		
		else {
			//$messageError = "Nepovedlo se změnit údaje v databázi.";
			//echo "Nepovedlo se změnit údaje v databázi.";
		}
	}

	dbClose($conn); // Odpojíme se z DB

?>