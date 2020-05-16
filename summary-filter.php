<?php //if (!empty($messageSuccess)) { echo '<div class="message-success">'.$messageSuccess.'</div>';		} ?>
<?php //if (!empty($messageError))   { echo '<div class="message-error">'.$messageError.'</div>';	}	 ?>
<?php 

	$error         	= false;
	$messageError 	= "";
	$messageSuccess = "";
	$additional 	= "";
	$valueName     	= "";
	$valueTown		= "";
	$valueChain  	= "";
	$valueVdl  		= "";
	$valueRating  	= "";
	$valueAddress  	= "";
	$valueTown  	= "";
	$valueDivision  = "";
	$valuePhoto  	= "";
	$valuecPerson  	= "";
	$valuecPhone  	= "";
	$valueStat  	= "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		if(empty($_POST['company'])) { 
			$messageError = $error_company = "Vyberte prosím firmu klienta.";
			?><div class="error"><?php if(!empty($error_company)) { echo $error_company; } ?></div><?php
			$error = true;
		}
		$dateFrom 				= $_POST['date-from'];
		$dateTo 				= $_POST['date-to'];

		//echo "Od ".date("Y-m-d", $dateFrom)." Do $dateTo";

		if ( isset($_POST['company']) && isset($_POST['choose']) && $error == false ) {
			(int)$id_company 	= $_POST['company'];
			$choose 			= $_POST['choose'];
			$sortBy 			= $_POST['sort-by'];
			$sort 				= $_POST['sort'];
			$filled 			= $_POST['filled'];
			$approved			= $_POST['approved'];

			if (!empty($_POST['id'])) 			{ $valueid 		= $_POST['id']; 	 	$additional .= " AND id_action LIKE '%$valueid%'"; }
			if (!empty($_POST['nazev'])) 		{ $valuenazev 	= $_POST['nazev']; 	 	$additional .= " AND pharmacy.nazev LIKE '%$valuenazev%'"; }
			if (!empty($_POST['vdl']))   		{ $valuevdl 	= $_POST['vdl']; 	 	$additional .= " AND vdl LIKE '%$valuevdl%'";}
			if (!empty($_POST['ulice']))   		{ $valueulice 	= $_POST['ulice']; 	 	$additional .= " AND ulice LIKE '%$valueulice%'";}
			if (!empty($_POST['okres']))   		{ $valueokres 	= $_POST['okres']; 	 	$additional .= " AND okres LIKE '%$valueokres%'";}
			if (!empty($_POST['mesto']))   		{ $valuemesto 	= $_POST['mesto']; 	 	$additional .= " AND mesto LIKE '%$valuemesto%'";}
			if (!empty($_POST['retezec']))  	{ $valueretezec = $_POST['retezec'];  	$additional .= " AND retezec LIKE '%$valueretezec%'";}
			if (!empty($_POST['rating']))   	{ $valuerating 	= $_POST['rating'];  	$additional .= " AND rating LIKE '%$valuerating%'";}
			if (!empty($_POST['phone']))   		{ $valuephone 	= $_POST['phone']; 	 	$additional .= " AND k_cislo LIKE '%$valuephone%'";}
			if (!empty($_POST['kontakt']))  	{ $valuekontakt = $_POST['kontakt'];  	$additional .= " AND k_jmeno LIKE '%$valuekontakt%'";}
			if (!empty($_POST['reprezentant']))	{ $valuereprezentant = $_POST['reprezentant'];  	$additional .= " AND tradesman.prijmeni LIKE '%$valuereprezentant%'";}
			if (!empty($_POST['stat']))  	{ $valuestat 	= $_POST['stat'];  		}

			if ($valuestat == "cz") {
				$additional .= " AND pharmacy.stat=\"cz\" ";
			}
			else if ($valuestat == "sk") {
				$additional .= " AND pharmacy.stat=\"sk\" ";
			}
			else {
				$additional .= "";
			}

			//echo "$filled <br> $approved";
			$conn = dbConnect();
			mysqli_query($conn, "SET NAMES utf8");
							//AND actions.datum BETWEEN $dateFrom AND $dateTo

			//echo "$choose[0]<br>";
			//echo "$choose[2]<br>";
			$user = $sqlHeader = "";
			$values = "";
			$tableHeader2 = $tableHeader = "";
			$darky = $darkyBool  = $bonusBool = $bonus = $edit = $vyplata = false;

			$cilKc 			= 0;
			$cilKs 			= 0;
			$pocHodin 		= 0;
			//$bonus	 		= 0;
			$trzbaProm 		= 0;
			$ksProm	 		= 0;
			$ksNeprom	 	= 0;
			$trzbaNeprom 	= 0;
			$cyklAdd 		= -1;
			//$cyklAdd 		= 1;

			$counterQuestionHeader = $counterApproved = $counterTemp = $counterPharmacy = $counterFilled = $counterUser = $counterPauza = $counterRetezec = $counterOkres = $counterUlice = $counterTradesman = $counterTradesmanPhone = $counterDarku = $counterEdit = $counterBonus = $counterOsloveni = $counterCelkemKusu = $counterTrzba = $counterMinKs = $counterMinKc = $counterVyplata = $counterSend = $counterDate = $counterVdl = $counterProductHeader = $counterGiftHeader = $counterHours = $counterQuestion= $counterProduct = $i = $counter = $counterTime = $counterKoo = 0;
			$koo = "ne";
			$produkty = "ne";
			$poznamky = "ne";
			//$sort = "ASC";	


			//$userStat = $_SESSION['stat']; 
			$mena = "Kč";
			if ($valuestat=="sk") {
				$mena = "&euro;";
			}

			if (!empty($_POST['users-koo']))   	{ 
				$valuekoo 	= $_POST['users-koo']; 
				$user .= " AND (";	 	
				for ($i=0; $i < count($valuekoo); $i++) { 
					$user .= "actions.id_user_koo = '$valuekoo[$i]'";
					if (($i+1)!=count($valuekoo)) {
						$user .= " OR ";
					}
					else {
						$user .= ") ";
					}
					//echo "<br>$valuekoo[$i] <br><br>";
				}
			}

			if (!empty($_POST['users']))   	{ 
				$valuepromo 	= $_POST['users']; 
				$user .= " AND (";	 	
				for ($i=0; $i < count($valuepromo); $i++) { 
					$user .= "actions.id_user = '$valuepromo[$i]'";
					if (($i+1)!=count($valuepromo)) {
						$user .= " OR ";
					}
					else {
						$user .= ") ";
					}
					//echo "<br>$valuepromo[$i] <br><br>";
				}
			}


			if ($filled == "splneno-ano") {
				$additional .= " AND actions.splneno=\"ano\" ";
			}
			else if ($filled == "splneno-ne") {
				$additional .= " AND actions.splneno=\"ne\" ";
			}
			else {
				$additional .= "";
			}
			//echo $additional;

			if ($approved == "schvaleno-ano") {
				$additional .= " AND actions.schvaleno=\"ano\" ";
				//echo "má to být schváleno";
			}
			else if ($approved == "schvaleno-ne") {
				$additional .= " AND actions.schvaleno=\"ne\" ";
				//echo "má to být neschváleno";
			}
			else {
				$additional .= "";
				//echo "má to být vše";
			}	
			//echo "<br>$approved<br>$additional";


			$sqlQustionsHeader = "SELECT form.otazka_1, form.otazka_2, form.otazka_3, form.otazka_4, form.otazka_5, form.otazka_6, form.otazka_7, form.otazka_8, form.otazka_9, form.otazka_10, form.otazka_11, form.otazka_12, form.otazka_13, form.otazka_14, form.otazka_15

				FROM actions 
					JOIN company
					JOIN pharmacy
					JOIN users
					JOIN tradesman
					JOIN form
						ON 		actions.id_company=company.id_company 
							AND actions.id_pharmacy=pharmacy.id_pharmacy 
							AND actions.id_user=users.id_user 
							AND actions.id_tradesman=tradesman.id_tradesman
							AND actions.id_form=form.id_form
							$additional $user
							AND company.id_company='$id_company'
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy $sort, actions.id_action";



			$sqlProductsHeader = "SELECT form.produkt_1, form.produkt_2, form.produkt_3, form.produkt_4, form.produkt_5, form.produkt_6, form.produkt_7, form.produkt_8, form.produkt_9, form.produkt_10, form.produkt_11, form.produkt_12, form.produkt_13, form.produkt_14, form.produkt_15, form.produkt_16, form.produkt_17, form.produkt_18, form.produkt_19, form.produkt_20, form.produkt_21, form.produkt_22, form.produkt_23, form.produkt_24, form.produkt_25, form.produkt_26, form.produkt_27, form.produkt_28, form.produkt_29, form.produkt_30, form.produkt_31, form.produkt_32, form.produkt_33, form.produkt_34, form.produkt_35, form.produkt_36, form.produkt_37, form.produkt_38, form.produkt_39, form.produkt_40, actions.otatni_soupis

				FROM actions 
					JOIN company
					JOIN pharmacy
					JOIN users
					JOIN tradesman
					JOIN form
						ON 		actions.id_company=company.id_company 
							AND actions.id_pharmacy=pharmacy.id_pharmacy 
							AND actions.id_user=users.id_user 
							AND actions.id_tradesman=tradesman.id_tradesman
							AND actions.id_form=form.id_form
							$additional $user
							AND company.id_company='$id_company'
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy $sort, actions.id_action";


			$sqlGiftsHeader = "SELECT form.darek_1, form.darek_2, form.darek_3, form.darek_4, form.darek_5, form.darek_6, form.darek_7, form.darek_8, form.darek_9, form.darek_10, form.darek_11, form.darek_12, form.darek_13, form.darek_14, form.darek_15, form.darek_16, form.darek_17, form.darek_18, form.darek_19, form.darek_20

				FROM actions 
					JOIN company
					JOIN pharmacy
					JOIN users
					JOIN tradesman
					JOIN form
						ON 		actions.id_company=company.id_company 
							AND actions.id_pharmacy=pharmacy.id_pharmacy 
							AND actions.id_user=users.id_user 
							AND actions.id_tradesman=tradesman.id_tradesman
							AND actions.id_form=form.id_form
							$additional $user
							AND company.id_company='$id_company'
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy $sort, actions.id_action";

			//for ($i=0; $i < 60 ; $i++) { 			
			for ($i=0; $i < count($choose) ; $i++) { 			
				switch ($choose[$i]) {
					case 'edit':
						$values .= "$choose[$i]|";
						$edit = true;
						$sqlHeader .= ", actions.id_action";
						$counter++;
						$counterEdit = $counter;
						$tableHeader .=  "<th>Upravit</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'odeslano':
						$values .= "$choose[$i]|";
						$counter++;
						$counterSend = $counter;
						$sqlHeader .= ", actions.odeslano";
						$tableHeader .=  "<th>Datum&nbsp;odeslání</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'vdl':
						$values .= "$choose[$i]|";
						$counter++;
						$counterVdl = $counter;
						$sqlHeader .= ", pharmacy.vdl";
						$tableHeader .=  "<th>VDL</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'id-gs':
						$values .= "$choose[$i]|";
						$counter++;
						$sqlHeader .= ", actions.id_gs";
						$tableHeader .=  "<th>ID&nbsp;GS</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'sukl':
						$values .= "$choose[$i]|";
						$counter++;
						$sqlHeader .= ", actions.sukl";
						$tableHeader .=  "<th>SUKL</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'skoleni':
						$values .= "$choose[$i]|";
						$counter++;
						$sqlHeader .= ", actions.skoleni";
						$tableHeader .=  "<th>Školení</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'top-lekarna':
						$values .= "$choose[$i]|";
						$counter++;
						$sqlHeader .= ", actions.top_lekarna";
						$tableHeader .=  "<th>TOP lékarna</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'tradesman-prijmeni':
						$values .= "$choose[$i]|";
						$counter++;
						$counterTradesman = $counter;
						$sqlHeader .= ", tradesman.prijmeni";
						$tableHeader .=  "<th>Reprezentant</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'tradesman-telefon':
						$values .= "$choose[$i]|";
						$counter++;
						$counterTradesmanPhone = $counter;
						$sqlHeader .= ", tradesman.telefon";
						$tableHeader .=  "<th>Telefon reprezentanta</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'pharmacy':
						$values .= "$choose[$i]|";
						$counter++;
						$counterPharmacy = $counter;
						$sqlHeader .= ", pharmacy.nazev";
						$tableHeader .=  "<th>Lékárna</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'ulice':
						$values .= "$choose[$i]|";
						$counter++;
						$counterUlice = $counter;
						$sqlHeader .= ", pharmacy.ulice";
						$tableHeader .=  "<th>Ulice</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'mesto':
						$values .= "$choose[$i]|";
						$counter++;
						$counterMesto = $counter;
						$sqlHeader .= ", pharmacy.mesto";
						$tableHeader .=  "<th>Město</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'okres':
						$values .= "$choose[$i]|";
						$counter++;
						$counterOkres = $counter;
						$sqlHeader .= ", pharmacy.okres";
						$tableHeader .=  "<th>Obec</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'retezec':
						$values .= "$choose[$i]|";
						$counter++;
						$counterRetezec= $counter;
						$sqlHeader .= ", pharmacy.retezec";
						$tableHeader .=  "<th>Řetězec</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'datum-akce':
						$values .= "$choose[$i]|";
						$counter++;
						$counterDate = $counter;
						$sqlHeader .= ", actions.datum";
						$tableHeader .=  "<th>Datum akce</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'pracovni-doba':
						$values .= "$choose[$i]|";
						$counter++;
						$counterTime = $counter;
						$sqlHeader .= ", actions.cas";
						$tableHeader .=  "<th>Pracovní doba s pauzou</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'pocet-hodin':
						$values .= "$choose[$i]|";
						$counter++;
						$counterHours = $counter;
						$sqlHeader .= ", actions.poc_hodin";
						$tableHeader .=  "<th>Počet hodin bez pauzy</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'pauza':
						$values .= "$choose[$i]|";
						$counter++;
						$counterPauza = $counter;
						$sqlHeader .= ", actions.pauza";
						$tableHeader .=  "<th>Čas pauzy</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'promo':
						$values .= "$choose[$i]|";
						$counter++;
						$counterUser = $counter;
						$sqlHeader .= ", users.prijmeni, users.telefon";
						$tableHeader .=  "<th>Promotérka</th>
								<th>Telefon promotérky</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th><th>&nbsp;</th>
								";
						break;
					case 'koo':
						$values .= "$choose[$i]|";
						$counter++;
						$counterKoo = $counter;
						//echo $counterKoo;
						$koo = "ano";
						$tableHeader .=  "<th>Koordinátor</th>
								<th>Telefon koordinátora</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								<th>&nbsp;</th>
								";
						break;
					case 'filled':
						$values .= "$choose[$i]|";
						$counter++;
						$counterFilled = $counter;
						$sqlHeader .= ", actions.splneno";
						$actionFilled = "ano";
						$tableHeader .=  "<th>Počet akcí</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'schvaleno':
						$values .= "$choose[$i]|";
						$counter++;
						$counterApproved = $counter;
						$sqlHeader .= ", actions.schvaleno";
						$tableHeader .=  "<th>Schváleno</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'min-kc':
						//echo "<br>Napiš minimální Kč<br>";
						$values .= "$choose[$i]|";
						$counter++;
						$counterMinKc = $counter;
						$sqlHeader .= ", actions.cil";
						$tableHeader .=  "<th>Minimum pro dosažení motivace ($mena)</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'min-ks':
						//echo "<br>Napiš minimální Ks<br>";
						$values .= "$choose[$i]|";
						$counter++;
						$counterMinKs = $counter;
						$sqlHeader .= ", actions.cil_ks";
						$tableHeader .=  "<th>Minimum pro dosažení motivace (ks)</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'trzba':
						$values .= "$choose[$i]|";
						$counter++;
						$counterTrzba = $counter;
						$sqlHeader .= ", actions.celkem_trzba";
						$tableHeader .=  "<th>Celková tržba</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'celkem-kusu':
						$values .= "$choose[$i]|";
						$counter++;
						$counterCelkemKusu = $counter;
						$sqlHeader .= ", actions.celkem_kusu";
						$tableHeader .=  "<th>Celkový počet prodaných produktů (promované i nepromované)</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'pocet-oslovenych':
						$values .= "$choose[$i]|";
						$counter++;
						$counterOsloveni = $counter;
						$sqlHeader .= ", actions.celkem_zakazniku";
						$tableHeader .=  "<th>Počet oslovených zákazníků</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						break;
					case 'vyplata':
						$values .= "$choose[$i]|";
						$counter++;
						$counterVyplata = $counter;
						$vyplata = true;
						$tableHeader .=  "<th>Základní mzda promotérky</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						//echo "píšu bonus <br>";
						break;
					case 'bonus':
						$values .= "$choose[$i]|";
						$counter++;
						$counterBonus = $counter;
						$bonus = true;
						//$sqlHeader .= ", actions.bonus";
						$tableHeader .=  "<th>Motivace promotérky</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						//echo "píšu bonus <br>";
						break;
					case 'pocet-darku':
						$values .= "$choose[$i]|";
						$counter++;
						$counterDarku = $counter;
						$darky = true;
						$sqlHeader .= ", actions.celkem_darku";
						$tableHeader .=  "<th>Počet vydaných dárků</th>
								";
						$tableHeader2 .= "<th>&nbsp;</th>
								";
						//echo "Budou tam dárky";
						break;
					case 'poznamky':
						$values .= "$choose[$i]|";
						$counter++;
						//$counterQuestion = $counter;
						//$tableHeader .=  "<th>Poznámky k akci</th>
						//		";
						//$tableHeader2 .= "<th>&nbsp;</th>
						//		";
						//echo "píšu poznámky <br>";
						//$choose[$i] = "";
						//$poznamky = "ano";

						$dataQuestionHeader = mysqli_query($conn, $sqlQustionsHeader);
						if ($rowQuestionHeader = mysqli_fetch_row($dataQuestionHeader)) {
							for ($m=0; $m < count($rowQuestionHeader); $m++) {
								$QuestionArray 	= explode("|", $rowQuestionHeader[$m]);
								if (empty($QuestionArray[0])||$QuestionArray[0]=="") {
									break;
								}
								else {
									$counterQuestionHeader++;
									$tableHeader .=  "<th>$QuestionArray[0]</th>
								";	
									$tableHeader2 .= "<th>&nbsp;</th>";
								}
											
							}
						}


						break;
					case 'photo':
						$values .= "$choose[$i]|";
						$counter++;
						$sqlHeader .= ", actions.obr1, actions.obr2, actions.obr3, actions.obr4, actions.obr5";
						$tableHeader .=  "<th colspan=\"5\">FOTOGRAFIE</th>
								";
						$tableHeader2 .= "<th>FOTO 1</th><th>FOTO 2</th><th>FOTO 3</th><th>FOTO 4</th><th>FOTO 5</th>
								";
						break;
					case 'produkty':
						//$cyklAdd++;
						//echo "píšu produkty $tableHeader<br>";
						$produkty = "ano";
						//$choose[$i] = "";



						$counter++;
						$counterProduct = $counter;
						$dataProductHeader = mysqli_query($conn, $sqlProductsHeader);
						if ($rowProductHeader = mysqli_fetch_row($dataProductHeader)) {
							for ($i=0; $i < count($rowProductHeader); $i++) {
								//echo $rowProductHeader[$i];
								$productArray 	= explode("|", $rowProductHeader[$i]);
								//echo $productArray[0];
								if (count($rowProductHeader) == ($i+1)) {
									$tableHeader .=  "<th>Ostaní prodané produkty</th>
									";
									$tableHeader2 .= "<th>&nbsp;</th>
									";
									$tableHeader .=  "<th>Ostaní prodané produkty (Ks)</th>
									";
									$tableHeader2 .= "<th>&nbsp;</th>
									";
									$tableHeader .=  "<th>Ostaní prodané produkty ($mena)</th>
									";
									$tableHeader2 .= "<th>&nbsp;</th>
									";
								}
								else {
									if (!empty($productArray[0])) {
										$counterProductHeader++;
										$tableHeader .=  "<th colspan=\"2\">$productArray[0]</th>
									";	
										$tableHeader2 .= "<th>Cena</th><th>Prodej ks</th>
									";
									}
								}
											
							}
						}
												
						//echo "píšu produkty po cyklu $tableHeader<br>";
						break;
					
					default:
						# code...
						break;
				}

				//echo "píšu TH $tableHeader<br>";
				if ($i>0) {
					$p = $i;
				}
				else {
					$p = 0;
				}
				if ( $produkty == "ano" ) {
					//echo "minuly byl produkt";
					break;
				}
				if ( empty($choose[$i+1])) { break; }
			}


			if ($darky == true) {
				$dataGiftHeader = mysqli_query($conn, $sqlGiftsHeader);
				if ($rowGiftHeader = mysqli_fetch_row($dataGiftHeader)) {
					//echo "dělám dotaz<br>$sqlGiftsHeader<br>Počet řádků: ".count($rowGiftHeader)."<br>";
					for ( $j = 0; $j < count($rowGiftHeader); $j++ ) {
						//echo $j.") ".$rowGiftHeader[$j]."<br>";
						$giftArray 	= explode("|", $rowGiftHeader[$j]);
						//echo $giftArray[0]."<br>";
						if (!empty($giftArray[0])) {
							$counterGiftHeader++;
							$tableHeader .=  "<th>$giftArray[0]</th>
						";	
							$tableHeader2 .= "<th>&nbsp;</th>
						";
						}

					}
					//echo "Počet typů dárků: $counterGiftHeader";

					//echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";			
					
				}
			}

			//echo "$values<br>";
			//echo "$counter<br>";
			//echo "$sqlHeader<br>";
			//echo "$tableHeader<br>";
			//echo "$produkty<br>";
			//echo "$koo<br>";
			//echo "$counterQuestion<br>";
				

			//$sql = "SELECT company.nazev, pharmacy.nazev, pharmacy.ulice, pharmacy.okres, pharmacy.retezec, actions.datum, actions.cas, actions.poc_hodin, actions.pauza, users.prijmeni, users.telefon, actions.cil, actions.celkem_trzba

			$sqlTables = "FROM actions 
					JOIN company
					JOIN pharmacy
					JOIN users
					JOIN tradesman
					JOIN form
						ON 		actions.id_company=company.id_company 
							AND actions.id_pharmacy=pharmacy.id_pharmacy 
							AND actions.id_user=users.id_user 
							AND actions.id_form=form.id_form
							AND actions.id_tradesman=tradesman.id_tradesman
							$additional $user
							AND company.id_company='$id_company'
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy $sort, actions.id_action";

			$sql = "SELECT company.nazev $sqlHeader 

					$sqlTables ";

			$sqlVyplata = "SELECT actions.cil, actions.cil_ks, actions.poc_hodin, actions.bonus, actions.celkem_trzba, actions.celkem_kusu, actions.otatni_ks, actions.otatni_cena, users.cena_za_h

					$sqlTables ";
				/*FROM actions 
					JOIN company
					JOIN pharmacy
					JOIN users
					JOIN tradesman
					JOIN form
						ON 		actions.id_company=company.id_company 
							AND actions.id_pharmacy=pharmacy.id_pharmacy 
							AND actions.id_form=form.id_form
							AND actions.id_tradesman=tradesman.id_tradesman
							AND actions.id_user=users.id_user
							AND actions.splneno=\"ano\"
							AND actions.schvaleno=\"ano\"
							AND actions.id_user='$userId'

			ORDER BY actions.datum DESC";*/

			//echo "$sql<br>";


			$sqlKoo = "SELECT users.prijmeni, users.telefon 
				FROM actions 
					JOIN company
					JOIN pharmacy
					JOIN users
					JOIN tradesman
					JOIN form
						ON 		actions.id_company=company.id_company 
							AND actions.id_pharmacy=pharmacy.id_pharmacy 
							AND actions.id_user_koo=users.id_user
							AND actions.id_form=form.id_form
							AND actions.id_tradesman=tradesman.id_tradesman
							$additional $user
							AND company.id_company='$id_company'
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy $sort, actions.id_action";

			$sqlQuestion = "SELECT actions.otazka_1, actions.otazka_2, actions.otazka_3, actions.otazka_4, actions.otazka_5, actions.otazka_6, actions.otazka_7, actions.otazka_8, actions.otazka_9, actions.otazka_10, actions.otazka_11, actions.otazka_12, actions.otazka_13, actions.otazka_14, actions.otazka_15

					$sqlTables ";	

			$sqlPrice = "SELECT form.produkt_1, form.produkt_2, form.produkt_3, form.produkt_4, form.produkt_5, form.produkt_6, form.produkt_7, form.produkt_8, form.produkt_9, form.produkt_10, form.produkt_11, form.produkt_12, form.produkt_13, form.produkt_14, form.produkt_15, form.produkt_16, form.produkt_17, form.produkt_18, form.produkt_19, form.produkt_20, form.produkt_21, form.produkt_22, form.produkt_23, form.produkt_24, form.produkt_25, form.produkt_26, form.produkt_27, form.produkt_28, form.produkt_29, form.produkt_30, form.produkt_31, form.produkt_32, form.produkt_33, form.produkt_34, form.produkt_35, form.produkt_36, form.produkt_37, form.produkt_38, form.produkt_39, form.produkt_40

					$sqlTables";	

			$sqlProducts = "SELECT actions.produkt_1, actions.produkt_2, actions.produkt_3, actions.produkt_4, actions.produkt_5, actions.produkt_6, actions.produkt_7, actions.produkt_8, actions.produkt_9, actions.produkt_10, actions.produkt_11, actions.produkt_12, actions.produkt_13, actions.produkt_14, actions.produkt_15, actions.produkt_16, actions.produkt_17, actions.produkt_18, actions.produkt_19, actions.produkt_20, actions.produkt_21, actions.produkt_22, actions.produkt_23, actions.produkt_24, actions.produkt_25, actions.produkt_26, actions.produkt_27, actions.produkt_28, actions.produkt_29, actions.produkt_30, actions.produkt_31, actions.produkt_32, actions.produkt_33, actions.produkt_34, actions.produkt_35, actions.produkt_36, actions.produkt_37, actions.produkt_38, actions.produkt_39, actions.produkt_40, actions.otatni_soupis, actions.otatni_ks, actions.otatni_cena

					$sqlTables";	

			$sqlGift = "SELECT actions.darek_1, actions.darek_2, actions.darek_3, actions.darek_4, actions.darek_5, actions.darek_6, actions.darek_7, actions.darek_8, actions.darek_9, actions.darek_10, actions.darek_11, actions.darek_12, actions.darek_13, actions.darek_14, actions.darek_15, actions.darek_16, actions.darek_17, actions.darek_18, actions.darek_19, actions.darek_20, actions.otatni_soupis, actions.otatni_cena

					$sqlTables";		



		?>
		<?php 

				$data1 = mysqli_query($conn, $sql);
				$data2 = mysqli_query($conn, $sqlKoo);
				$data3 = mysqli_query($conn, $sql);
				$data4 = mysqli_query($conn, $sqlQuestion);
				$dataVyplata = mysqli_query($conn, $sqlVyplata);
				$dataPrice = mysqli_query($conn, $sqlPrice);
				$dataProduct = mysqli_query($conn, $sqlProducts);
				$dataGift = mysqli_query($conn, $sqlGift);

				$rowCompany = mysqli_fetch_row($data3);
				//$rowProduct = mysqli_fetch_row($dataProduct);
		?>

		<?php if (empty($rowCompany[0])) { $rowCompany[0]=""; } ?>
		<div class="container per100 padd-top-15">
			<main>
				<section class="seznam td-right">
					<h2><?php echo $rowCompany[0]; ?></h2>
					<?php require('summary-filter-table.php') ?>	                   
				</section>
			</main>
		</div>

		<?php

		dbClose($conn);
		}

		else {
			$messageError = "Nastala chyba";
		}
	}

 ?>