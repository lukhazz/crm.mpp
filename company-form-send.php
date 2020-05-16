<?php 

	$error         	= false;
	$valueName     	= "";
	$valueActiveCheck 		="checked=\"checked\"";

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		if ( isset($_POST['name']) ) {
			//$error 		= false;
			$name 			= $_POST['name']; 
			$companyPrice 	= $_POST['company-price']; 
			$valueName		= $name;
			$stat 			= $_POST['stat']; 
			$valueStat 		= $stat;
			if (isset($_POST['active'])) { $active = "ano"; $valueActive = "ano"; $valueActiveCheck = "checked=\"checked\"";}
			else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; }


			if(empty($valueName)) { 
				$error_name = "Zadejte prosím jméno firmy.";
				$valueName  = "";
				$error = true;
			}

			if(empty($valueStat)) { 
				$error_stat = "Zadejte prosím pro jaký stát je tato firma určena.";
				$valueStat  = "";
				$error = true;
			}

			if ( $error == false ) {
				$conn = dbConnect(); // Připojíme se k databázi
				mysqli_query($conn, "SET NAMES utf8");

				//Kontrola, zda není lékárna v databázi
				$sql  = "SELECT nazev FROM company WHERE nazev='$name'";
				//$data = mysqli_query($conn, $sql);
				if ( $data = mysqli_query($conn, $sql) ) {
					$row  = mysqli_fetch_row($data);

					if ($row != NULL) {
						$messageError = "Nelze přidat, firma s tímto jménem a adresou již je v databázi.";
					}
					else {
						$sql = "INSERT INTO company(nazev,cena_firmy, stat, aktivni) VALUES('$name','$companyPrice', '$stat', '$active')";
						if (mysqli_query($conn, $sql)) {
							
							$messageSuccess = "Firma přidána. Nyní můžete přidat další.";
							$valueName     	= "";
							$valueName     	= "";
							$valueActiveCheck = "checked=\"checked\"";

						}
						else {
							$messageError = "Nepodařilo se přidat firmu.";

							mysqli_query($conn, $sql);
							$row  = mysqli_fetch_row($data);
							//$messageError = $row;
						}
					}

				}
			}

		}
	}
?>