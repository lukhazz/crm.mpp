<?php 

	$error         	= false;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		if ( isset($_POST['nazev']) //&&  // prázné políčko taky vezme isset, pro tuto kontrolu bychom musel použít empty
			 //isset($_POST['produkt-1[]']) && 
			 //isset($_POST['produkt-1']) 
			 ) {
					
			$nazevFormulare 	= removeSqlSpecChar($name);
			$counterGifts 		= 0;

			$product1 		= 	removeSqlSpecChar($_POST['produkt-1']);
			$product2 		= 	removeSqlSpecChar($_POST['produkt-2']);
			$product3 		= 	removeSqlSpecChar($_POST['produkt-3']);
			$product4 		= 	removeSqlSpecChar($_POST['produkt-4']);
			$product5 		= 	removeSqlSpecChar($_POST['produkt-5']);
			$product6 		= 	removeSqlSpecChar($_POST['produkt-6']);
			$product7 		= 	removeSqlSpecChar($_POST['produkt-7']);
			$product8 		= 	removeSqlSpecChar($_POST['produkt-8']);
			$product9 		= 	removeSqlSpecChar($_POST['produkt-9']);
			$product10 		= 	removeSqlSpecChar($_POST['produkt-10']);
			$product11 		= 	removeSqlSpecChar($_POST['produkt-11']);
			$product12 		= 	removeSqlSpecChar($_POST['produkt-12']);
			$product13 		= 	removeSqlSpecChar($_POST['produkt-13']);
			$product14 		= 	removeSqlSpecChar($_POST['produkt-14']);
			$product15 		= 	removeSqlSpecChar($_POST['produkt-15']);
			$product16 		= 	removeSqlSpecChar($_POST['produkt-16']);
			$product17 		= 	removeSqlSpecChar($_POST['produkt-17']);
			$product18 		= 	removeSqlSpecChar($_POST['produkt-18']);
			$product19 		= 	removeSqlSpecChar($_POST['produkt-19']);
			$product20 		= 	removeSqlSpecChar($_POST['produkt-20']);
			$product21 		= 	removeSqlSpecChar($_POST['produkt-21']);
			$product22 		= 	removeSqlSpecChar($_POST['produkt-22']);
			$product23 		= 	removeSqlSpecChar($_POST['produkt-23']);
			$product24 		= 	removeSqlSpecChar($_POST['produkt-24']);
			$product25 		= 	removeSqlSpecChar($_POST['produkt-25']);
			$product26 		= 	removeSqlSpecChar($_POST['produkt-26']);
			$product27 		= 	removeSqlSpecChar($_POST['produkt-27']);
			$product28 		= 	removeSqlSpecChar($_POST['produkt-28']);
			$product29 		= 	removeSqlSpecChar($_POST['produkt-29']);
			$product30 		= 	removeSqlSpecChar($_POST['produkt-30']);
			$product31 		= 	removeSqlSpecChar($_POST['produkt-31']);
			$product32 		= 	removeSqlSpecChar($_POST['produkt-32']);
			$product33 		= 	removeSqlSpecChar($_POST['produkt-33']);
			$product34 		= 	removeSqlSpecChar($_POST['produkt-34']);
			$product35 		= 	removeSqlSpecChar($_POST['produkt-35']);
			$product36 		= 	removeSqlSpecChar($_POST['produkt-36']);
			$product37 		= 	removeSqlSpecChar($_POST['produkt-37']);
			$product38 		= 	removeSqlSpecChar($_POST['produkt-38']);
			$product39 		= 	removeSqlSpecChar($_POST['produkt-39']);
			$product40 		= 	removeSqlSpecChar($_POST['produkt-40']);

			$gift1 			= 	removeSqlSpecChar($_POST['darek-1']);
			$gift2 			= 	removeSqlSpecChar($_POST['darek-2']);
			$gift3 			= 	removeSqlSpecChar($_POST['darek-3']);
			$gift4 			= 	removeSqlSpecChar($_POST['darek-4']);
			$gift5 			= 	removeSqlSpecChar($_POST['darek-5']);
			$gift6 			= 	removeSqlSpecChar($_POST['darek-6']);
			$gift7 			= 	removeSqlSpecChar($_POST['darek-7']);
			$gift8 			= 	removeSqlSpecChar($_POST['darek-8']);
			$gift9 			= 	removeSqlSpecChar($_POST['darek-9']);
			$gift10 		= 	removeSqlSpecChar($_POST['darek-10']);
			$gift11 		= 	removeSqlSpecChar($_POST['darek-11']);
			$gift12 		= 	removeSqlSpecChar($_POST['darek-12']);
			$gift13 		= 	removeSqlSpecChar($_POST['darek-13']);
			$gift14 		= 	removeSqlSpecChar($_POST['darek-14']);
			$gift15 		= 	removeSqlSpecChar($_POST['darek-15']);
			$gift16 		= 	removeSqlSpecChar($_POST['darek-16']);
			$gift17 		= 	removeSqlSpecChar($_POST['darek-17']);
			$gift18 		= 	removeSqlSpecChar($_POST['darek-18']);
			$gift19 		= 	removeSqlSpecChar($_POST['darek-19']);
			$gift20 		= 	removeSqlSpecChar($_POST['darek-20']);

			$qustion1 		= 	removeSqlSpecChar($_POST['otazka-1']);
			$qustion2 		= 	removeSqlSpecChar($_POST['otazka-2']);
			$qustion3 		= 	removeSqlSpecChar($_POST['otazka-3']);
			$qustion4 		= 	removeSqlSpecChar($_POST['otazka-4']);
			$qustion5 		= 	removeSqlSpecChar($_POST['otazka-5']);
			$qustion6 		= 	removeSqlSpecChar($_POST['otazka-6']);
			$qustion7 		= 	removeSqlSpecChar($_POST['otazka-7']);
			$qustion8 		= 	removeSqlSpecChar($_POST['otazka-8']);
			$qustion9 		= 	removeSqlSpecChar($_POST['otazka-9']);
			$qustion10 		= 	removeSqlSpecChar($_POST['otazka-10']);
			$qustion11 		= 	removeSqlSpecChar($_POST['otazka-11']);
			$qustion12 		= 	removeSqlSpecChar($_POST['otazka-12']);
			$qustion13 		= 	removeSqlSpecChar($_POST['otazka-13']);
			$qustion14 		= 	removeSqlSpecChar($_POST['otazka-14']);
			$qustion15 		= 	removeSqlSpecChar($_POST['otazka-15']);

			$stat 			= $_POST['stat']; 
			$valueStat 		= $stat;

			for ($i=1; $i <= 40; $i++) { // Kolik je vyplněných produktů
				
				$productTemp = "product".$i;

				if (!empty(${$productTemp}[0] )) {
					$counterProducts++;
				}
			}

			for ($i=1; $i <= 20; $i++) { // Kolik je vyplněných produktů
				
				$giftTemp = "gift".$i;

				if (!empty(${$giftTemp}[0] )) {
					$counterGifts++;
				}
			}

			for ($i=1; $i <= 15; $i++) { // Kolik je vyplněných otázek
				
				$questionTemp = "question".$i;
				$promoQuestionTemp = "promoQuestion".$i;

				if (!empty(${$questionTemp}[0] ) || !empty(${$promoQuestionTemp}[0] )) {
					$counterQuestions++;
				}
			}

			if(empty($valueStat)) { 
				$error_stat = "Zadejte prosím pro jaký stát je tento reprezentant určen.";
				$valueStat  = "";
				$error = true;
			}

			echo "<div class=\"message-success\">";
			echo "Celkem produktů: " . $counterProducts . "<br>";
			echo "Celkem dárků: " . $counterGifts . "<br>";
			echo "Celkem otázek: " . $counterQuestions . "<br>";
			echo "</div>";

			//echo "Otázka číslo 1: \"".$qustion1[0]."\"<br>";	
			//echo "Odpověď číslo 1: \"".$qustion1[1]."\"<br>";	
			//echo "Otázka číslo 3: \"".$qustion1[2]."\"<br>";	
			//$promoQuestion1 = $qustion1[0];

			//$allProduct1 = implode("|", $product1);		// Přidá do stringu oddělené rourou
			//$product1 = explode("|", $allProduct1);	// Udělá ze stringu pole

			for ($i=1; $i <= $counterProducts; $i++) { 	// Cyklus projíždějící počet produktů
				$productTemp = "product".$i;
				$allProductTemp = "allProduct".$i;
				${$allProductTemp} = implode("|", ${$productTemp});
				for ($j=0; $j < 6; $j++) { 
					//echo $product1[$j];
					//echo $productTemp."<br>";
					switch ($j) {
					case '0':
						$prodNazevTemp = "valueP".$i."Nazev";
						${$prodNazevTemp} = "";
						break;
					case '1':
						$prodCenaTemp = "valueP".$i."Cena";
						${$prodCenaTemp} = "";
						break;
					case '2':
						$prodCenaVocTemp = "valueP".$i."CenaVoc";
						${$prodCenaVocTemp} = "";
						break;
					case '3':
						$prodPocTemp = "valueP".$i."Pocatek";
						${$prodPocTemp} = "";
						break;
					case '4':
						$prodKonecTemp = "valueP".$i."Konec";
						${$prodKonecTemp} = "";
						break;
					case '5':
						$prodKusuTemp = "valueP".$i."Kusu";
						${$prodKusuTemp} = "";
						break;
						default:
							$error = false;
							$messageError = "Neprovedla se funkce projíždějící produkty";
							break;
					}
				}
			}

			for ($i=1; $i <= $counterGifts; $i++) { 	// Cyklus projíždějící počet darku
				$giftTemp = "gift".$i;
				$allGiftTemp = "allGift".$i;
				${$allGiftTemp} = implode("|", ${$giftTemp});
				
				$darNazevTemp = "valueD".$i."Nazev";
				${$darNazevTemp} = "";
				$darKusuTemp = "valueD".$i."Kusu";
				${$darKusuTemp} = "";
			}



			for ($i=1; $i <= 15; $i++) { 	// Cyklus projíždějící počet otazek
				$questionTemp = "qustion".$i;
				$allQuestionTemp = "allQuestion".$i;
				${$allQuestionTemp} = implode("|", ${$questionTemp});
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


				//Kontrola, zda není formulář již v databázi
				$sql  = "SELECT nazev_formulare FROM form WHERE nazev_formulare='$name'";
				
				//echo $allProduct1;

				//$data = mysqli_query($conn, $sql);
				if ( $data = mysqli_query($conn, $sql) ) {
					$row  = mysqli_fetch_row($data);


					if ($row != NULL) {
						$messageError = "Nelze přidat, formulář s tímto jménem již je v databázi.";
					}
					else {
						$sql = "INSERT INTO form(nazev_formulare, produkt_1, produkt_2, produkt_3, produkt_4, produkt_5, produkt_6, produkt_7, produkt_8, produkt_9, produkt_10, produkt_11, produkt_12, produkt_13, produkt_14, produkt_15, produkt_16, produkt_17, produkt_18, produkt_19, produkt_20, produkt_21, produkt_22, produkt_23, produkt_24, produkt_25, produkt_26, produkt_27, produkt_28, produkt_29, produkt_30, produkt_31, produkt_32, produkt_33, produkt_34, produkt_35, produkt_36, produkt_37, produkt_38, produkt_39, produkt_40, otazka_1, otazka_2, otazka_3, otazka_4, otazka_5, otazka_6, otazka_7, otazka_8, otazka_9, otazka_10, otazka_11, otazka_12, otazka_13, otazka_14, otazka_15, darek_1, darek_2, darek_3, darek_4, darek_5, darek_6, darek_7, darek_8, darek_9, darek_10, darek_11, darek_12, darek_13, darek_14, darek_15, darek_16, darek_17, darek_18, darek_19, darek_20, stat) VALUES('$name', '$allProduct1', '$allProduct2', '$allProduct3', '$allProduct4', '$allProduct5', '$allProduct6', '$allProduct7', '$allProduct8', '$allProduct9', '$allProduct10', '$allProduct11', '$allProduct12', '$allProduct13', '$allProduct14', '$allProduct15', '$allProduct16', '$allProduct17', '$allProduct18', '$allProduct19', '$allProduct20', '$allProduct21', '$allProduct22', '$allProduct23', '$allProduct24', '$allProduct25', '$allProduct26', '$allProduct27', '$allProduct28', '$allProduct29', '$allProduct30', '$allProduct31', '$allProduct32', '$allProduct33', '$allProduct34', '$allProduct35', '$allProduct36', '$allProduct37', '$allProduct38', '$allProduct39', '$allProduct40', '$allQuestion1', '$allQuestion2', '$allQuestion3', '$allQuestion4', '$allQuestion5', '$allQuestion6', '$allQuestion7', '$allQuestion8', '$allQuestion9', '$allQuestion10', '$allQuestion11', '$allQuestion12', '$allQuestion13', '$allQuestion14', '$allQuestion15', '$allGift1', '$allGift2', '$allGift3', '$allGift4', '$allGift5', '$allGift6', '$allGift7', '$allGift8', '$allGift9', '$allGift10', '$allGift11', '$allGift12', '$allGift13', '$allGift14', '$allGift15', '$allGift16', '$allGift17', '$allGift18', '$allGift19', '$allGift20', '$stat')";
						if (mysqli_query($conn, $sql)) {
							$nazevFormulare = "";
							$messageSuccess = "Formulář přidán. Nyní můžete přidat další.";
						}
						else {
							$messageError = "Nepodařilo se přidat formulář.";
							//echo "<div class=\"message-error\">$sql</div>";

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