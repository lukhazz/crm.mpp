<?php 

	$error         	= false;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		if ( isset($_POST['company']) && // prázné políčko taky vezme isset, pro tuto kontrolu bychom musel použít empty
			 isset($_POST['test']) &&
			 isset($_POST['form']) && 
			 isset($_POST['questions']) && 
			 isset($_POST['users']) && 
			 isset($_POST['try']) 
			  ) {

			;

			//$error 		= false;
			if(empty($_POST['company'])) { 
				$error_company = "Vyberte prosím firmu klienta.";
				$error = true;
			}

			if(empty($_POST['try'])) { 
				$error_goal = "Zadejte prosím maximální počet pokusů.";
				$error = true;
			}		
			
			if(empty($_POST['questions'])) { 
				$error_questions = "Zadejte prosím minimální počet správných otázek ke splnění testu.";
				$error = true;
			}

			if(empty($_POST['test'])) { 
				$error_test = "Vyberte prosím zadání testu.";
				$error = true;
			}

			if(empty($_POST['users']) || $_POST['users'] == 1) { 
				$error_test = "Vyberte uživatelé, kterých se to týká.";
				$error = true;
			}

			(int)$company 		= $_POST['company'];
			(int)$test 			= $_POST['test'];
			(int)$form 			= $_POST['form'];
			(int)$questions 	= $_POST['questions'];
			(int)$try 			= $_POST['try'];  
			$users 				= $_POST['users'];
			$users 				= array_unique($users); //odstrani duplicity
			asort($users);								//seradi uzivatele podle id
			$usersAll 			= implode("|", $users);
			date_default_timezone_set('Europe/Prague');

			//echo "Počet vybraných uživatelů: ".count($users)."<br>";
			//for ($i=0; $i < count($users); $i++) { 
			//	echo "Uživatel: $users[$i]<br>";
			//}
			//echo "Uživatelé: $usersAll <br>";
			
			if ( $error == false ) {
				$conn = dbConnect(); // Připojíme se k databázi
				mysqli_query($conn, "SET NAMES utf8");
				//echo "jdu zkontrolovat duplicitu<br>";
				$sql = "
				INSERT INTO test_zadani(id_company, id_form, max_pokusu, spravnych_otazek, uzivatele) 
				VALUES('$company', '$form', '$try', '$questions', '$usersAll')";
				//echo "<br>$sql<br>";

				if (mysqli_query($conn, $sql)) {
					//echo "Test přiřazen.<br>";
					//$messageSuccess 	= "Test přiřazen. Nyní můžete přidat další.";

					$sqlIdZadani = "SELECT id_test_zadani FROM `test_zadani` ORDER BY `test_zadani`.`id_test_zadani` DESC LIMIT 1";

					if ($data=mysqli_query($conn, $sqlIdZadani)) {
						$row = mysqli_fetch_row($data);
						$idTestZadani = $row[0];
						//echo "ID posledniho zadani: $idTestZadani<br>";

						
						for ($i=0; $i < count($users); $i++) { 
							for ($j=0; $j < $try; $j++) { 
								if ($j==0) {
									$odemknuto = "ano";
								}
								else {
									$odemknuto = "ne";
								}
								$cisloPokusu = ($j+1);
								$odeslano = "ne";
								$dateSend = date('Y-m-d H:i:s');
								$sqlPokus = "
									INSERT INTO test_pokus(cas_vygenerovani) 
									VALUES('$dateSend')";
								//echo "$sqlPokus<br>";
								if (mysqli_query($conn, $sqlPokus)) {

									$sqlIdPokus = "SELECT id_test_pokus FROM `test_pokus` ORDER BY `test_pokus`.`id_test_pokus` DESC LIMIT 1";

									if ($data=mysqli_query($conn, $sqlIdPokus)) {
										$rowPokus = mysqli_fetch_row($data);
										$idTestPokus = $rowPokus[0];
										//echo "Pokus vytvořen<br>";
										//echo "Testy přiřazeny. Nyní můžete přidat další.<br>";

										$sql = "
											INSERT INTO test(id_test_zadani, id_test_otazky, id_test_pokus, id_user, odeslano, odemknuto, cislo_pokusu) 
											VALUES('$idTestZadani', '$test', '$idTestPokus', '$users[$i]', '$odeslano', '$odemknuto', '$cisloPokusu')";
										//echo "$sql<br>";
										if (mysqli_query($conn, $sql)) {
											$messageSuccess 	= "Testy přiřazeny. Nyní můžete přidat další.";
										}
										else {
											//echo "Nepodařil se vytvořit test.<br>";
											$messageError = "Nepodařil se vytvořit test. Chyba 3.";	
										}
									}
									else {
										//echo "Nepodařil se vytvořit test.<br>";
										$messageError = "Nepodařil se vytvořit test. Chyba 2.";	
									}
								}

								else {
									//echo "Nepodařil se vytvořit test.<br>";
									$messageError = "Nepodařil se vytvořit test. Chyba 1.";	
								}
							}
							
							

						}

					}
					else {
						//echo "Nepodařilo se najít ID příslušného zadání.<br>";
						$messageError = "Nepodařilo se  najít ID příslušného zadání.";	
					}
				}
				else {
					//echo "Nepodařilo se přidat akci<br>";
					$messageError = "Nepodařilo se přiřadit test.";	
				}

				dbClose($conn); // Odpojíme se z D
			}
			else {
				$messageError = "Nepodařilo se přiřadit test. Některé data byla špatně vyplněna.";	
			}

		}
		else {
			//echo "chyba";	

			if(empty($_POST['company'])) { 
				$error_company = "Vyberte prosím firmu klienta.";
			}

			if(empty($_POST['try'])) { 
				$error_goal = "Zadejte prosím maximální počet pokusů.";
			}		
			
			if(empty($_POST['questions'])) { 
				$error_questions = "Zadejte prosím minimální počet správných otázek ke splnění testu.";
			}

			if(empty($_POST['test'])) { 
				$error_test = "Vyberte prosím zadání testu.";
			}

			if(empty($_POST['users']) || $_POST['users']==1) { 
				$error_test = "Vyberte uživatelé, kterých se to týká.";
			}
		}
	}

?>
