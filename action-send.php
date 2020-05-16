<?php 

	$error         	= false;

	//if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		if ( isset($_POST['pharmacy']) &&  // prázné políčko taky vezme isset, pro tuto kontrolu bychom musel použít empty
			 isset($_POST['form']) && 
			 isset($_POST['users-koo']) && 
			 isset($_POST['date']) && 
			 //isset($_POST['users']) &&
			 isset($_POST['tradesman']) &&
			 isset($_POST['time']) &&
			 //isset($_POST['goal']) && 
			 isset($_POST['company']) ) {

			//$select = "selected";

			(int)$goal		= 0; 	
			(int)$goalKs	= 0; 

			//$error 		= false;
			(int)$pharmacy 		= $_POST['pharmacy'];   // Uložíme si hodnoty do vlastních proměnných
			(int)$form 			= $_POST['form'];
			(int)$usersKoo 		= $_POST['users-koo'];
			$date 				= $_POST['date'];
			
			(int)$company 		= $_POST['company'];
			(int)$tradesman 	= $_POST['tradesman'];
			(int)$bonus 		= $_POST['bonus'];
			//(int)$goal 			= $_POST['goal'];
			if (!empty($_POST['time'])) {
				$timeArray 			= $_POST['time'];
			}
			else {
				$timeArray 			= NULL;
			}
			if (isset($_POST['pause'])) {
				$pause 			= $_POST['pause'];
			}
			else {
				$pause 			= NULL;
			}

			

			if (isset($_POST['sukl'])) 			{ $sukl 		= $_POST['sukl']; } 		else { $sukl = NULL; }
			if (isset($_POST['id_gs'])) 		{ $idGs 		= $_POST['id_gs']; } 		else { $idGs = NULL; }
			if (isset($_POST['skoleni'])) 		{ $skoleni 		= $_POST['skoleni']; } 		else { $skoleni = NULL; }
			if (isset($_POST['top-lekarna'])) 	{ $topLekarna 	= $_POST['top-lekarna']; } 	else { $topLekarna = NULL; }
			

			if (isset($_POST['users'])) {
				(int)$users 		= $_POST['users'];
			}
			else {
				(int)$users 		= 1;
			}
			
			//if (!empty($_POST['goal']) && !empty($_POST['goal-ks'])) {
			if (!empty($_POST['goal']) && !empty($_POST['goal-ks'])) {
				(int)$goal 			= $_POST['goal'];
				(int)$goalKs 		= $_POST['goal-ks'];
			}

			else if (!empty($_POST['goal'])||($_POST['goal']=="0")) {
				(int)$goal 			= $_POST['goal'];
				(int)$goalKs 		= 0;
			}

			else if (!empty($_POST['goal-ks'])||($_POST['goal-ks']=="0")) {
				(int)$goal 			= 0;
				(int)$goalKs 		= $_POST['goal-ks'];
			}

			else {
				//echo "neni vyplnen<br>";
				(int)$goal 			= 0;
				(int)$goalKs 		= 0;
				//$error 				= true;
				//$messageError 		= "Není zadán cíl.";
			}
			//echo "Cíl v kč: ".$goal;
			//echo "Cíl v kusech:".$goalKs;
			
			//$materials 	= $_POST['materials'];
			$materials 			= NULL;
			//$valuePharmacy	= $pharmacy;
			//$valueForm		= $form;
			//$valueUsersKoo	= $usersKoo;
			//$valueDate		= $date;
			//$valueUsers		= $users;

			if ($timeArray!=NULL) {
				//echo "Chci vypsat čas<br>";
				$time = implode("|", $timeArray);
				//echo vypisCas($timeArray)."<br>";
				//$hours = $timeArray[2]-$timeArray[0];
				//echo $time."<br>";
				$hours = (($timeArray[2]*60+$timeArray[3])-($timeArray[0]*60+$timeArray[1])-30)/60;
				//echo $hours."<br>";
				if ((($hours)*60+30)<=0) {
					$error = true; //zakomentovat pak
					$error_time = "Čas \"Od\" musí být menší než \"Do\"";
				}
				else if ($hours==-0.5) {
					$hours = 0;
				}
			}
			else {
				$error 				= true;
				$messageError 		= "Není zadáný čas.";
			}

			if(!empty($_POST['pause'])) { 
				$reg_pause     = "#^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]-([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$#";
				//echo $pause."<br>";
				$pause = str_replace(' ', '', $pause);
				//echo $pause."<br>";
				if(!preg_match($reg_pause, $pause)) {
					$error_pause = "Pauza by měla být napsána ve tvaru \"HH:MM-HH:MM\".";
					$pause  = "";
					$error = true;
				}
			}
	

			if ( $error == false ) {
				$conn = dbConnect(); // Připojíme se k databázi
				mysqli_query($conn, "SET NAMES utf8");
				//echo "jdu zkontrolovat duplicitu<br>";

				//Kontrola, zda není lékárna v databázi
				//$sql  = "SELECT * FROM action WHERE id_user='$users' AND id_pharmacy='$pharmacy' AND id_form='$form' AND datum='$date'";
				$sql  = "SELECT * FROM actions WHERE id_user='$users' AND id_pharmacy='$pharmacy' AND id_form='$form' AND datum='$date'";
				//$data = mysqli_query($conn, $sql);
				if ( $data = mysqli_query($conn, $sql) ) {
					$row  = mysqli_fetch_row($data);

					// ZAKOMENTOVAT PAK
					//$row = NULL;

					if ($row != NULL) {
						//echo "Nelze přidat, akce s těmito parametry již je v databázi.<br>";
						$messageError = "Nelze přidat, akce s těmito parametry již je v databázi.";
						renderForm($pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
					}
					else {
						//echo "chci pridat<br>";
						//echo "id_user je: \"".$users."\"<br>";
						//echo "id_user_koo je: \"".$usersKoo."\"<br>";
						//echo "id_pharmacy je: \"".$pharmacy."\"<br>";
						//echo "id_company je: \"".$company."\"<br>";
						//echo "id_form je: \"".$form."\"<br>";
						//echo "datum je: \"".$date."\"<br>";
						//echo "podklady jsou: \"".$materials."\"<br>";
						//echo "cíl v korunách jsou: \"".$goal."\"<br>";
						//echo "cíl v kusech jsou: \"".$goalKs."\"<br>";
						//echo "cas je: \"".$time."\"<br>";
						$sql = "
						INSERT INTO actions(id_user, id_user_koo, id_pharmacy, id_company, id_form, id_tradesman, bonus, datum, podklady, cil, cil_ks, cas, poc_hodin, pauza, id_gs, sukl, skoleni, top_lekarna, obr1, obr2, obr3, obr4, obr5) 
						VALUES('$users', '$usersKoo', '$pharmacy', '$company', '$form', '$tradesman', '$bonus', '$date', '$materials', '$goal', '$goalKs', '$time', '$hours', '$pause', '$idGs', '$sukl', '$skoleni', '$topLekarna', '', '', '', '', '')";
						//$sql = "
						//INSERT INTO actions(id_user, id_user_koo, id_pharmacy, id_company, id_form) 
						//VALUES(1, 1, 1, 1, 1)";
						//echo "<br>$sql<br>";

						if (mysqli_query($conn, $sql)) {
							//echo "pridano<br>";
							$messageSuccess 	= "Akce přidána. Nyní můžete přidat další.";
							//$goal = $goalKs = $pause = $timeArray[0] = $timeArray[1] = $timeArray[2] = $timeArray[3] = "";
							//$valuePharmacy	= "";
							//$valueForm		= "";
							//$valueUsersKoo	= "";
							//$valueDate		= "";
							//$valueUsers  		= "";

							renderForm($pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
							//echo "Vyrendovoval jsem funkci<br>.";

						}
						else {
							//echo "Nepodařilo se přidat akci<br>";
							$messageError = "Nepodařilo se přidat akci.";
							renderForm($pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);

							//mysqli_query($conn, $sql);
							//$row  = mysqli_fetch_row($data);
							//$messageError = $row;
						}
					}

				}
				dbClose($conn); // Odpojíme se z D
			}

		}
		else {
			//echo "chyba";			
			if(empty($_POST['pharmacy'])) { 
				$error_pharmacy = "Vyberte prosím lékárnu.";
				//$valuePharmacy  = "";
				//$error = true;
			}

			if(empty($_POST['form'])) { 
				$error_form = "Vyberte prosím formulář.";
				//$valueForm  = "";
				//$error = true;
			}

			if(empty($_POST['users-koo'])) { 
				$error_usersKoo = "Vyberte prosím odpovědnou koordinátorku.";
				//$valueUsersKoo  = "";
				//$error = true;
			}

			if(empty($_POST['date'])) { 
				$error_date = "Vyberte prosím datum akce.";
				//$valueDate  = "";
				//$error = true;
			}

			if(empty($_POST['time'])) { 
				$error_time = "Napište prosím čas akce.";
				//$valueDate  = "";
				//$error = true;
			}

			//if(empty($_POST['users'])) { 
			//	$error_users = "Vyberte prosím promotéra.";
			//	//$valueUsers  = "";
			//	//$error = true;
			//}

			if(empty($_POST['company'])) { 
				$error_company = "Vyberte prosím firmu klienta.";
				//$valueCompany  = "";
				//$error = true;
			}

			if(empty($_POST['tradesman'])) { 
				$error_tradesman = "Vyberte prosím reprezentanta dané firmy.";
				//$valueCompany  = "";
				//$error = true;
			}

			if(empty($_POST['goal']) && empty($_POST['goal-js'])) { 
				$error_goal = "Musí být zadán alespoň jeden cíl.";
				//$valueGoal  = "";
				//$error = true;
			}
			renderForm($pharmacy, $form, $usersKoo, $users, $date, $tradesman, $company, $time, $goal, $goalKs, $bonus, $messageSuccess, $messageError, $error_goal, $error_time, $error_pause, $pause, $sukl, $idGs, $skoleni, $topLekarna, $timeArray);
		}
	//}

?>