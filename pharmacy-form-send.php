<?php 

	$error         	= false;
	$valueName     	= "";
	$valueTown		= "";
	$valueChain  	= "";
	$valueVdl  		= "";
	$valueRating  	= "";
	$valueAddress  	= "";
	$valueTown  	= "";
	$valueDivision  = "";
	$valuecPerson  	= "";
	$valuecPhone  	= "";
	$valueStat  	= "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		if ( isset($_POST['name']) &&  // prázné políčko taky vezme isset, pro tuto kontrolu bychom musel použít empty
			 isset($_POST['town']) && 
			 isset($_POST['chain']) && 
			 isset($_POST['vdl']) && 
			 isset($_POST['rating']) && 
			 isset($_POST['division']) && 
			 isset($_POST['c-person']) && 
			 isset($_POST['town']) && 
			 isset($_POST['c-phone']) ) {
			//$error 		= false;
			$name 			= mb_strtoupper($_POST['name'], 'UTF-8');   // Uložíme si hodnoty do vlastních proměnných
			$town 			= mb_strtoupper($_POST['town'], 'UTF-8');
			$address 		= mb_strtoupper($_POST['address'], 'UTF-8');
			$chain 			= mb_strtoupper($_POST['chain'], 'UTF-8');
			$vdl 			= $_POST['vdl'];
			$rating 		= mb_strtoupper($_POST['rating'], 'UTF-8');
			$division 		= mb_strtoupper($_POST['division'], 'UTF-8');
			$cPerson 		= $_POST['c-person'];
			$cPhone 		= $_POST['c-phone'];
			$stat 			= $_POST['stat']; 
			$valueStat 		= $stat;
			$valueName		= $name;
			$valueTown		= $town;
			$valueAddress	= $address;
			$valueDivision  = $division;
			$valuecPerson  	= $cPerson;
			$valuecPhone  	= $cPhone;
			$valueChain 	= $chain;
			$valueVdl  		= $vdl;
			$valueRating	= $rating;
			//echo "$valueStat<br>";

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

			/*if(empty($valueChain)) { 
				$error_chain = "Zadejte řetězec, pod který lékárna spadá.";
				$valuecChain  = "";
				$error = true;
			}*/

			if(strlen($rating)!=1) { 
				$error_rating = "Zadejte prosím 1 znak - A, B, C, D, E.";
				$valueRating  = "";
				$error = true;
			}

			if(!is_numeric($vdl)) { 
				$error_vdl = "Identifikátor VDL musí být číselný.";
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
				$sql  = "SELECT vdl FROM pharmacy WHERE vdl='$vdl'";
				//$data = mysqli_query($conn, $sql);
				if ( $data = mysqli_query($conn, $sql) ) {
					$row  = mysqli_fetch_row($data);

					if ($row != NULL) {
						$messageError = "Nelze přidat, lékárna s identifikátorem VDL již je v databázi.";
					}
					else {
						$sql = "INSERT INTO pharmacy(vdl, rating, retezec, nazev, ulice, mesto, okres, stat, k_jmeno, k_cislo) VALUES('$vdl', '$rating', '$chain', '$name', '$address', '$town', '$division', '$stat', '$cPerson', '$cPhone')";
						if (mysqli_query($conn, $sql)) {
							
							$messageSuccess = "Lékárna přidána. Nyní můžete přidat další.";
							$valueName     	= "";
							$valueTown		= "";
							$valueChain  	= "";
							$valueVdl  		= "";
							$valueRating  	= "";
							$valueAddress  	= "";
							$valueTown  	= "";
							$valueDivision  = "";
							$valuecPerson  	= "";
							$valuecPhone  	= "";
							$valueStat  	= "";
						}
						else {
							$messageError = "Nepodařilo se přidat lékárnu.";

							mysqli_query($conn, $sql);
							$row  = mysqli_fetch_row($data);
							//$messageError = $row;
						}
					}

				}
				dbClose($conn); 
			}

		}
	}
?>