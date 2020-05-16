<?php 

	$error         	= false;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		if ( isset($_POST['nazev']) //&&  // prázné políčko taky vezme isset, pro tuto kontrolu bychom musel použít empty
			 //isset($_POST['test-1[]']) && 
			 //isset($_POST['test-1']) 
			 ) {

			if (isset($_POST['nazev'])) {
				$name 	= 	$_POST['nazev'];
			}
			else {
				$name 	= "";
			}
					
			$nazevFormulare 	= $name;
			$counterTests 		= 0;

			$test1 			= 	$_POST['test-1'];
			$test2 			= 	$_POST['test-2'];
			$test3 			= 	$_POST['test-3'];
			$test4 			= 	$_POST['test-4'];
			$test5 			= 	$_POST['test-5'];
			$test6 			= 	$_POST['test-6'];
			$test7 			= 	$_POST['test-7'];
			$test8 			= 	$_POST['test-8'];
			$test9 			= 	$_POST['test-9'];
			$test10 		= 	$_POST['test-10'];
			$test11 		= 	$_POST['test-11'];
			$test12 		= 	$_POST['test-12'];
			$test13 		= 	$_POST['test-13'];
			$test14 		= 	$_POST['test-14'];
			$test15 		= 	$_POST['test-15'];
			$test16 		= 	$_POST['test-16'];
			$test17 		= 	$_POST['test-17'];
			$test18 		= 	$_POST['test-18'];
			$test19 		= 	$_POST['test-19'];
			$test20 		= 	$_POST['test-20'];

			for ($i=1; $i <= 20; $i++) { // Kolik je vyplněných testů
				$allTestTemp 			= "allTest".$i;
				${$allTestTemp} 		= "";
				
				$testTemp = "test".$i;

				if (!empty(${$testTemp}[0] )) {
					$counterTests++;
				}
			}

			
			//echo "Celkem otázek: " . $counterTests . "<br>";

			//echo "Otázka číslo 1: \"".$qustion1[0]."\"<br>";	
			//echo "Odpověď číslo 1: \"".$qustion1[1]."\"<br>";	
			//echo "Otázka číslo 3: \"".$qustion1[2]."\"<br>";	
			//$promoQuestion1 = $qustion1[0];

			//$allTest1 = implode("|", $test1);		// Přidá do stringu oddělené rourou
			//$test1 = explode("|", $allTest1);	// Udělá ze stringu pole
			

			for ($i=1; $i <= $counterTests; $i++) { 	// Cyklus projíždějící počet testů
				$answer = false;
				$testTemp = "test".$i;
				$allTestTemp = "allTest".$i;
				${$allTestTemp} = implode("|", ${$testTemp});
				//echo "Test $i: ".${$allTestTemp}."<br>";
				for ($j=0; $j < 11; $j++) { 
					if (!empty(${$testTemp}[$j])) {
						if (${$testTemp}[$j] == "trueA" || ${$testTemp}[$j] == "trueB" || ${$testTemp}[$j] == "trueC" || ${$testTemp}[$j] == "trueD" || ${$testTemp}[$j] == "trueE") {
							$answer = true;
						}
					}
				}
				if ($answer == false) {
					echo "Nezadal jste odpověď k otázce č. $i<br>";
					$error = true;
				}
			}

			if ( $error == false ) {
				$conn = dbConnect(); // Připojíme se k databázi
				mysqli_query($conn, "SET NAMES utf8");


				//Kontrola, zda není formulář již v databázi
				$sql  = "SELECT test_nazev_zadani FROM test_otazky WHERE test_nazev_zadani='$name'";
				
				//echo $allTest1;

				//$data = mysqli_query($conn, $sql);
				if ( $data = mysqli_query($conn, $sql) ) {
					$row  = mysqli_fetch_row($data);

					$row = NULL;


					if ($row != NULL) {
						$messageError = "Nelze přidat, test s tímto názvem již je v databázi.";
					}
					else {
						$sql = "INSERT INTO test_otazky(test_nazev_zadani, test_1, test_2, test_3, test_4, test_5, test_6, test_7, test_8, test_9, test_10, test_11, test_12, test_13, test_14, test_15, test_16, test_17, test_18, test_19, test_20) VALUES('$name', '$allTest1', '$allTest2', '$allTest3', '$allTest4', '$allTest5', '$allTest6', '$allTest7', '$allTest8', '$allTest9', '$allTest10', '$allTest11', '$allTest12', '$allTest13', '$allTest14', '$allTest15', '$allTest16', '$allTest17', '$allTest18', '$allTest19', '$allTest20')";
						if (mysqli_query($conn, $sql)) {
							$nazevFormulare = "";
							$messageSuccess = "Test přidán. Nyní můžete přidat další.";
						}
						else {
							$messageError = "Nepodařilo se přidat test.";

							mysqli_query($conn, $sql);
							$row  = mysqli_fetch_row($data);
							//$messageError = $row;
						}
					}

				}
				else {
					$messageError = "Nepodařilo se přidat test. Chyba SQL dotazu, kontaktujte prosím administrátora.";
				}

			}
			else {
				$messageError = "Nepodařilo se přidat test. Pravděpodobně nejsou všude zaškrtnuté správné odpovědi.";
			}

		}

	}

?>