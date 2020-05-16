<?php //require("form-maker-default-values.php"); ?>
<?php

function renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 )   {

		$odpoved = "Nápověda pro promotérky";
?>

<!DOCTYPE html>
<html>
<?php 
$pageTitle="Editace formulářů"; 
$description="Editace formulářů."; 
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
					<h2>Upravit zadání testů</h2>
					<?php //require("form-maker-default-values.php"); ?>
					<?php if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';	} ?>
					<?php if (!empty($messageError))   { echo '<div class="message-error">'.$messageError.'</div>';	} ?>

					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="form-maker clearfix">

						<input type="text" placeholder="Název testu" class="w100 center" name="nazev" minlength="5" required="required" value="<?php if (!empty($nazevFormulare)){ echo $nazevFormulare; } ?>">

						<?php require("table-tests.php"); ?>

						<br>
						<input type="hidden" name="id_form" value="<?php echo $id; ?>"/>
						<input type="submit" name="makeform" id="makeform" value="Uložit formulář">
					</form>
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

		$nazevFormulare = $name 			= 	$_POST['nazev'];
		//$id 								= 	$_POST['id_form'];
		$id = $_GET['id'];
		//$odpoved = "Nápověda pro promotérky";
		//mysqli_query($conn, "SET NAMES utf8");

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

		WHERE test_otazky.id_test_otazky=$id";

		if (isset($_POST['nazev'])) {
			$name 	= 	$_POST['nazev'];
		}
		else {
			$name 	= "";
		}
			
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


		for ($i=0; $i < 20; $i++) { 
				//$k++;
				$allTestTemp = "allTest".($i+1);
				$testTemp = "test".($i+1);
				${$allTestTemp} = "";
				$timeArray		= ${$testTemp};
				//$timeArray 	= explode("|", ${$testTemp});

				$testQuestion 	= "testQuestion".($i+1);
				$answerA 		= "answerA".($i+1);
				$answerB 		= "answerB".($i+1);
				$answerC 		= "answerC".($i+1);
				$answerD 		= "answerD".($i+1);
				$answerE 		= "answerE".($i+1);
				$checkedTrueA 	= "checkedTrueA".($i+1);
				$checkedTrueB 	= "checkedTrueB".($i+1);
				$checkedTrueC 	= "checkedTrueC".($i+1);
				$checkedTrueD 	= "checkedTrueD".($i+1);
				$checkedTrueE 	= "checkedTrueE".($i+1);

				${$testQuestion} 	= "";	// Vynuluji promenne
				${$answerA} 		= "";	// Vynuluji promenne
				${$answerB} 		= "";	// Vynuluji promenne
				${$answerC} 		= "";	// Vynuluji promenne
				${$answerD} 		= "";	// Vynuluji promenne
				${$answerE} 		= "";	// Vynuluji promenne
				${$checkedTrueA} 	= "";	// Vynuluji promenne
				${$checkedTrueB} 	= "";	// Vynuluji promenne
				${$checkedTrueC} 	= "";	// Vynuluji promenne
				${$checkedTrueD} 	= "";	// Vynuluji promenne
				${$checkedTrueE} 	= "";	// Vynuluji promenne

				${$testQuestion} 	= $timeArray[0];
				//${$answerA} 		= $row[0];
				//${$answerB} 		= $row[0];
				//${$answerC} 		= $row[0];
				//${$answerD} 		= $row[0];
				//${$answerE} 		= $row[0];

				for ($j=1; $j < count($timeArray); $j++) { 
					//echo "$timeArray[$j]<br>";
					if (($timeArray[$j])=="trueA") {
						//${$trueA} 			= $timeArray[$j];
						${$checkedTrueA} = "checked";
						//echo "Je tam A - $checkedTrueA je ${$checkedTrueA}<br>";
					}
					else if (($timeArray[$j])=="trueB") {
						//${$trueB} 			= $timeArray[$j];
						${$checkedTrueB} = "checked";
						//echo "Je tam B - $checkedTrueB je ${$checkedTrueB}<br>";
					}
					else if (($timeArray[$j])=="trueC") {
						//${$trueC} 			= $timeArray[$j];
						${$checkedTrueC} = "checked";
						//echo "Je tam C - $checkedTrueC je ${$checkedTrueC}<br>";
					}
					else if (($timeArray[$j])=="trueD") {
						//${$trueD} 			= $timeArray[$j];
						${$checkedTrueD} = "checked";
						//echo "Je tam D - $checkedTrueD je ${$checkedTrueD}<br>";
					}
					else if (($timeArray[$j])=="trueE") {
						//${$trueE} 			= $timeArray[$j];
						${$checkedTrueE} = "checked";
						//echo "Je tam E - $checkedTrueE je ${$checkedTrueE}<br>";
					}
					else {	//Je tam znění odpovědi
						if (${$answerA}=="") {
							${$answerA} = $timeArray[$j];
						}
						else if (${$answerB}=="") {
							${$answerB} = $timeArray[$j];
						}
						else if (${$answerC}=="") {
							${$answerC} = $timeArray[$j];
						}
						else if (${$answerD}=="") {
							${$answerD} = $timeArray[$j];
						}
						else {
							${$answerE} = $timeArray[$j];
						}
					}
				}

				
				
				//${$trueA} 			= $row[0];
				//${$trueB} 			= $row[0];
				//${$trueC} 			= $row[0];
				//${$trueD} 			= $row[0];
				//${$trueE} 			= $row[0];


				//if (!empty($row[$i])) {
				//	echo $row[$i];
				//	$counterTests++;
				//}


			}















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
					$messageError = "Nelze uložit, test s tímto jménem a adresou již je v databázi.";
					//echo "Nelze přidat, formulář s tímto jménem a adresou již je v databázi.";
					dbClose($conn);
					renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
				}
				else {

					$sql = "UPDATE test_otazky SET test_nazev_zadani = '$name', test_1 = '$allTest1', test_2 = '$allTest2', test_3 = '$allTest3', test_4 = '$allTest4', test_5 = '$allTest5', test_6 = '$allTest6', test_7 = '$allTest7', test_8 = '$allTest8', test_9 = '$allTest9', test_10 = '$allTest10', test_11 = '$allTest11', test_12 = '$allTest12', test_13 = '$allTest13', test_14 = '$allTest14', test_15 = '$allTest15', test_16 = '$allTest16', test_17 = '$allTest17', test_18 = '$allTest18', test_19 = '$allTest19', test_20 = '$allTest20' 
						WHERE id_test_otazky='$id' ";
					//echo "$sql<br>";

					if (mysqli_query($conn, $sql)) {
						//$nazevFormulare = "";
						$messageSuccess = "Test úspěšně upraven.";
						renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
					}
					else {
						$messageError = "Nepodařilo se přidat test.";

						mysqli_query($conn, $sql);
						$row  = mysqli_fetch_row($data);
						//$messageError = $row;
						renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
					}
				}

			}
			else {
				$messageError = "Nepodařilo se přidat test. Chyba SQL dotazu, kontaktujte prosím administrátora.";
			
			renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
			}
		}
		else {
			$messageError = "Nepodařilo se přidat test. Pravděpodobně nejsou všude zaškrtnuté správné odpovědi.";
		
		renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
	}
	}
	else {
		$messageError = "ID Není číselné.";
	
	renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
	}
}
	
