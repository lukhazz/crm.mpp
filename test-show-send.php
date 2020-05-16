<?php 

	$error         	= false;
	//$revisionEdit 	= false;
	$valueActiveCheck 		="checked=\"checked\"";
	$questionSuccess = false;
	date_default_timezone_set('Europe/Prague');
	$dateStart = date('Y-m-d H:i:s');


	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) { // confirm that the 'id' value is a valid integer before getting the form data

		//echo "Zmáčkl se submit.<br>";
		$counterSuccess = 0;
		$dateSend = date('Y-m-d H:i:s');

		if(isset($_POST['question-1'])){ 	$test1 		= 	$_POST['question-1']; } 	else { $test1 		= NULL; }
		if(isset($_POST['question-2'])){ 	$test2 		= 	$_POST['question-2']; } 	else { $test2 		= NULL; }
		if(isset($_POST['question-3'])){ 	$test3 		= 	$_POST['question-3']; } 	else { $test3 		= NULL; }
		if(isset($_POST['question-4'])){ 	$test4 		= 	$_POST['question-4']; } 	else { $test4 		= NULL; }
		if(isset($_POST['question-5'])){ 	$test5 		= 	$_POST['question-5']; } 	else { $test5 		= NULL; }
		if(isset($_POST['question-6'])){ 	$test6 		= 	$_POST['question-6']; } 	else { $test6 		= NULL; }
		if(isset($_POST['question-7'])){ 	$test7 		= 	$_POST['question-7']; } 	else { $test7 		= NULL; }
		if(isset($_POST['question-8'])){ 	$test8 		= 	$_POST['question-8']; } 	else { $test8 		= NULL; }
		if(isset($_POST['question-9'])){ 	$test9 		= 	$_POST['question-9']; } 	else { $test9 		= NULL; }
		if(isset($_POST['question-10'])){ 	$test10 	= 	$_POST['question-10']; }	else { $test10 		= NULL; }
		if(isset($_POST['question-11'])){ 	$test11 	= 	$_POST['question-11']; }	else { $test11 		= NULL; }
		if(isset($_POST['question-12'])){ 	$test12 	= 	$_POST['question-12']; }	else { $test12 		= NULL; }
		if(isset($_POST['question-13'])){ 	$test13 	= 	$_POST['question-13']; }	else { $test13 		= NULL; }
		if(isset($_POST['question-14'])){ 	$test14 	= 	$_POST['question-14']; }	else { $test14 		= NULL; }
		if(isset($_POST['question-15'])){ 	$test15 	= 	$_POST['question-15']; }	else { $test15 		= NULL; }
		if(isset($_POST['question-16'])){ 	$test16 	= 	$_POST['question-16']; }	else { $test16 		= NULL; }
		if(isset($_POST['question-17'])){ 	$test17 	= 	$_POST['question-17']; }	else { $test17 		= NULL; }
		if(isset($_POST['question-18'])){ 	$test18 	= 	$_POST['question-18']; }	else { $test18 		= NULL; }
		if(isset($_POST['question-19'])){ 	$test19 	= 	$_POST['question-19']; }	else { $test19 		= NULL; }
		if(isset($_POST['question-20'])){ 	$test20 	= 	$_POST['question-20']; }	else { $test20 		= NULL; }

		$testResult1 	= 	$allTest1 	= "";
		$testResult2 	= 	$allTest2 	= "";
		$testResult3 	= 	$allTest3 	= "";
		$testResult4 	= 	$allTest4 	= "";
		$testResult5 	= 	$allTest5 	= "";
		$testResult6 	= 	$allTest6 	= "";
		$testResult7 	= 	$allTest7 	= "";
		$testResult8 	= 	$allTest8 	= "";
		$testResult9 	= 	$allTest9 	= "";
		$testResult10 	= 	$allTest10 	= "";
		$testResult11 	= 	$allTest11 	= "";
		$testResult12 	= 	$allTest12 	= "";
		$testResult13 	= 	$allTest13 	= "";
		$testResult14 	= 	$allTest14 	= "";
		$testResult15 	= 	$allTest15 	= "";
		$testResult16 	= 	$allTest16 	= "";
		$testResult17 	= 	$allTest17 	= "";
		$testResult18 	= 	$allTest18 	= "";
		$testResult19 	= 	$allTest19 	= "";
		$testResult20 	= 	$allTest20 	= "";

		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
			//echo "ID je číselné.";
			//echo "$test1[0]<br>";

			for ($i=0; $i < 20; $i++) { // Cyklus projizdejici vsechny otazky
				$testTemp = "test".($i+1);
				$allTestTemp = "allTest".$i;
				$QuestionArray 	= explode("|", $rowTest[$i]);
				$testResultTemp = "testResult".($i+1);
				if ( ${$testTemp} != NULL ) { 
					${$allTestTemp} = implode("|", ${$testTemp});
					//echo "${$allTestTemp}<br>";
				}	
				if (!empty($QuestionArray[1]) && empty(${$testTemp})) { // Pokud neni zadana odpoved na otazku, je to chybna odpoved
					//echo "QuestionArray $QuestionArray[1]<br>";
					${$testResultTemp} = "FAIL|";
					//echo "<h3>Otázka ".($i+1)." </h3>";
					//echo "Nezadana (chybná) odpověď otázky".($i+1)." - nutno uložit záporný výsledek<br>";
					//echo "======================================================================================================================<br>";
					continue;
				}	
				if (empty(${$testTemp})) {
					continue;
				}			
				//echo "<h3>Otázka ".($i+1)." </h3>";
				if (!empty($QuestionArray[1])) {
					//echo $QuestionArray[1]." porovnávám s: "; // Otazka
					//echo ${$testTemp}[$k]."<br>"; // Odpoved uzivatele
					$questionSuccess = false;
					for ($k=0; $k < count(${$testTemp}); $k++) { // Cyklus projizdejici odpovedi uzivatele 

						//echo "Hledám odpověď: ".${$testTemp}[$k]." v ".($i+1).". otázce.<br>";

						for ($l=0; $l < count($QuestionArray); $l++) { 
							if ($QuestionArray[$l]=="trueA" || $QuestionArray[$l]=="trueB" || $QuestionArray[$l]=="trueC" || $QuestionArray[$l]=="trueD" || $QuestionArray[$l]=="trueE" ) {
								if (in_array($QuestionArray[$l], ${$testTemp})) {
								    //echo "<br>Správná odpověď otázky".($i+1)."<br>";
								    $questionSuccess = true;
								}
								else {
									$questionSuccess = false;
									break;
								}
							}
						}
					}
				}		
				if ($questionSuccess == false) {
					//echo "<br>Chybná odpověď otázky".($i+1)." - nutno uložit záporný výsledek<br>";
					${$testResultTemp} = "FAIL|".${$allTestTemp};
				}
				else {
					$counterSuccess++;
					//echo "<br>Správná odpověď otázky".($i+1)." - nutno uložit kladný výsledek<br>";
					${$testResultTemp} = "SUCCESS|".${$allTestTemp};
					$questionSuccess = false; // vynuluji pro dalsi testy
				}

				//echo "======================================================================================================================<br>";
			}

			echo "<h3>Výsledky</h3>";
			for ($o=0; $o < 20; $o++) { // vypis vysledky pro kontrolu
				$testResultTemp = "testResult".($o+1);
				if (empty(${$testResultTemp})) { break; }
				//echo ($o+1).". test: ".${$testResultTemp}."<br>";
			}

			$counterQuestionsCompleted = $counterQuestions+1;
			//$defaultPercent = ($counterQuestionsCompleted/$correct)*100;
			$successPercent = ($counterSuccess/$counterQuestionsCompleted)*100;

			if ($correct <= $counterSuccess) {
				$splneno = "ano";
			}
			else {
				$splneno = "ne";
			}

			//echo "Správnost zadání $counterSuccess z $correct, takže splněno: $splneno.<br>";
			//echo "Správnost odpovědí $counterSuccess z $counterQuestionsCompleted , to je $successPercent%<br>";
			//echo "Datum spuštění testu: $dateStart | Datum odeslání: $dateSend<br>";

			if ( $error == false ) {
				//$conn = dbConnect(); // Připojíme se k databázi
				mysqli_query($conn, "SET NAMES utf8");
				if (!empty($_GET['id'])) {
					$id = $_GET['id'];
				}

				$sql = "UPDATE test_pokus SET procent='$successPercent', cas_do='$dateSend', test_1='$testResult1', test_2='$testResult2', test_3='$testResult3', test_4='$testResult4', test_5='$testResult5', test_6='$testResult6', test_7='$testResult7', test_8='$testResult8', test_9='$testResult9', test_10='$testResult10', test_11='$testResult11', test_12='$testResult12', test_13='$testResult13', test_14='$testResult14', test_15='$testResult15', test_16='$testResult16', test_17='$testResult17', test_18='$testResult18', test_19='$testResult19', test_20='$testResult20'
				 	WHERE id_test_pokus='$idPokusu'";
				$sqlOdeslano = "UPDATE test SET odeslano='ano', splneno ='$splneno'
				 	WHERE id_test='$id'";

				if ( $try > $cisloPokusu && $splneno == "ne" ) {
					echo "Musím udělat další pokus<br>";
					$sqlOdemknout = "UPDATE test SET odemknuto='ano' 
				 	WHERE splneno ='ne' AND odeslano='ne' AND id_test_otazky='$idTestOtazky' AND id_user='$idUser' LIMIT 1
				 	";
				 	echo "$sqlOdemknout<br>";
				 	if (mysqli_query($conn, $sqlOdemknout) ) {
						echo "Nový pokus odemknut<br>";
				 	}
				}

				//echo "$sqlOdeslano<br>";
				
				if (mysqli_query($conn, $sql) && mysqli_query($conn, $sqlOdeslano) ) {
					//echo "Výsledek testu byl úspěšně zapsán do databáze<br>";
					$messageSuccess = "Výsledek testu byl úspěšně zapsán do databáze.";
					//header('location: homepage.php');
				}
				else {
					//echo "chyba SQL dotazu<br>";
					$messageError = "Nepodařilo se uložit výsledek testu do databáze.";
				}
					
			}



		}
		else {
			$messageError = "ID není číselné.";
			//echo "ID není číselné.";
		}
	}

	else {
		$messageSuccess = "Test byl vygenerován.";
		//echo "Test byl vygenerován.";

		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) { // query db

			//echo "idPokusu je $idPokusu<br>";

			$sqlDateStartCheck = "
					SELECT cas_od
					FROM test_pokus
					WHERE id_test_pokus = '$idPokusu'";

			$sqlDateStart = "
					UPDATE test_pokus 
					SET cas_od='$dateStart'
					WHERE id_test_pokus = '$idPokusu'";

			$data = mysqli_query($conn, $sqlDateStartCheck);
			$row  = mysqli_fetch_row($data);

			if ( $row[0] == NULL ) {
				if (mysqli_query($conn, $sqlDateStart)) {
					$messageSuccess = "Úspěšně zahájen $cisloPokusu. pokus o splnění testu v čase $dateStart<br>";
				}
				else {
					//echo "chyba SQL dotazu při zapisování startovacího datumu $dateStart<br>";
					$messageError = "Chyba při zahájení $cisloPokusu. pokus o splnění testu v čase $dateStart<br>";
				}
			}

			else {
				$dateStart = $row[0];
				$messageSuccess = "Úspěšně obnoven $cisloPokusu. pokus o splnění testu v čase, zahájený $dateStart<br>";
			}


			

			//echo "$sqlDateStart<br>";

			
		}
		
		else {
			$messageError = "Nepovedlo se změnit údaje v databázi.";
			//echo "Nepovedlo se změnit údaje v databázi.";
		}
	}
