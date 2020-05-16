<?php 

	$error         	= false;
	//$revisionEdit 	= false;
	$valueActiveCheck 		="checked=\"checked\"";

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  // Pokud se zmáčkne tlačítko POST, udělej funkci
		//if ( isset($_POST['otazka-1'])  ) {

			$sqlAdditional = $tableAdditional = $sqlTime = "";
			$id = $_GET['id'];
			$counterP = 0;
			$counterD = 0;
			$counterQ = 0;


			//if ($time==":0-:0" && isset($_POST['time'])) {
				//$timeArray = $_POST['time'];
			//} 

			if (isset($_POST['time']))  { 
				$timeArray = $_POST['time'];

				if (strlen($timeArray[0])>0 && strlen($timeArray[1])>=0 && strlen($timeArray[2])>=0 && strlen($timeArray[3])>0  ) {
					//echo "Chci vypsat čas<br>";
					$time = implode("|", $timeArray);
					//echo vypisCas($timeArray)."<br>";
					//$hours = $timeArray[2]-$timeArray[0];
					//echo $time."<br>";
					$hours = (($timeArray[2]*60+$timeArray[3])-($timeArray[0]*60+$timeArray[1])-30)/60;
					//echo $hours."<br>";
					$sqlTime = "cas='$time', poc_hodin='$hours', ";
					if ($hours<=0) {
						$error = true; //zakomentovat pak
						$error_time = "Čas \"Od\" musí být menší než \"Do\"";
					}
				}
			}

			$customer = $gift = 0;

			if (isset($_POST['others-summary']))  	{ $othersSummary  		= removeSqlSpecChar($_POST['others-summary']); }
			if (isset($_POST['others-ks']))  		{ (int)$othersKs  		= $_POST['others-ks']; }
			if (isset($_POST['others-price']))  	{ (int)$othersPrice  	= $_POST['others-price']; }
			if (isset($_POST['customer']))  		{ (int)$customer  		= $_POST['customer']; }
			if (isset($_POST['gift']))  			{ (int)$gift  			= $_POST['gift']; }

			/**************************************************************************
												UPLOAD
			 **************************************************************************/

			$file_prename 			= makeFilePreName( $id );	
			$file_path_original 	= "promoday/original/".date("Y");
			$file_path_resized 		= "promoday/resized/".date("Y");
			//echo $file_path."<br>".$file_path_original."<br>".$file_path_resized."<br>".$file_prename."<br>";


			//require("upload-test.php");
			$image1 = $image2 = $image3 = $image4 = $image5 = "";

			$obr1  		= $_FILES['image-1']; 
			//echo "$obr1<br>";
			
			if ( $_FILES['image-1']['error'] <= UPLOAD_ERR_OK ) {
			//if (isset($_FILES['image-1'])) {
				$image1 = uploadMyImage("image-1", $file_path, $file_path_original, $file_path_resized, $file_prename);
				//echo "$image1<br>";
				if ($image1 == "chyba") {
					$error = true;
					$error_img1 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
				}
			}

			$obr2  		= $_FILES['image-2']; 
			//echo "$obr2<br>";
			if ( $_FILES['image-2']['error'] <= UPLOAD_ERR_OK ) {
			//if (isset($_FILES['image-2']) && $error == false) {
				$image2 = uploadMyImage("image-2", $file_path, $file_path_original, $file_path_resized, $file_prename);
				//echo "$image2<br>";
				if ($image2 == "chyba") {
					$error = true;
					$error_img2 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
				}
			}

			$obr3  		= $_FILES['image-3']; 
			//echo "$obr3<br>";
			if ( $_FILES['image-3']['error'] <= UPLOAD_ERR_OK ) {
			//if (isset($_FILES['image-3']) && $error == false) {
				$image3 = uploadMyImage("image-3", $file_path, $file_path_original, $file_path_resized, $file_prename);
				//echo "$image3<br>";
				if ($image3 == "chyba") {
					$error = true;
					$error_img3 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
				}
			}

			$obr4  		= $_FILES['image-4']; 
			//echo "$obr4<br>";
			if ( $_FILES['image-4']['error'] <= UPLOAD_ERR_OK ) {
			//if (isset($_FILES['image-4']) && $error == false) {
				$image4 = uploadMyImage("image-4", $file_path, $file_path_original, $file_path_resized, $file_prename);
				//echo "$image4<br>";
				if ($image4 == "chyba") {
					$error = true;
					$error_img4 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
				}
			}

			$obr5  		= $_FILES['image-5']; 
			//echo "$obr5<br>";
			if ( $_FILES['image-5']['error'] <= UPLOAD_ERR_OK ) {
			//if (isset($_FILES['image-5']) && $error == false) {
				$image5 = uploadMyImage("image-5", $file_path, $file_path_original, $file_path_resized, $file_prename);
				//echo "$image5<br>";
				if ($image5 == "chyba") {
					$error = true;
					$error_img5 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
				}
			}

			//if (isset($_POST['image']))  			{ uploadMyImage("image"); $image1  			= $_POST['image']; }
			//if (isset($$_FILES['image-1']))  			{ uploadMyImage("image-1", $file_path, $file_path_original, $file_path_resized, $file_prename); $image1  //			= $_POST['image-1']; }
			//if (isset($$_FILES['image-2']))  			{ uploadMyImage("image-2", $file_path, $file_path_original, $file_path_resized, $file_prename); $image2  //			= $_POST['image-2']; }
			//if (isset($$_FILES['image-3']))  			{ uploadMyImage("image-3", $file_path, $file_path_original, $file_path_resized, $file_prename); $image3  			= $_POST['image-3']; }

			//echo "$image1<br>$image2<br>$image3<br>$image4<br>$image5<br>";
			if (is_array($image1)) { $image1 = ""; }
			if (is_array($image2)) { $image2 = ""; }
			if (is_array($image3)) { $image3 = ""; }
			if (is_array($image4)) { $image4 = ""; }
			if (is_array($image5)) { $image5 = ""; }




			//echo "Revision edit je".$revisionEdit."<br>";
			if ($revisionEdit == true) {
				//echo "je to pravda, zapis schvaleno";
				if (isset($_POST['active'])) { $active = "ano"; $valueActive = "ano"; $valueActiveCheck = "checked=\"checked\""; $tableAdditional = ", schvaleno='$valueActive'"; }
				else { $active = "ne"; $valueActive = "ne"; $valueActiveCheck =""; $tableAdditional = ", schvaleno='$valueActive'";}
				//echo "$tableAdditional";
			}

			date_default_timezone_set('Europe/Prague');
			$dateSend = date('Y-m-d H:i:s');
			//echo $dateSend."<br>";


			if (isset($_POST['produkt-1']))  { $productArray1  = removeSqlSpecChar($_POST['produkt-1']);  $product1 	= 	implode("|", removeSqlSpecChar($_POST['produkt-1']));  $counterP++; } else { $productArray1  = $product1 	= ""; }
			if (isset($_POST['produkt-2']))  { $productArray2  = removeSqlSpecChar($_POST['produkt-2']);  $product2 	= 	implode("|", removeSqlSpecChar($_POST['produkt-2']));  $counterP++; } else { $productArray2  = $product2 	= ""; }
			if (isset($_POST['produkt-3']))  { $productArray3  = removeSqlSpecChar($_POST['produkt-3']);  $product3 	= 	implode("|", removeSqlSpecChar($_POST['produkt-3']));  $counterP++; } else { $productArray3  = $product3 	= ""; }
			if (isset($_POST['produkt-4']))  { $productArray4  = removeSqlSpecChar($_POST['produkt-4']);  $product4 	= 	implode("|", removeSqlSpecChar($_POST['produkt-4']));  $counterP++; } else { $productArray4  = $product4 	= ""; }
			if (isset($_POST['produkt-5']))  { $productArray5  = removeSqlSpecChar($_POST['produkt-5']);  $product5 	= 	implode("|", removeSqlSpecChar($_POST['produkt-5']));  $counterP++; } else { $productArray5  = $product5 	= ""; }
			if (isset($_POST['produkt-6']))  { $productArray6  = removeSqlSpecChar($_POST['produkt-6']);  $product6 	= 	implode("|", removeSqlSpecChar($_POST['produkt-6']));  $counterP++; } else { $productArray6  = $product6 	= ""; }
			if (isset($_POST['produkt-7']))  { $productArray7  = removeSqlSpecChar($_POST['produkt-7']);  $product7 	= 	implode("|", removeSqlSpecChar($_POST['produkt-7']));  $counterP++; } else { $productArray7  = $product7 	= ""; }
			if (isset($_POST['produkt-8']))  { $productArray8  = removeSqlSpecChar($_POST['produkt-8']);  $product8 	= 	implode("|", removeSqlSpecChar($_POST['produkt-8']));  $counterP++; } else { $productArray8  = $product8 	= ""; }
			if (isset($_POST['produkt-9']))  { $productArray9  = removeSqlSpecChar($_POST['produkt-9']);  $product9 	= 	implode("|", removeSqlSpecChar($_POST['produkt-9']));  $counterP++; } else { $productArray9  = $product9 	= ""; }
			if (isset($_POST['produkt-10'])) { $productArray10 = removeSqlSpecChar($_POST['produkt-10']); $product10 	= 	implode("|", removeSqlSpecChar($_POST['produkt-10'])); $counterP++; } else { $productArray10 = $product10 	= ""; }
			if (isset($_POST['produkt-11'])) { $productArray11 = removeSqlSpecChar($_POST['produkt-11']); $product11 	= 	implode("|", removeSqlSpecChar($_POST['produkt-11'])); $counterP++; } else { $productArray11 = $product11 	= ""; }
			if (isset($_POST['produkt-12'])) { $productArray12 = removeSqlSpecChar($_POST['produkt-12']); $product12 	= 	implode("|", removeSqlSpecChar($_POST['produkt-12'])); $counterP++; } else { $productArray12 = $product12 	= ""; }
			if (isset($_POST['produkt-13'])) { $productArray13 = removeSqlSpecChar($_POST['produkt-13']); $product13 	= 	implode("|", removeSqlSpecChar($_POST['produkt-13'])); $counterP++; } else { $productArray13 = $product13 	= ""; }
			if (isset($_POST['produkt-14'])) { $productArray14 = removeSqlSpecChar($_POST['produkt-14']); $product14 	= 	implode("|", removeSqlSpecChar($_POST['produkt-14'])); $counterP++; } else { $productArray14 = $product14 	= ""; }
			if (isset($_POST['produkt-15'])) { $productArray15 = removeSqlSpecChar($_POST['produkt-15']); $product15 	= 	implode("|", removeSqlSpecChar($_POST['produkt-15'])); $counterP++; } else { $productArray15 = $product15 	= ""; } 
			if (isset($_POST['produkt-16'])) { $productArray16 = removeSqlSpecChar($_POST['produkt-16']); $product16 	= 	implode("|", removeSqlSpecChar($_POST['produkt-16'])); $counterP++; } else { $productArray16 = $product16 	= ""; } 
			if (isset($_POST['produkt-17'])) { $productArray17 = removeSqlSpecChar($_POST['produkt-17']); $product17 	= 	implode("|", removeSqlSpecChar($_POST['produkt-17'])); $counterP++; } else { $productArray17 = $product17 	= ""; } 
			if (isset($_POST['produkt-18'])) { $productArray18 = removeSqlSpecChar($_POST['produkt-18']); $product18 	= 	implode("|", removeSqlSpecChar($_POST['produkt-18'])); $counterP++; } else { $productArray18 = $product18 	= ""; } 
			if (isset($_POST['produkt-19'])) { $productArray19 = removeSqlSpecChar($_POST['produkt-19']); $product19 	= 	implode("|", removeSqlSpecChar($_POST['produkt-19'])); $counterP++; } else { $productArray19 = $product19 	= ""; } 
			if (isset($_POST['produkt-20'])) { $productArray20 = removeSqlSpecChar($_POST['produkt-20']); $product20 	= 	implode("|", removeSqlSpecChar($_POST['produkt-20'])); $counterP++; } else { $productArray20 = $product20 	= ""; } 
			if (isset($_POST['produkt-21'])) { $productArray21 = removeSqlSpecChar($_POST['produkt-21']); $product21 	= 	implode("|", removeSqlSpecChar($_POST['produkt-21'])); $counterP++; } else { $productArray21  = $product21 	= ""; }
			if (isset($_POST['produkt-22'])) { $productArray22 = removeSqlSpecChar($_POST['produkt-22']); $product22 	= 	implode("|", removeSqlSpecChar($_POST['produkt-22'])); $counterP++; } else { $productArray22  = $product22 	= ""; }
			if (isset($_POST['produkt-23'])) { $productArray23 = removeSqlSpecChar($_POST['produkt-23']); $product23 	= 	implode("|", removeSqlSpecChar($_POST['produkt-23'])); $counterP++; } else { $productArray23  = $product23 	= ""; }
			if (isset($_POST['produkt-24'])) { $productArray24 = removeSqlSpecChar($_POST['produkt-24']); $product24 	= 	implode("|", removeSqlSpecChar($_POST['produkt-24'])); $counterP++; } else { $productArray24  = $product24 	= ""; }
			if (isset($_POST['produkt-25'])) { $productArray25 = removeSqlSpecChar($_POST['produkt-25']); $product25 	= 	implode("|", removeSqlSpecChar($_POST['produkt-25'])); $counterP++; } else { $productArray25  = $product25 	= ""; }
			if (isset($_POST['produkt-26'])) { $productArray26 = removeSqlSpecChar($_POST['produkt-26']); $product26 	= 	implode("|", removeSqlSpecChar($_POST['produkt-26'])); $counterP++; } else { $productArray26  = $product26 	= ""; }
			if (isset($_POST['produkt-27'])) { $productArray27 = removeSqlSpecChar($_POST['produkt-27']); $product27 	= 	implode("|", removeSqlSpecChar($_POST['produkt-27'])); $counterP++; } else { $productArray27  = $product27 	= ""; }
			if (isset($_POST['produkt-28'])) { $productArray28 = removeSqlSpecChar($_POST['produkt-28']); $product28 	= 	implode("|", removeSqlSpecChar($_POST['produkt-28'])); $counterP++; } else { $productArray28  = $product28 	= ""; }
			if (isset($_POST['produkt-29'])) { $productArray29 = removeSqlSpecChar($_POST['produkt-29']); $product29 	= 	implode("|", removeSqlSpecChar($_POST['produkt-29'])); $counterP++; } else { $productArray29  = $product29 	= ""; }
			if (isset($_POST['produkt-30'])) { $productArray30 = removeSqlSpecChar($_POST['produkt-30']); $product30 	= 	implode("|", removeSqlSpecChar($_POST['produkt-30'])); $counterP++; } else { $productArray30 = $product30 	= ""; }
			if (isset($_POST['produkt-31'])) { $productArray31 = removeSqlSpecChar($_POST['produkt-31']); $product31 	= 	implode("|", removeSqlSpecChar($_POST['produkt-31'])); $counterP++; } else { $productArray31 = $product31 	= ""; }
			if (isset($_POST['produkt-32'])) { $productArray32 = removeSqlSpecChar($_POST['produkt-32']); $product32 	= 	implode("|", removeSqlSpecChar($_POST['produkt-32'])); $counterP++; } else { $productArray32 = $product32 	= ""; }
			if (isset($_POST['produkt-33'])) { $productArray33 = removeSqlSpecChar($_POST['produkt-33']); $product33 	= 	implode("|", removeSqlSpecChar($_POST['produkt-33'])); $counterP++; } else { $productArray33 = $product33 	= ""; }
			if (isset($_POST['produkt-34'])) { $productArray34 = removeSqlSpecChar($_POST['produkt-34']); $product34 	= 	implode("|", removeSqlSpecChar($_POST['produkt-34'])); $counterP++; } else { $productArray34 = $product34 	= ""; }
			if (isset($_POST['produkt-35'])) { $productArray35 = removeSqlSpecChar($_POST['produkt-35']); $product35 	= 	implode("|", removeSqlSpecChar($_POST['produkt-35'])); $counterP++; } else { $productArray35 = $product35 	= ""; } 
			if (isset($_POST['produkt-36'])) { $productArray36 = removeSqlSpecChar($_POST['produkt-36']); $product36 	= 	implode("|", removeSqlSpecChar($_POST['produkt-36'])); $counterP++; } else { $productArray36 = $product36 	= ""; } 
			if (isset($_POST['produkt-37'])) { $productArray37 = removeSqlSpecChar($_POST['produkt-37']); $product37 	= 	implode("|", removeSqlSpecChar($_POST['produkt-37'])); $counterP++; } else { $productArray37 = $product37 	= ""; } 
			if (isset($_POST['produkt-38'])) { $productArray38 = removeSqlSpecChar($_POST['produkt-38']); $product38 	= 	implode("|", removeSqlSpecChar($_POST['produkt-38'])); $counterP++; } else { $productArray38 = $product38 	= ""; } 
			if (isset($_POST['produkt-39'])) { $productArray39 = removeSqlSpecChar($_POST['produkt-39']); $product39 	= 	implode("|", removeSqlSpecChar($_POST['produkt-39'])); $counterP++; } else { $productArray39 = $product39 	= ""; } 
			if (isset($_POST['produkt-40'])) { $productArray40 = removeSqlSpecChar($_POST['produkt-40']); $product40 	= 	implode("|", removeSqlSpecChar($_POST['produkt-40'])); $counterP++; } else { $productArray30 = $product40 	= ""; } 

			if (isset($_POST['darek-1']))  { $giftArray1  = removeSqlSpecChar($_POST['darek-1']);  $gift1 		= 	implode("|", removeSqlSpecChar($_POST['darek-1']));  $counterD++; } else { $giftArray1  = $gift1 	= ""; }
			if (isset($_POST['darek-2']))  { $giftArray2  = removeSqlSpecChar($_POST['darek-2']);  $gift2 		= 	implode("|", removeSqlSpecChar($_POST['darek-2']));  $counterD++; } else { $giftArray2  = $gift2 	= ""; }
			if (isset($_POST['darek-3']))  { $giftArray3  = removeSqlSpecChar($_POST['darek-3']);  $gift3 		= 	implode("|", removeSqlSpecChar($_POST['darek-3']));  $counterD++; } else { $giftArray3  = $gift3 	= ""; }
			if (isset($_POST['darek-4']))  { $giftArray4  = removeSqlSpecChar($_POST['darek-4']);  $gift4 		= 	implode("|", removeSqlSpecChar($_POST['darek-4']));  $counterD++; } else { $giftArray4  = $gift4 	= ""; }
			if (isset($_POST['darek-5']))  { $giftArray5  = removeSqlSpecChar($_POST['darek-5']);  $gift5 		= 	implode("|", removeSqlSpecChar($_POST['darek-5']));  $counterD++; } else { $giftArray5  = $gift5 	= ""; }
			if (isset($_POST['darek-6']))  { $giftArray6  = removeSqlSpecChar($_POST['darek-6']);  $gift6 		= 	implode("|", removeSqlSpecChar($_POST['darek-6']));  $counterD++; } else { $giftArray6  = $gift6 	= ""; }
			if (isset($_POST['darek-7']))  { $giftArray7  = removeSqlSpecChar($_POST['darek-7']);  $gift7 		= 	implode("|", removeSqlSpecChar($_POST['darek-7']));  $counterD++; } else { $giftArray7  = $gift7 	= ""; }
			if (isset($_POST['darek-8']))  { $giftArray8  = removeSqlSpecChar($_POST['darek-8']);  $gift8 		= 	implode("|", removeSqlSpecChar($_POST['darek-8']));  $counterD++; } else { $giftArray8  = $gift8 	= ""; }
			if (isset($_POST['darek-9']))  { $giftArray9  = removeSqlSpecChar($_POST['darek-9']);  $gift9 		= 	implode("|", removeSqlSpecChar($_POST['darek-9']));  $counterD++; } else { $giftArray9  = $gift9 	= ""; }
			if (isset($_POST['darek-10'])) { $giftArray10 = removeSqlSpecChar($_POST['darek-10']); $gift10 	= 	implode("|", removeSqlSpecChar($_POST['darek-10'])); $counterD++; } else { $giftArray10 = $gift10 	= ""; }
			if (isset($_POST['darek-11'])) { $giftArray11 = removeSqlSpecChar($_POST['darek-11']); $gift11 	= 	implode("|", removeSqlSpecChar($_POST['darek-11'])); $counterD++; } else { $giftArray11 = $gift11 	= ""; }
			if (isset($_POST['darek-12'])) { $giftArray12 = removeSqlSpecChar($_POST['darek-12']); $gift12 	= 	implode("|", removeSqlSpecChar($_POST['darek-12'])); $counterD++; } else { $giftArray12 = $gift12 	= ""; }
			if (isset($_POST['darek-13'])) { $giftArray13 = removeSqlSpecChar($_POST['darek-13']); $gift13 	= 	implode("|", removeSqlSpecChar($_POST['darek-13'])); $counterD++; } else { $giftArray13 = $gift13 	= ""; }
			if (isset($_POST['darek-14'])) { $giftArray14 = removeSqlSpecChar($_POST['darek-14']); $gift14 	= 	implode("|", removeSqlSpecChar($_POST['darek-14'])); $counterD++; } else { $giftArray14 = $gift14 	= ""; }
			if (isset($_POST['darek-15'])) { $giftArray15 = removeSqlSpecChar($_POST['darek-15']); $gift15 	= 	implode("|", removeSqlSpecChar($_POST['darek-15'])); $counterD++; } else { $giftArray15 = $gift15 	= ""; } 
			if (isset($_POST['darek-16'])) { $giftArray16 = removeSqlSpecChar($_POST['darek-16']); $gift16 	= 	implode("|", removeSqlSpecChar($_POST['darek-16'])); $counterD++; } else { $giftArray16 = $gift16 	= ""; } 
			if (isset($_POST['darek-17'])) { $giftArray17 = removeSqlSpecChar($_POST['darek-17']); $gift17 	= 	implode("|", removeSqlSpecChar($_POST['darek-17'])); $counterD++; } else { $giftArray17 = $gift17 	= ""; } 
			if (isset($_POST['darek-18'])) { $giftArray18 = removeSqlSpecChar($_POST['darek-18']); $gift18 	= 	implode("|", removeSqlSpecChar($_POST['darek-18'])); $counterD++; } else { $giftArray18 = $gift18 	= ""; } 
			if (isset($_POST['darek-19'])) { $giftArray19 = removeSqlSpecChar($_POST['darek-19']); $gift19 	= 	implode("|", removeSqlSpecChar($_POST['darek-19'])); $counterD++; } else { $giftArray19 = $gift19 	= ""; } 
			if (isset($_POST['darek-20'])) { $giftArray20 = removeSqlSpecChar($_POST['darek-20']); $gift20 	= 	implode("|", removeSqlSpecChar($_POST['darek-20'])); $counterD++; } else { $giftArray20 = $gift20 	= ""; } 

			if (isset($_POST['otazka-0']))  { $question1 	= 	implode("|", removeSqlSpecChar($_POST['otazka-0']));  $counterQ++; } else { $question1 	= ""; }
			if (isset($_POST['otazka-1']))  { $question2 	= 	implode("|", removeSqlSpecChar($_POST['otazka-1']));  $counterQ++; } else { $question2 	= ""; }
			if (isset($_POST['otazka-2']))  { $question3 	= 	implode("|", removeSqlSpecChar($_POST['otazka-2']));  $counterQ++; } else { $question3 	= ""; }
			if (isset($_POST['otazka-3']))  { $question4 	= 	implode("|", removeSqlSpecChar($_POST['otazka-3']));  $counterQ++; } else { $question4 	= ""; }
			if (isset($_POST['otazka-4']))  { $question5 	= 	implode("|", removeSqlSpecChar($_POST['otazka-4']));  $counterQ++; } else { $question5 	= ""; }
			if (isset($_POST['otazka-5']))  { $question6 	= 	implode("|", removeSqlSpecChar($_POST['otazka-5']));  $counterQ++; } else { $question6 	= ""; }
			if (isset($_POST['otazka-6']))  { $question7 	= 	implode("|", removeSqlSpecChar($_POST['otazka-6']));  $counterQ++; } else { $question7 	= ""; }
			if (isset($_POST['otazka-7']))  { $question8 	= 	implode("|", removeSqlSpecChar($_POST['otazka-7']));  $counterQ++; } else { $question8 	= ""; }
			if (isset($_POST['otazka-8']))  { $question9 	= 	implode("|", removeSqlSpecChar($_POST['otazka-8']));  $counterQ++; } else { $question9 	= ""; }
			if (isset($_POST['otazka-9']))  { $question10 	= 	implode("|", removeSqlSpecChar($_POST['otazka-9']));  $counterQ++; } else { $question10 	= ""; }
			if (isset($_POST['otazka-10'])) { $question11 	= 	implode("|", removeSqlSpecChar($_POST['otazka-10'])); $counterQ++; } else { $question11 	= ""; }
			if (isset($_POST['otazka-11'])) { $question12 	= 	implode("|", removeSqlSpecChar($_POST['otazka-11'])); $counterQ++; } else { $question12 	= ""; }
			if (isset($_POST['otazka-12'])) { $question13 	= 	implode("|", removeSqlSpecChar($_POST['otazka-12'])); $counterQ++; } else { $question13 	= ""; }
			if (isset($_POST['otazka-13'])) { $question14 	= 	implode("|", removeSqlSpecChar($_POST['otazka-13'])); $counterQ++; } else { $question14 	= ""; }
			if (isset($_POST['otazka-14'])) { $question15 	= 	implode("|", removeSqlSpecChar($_POST['otazka-14'])); $counterQ++; } else { $question15 	= ""; }

			//if (isset($_POST['otazka-1']))  { $question1 	= 	implode("|", $_POST['otazka-1']);  $counterQ++; } else { $question1 	= ""; }
			//if (isset($_POST['otazka-2']))  { $question2 	= 	implode("|", $_POST['otazka-2']);  $counterQ++; } else { $question2 	= ""; }
			//if (isset($_POST['otazka-3']))  { $question3 	= 	implode("|", $_POST['otazka-3']);  $counterQ++; } else { $question3 	= ""; }
			//if (isset($_POST['otazka-4']))  { $question4 	= 	implode("|", $_POST['otazka-4']);  $counterQ++; } else { $question4 	= ""; }
			//if (isset($_POST['otazka-5']))  { $question5 	= 	implode("|", $_POST['otazka-5']);  $counterQ++; } else { $question5 	= ""; }
			//if (isset($_POST['otazka-6']))  { $question6 	= 	implode("|", $_POST['otazka-6']);  $counterQ++; } else { $question6 	= ""; }
			//if (isset($_POST['otazka-7']))  { $question7 	= 	implode("|", $_POST['otazka-7']);  $counterQ++; } else { $question7 	= ""; }
			//if (isset($_POST['otazka-8']))  { $question8 	= 	implode("|", $_POST['otazka-8']);  $counterQ++; } else { $question8 	= ""; }
			//if (isset($_POST['otazka-9']))  { $question9 	= 	implode("|", $_POST['otazka-9']);  $counterQ++; } else { $question9 	= ""; }
			//if (isset($_POST['otazka-10'])) { $question10 	= 	implode("|", $_POST['otazka-10']); $counterQ++; } else { $question10 	= ""; }
			//if (isset($_POST['otazka-11'])) { $question11 	= 	implode("|", $_POST['otazka-11']); $counterQ++; } else { $question11 	= ""; }
			//if (isset($_POST['otazka-12'])) { $question12 	= 	implode("|", $_POST['otazka-12']); $counterQ++; } else { $question12 	= ""; }
			//if (isset($_POST['otazka-13'])) { $question13 	= 	implode("|", $_POST['otazka-13']); $counterQ++; } else { $question13 	= ""; }
			//if (isset($_POST['otazka-14'])) { $question14 	= 	implode("|", $_POST['otazka-14']); $counterQ++; } else { $question14 	= ""; }
			//if (isset($_POST['otazka-15'])) { $question15 	= 	implode("|", $_POST['otazka-15']); $counterQ++; } else { $question15 	= ""; }
			



			//echo "Produktů je: ".$counterP."<br>";
			//echo "Otázek je: ".$counterQ."<br>";

			/* Vypocet trzby */
			$celkemTrzba = 0;
			$celkemKusu  = 0;
			for ($i=1; $i <= $counterP; $i++) {
				$nazev = "productArray".$i;
				$cena = ${$nazev}[1];
				$kusy = ${$nazev}[4];
				$trzba = $cena*$kusy;
				$celkemTrzba += $trzba;
				$celkemKusu  += $kusy;
				//$celkemTrzba += $othersPrice;
				//echo $trzba."<br>";
				//echo $_POST['produkt-1'][1];
				//echo $_POST['produkt-1'][4];
				//echo "Tržba za produkt č. ".($i)." je: ".$trzba."<br>";
			}	
			$celkemTrzba += $othersPrice;
			$celkemKusu += $othersKs;
			//echo "Celková tržba je ".$celkemTrzba." Kč,-<br>";

			//for ($i=1; $i <= $counterQ; $i++) { // Kolik je vyplněných otázek
			//	$questionTemp 		= "question".$i;
			//	$otazkaTemp			= "\$_POST['otazka-".$i."']";
			//echo ${$questionTemp}."<br>";
			//	echo $otazkaTemp."<br>";	
			//	${$questionTemp} 	= "";
			//	//${$questionTemp} 	= $otazkaTemp;
			//	//echo ${$otazkaTemp}."<br>";
			//
			//	if ( isset($otazkaTemp) ) {
			//		${$questionTemp} = $otazkaTemp;
			//		echo ${$questionTemp};
			//		//echo $i."<br>";
			//		//echo ${$otazkaTemp};
			//		//break;
			//	}
			//	else {
			//		${$questionTemp} = "";
			//		break;
			//	}
			//
			//}

			if ( $error == false ) {
				$conn = dbConnect(); // Připojíme se k databázi
				mysqli_query($conn, "SET NAMES utf8");
				//echo "Id formu je:".$id."<br>";
				//echo "Produkt 2 je:".$product2."<br>";
				//echo "není chyba<br>";


				//if (empty($othersSummary)||!is_numeric($othersSummary))  {$othersSummary = 0; }
				if (empty($othersKs)||!is_numeric($othersKs))  {$othersKs = 0; }
				if (empty($othersPrice)||!is_numeric($othersPrice))  {$othersPrice = 0; }
				if (empty($celkemKusu)||!is_numeric($celkemKusu))  {$celkemKusu = 0; }
				if (empty($customer)||!is_numeric($customer))  {$customer = 0; }
				if (empty($gift)||!is_numeric($gift))  {$gift = 0; }

				$sql = "UPDATE actions SET celkem_kusu='$celkemKusu', otatni_soupis='$othersSummary', odeslano='$dateSend', otatni_ks='$othersKs', otatni_cena='$othersPrice', celkem_zakazniku='$customer', obr1='$image1', obr2='$image2', obr3='$image3', obr4='$image4', obr5='$image5', celkem_darku='$gift', celkem_trzba='$celkemTrzba',".$sqlTime." splneno='ano', produkt_1='$product1', produkt_2='$product2', produkt_3='$product3', produkt_4='$product4', produkt_5='$product5', produkt_6='$product6', produkt_7='$product7', produkt_8='$product8', produkt_9='$product9', produkt_10='$product10', produkt_11='$product11', produkt_12='$product12', produkt_13='$product13', produkt_14='$product14', produkt_15='$product15', produkt_16='$product16', produkt_17='$product17', produkt_18='$product18', produkt_19='$product19', produkt_20='$product20', produkt_21='$product21', produkt_22='$product22', produkt_23='$product23', produkt_24='$product24', produkt_25='$product25', produkt_26='$product26', produkt_27='$product27', produkt_28='$product28', produkt_29='$product29', produkt_30='$product30', produkt_31='$product31', produkt_32='$product32', produkt_33='$product33', produkt_34='$product34', produkt_35='$product35', produkt_36='$product36', produkt_37='$product37', produkt_38='$product38', produkt_39='$product39', produkt_40='$product40', otazka_1='$question1', otazka_2='$question2', otazka_3='$question3', otazka_4='$question4', otazka_5='$question5', otazka_6='$question6', otazka_7='$question7', otazka_8='$question8', otazka_9='$question9', otazka_10='$question10', otazka_11='$question11', otazka_12='$question12', otazka_13='$question13', otazka_14='$question14', otazka_15='$question15', darek_1='$gift1', darek_2='$gift2', darek_3='$gift3', darek_4='$gift4', darek_5='$gift5', darek_6='$gift6', darek_7='$gift7', darek_8='$gift8', darek_9='$gift9', darek_10='$gift10', darek_11='$gift11', darek_12='$gift12', darek_13='$gift13', darek_14='$gift14', darek_15='$gift15', darek_16='$gift16', darek_17='$gift17', darek_18='$gift18', darek_19='$gift19', darek_20='$gift20' $tableAdditional WHERE id_action='$id'";
				//$sql = "INSERT INTO form(nazev_formulare, produkt_1, produkt_2, produkt_3, produkt_4, produkt_5, produkt_6, produkt_7, produkt_8, produkt_9, produkt_10, produkt_11, produkt_12, produkt_13, produkt_14, produkt_15, produkt_16, produkt_17, produkt_18, produkt_19, produkt_20, otazka_1, otazka_2, otazka_3, otazka_4, otazka_5, otazka_6, otazka_7, otazka_8, otazka_9, otazka_10, otazka_11, otazka_12, otazka_13, otazka_14, otazka_15) VALUES('$name', '$allProduct1', '$allProduct2', '$allProduct3', '$allProduct4', '$allProduct5', '$allProduct6', '$allProduct7', '$allProduct8', '$allProduct9', '$allProduct10', '$allProduct11', '$allProduct12', '$allProduct13', '$allProduct14', '$allProduct15', '$allProduct16', '$allProduct17', '$allProduct18', '$allProduct19', '$allProduct20', '$allQuestion1', '$allQuestion2', '$allQuestion3', '$allQuestion4', '$allQuestion5', '$allQuestion6', '$allQuestion7', '$allQuestion8', '$allQuestion9', '$allQuestion10', '$allQuestion11', '$allQuestion12', '$allQuestion13', '$allQuestion14', '$allQuestion15')";
				
				if (mysqli_query($conn, $sql)) {
					echo "<div class=\"message-success\">Akce byla úspěšně odeslána</div><br>";
					$messageSuccess = "Akce byla úspěšně vyplněna.";
					//header('location: homepage.php');
					print '<script type="text/javascript">window.location.replace("homepage.php");</script>';
				}
				else {
					echo "<div class=\"message-error\">Kontaktujte koordinátora nebo administrátora, při vyplnění akce nastala chyba v příkazu: <br>$sql</div>";
					$messageError = "Nepodařilo se vyplnit akci.";

					//mysqli_query($conn, $sql);
					//$row  = mysqli_fetch_row($data);
					//$messageError = $row;
				}
					
			}
		//}
	}