else {
	$messageError = "Nezmáčkl se submit.";
	//$odpoved = "Nápověda pro promotérky";
	//echo "Nezmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) { // query db

		$test1 		= "";
		$test2 		= "";
		$test3 		= "";
		$test4 		= "";
		$test5 		= "";
		$test6 		= "";
		$test7 		= "";
		$test8 		= "";
		$test9 		= "";
		$test10 	= "";
		$test11 	= "";
		$test12 	= "";
		$test13 	= "";
		$test14 	= "";
		$test15 	= "";
		$test16 	= "";
		$test17 	= "";
		$test18 	= "";
		$test19 	= "";
		$test20 	= "";

		

		$conn = dbConnect();
		mysqli_query($conn, "SET NAMES utf8");
		$id = $_GET['id'];

		$additional = "FROM test_otazky
			WHERE test_otazky.id_test_otazky=$id";

		$sqlTestQuestions = "SELECT test_otazky.test_nazev_zadani, test_otazky.test_1, test_otazky.test_2, test_otazky.test_3, test_otazky.test_4, test_otazky.test_5, test_otazky.test_6, test_otazky.test_7, test_otazky.test_8, test_otazky.test_9, test_otazky.test_10, test_otazky.test_11, test_otazky.test_12, test_otazky.test_13, test_otazky.test_14, test_otazky.test_15 , test_otazky.test_16, test_otazky.test_17, test_otazky.test_18, test_otazky.test_19, test_otazky.test_20
				$additional
		";
		//echo "$sqlTestQuestions<br>";

		//$sql = "SELECT * FROM test WHERE id_test=$id";
		//mysqli_query($conn, "SET NAMES utf8");
		$result = mysqli_query($conn, $sqlTestQuestions);

		//$row = mysql_fetch_array($result);

		// check that the 'id' matches up with a row in the databse

		if ( $row = mysqli_fetch_row($result) ) { // get data from db
			$nazevFormulare = $row[0];
			//echo "nazevFormulare $nazevFormulare<br>";

			$counterTests = 0;

			//for ($j=1; $j <= count($row); $j++) { // Kolik je vyplněných produktů

			for ($i=0; $i < 20; $i++) { 
				//$k++;
				$allTestTemp = "allTest".$i;
				$testTemp = "test".$i;
				${$allTestTemp} = "";
				$timeArray 	= explode("|", $row[$i+1]);

				$testQuestion 	= "testQuestion".($i+1);
				$answerA 		= "answerA".($i+1);
				$answerB 		= "answerB".($i+1);
				$answerC 		= "answerC".($i+1);
				$answerD 		= "answerD".($i+1);
				$answerE 		= "answerE".($i+1);
				$checkedTrueA 	= "checkedTrueA".($i+1);
				$checkedTrueB 	= "checkedTrueB".($i+1);
				$checkedTrueC 	= "checkedTrueC".($i+1);
				$checkedTrueD 	= "checkedTrueD".($i+1);
				$checkedTrueE 	= "checkedTrueE".($i+1);

				${$testQuestion} 	= "";	// Vynuluji promenne
				${$answerA} 		= "";	// Vynuluji promenne
				${$answerB} 		= "";	// Vynuluji promenne
				${$answerC} 		= "";	// Vynuluji promenne
				${$answerD} 		= "";	// Vynuluji promenne
				${$answerE} 		= "";	// Vynuluji promenne
				${$checkedTrueA} 	= "";	// Vynuluji promenne
				${$checkedTrueB} 	= "";	// Vynuluji promenne
				${$checkedTrueC} 	= "";	// Vynuluji promenne
				${$checkedTrueD} 	= "";	// Vynuluji promenne
				${$checkedTrueE} 	= "";	// Vynuluji promenne

				${$testQuestion} 	= $timeArray[0];
				//${$answerA} 		= $row[0];
				//${$answerB} 		= $row[0];
				//${$answerC} 		= $row[0];
				//${$answerD} 		= $row[0];
				//${$answerE} 		= $row[0];

				for ($j=1; $j < count($timeArray); $j++) { 
					//echo "$timeArray[$j]<br>";
					if (($timeArray[$j])=="trueA") {
						//${$trueA} 			= $timeArray[$j];
						${$checkedTrueA} = "checked";
						//echo "Je tam A - $checkedTrueA je ${$checkedTrueA}<br>";
					}
					else if (($timeArray[$j])=="trueB") {
						//${$trueB} 			= $timeArray[$j];
						${$checkedTrueB} = "checked";
						//echo "Je tam B - $checkedTrueB je ${$checkedTrueB}<br>";
					}
					else if (($timeArray[$j])=="trueC") {
						//${$trueC} 			= $timeArray[$j];
						${$checkedTrueC} = "checked";
						//echo "Je tam C - $checkedTrueC je ${$checkedTrueC}<br>";
					}
					else if (($timeArray[$j])=="trueD") {
						//${$trueD} 			= $timeArray[$j];
						${$checkedTrueD} = "checked";
						//echo "Je tam D - $checkedTrueD je ${$checkedTrueD}<br>";
					}
					else if (($timeArray[$j])=="trueE") {
						//${$trueE} 			= $timeArray[$j];
						${$checkedTrueE} = "checked";
						//echo "Je tam E - $checkedTrueE je ${$checkedTrueE}<br>";
					}
					else {	//Je tam znění odpovědi
						if (${$answerA}=="") {
							${$answerA} = $timeArray[$j];
						}
						else if (${$answerB}=="") {
							${$answerB} = $timeArray[$j];
						}
						else if (${$answerC}=="") {
							${$answerC} = $timeArray[$j];
						}
						else if (${$answerD}=="") {
							${$answerD} = $timeArray[$j];
						}
						else {
							${$answerE} = $timeArray[$j];
						}
					}
				}

				
				
				//${$trueA} 			= $row[0];
				//${$trueB} 			= $row[0];
				//${$trueC} 			= $row[0];
				//${$trueD} 			= $row[0];
				//${$trueE} 			= $row[0];


				//if (!empty($row[$i])) {
				//	echo $row[$i];
				//	$counterTests++;
				//}


			}

				

				
			//	
			//}
			//echo "Counter: ".$counterTests."<br>";

			

			$messageError = "";
			$messageSuccess = "Podařilo se načíst zadání testu";
			//echo "Načti z databáze";
			dbClose($conn);

			//echo $allTest1;
			//echo $allTest2;
			//echo $allTest3;
			//echo $allTest4;
			
			renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );

		}
		else {
			$messageError = "Nepovedlo se načíst údaje v databázi.";
			//echo "Nepovedlo se načíst údaje v databázi.";
			dbClose($conn);
			renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
		}
		
	}
	else {
		$messageError = "Nepovedlo se změnit údaje v databázi.";
		//echo "Nepovedlo se změnit údaje v databázi.";
		renderForm($id, $messageSuccess, $messageError, $nazevFormulare, 

$checkedTrueA1 ,$checkedTrueB1 ,$checkedTrueC1 ,$checkedTrueD1 ,$checkedTrueE1 ,
$checkedTrueA2 ,$checkedTrueB2 ,$checkedTrueC2 ,$checkedTrueD2 ,$checkedTrueE2 ,
$checkedTrueA3 ,$checkedTrueB3 ,$checkedTrueC3 ,$checkedTrueD3 ,$checkedTrueE3 ,
$checkedTrueA4 ,$checkedTrueB4 ,$checkedTrueC4 ,$checkedTrueD4 ,$checkedTrueE4 ,
$checkedTrueA5 ,$checkedTrueB5 ,$checkedTrueC5 ,$checkedTrueD5 ,$checkedTrueE5 ,
$checkedTrueA6 ,$checkedTrueB6 ,$checkedTrueC6 ,$checkedTrueD6 ,$checkedTrueE6 ,
$checkedTrueA7 ,$checkedTrueB7 ,$checkedTrueC7 ,$checkedTrueD7 ,$checkedTrueE7 ,
$checkedTrueA8 ,$checkedTrueB8 ,$checkedTrueC8 ,$checkedTrueD8 ,$checkedTrueE8 ,
$checkedTrueA9 ,$checkedTrueB9 ,$checkedTrueC9 ,$checkedTrueD9 ,$checkedTrueE9 ,
$checkedTrueA10,$checkedTrueB10,$checkedTrueC10,$checkedTrueD10,$checkedTrueE10,
$checkedTrueA11,$checkedTrueB11,$checkedTrueC11,$checkedTrueD11,$checkedTrueE11,
$checkedTrueA12,$checkedTrueB12,$checkedTrueC12,$checkedTrueD12,$checkedTrueE12,
$checkedTrueA13,$checkedTrueB13,$checkedTrueC13,$checkedTrueD13,$checkedTrueE13,
$checkedTrueA14,$checkedTrueB14,$checkedTrueC14,$checkedTrueD14,$checkedTrueE14,
$checkedTrueA15,$checkedTrueB15,$checkedTrueC15,$checkedTrueD15,$checkedTrueE15,
$checkedTrueA16,$checkedTrueB16,$checkedTrueC16,$checkedTrueD16,$checkedTrueE16,
$checkedTrueA17,$checkedTrueB17,$checkedTrueC17,$checkedTrueD17,$checkedTrueE17,
$checkedTrueA18,$checkedTrueB18,$checkedTrueC18,$checkedTrueD18,$checkedTrueE18,
$checkedTrueA19,$checkedTrueB19,$checkedTrueC19,$checkedTrueD19,$checkedTrueE19,
$checkedTrueA20,$checkedTrueB20,$checkedTrueC20,$checkedTrueD20,$checkedTrueE20,

$answerA1 ,$answerB1 ,$answerC1 ,$answerD1 ,$answerE1 ,		$testQuestion1 ,
$answerA2 ,$answerB2 ,$answerC2 ,$answerD2 ,$answerE2 ,		$testQuestion2 ,
$answerA3 ,$answerB3 ,$answerC3 ,$answerD3 ,$answerE3 ,		$testQuestion3 ,
$answerA4 ,$answerB4 ,$answerC4 ,$answerD4 ,$answerE4 ,		$testQuestion4 ,
$answerA5 ,$answerB5 ,$answerC5 ,$answerD5 ,$answerE5 ,		$testQuestion5 ,
$answerA6 ,$answerB6 ,$answerC6 ,$answerD6 ,$answerE6 ,		$testQuestion6 ,
$answerA7 ,$answerB7 ,$answerC7 ,$answerD7 ,$answerE7 ,		$testQuestion7 ,
$answerA8 ,$answerB8 ,$answerC8 ,$answerD8 ,$answerE8 ,		$testQuestion8 ,
$answerA9 ,$answerB9 ,$answerC9 ,$answerD9 ,$answerE9 ,		$testQuestion9 ,
$answerA10,$answerB10,$answerC10,$answerD10,$answerE10,		$testQuestion10,
$answerA11,$answerB11,$answerC11,$answerD11,$answerE11,		$testQuestion11,
$answerA12,$answerB12,$answerC12,$answerD12,$answerE12,		$testQuestion12,
$answerA13,$answerB13,$answerC13,$answerD13,$answerE13,		$testQuestion13,
$answerA14,$answerB14,$answerC14,$answerD14,$answerE14,		$testQuestion14,
$answerA15,$answerB15,$answerC15,$answerD15,$answerE15,		$testQuestion15,
$answerA16,$answerB16,$answerC16,$answerD16,$answerE16,		$testQuestion16,
$answerA17,$answerB17,$answerC17,$answerD17,$answerE17,		$testQuestion17,
$answerA18,$answerB18,$answerC18,$answerD18,$answerE18,		$testQuestion18,
$answerA19,$answerB19,$answerC19,$answerD19,$answerE19,		$testQuestion19,
$answerA20,$answerB20,$answerC20,$answerD20,$answerE20,		$testQuestion20

 );
	}

}

?>