<?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$error = false;
	$messageError = "";
	$messageSuccess = "";
	$splneno = "ne";

	
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "0";
	}
	//echo "ID je: ".$id."<br>";

	$additional = "FROM test 

	INNER JOIN test_zadani
	ON test.id_test_zadani=test_zadani.id_test_zadani

	INNER JOIN test_otazky
	ON test.id_test_otazky=test_otazky.id_test_otazky

	INNER JOIN test_pokus
	ON test.id_test_pokus=test_pokus.id_test_pokus

	INNER JOIN users
	ON test.id_user=users.id_user

	INNER JOIN company
	ON test_zadani.id_company=company.id_company
";


	$sqlProtocol = "SELECT users.jmeno, users.prijmeni, company.nazev, test_zadani.max_pokusu, test_zadani.spravnych_otazek, test_otazky.test_nazev_zadani, test.id_test_otazky
			$additional
			WHERE test.id_test=$id
	";

	$sqlTestQuestions = "SELECT test_otazky.test_1, test_otazky.test_2, test_otazky.test_3, test_otazky.test_4, test_otazky.test_5, test_otazky.test_6, test_otazky.test_7, test_otazky.test_8, test_otazky.test_9, test_otazky.test_10, test_otazky.test_11, test_otazky.test_12, test_otazky.test_13, test_otazky.test_14, test_otazky.test_15 , test_otazky.test_16, test_otazky.test_17, test_otazky.test_18, test_otazky.test_19, test_otazky.test_20 
			$additional
			WHERE test.id_test=$id
	";



	$sqlIdPokusu = "SELECT test_pokus.id_test_pokus, test.cislo_pokusu, test.id_test_otazky, users.id_user
			$additional			
			WHERE test.id_test=$id

	";

	/*
	$sqlIdPokusu = "SELECT test_pokus.id_test_pokus, test.cislo_pokusu
			$additional
			AND test.odeslano ='ne'
			AND test.odemknuto ='ano'

	";
	*/

	//echo "<br><br>$sqlProtocol<br>";

	date_default_timezone_set('Europe/Prague');	// Pásmo
	setlocale(LC_MONETARY, 'it_IT');
	SetLocale(LC_ALL, "Czech");

	$data 			= mysqli_query($conn, $sqlProtocol);
	$row 			= mysqli_fetch_row($data);

	$dataTest 		= mysqli_query($conn, $sqlTestQuestions);
	$rowTest 		= mysqli_fetch_row($dataTest);


	$dataPokus 		= mysqli_query($conn, $sqlIdPokusu);
	$rowPokus 		= mysqli_fetch_row($dataPokus);

	$idPokusu 		= $rowPokus[0];
	$cisloPokusu 	= $rowPokus[1];
	$idTestOtazky 	= $rowPokus[2];
	$idUser 		= $rowPokus[3];


	//echo "idPokusu je $idPokusu<br>";
	//echo "cisloPokusu je $cisloPokusu<br>";
	//echo "$sqlIdPokusu";


	$user 				= $row[0]." ".$row[1];
	$company	 		= $row[2];
	$try 				= $row[3];
	$correct			= $row[4];
	$test 				= $row[5];
	$counterQuestions 	= 0;



	$sqlTestAnswer = "SELECT test_pokus.test_1, test_pokus.test_2, test_pokus.test_3, test_pokus.test_4, test_pokus.test_5, test_pokus.test_6, test_pokus.test_7, test_pokus.test_8, test_pokus.test_9, test_pokus.test_10, test_pokus.test_11, test_pokus.test_12, test_pokus.test_13, test_pokus.test_14, test_pokus.test_15 , test_pokus.test_16, test_pokus.test_17, test_pokus.test_18, test_pokus.test_19, test_pokus.test_20 
			$additional
			WHERE test.id_test<$id
			AND test.id_user = $idUser
			GROUP BY test.id_test DESC
			LIMIT 1 
	"; 
	//echo "$sqlTestAnswer<br>";

	$dataTestAnswer	= mysqli_query($conn, $sqlTestAnswer);
	$rowTestAnswer	= mysqli_fetch_row($dataTestAnswer);


	//for ($i=0; $i < count($row); $i++) { 
	//	echo "řádek $i = ".$row[$i]."<br>";
	//}

	for ($i=0; $i < count($rowTest); $i++) { 
		//echo "test $i = ".$rowTest[$i]."<br>";
		$counterQuestions = $i;
		if (empty($rowTest[$i+1])) {
			break;
		}
	}
	//echo "$counterQuestions<br>";

	

?>