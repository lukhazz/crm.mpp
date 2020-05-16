<?php //require("form-maker-default-values.php"); ?>
<?php
//$actual_link = "";

function renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link )   {

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
		<?php 
			$userStatTemp = $_SESSION['stat'];
			$mena = "Kč,-";
			if ($userStatTemp=="sk") {
				$mena = "&euro;";
			}
			?>

		<div class="container">
			<main>
				<section class="form">
					<h2>Upravit formulář</h2>
					<?php //require("form-maker-default-values.php"); ?>
					<?php 

					if (isset($_GET['ms'])) {
						$messageSuccess = $_GET['ms'];
					}

						

					 ?>
					<?php if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';	} ?>
					<?php if (!empty($messageError))   { echo '<div class="message-error">'.$messageError.'</div>';	} ?>

					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="register" class="form-maker clearfix">

						<?php 
							$test = "Moeler\"s";
							$output = removeSqlSpecChar($test);
							//echo "$test -> $output";
							//$valueP1Nazev = removeSqlShowChar($valueP1Nazev);
							//$nazevFormulare = removeSqlShowChar($nazevFormulare);
						 ?>

						<input type="text" placeholder="Název formuláře včetně roku" class="w100 center" name="nazev" minlength="5" required="required" value="<?php echo $nazevFormulare; ?>">


						<?php require("country.php"); ?>
						<br>
						<?php require("form-products.php"); ?>
						<br>
						<?php require("form-gifts.php"); ?>
						<br>
						<?php require("form-promoday.php"); ?>
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

		$nazevFormulare = $name 			= 	removeSqlSpecChar($_POST['nazev']);
		//$name = removeSqlSpecChar($name); 
		//$nazevFormulare  = $name;
		echo "$name <br>";
		//$id 								= 	$_POST['id_form'];
		$id = $_GET['id'];
		$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id=$id&ms=$messageSuccess";

		//$odpoved = "Nápověda pro promotérky";

		$valueProduct1  = $product1 		= 	removeSqlSpecChar($_POST['produkt-1']);
		$valueProduct2  = $product2 		= 	removeSqlSpecChar($_POST['produkt-2']);
		$valueProduct3  = $product3 		= 	removeSqlSpecChar($_POST['produkt-3']);
		$valueProduct4  = $product4 		= 	removeSqlSpecChar($_POST['produkt-4']);
		$valueProduct5  = $product5 		= 	removeSqlSpecChar($_POST['produkt-5']);
		$valueProduct6  = $product6 		= 	removeSqlSpecChar($_POST['produkt-6']);
		$valueProduct7  = $product7 		= 	removeSqlSpecChar($_POST['produkt-7']);
		$valueProduct8  = $product8 		= 	removeSqlSpecChar($_POST['produkt-8']);
		$valueProduct9  = $product9 		= 	removeSqlSpecChar($_POST['produkt-9']);
		$valueProduct10 = $product10 		= 	removeSqlSpecChar($_POST['produkt-10']);
		$valueProduct11 = $product11 		= 	removeSqlSpecChar($_POST['produkt-11']);
		$valueProduct12 = $product12 		= 	removeSqlSpecChar($_POST['produkt-12']);
		$valueProduct13 = $product13 		= 	removeSqlSpecChar($_POST['produkt-13']);
		$valueProduct14 = $product14 		= 	removeSqlSpecChar($_POST['produkt-14']);
		$valueProduct15 = $product15 		= 	removeSqlSpecChar($_POST['produkt-15']);
		$valueProduct16 = $product16 		= 	removeSqlSpecChar($_POST['produkt-16']);
		$valueProduct17 = $product17 		= 	removeSqlSpecChar($_POST['produkt-17']);
		$valueProduct18 = $product18 		= 	removeSqlSpecChar($_POST['produkt-18']);
		$valueProduct19 = $product19 		= 	removeSqlSpecChar($_POST['produkt-19']);
		$valueProduct20 = $product20 		= 	removeSqlSpecChar($_POST['produkt-20']);
		$valueProduct21 = $product21 		= 	removeSqlSpecChar($_POST['produkt-21']);
		$valueProduct22 = $product22 		= 	removeSqlSpecChar($_POST['produkt-22']);
		$valueProduct23 = $product23 		= 	removeSqlSpecChar($_POST['produkt-23']);
		$valueProduct24 = $product24 		= 	removeSqlSpecChar($_POST['produkt-24']);
		$valueProduct25 = $product25 		= 	removeSqlSpecChar($_POST['produkt-25']);
		$valueProduct26 = $product26 		= 	removeSqlSpecChar($_POST['produkt-26']);
		$valueProduct27 = $product27 		= 	removeSqlSpecChar($_POST['produkt-27']);
		$valueProduct28 = $product28 		= 	removeSqlSpecChar($_POST['produkt-28']);
		$valueProduct29 = $product29 		= 	removeSqlSpecChar($_POST['produkt-29']);
		$valueProduct30 = $product30 		= 	removeSqlSpecChar($_POST['produkt-30']);
		$valueProduct31 = $product31 		= 	removeSqlSpecChar($_POST['produkt-31']);
		$valueProduct32 = $product32 		= 	removeSqlSpecChar($_POST['produkt-32']);
		$valueProduct33 = $product33 		= 	removeSqlSpecChar($_POST['produkt-33']);
		$valueProduct34 = $product34 		= 	removeSqlSpecChar($_POST['produkt-34']);
		$valueProduct35 = $product35 		= 	removeSqlSpecChar($_POST['produkt-35']);
		$valueProduct36 = $product36 		= 	removeSqlSpecChar($_POST['produkt-36']);
		$valueProduct37 = $product37 		= 	removeSqlSpecChar($_POST['produkt-37']);
		$valueProduct38 = $product38 		= 	removeSqlSpecChar($_POST['produkt-38']);
		$valueProduct39 = $product39 		= 	removeSqlSpecChar($_POST['produkt-39']);
		$valueProduct40 = $product40 		= 	removeSqlSpecChar($_POST['produkt-40']);

		$valueGift1  = $gift1 		= 	removeSqlSpecChar($_POST['darek-1']);
		$valueGift2  = $gift2 		= 	removeSqlSpecChar($_POST['darek-2']);
		$valueGift3  = $gift3 		= 	removeSqlSpecChar($_POST['darek-3']);
		$valueGift4  = $gift4 		= 	removeSqlSpecChar($_POST['darek-4']);
		$valueGift5  = $gift5 		= 	removeSqlSpecChar($_POST['darek-5']);
		$valueGift6  = $gift6 		= 	removeSqlSpecChar($_POST['darek-6']);
		$valueGift7  = $gift7 		= 	removeSqlSpecChar($_POST['darek-7']);
		$valueGift8  = $gift8 		= 	removeSqlSpecChar($_POST['darek-8']);
		$valueGift9  = $gift9 		= 	removeSqlSpecChar($_POST['darek-9']);
		$valueGift10 = $gift10 		= 	removeSqlSpecChar($_POST['darek-10']);
		$valueGift11 = $gift11 		= 	removeSqlSpecChar($_POST['darek-11']);
		$valueGift12 = $gift12 		= 	removeSqlSpecChar($_POST['darek-12']);
		$valueGift13 = $gift13 		= 	removeSqlSpecChar($_POST['darek-13']);
		$valueGift14 = $gift14 		= 	removeSqlSpecChar($_POST['darek-14']);
		$valueGift15 = $gift15 		= 	removeSqlSpecChar($_POST['darek-15']);
		$valueGift16 = $gift16 		= 	removeSqlSpecChar($_POST['darek-16']);
		$valueGift17 = $gift17 		= 	removeSqlSpecChar($_POST['darek-17']);
		$valueGift18 = $gift18 		= 	removeSqlSpecChar($_POST['darek-18']);
		$valueGift19 = $gift19 		= 	removeSqlSpecChar($_POST['darek-19']);
		$valueGift20 = $gift20 		= 	removeSqlSpecChar($_POST['darek-20']);


		$valueQustion1  = $qustion1 		= 	removeSqlSpecChar($_POST['otazka-1']);
		$valueQustion2  = $qustion2 		= 	removeSqlSpecChar($_POST['otazka-2']);
		$valueQustion3  = $qustion3 		= 	removeSqlSpecChar($_POST['otazka-3']);
		$valueQustion4  = $qustion4 		= 	removeSqlSpecChar($_POST['otazka-4']);
		$valueQustion5  = $qustion5 		= 	removeSqlSpecChar($_POST['otazka-5']);
		$valueQustion6  = $qustion6 		= 	removeSqlSpecChar($_POST['otazka-6']);
		$valueQustion7  = $qustion7 		= 	removeSqlSpecChar($_POST['otazka-7']);
		$valueQustion8  = $qustion8 		= 	removeSqlSpecChar($_POST['otazka-8']);
		$valueQustion9  = $qustion9 		= 	removeSqlSpecChar($_POST['otazka-9']);
		$valueQustion10 = $qustion10 		= 	removeSqlSpecChar($_POST['otazka-10']);
		$valueQustion11 = $qustion11 		= 	removeSqlSpecChar($_POST['otazka-11']);
		$valueQustion12 = $qustion12 		= 	removeSqlSpecChar($_POST['otazka-12']);
		$valueQustion13 = $qustion13 		= 	removeSqlSpecChar($_POST['otazka-13']);
		$valueQustion14 = $qustion14 		= 	removeSqlSpecChar($_POST['otazka-14']);
		$valueQustion15 = $qustion15 		= 	removeSqlSpecChar($_POST['otazka-15']);

		$userStat  		= $_POST['stat']; 
		$valueStat 		= $userStat;

		//echo $nazevFormulare."<br>";
		//echo $product1[4]."<br>";
		//echo $product2[1]."<br>";
		//echo $product3[1]."<br>";
		//echo $product4[1]."<br>";

		for ($i=1; $i <= 40; $i++) { 	// Cyklus projíždějící počet produktů
			//echo "======================<br>";
			//echo $row[1]."<br>";
			//echo $row[$i]."<br>";
			//$nazevFormulare = $row[1];
			$productTemp = "product".$i;
			$allProductTemp = "allProduct".$i;
			${$allProductTemp} = implode("|", ${$productTemp});
			//echo ${$productTemp}[$i]."<br>";
			//${$allProductTemp} = ${$productTemp};
			//echo ${$allProductTemp}[$i]."<br>";
			for ($j=0; $j < 6; $j++) { 
				//echo $product1[$j];
				//echo $productTemp."<br>";
				if (empty(${$productTemp}[$j])) {
					${$productTemp}[$j] = "";
					//continue;
				}
				switch ($j) {
					case '0':
						$prodNazevTemp = "valueP".($i)."Nazev";
						${$prodNazevTemp} = ${$productTemp}[$j];
						//echo "valueP".($i)."Nazev je:\"".${$productTemp}[$j]."\"<br>";
						break;
					case '1':
						$prodCenaTemp = "valueP".($i)."Cena";
						${$prodCenaTemp} = ${$productTemp}[$j];
						//echo "valueP".($i)."Cena je:\"".${$productTemp}[$j]."\"<br>";
						break;
					case '2':
						$prodCenaVocTemp = "valueP".($i)."CenaVoc";
						${$prodCenaVocTemp} = ${$productTemp}[$j];
						//echo "valueP".($i)."Cena je:\"".${$productTemp}[$j]."\"<br>";
						break;
					case '3':
						$prodPocTemp = "valueP".($i)."Pocatek";
						${$prodPocTemp} = ${$productTemp}[$j];
						//echo "valueP".($i)."Pocatek je:\"".${$productTemp}[$j]."\"<br>";
						break;
					case '4':
						$prodKonecTemp = "valueP".($i)."Konec";
						${$prodKonecTemp} = ${$productTemp}[$j];
						//echo "valueP".($i)."Konec je:\"".${$productTemp}[$j]."\"<br>";
						break;
					case '5':
						$prodKusuTemp = "valueP".($i)."Kusu";
						${$prodKusuTemp} = ${$productTemp}[$j];
						//echo "valueP".($i)."Kusu je:\"".${$productTemp}[$j]."\"<br>";
						break;
					default:
						$error = false;
						$messageError = "Neprovedla se funkce projíždějící produkty";
						break;
				}
			}
		}

		for ($i=1; $i <= 20; $i++) { 	// Cyklus projíždějící počet darku

			$giftTemp = "gift".$i;
			$allGiftTemp = "allGift".$i;
			${$allGiftTemp} = implode("|", ${$giftTemp});
			//echo "${$allGiftTemp}<br>";

			for ($j=0; $j < 2; $j++) { 
				//echo $gift1[$j];
				//echo $giftTemp."<br>";
				if (empty(${$giftTemp}[$j])) {
					${$giftTemp}[$j] = "";
					//continue;
				}
				switch ($j) {
					case '0':
						$darNazevTemp = "valueD".($i)."Nazev";
						${$darNazevTemp} = ${$giftTemp}[$j];
						//echo "valueD".($i)."Nazev je:\"".${$giftTemp}[$j]."\"<br>";
						break;
					case '1':
						$darKusuTemp = "valueD".($i)."Kusu";
						${$darKusuTemp} = ${$giftTemp}[$j];
						//echo "valueD".($i)."Kusu je:\"".${$giftTemp}[$j]."\"<br>";
						break;
					default:
						$error = false;
						$messageError = "Neprovedla se funkce projíždějící darky";
						break;
				}
			}		
		}

		for ($i=1; $i <= 15; $i++) { 	// Cyklus projíždějící počet produktů
			$questionTemp = "qustion".$i;
			$questionStaticTemp 		= "questionStatic".$i;
			$allQuestionTemp = "allQuestion".$i;
			${$allQuestionTemp} = implode("|", ${$questionTemp});
			${$questionStaticTemp}		= ""; 	
			for ($j=0; $j < 2; $j++) { 
				//echo $product1[$j];
				//echo $productTemp."<br>";
				switch ($j) {
					case '0':
						$questionOtazkaTemp = "promoQuestion".$i;
						${$questionOtazkaTemp} = ${$questionTemp}[$j];
						break;
					case '1':
						$questionAnswerTemp = "promoAnswer".$i;
						${$questionAnswerTemp} = ${$questionTemp}[$j];
						$questionPlaceholderTemp = "placeholderAnswer".$i;
						${$questionPlaceholderTemp} = ${$questionTemp}[$j];
						break;
					default:
						$error = false;
						$messageError = "Neprovedla se funkce projíždějící otázky";
						break;
				}
			}
		}

		if ( $error == false ) {
			$conn = dbConnect(); // Připojíme se k databázi
			mysqli_query($conn, "SET NAMES utf8");

			//Kontrola, zda není formulář v databázi
			$sql  = "SELECT nazev_formulare FROM form WHERE nazev_formulare='$name' AND id_form!='$id'";
			//$data = mysqli_query($conn, $sql);
			if ( $data = mysqli_query($conn, $sql) ) {
				$row  = mysqli_fetch_row($data);

				//$row = NULL;

				if ($row != NULL) {
					$messageError = "Nelze přidat, formulář s tímto jménem a adresou již je v databázi.";
					//echo "Nelze přidat, formulář s tímto jménem a adresou již je v databázi.";
					dbClose($conn);
					renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
				}
				else {
					$sql = "UPDATE form SET nazev_formulare = '$name', produkt_1 = '$allProduct1', produkt_2 = '$allProduct2', produkt_3 = '$allProduct3', produkt_4 = '$allProduct4', produkt_5 = '$allProduct5', produkt_6 = '$allProduct6', produkt_7 = '$allProduct7', produkt_8 = '$allProduct8', produkt_9 = '$allProduct9', produkt_10 = '$allProduct10', produkt_11 = '$allProduct11', produkt_12 = '$allProduct12', produkt_13 = '$allProduct13', produkt_14 = '$allProduct14', produkt_15 = '$allProduct15', produkt_16 = '$allProduct16', produkt_17 = '$allProduct17', produkt_18 = '$allProduct18', produkt_19 = '$allProduct19', produkt_20 = '$allProduct20', produkt_21 = '$allProduct21', produkt_22 = '$allProduct22', produkt_23 = '$allProduct23', produkt_24 = '$allProduct24', produkt_25 = '$allProduct25', produkt_26 = '$allProduct26', produkt_27 = '$allProduct27', produkt_28 = '$allProduct28', produkt_29 = '$allProduct29', produkt_30 = '$allProduct30', produkt_31 = '$allProduct31', produkt_32 = '$allProduct32', produkt_33 = '$allProduct33', produkt_34 = '$allProduct34', produkt_35 = '$allProduct35', produkt_36 = '$allProduct36', produkt_37 = '$allProduct37', produkt_38 = '$allProduct38', produkt_39 = '$allProduct39', produkt_40 = '$allProduct40', otazka_1 = '$allQuestion1', otazka_2 = '$allQuestion2', otazka_3 = '$allQuestion3', otazka_4 = '$allQuestion4', otazka_5 = '$allQuestion5', otazka_6 = '$allQuestion6', otazka_7 = '$allQuestion7', otazka_8 = '$allQuestion8', otazka_9 = '$allQuestion9', otazka_10 = '$allQuestion10', otazka_11 = '$allQuestion11', otazka_12 = '$allQuestion12', otazka_13 = '$allQuestion13', otazka_14 = '$allQuestion14', otazka_15 = '$allQuestion15', darek_1 = '$allGift1', darek_2 = '$allGift2', darek_3 = '$allGift3', darek_4 = '$allGift4', darek_5 = '$allGift5', darek_6 = '$allGift6', darek_7 = '$allGift7', darek_8 = '$allGift8', darek_9 = '$allGift9', darek_10 = '$allGift10', darek_11 = '$allGift11', darek_12 = '$allGift12', darek_13 = '$allGift13', darek_14 = '$allGift14', darek_15 = '$allGift15', darek_16 = '$allGift16', darek_17 = '$allGift17', darek_18 = '$allGift18', darek_19 = '$allGift19', darek_20 = '$allGift20', stat = '$userStat' WHERE id_form='$id'";
					if (mysqli_query($conn, $sql)) {
						
						$messageSuccess = "Formulář úspěšně upraven.";
						$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id=$id&ms=$messageSuccess";
						//echo "$sql<br>";
						//header("Location: $actual_link");
						//print '<script type="text/javascript">window.location.replace('$actual_link');</script>';
						echo '<script type="text/javascript">window.location.replace('.$actual_link.');</script>';
						//echo "Lékárna upravena.";

						renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
						//$valueName     	= "";
						//$valueTown		= "";
						//$valueAddress  	= "";

					}
					else {
						$messageError = "Nepodařilo se upravit formulář.";
						echo "<div class=\"message-error\">$sql</div>";
						//echo "$sql<br>";
						//echo "Nepodařilo se upravit lékárnu.";
						dbClose($conn);
						renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );

						//mysqli_query($conn, $sql);
						//$row  = mysqli_fetch_row($data);
						//$messageError = $row;
					}
				}
			}
			else {
				$messageError = "Chyba dotazu:<br><br>$sql";
				//echo "<div class=\"message-error\">$sql</div>";
				//echo "Chyba dotazu.";
				dbClose($conn);
				renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
			}
		}
		else {
			$messageError = "Nelze přidat, nejsou vyplněna všechna pole.";
			//echo "Nelze přidat, nejsou vyplněna všechna pole.";
			dbClose($conn);
			renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
		}
	}
	else {
		$messageError = "ID není číselné.";
		//echo "ID není číselné.";
		renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
	}
}
else {
	$messageError = "Nezmáčkl se submit.";
	//$odpoved = "Nápověda pro promotérky";
	//echo "Nezmáčkl se submit.";

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) { // query db

		$promoQuestion1 		= "";
		$promoQuestion2 		= "";
		$promoQuestion3 		= "";
		$promoQuestion4 		= "";
		$promoQuestion5 		= "";
		$promoQuestion6 		= "";
		$promoQuestion7 		= "";
		$promoQuestion8 		= "";
		$promoQuestion9 		= "";
		$promoQuestion10 		= "";
		$promoQuestion11 		= "";
		$promoQuestion12 		= "";
		$promoQuestion13 		= "";
		$promoQuestion14 		= "";
		$promoQuestion15 		= "";

		$placeholderQuestion11	= "Volitelná otázka";
		$placeholderQuestion12	= "Volitelná otázka";
		$placeholderQuestion13	= "Volitelná otázka";
		$placeholderQuestion14	= "Volitelná otázka";
		$placeholderQuestion15	= "Volitelná otázka";

		$placeholderAnswer1 	= "Napište ANO nebo kokrétní produkty.";
		$placeholderAnswer2 	= "Čas vyprodání, název produktu.";
		$placeholderAnswer3 	= "Čas dodání.";
		$placeholderAnswer4 	= "ANO / NE, pokud ano, napište jaké.";
		$placeholderAnswer5 	= "ANO / NE, napište krátké zdůvodnění";
		$placeholderAnswer6 	= "Vypište názvy všech produktů, které jste zjistila.";
		$placeholderAnswer7 	= "Pokud ano, vyplňte jméno.";
		$placeholderAnswer8 	= "Poznatky promotérky z celého dne.";
		$placeholderAnswer9 	= "Rozepiště se alespoň na dvě věty.";
		$placeholderAnswer10	= "Napište alespoň jednu větu.";
		$placeholderAnswer11	= "Volitelná nápověda.";
		$placeholderAnswer12	= "Volitelná nápověda.";
		$placeholderAnswer13	= "Volitelná nápověda.";
		$placeholderAnswer14	= "Volitelná nápověda.";
		$placeholderAnswer15	= "Volitelná nápověda.";

		$conn = dbConnect();
		$id = $_GET['id'];
		$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id=$id&ms=$messageSuccess";
		$sql = "SELECT * FROM form WHERE id_form=$id";
		mysqli_query($conn, "SET NAMES utf8");
		$result = mysqli_query($conn, $sql);

		//$row = mysql_fetch_array($result);

		// check that the 'id' matches up with a row in the databse

		if ( $row = mysqli_fetch_row($result) ) { // get data from db
			//$valueName 		= $row[1];
			//$valueTown 		= $row[2];
			//$valueAddress 	= $row[3];
			$counterProducts = 0;

			for ($i=1; $i <= 41; $i++) { // Kolik je vyplněných produktů
				$allProductTemp = "allProduct".$i;
				$productTemp = "product".$i;
				${$allProductTemp} = "";

				//$allGiftTemp = "allGift".$i;
				//$giftTemp = "gift".$i;
				//${$allGiftTemp} = "";

				if (!empty($row[$i])) {
					//echo $row[$i];
					$counterProducts++;
				}
				
			}
			for ($i=1; $i <= 21; $i++) { // Kolik je vyplněných produktů
				//$allProductTemp = "allProduct".$i;
				//$productTemp = "product".$i;
				//${$allProductTemp} = "";

				$allGiftTemp = "allGift".$i;
				$giftTemp = "gift".$i;
				${$allGiftTemp} = "";

				//if (!empty($row[$i])) {
				//	//echo $row[$i];
				//	$counterProducts++;
				//}
				
			}
			//echo "Counter: ".$counterProducts."<br>";

			for ($i=1; $i <= 41; $i++) { 	// Cyklus projíždějící počet produktů
				//echo "======================<br>";
				//echo $row[1]."<br>";
				//echo $row[$i]."<br>";
				$nazevFormulare = removeSqlShowChar($row[1]);
				$productTemp = "product".$i;
				${$productTemp} = $row[$i];
				$allProductTemp = "allProduct".$i;
				${$allProductTemp} = explode("|", $row[$i]);

				for ($j=0; $j < 6; $j++) { 
					//echo $product1[$j];
					//echo $productTemp."<br>";
					if (empty(${$allProductTemp}[$j])) {
						${$allProductTemp}[$j] = "";
						//continue;
					}
					switch ($j) {
						case '0':
							$prodNazevTemp = "valueP".($i-1)."Nazev";
							${$prodNazevTemp} = ${$allProductTemp}[$j];
							//${$prodNazevTemp} = removeSqlShowChar(${$allProductTemp}[$j]);
							//echo "valueP".($i-1)."Nazev je:\"".${$allProductTemp}[$j]."\"<br>";
							break;
						case '1':
							$prodCenaTemp = "valueP".($i-1)."Cena";
							${$prodCenaTemp} = ${$allProductTemp}[$j];
							//echo "valueP".($i-1)."Cena je:\"".${$allProductTemp}[$j]."\"<br>";
							break;
						case '2':
							$prodCenaVocTemp = "valueP".($i-1)."CenaVoc";
							${$prodCenaVocTemp} = ${$allProductTemp}[$j];
							//echo "valueP".($i-1)."Cena je:\"".${$allProductTemp}[$j]."\"<br>";
							break;
						case '3':
							$prodPocTemp = "valueP".($i-1)."Pocatek";
							${$prodPocTemp} = ${$allProductTemp}[$j];
							//echo "valueP".($i-1)."Pocatek je:\"".${$allProductTemp}[$j]."\"<br>";
							break;
						case '4':
							$prodKonecTemp = "valueP".($i-1)."Konec";
							${$prodKonecTemp} = ${$allProductTemp}[$j];
							//echo "valueP".($i-1)."Konec je:\"".${$allProductTemp}[$j]."\"<br>";
							break;
						case '5':
							$prodKusuTemp = "valueP".($i-1)."Kusu";
							${$prodKusuTemp} = ${$allProductTemp}[$j];
							//echo "valueP".($i-1)."Kusu je:\"".${$allProductTemp}[$j]."\"<br>";
							break;
						default:
							$error = false;
							$messageError = "Neprovedla se funkce projíždějící produkty";
							break;
					}
				}
			}


			for ($i=1; $i <= 15; $i++) { 	// Cyklus projíždějící počet produktů
				//echo $row[$i+16]."<br>";

				$questionTemp = "question".$i;
				$questionTempStatic = "questionStatic".$i;
				$allQuestionTemp = "allQuestion".$i;
				$placeholderQuestionTemp = "placeholderQuestion".$i;
				${$allQuestionTemp} = $row[$i+41];
				${$questionTempStatic} = "";
				${$placeholderQuestionTemp} = "";
				
				//${$allQuestionTemp} = explode("|", ${$questionTemp});
				//${$allQuestionTemp} = $row[$i+16];
				//${$questionTemp} = $row[$i+16];


				${$questionTemp} = explode("|", ${$allQuestionTemp});

				$questionOtazkaTemp 		= "promoQuestion".$i;
				$questionAnswerTemp 		= "promoAnswer".$i;
				$questionPlaceholderTemp 	= "placeholderAnswer".$i;

				if (!empty(${$questionTemp})) {
					${$questionAnswerTemp} = "";
					//${$questionOtazkaTemp} = "";
					//${$questionPlaceholderTemp} = "";
				}

				//echo "id je $id <br>";
				for ($j=0; $j < 2; $j++) { 
					//echo $product1[$j];
					//echo $productTemp."<br>";
					if (empty(${$allQuestionTemp}[0])) {
						${$allQuestionTemp}[0] = "";
						continue;
					}
					switch ($j) {
						case '0':
							if (!empty(${$questionTemp}[$j])) {
								${$questionOtazkaTemp} = ${$questionTemp}[$j];
								//echo ${$questionOtazkaTemp}."<br>";
							}
							break;
						case '1':
							if (!empty(${$questionTemp}[$j])) {
								${$questionAnswerTemp} = ${$questionTemp}[$j];
								${$questionPlaceholderTemp} = ${$questionTemp}[$j];
							}
							
							break;
						default:
							$error = false;
							$messageError = "Neprovedla se funkce projíždějící otázky";
							break;
					}
				}
			}

			for ($i=1; $i <= 20; $i++) { 	// Cyklus projíždějící počet darku

				$giftTemp = "gift".$i;
				${$giftTemp} = $row[$i];
				$allGiftTemp = "allGift".$i;
				${$allGiftTemp} = explode("|", $row[$i+56]);

				if (empty(${$allGiftTemp}[0])) {
					${$allGiftTemp}[0] = "";
				}

				if (empty(${$allGiftTemp}[1])) {
					${$allGiftTemp}[1] = "";
				}

				$darNazevTemp = "valueD".$i."Nazev";
				${$darNazevTemp} = ${$allGiftTemp}[0];

				$darKusuTemp = "valueD".$i."Kusu";
				${$darKusuTemp} = ${$allGiftTemp}[1];

				
			}
			$userStat   		= $row[78];
			//echo "$userStat<br>";

			$messageError = "";
			$messageSuccess = "Podařilo se načíst formulář";
			//echo "Načti z databáze";
			dbClose($conn);

			//echo $allProduct1;
			//echo $allProduct2;
			//echo $allProduct3;
			//echo $allProduct4;
			
			renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
		}
		else {
			$messageError = "Nepovedlo se načíst údaje v databázi.";
			//echo "Nepovedlo se načíst údaje v databázi.";
			dbClose($conn);
			renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
		}
		
	}
	else {
		$messageError = "Nepovedlo se změnit údaje v databázi.";
		//echo "Nepovedlo se změnit údaje v databázi.";
		renderForm($id, $messageSuccess, $messageError, $nazevFormulare, $valueP1Nazev, $valueP1Cena, $valueP1CenaVoc, $valueP1Pocatek, $valueP1Konec, $valueP1Kusu, $valueP2Nazev, $valueP2Cena, $valueP2CenaVoc, $valueP2Pocatek, $valueP2Konec, $valueP2Kusu, $valueP3Nazev, $valueP3Cena, $valueP3CenaVoc, $valueP3Pocatek, $valueP3Konec, $valueP3Kusu, $valueP4Nazev, $valueP4Cena, $valueP4CenaVoc, $valueP4Pocatek, $valueP4Konec, $valueP4Kusu, $valueP5Nazev, $valueP5Cena, $valueP5CenaVoc, $valueP5Pocatek, $valueP5Konec, $valueP5Kusu, $valueP6Nazev, $valueP6Cena, $valueP6CenaVoc, $valueP6Pocatek, $valueP6Konec, $valueP6Kusu, $valueP7Nazev, $valueP7Cena, $valueP7CenaVoc, $valueP7Pocatek, $valueP7Konec, $valueP7Kusu, $valueP8Nazev, $valueP8Cena, $valueP8CenaVoc, $valueP8Pocatek, $valueP8Konec, $valueP8Kusu, $valueP9Nazev, $valueP9Cena, $valueP9CenaVoc, $valueP9Pocatek, $valueP9Konec, $valueP9Kusu, $valueP10Nazev, $valueP10Cena, $valueP10CenaVoc, $valueP10Pocatek, $valueP10Konec, $valueP10Kusu, $valueP11Nazev, $valueP11Cena, $valueP11CenaVoc, $valueP11Pocatek, $valueP11Konec, $valueP11Kusu, $valueP12Nazev, $valueP12Cena, $valueP12CenaVoc, $valueP12Pocatek, $valueP12Konec, $valueP12Kusu, $valueP13Nazev, $valueP13Cena, $valueP13CenaVoc, $valueP13Pocatek, $valueP13Konec, $valueP13Kusu, $valueP14Nazev, $valueP14Cena, $valueP14CenaVoc, $valueP14Pocatek, $valueP14Konec, $valueP14Kusu, $valueP15Nazev, $valueP15Cena, $valueP15CenaVoc, $valueP15Pocatek, $valueP15Konec, $valueP15Kusu, $valueP16Nazev, $valueP16Cena, $valueP16CenaVoc, $valueP16Pocatek, $valueP16Konec, $valueP16Kusu, $valueP17Nazev, $valueP17Cena, $valueP17CenaVoc, $valueP17Pocatek, $valueP17Konec, $valueP17Kusu, $valueP18Nazev, $valueP18Cena, $valueP18CenaVoc, $valueP18Pocatek, $valueP18Konec, $valueP18Kusu, $valueP19Nazev, $valueP19Cena, $valueP19CenaVoc, $valueP19Pocatek, $valueP19Konec, $valueP19Kusu, $valueP20Nazev, $valueP20Cena, $valueP20CenaVoc, $valueP20Pocatek, $valueP20Konec, $valueP20Kusu, $valueP21Nazev, $valueP21Cena, $valueP21CenaVoc, $valueP21Pocatek, $valueP21Konec, $valueP21Kusu, $valueP22Nazev, $valueP22Cena, $valueP22CenaVoc, $valueP22Pocatek, $valueP22Konec, $valueP22Kusu, $valueP23Nazev, $valueP23Cena, $valueP23CenaVoc, $valueP23Pocatek, $valueP23Konec, $valueP23Kusu, $valueP24Nazev, $valueP24Cena, $valueP24CenaVoc, $valueP24Pocatek, $valueP24Konec, $valueP24Kusu, $valueP25Nazev, $valueP25Cena, $valueP25CenaVoc, $valueP25Pocatek, $valueP25Konec, $valueP25Kusu, $valueP26Nazev, $valueP26Cena, $valueP26CenaVoc, $valueP26Pocatek, $valueP26Konec, $valueP26Kusu, $valueP27Nazev, $valueP27Cena, $valueP27CenaVoc, $valueP27Pocatek, $valueP27Konec, $valueP27Kusu, $valueP28Nazev, $valueP28Cena, $valueP28CenaVoc, $valueP28Pocatek, $valueP28Konec, $valueP28Kusu, $valueP29Nazev, $valueP29Cena, $valueP29CenaVoc, $valueP29Pocatek, $valueP29Konec, $valueP29Kusu, $valueP30Nazev, $valueP30Cena, $valueP30CenaVoc, $valueP30Pocatek, $valueP30Konec, $valueP30Kusu, $valueP31Nazev, $valueP31Cena, $valueP31CenaVoc, $valueP31Pocatek, $valueP31Konec, $valueP31Kusu, $valueP32Nazev, $valueP32Cena, $valueP32CenaVoc, $valueP32Pocatek, $valueP32Konec, $valueP32Kusu, $valueP33Nazev, $valueP33Cena, $valueP33CenaVoc, $valueP33Pocatek, $valueP33Konec, $valueP33Kusu, $valueP34Nazev, $valueP34Cena, $valueP34CenaVoc, $valueP34Pocatek, $valueP34Konec, $valueP34Kusu, $valueP35Nazev, $valueP35Cena, $valueP35CenaVoc, $valueP35Pocatek, $valueP35Konec, $valueP35Kusu, $valueP36Nazev, $valueP36Cena, $valueP36CenaVoc, $valueP36Pocatek, $valueP36Konec, $valueP36Kusu, $valueP37Nazev, $valueP37Cena, $valueP37CenaVoc, $valueP37Pocatek, $valueP37Konec, $valueP37Kusu, $valueP38Nazev, $valueP38Cena, $valueP38CenaVoc, $valueP38Pocatek, $valueP38Konec, $valueP38Kusu, $valueP39Nazev, $valueP39Cena, $valueP39CenaVoc, $valueP39Pocatek, $valueP39Konec, $valueP39Kusu, $valueP40Nazev, $valueP40Cena, $valueP40CenaVoc, $valueP40Pocatek, $valueP40Konec, $valueP40Kusu, $questionStatic1, $promoQuestion1, $promoAnswer1, $placeholderAnswer1, $questionStatic2, $promoQuestion2, $promoAnswer2, $placeholderAnswer2, $questionStatic3, $promoQuestion3, $promoAnswer3, $placeholderAnswer3, $questionStatic4, $promoQuestion4, $promoAnswer4, $placeholderAnswer4, $questionStatic5, $promoQuestion5, $promoAnswer5, $placeholderAnswer5, $questionStatic6, $promoQuestion6, $promoAnswer6, $placeholderAnswer6, $questionStatic7, $promoQuestion7, $promoAnswer7, $placeholderAnswer7, $questionStatic8, $promoQuestion8, $promoAnswer8, $placeholderAnswer8, $questionStatic9, $promoQuestion9, $promoAnswer9, $placeholderAnswer9, $questionStatic10, $promoQuestion10, $promoAnswer10, $placeholderAnswer10, $questionStatic11, $promoQuestion11, $promoAnswer11, $placeholderAnswer11, $questionStatic12, $promoQuestion12, $promoAnswer12, $placeholderAnswer12, $questionStatic13, $promoQuestion13, $promoAnswer13, $placeholderAnswer13, $questionStatic14, $promoQuestion14, $promoAnswer14, $placeholderAnswer14, $questionStatic15, $promoQuestion15, $promoAnswer15, $placeholderAnswer15, $valueD1Nazev, $valueD1Kusu, $valueD2Nazev, $valueD2Kusu, $valueD3Nazev, $valueD3Kusu, $valueD4Nazev, $valueD4Kusu, $valueD5Nazev, $valueD5Kusu, $valueD6Nazev, $valueD6Kusu, $valueD7Nazev, $valueD7Kusu, $valueD8Nazev, $valueD8Kusu, $valueD9Nazev, $valueD9Kusu, $valueD10Nazev, $valueD10Kusu, $valueD11Nazev, $valueD11Kusu, $valueD12Nazev, $valueD12Kusu, $valueD13Nazev, $valueD13Kusu, $valueD14Nazev, $valueD14Kusu, $valueD15Nazev, $valueD15Kusu, $valueD16Nazev, $valueD16Kusu, $valueD17Nazev, $valueD17Kusu, $valueD18Nazev, $valueD18Kusu, $valueD19Nazev, $valueD19Kusu, $valueD20Nazev, $valueD20Kusu, $userStat, $actual_link );
	}

}

?>