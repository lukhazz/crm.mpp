<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$conn = dbConnect();
		mysqli_query($conn, "SET NAMES utf8");

		$user = $param = "";
	
		$error         	= false;

		if (!empty($_POST['nazev'])) 	{ $valuenazev 	= $_POST['nazev'];	$param .= " AND pharmacy.nazev LIKE '%$valuenazev%'"; }
		//if (!empty($_POST['company-nazev'])) 	{ $valuenazevfirmy 	= $_POST['company-nazev'];	$param .= " AND company.nazev LIKE '%$valuenazevfirmy%'"; }
		//if (!empty($_POST['produkty'])) 	{ $valueprodukt 	= $_POST['produkty'];	$param .= " AND actions.produkt_1 LIKE '%$valueprodukt%' OR actions.produkt_2 LIKE '%$valueprodukt%' OR actions.produkt_3 LIKE '%$valueprodukt%' OR actions.produkt_4 LIKE '%$valueprodukt%' OR actions.produkt_5 LIKE '%$valueprodukt%' OR actions.produkt_6 LIKE '%$valueprodukt%' OR actions.produkt_7 LIKE '%$valueprodukt%' OR actions.produkt_8 LIKE '%$valueprodukt%' OR actions.produkt_9 LIKE '%$valueprodukt%' OR actions.produkt_10 LIKE '%$valueprodukt%' OR actions.produkt_11 LIKE '%$valueprodukt%' OR actions.produkt_12 LIKE '%$valueprodukt%' OR actions.produkt_13 LIKE '%$valueprodukt%' OR actions.produkt_14 LIKE '%$valueprodukt%' OR actions.produkt_15 LIKE '%$valueprodukt%' OR actions.produkt_16 LIKE '%$valueprodukt%' OR actions.produkt_17 LIKE '%$valueprodukt%' OR actions.produkt_18 LIKE '%$valueprodukt%' OR actions.produkt_19 LIKE '%$valueprodukt%' OR actions.produkt_20 LIKE '%$valueprodukt%'"; }
		if (!empty($_POST['okres']))   	{ $valueokres 	= $_POST['okres']; 	 	$param .= " AND pharmacy.okres LIKE '%$valueokres%'";}
		//if (!empty($_POST['promo']))   	{ $valuepromo 	= $_POST['promo']; 	 	$user .= " AND users.prijmeni LIKE '%$valuepromo%'";}
		if (!empty($_POST['id_form']))   	{ $valueid 	= $_POST['id_form']; $param .= " AND actions.id_action LIKE '%$valueid%'";}
		if (!empty($_POST['date-from']))   	{ $dateFrom 	= $_POST['date-from']; $dateTo = $_POST['date-to']; $param .= " AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'"; }
		if (!empty($_POST['sort-by']))  { $sortBy 		= $_POST['sort-by'];  } else { $sortBy = "actions.datum"; }
		if (!empty($_POST['sort']))  	{ $sort 		= $_POST['sort']; 	 }
		if (!empty($_POST['limit']))  	{ (int)$limit 	= $_POST['limit']; 	 }
		if (!empty($_POST['stat']))  	{ $valuestat 	= $_POST['stat'];  		}

		if ($valuestat == "cz") {
			$param .= " AND pharmacy.stat=\"cz\" ";
		}
		else if ($valuestat == "sk") {
			$param .= " AND pharmacy.stat=\"sk\" ";
		}
		else {
			$param .= "";
		}
		$filled 			= $_POST['filled'];
		$approved			= $_POST['approved'];


		if (!empty($_POST['company']))   	{ 
			$valuecompany 	= $_POST['company']; 
			$param .= " AND (";	 	
			for ($i=0; $i < count($valuecompany); $i++) { 
				$param .= "actions.id_company = '$valuecompany[$i]'";
				if (($i+1)!=count($valuecompany)) {
					$param .= " OR ";
				}
				else {
					$param .= ") ";
				}
				//echo "<br>$valuecompany[$i] <br><br>";
			}
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
		//echo "<br><br><br><br><br><br><br><br><br><br>$user<br><br><br><br><br><br><br><br><br><br>";


		if ($filled == "splneno-ano") {
			$param .= " AND actions.splneno=\"ano\" ";
		}
		else if ($filled == "splneno-ne") {
			$param .= " AND actions.splneno=\"ne\" ";
		}
		else {
			$param .= "";
		}
		//echo $param;

		if ($approved == "schvaleno-ano") {
			$param .= " AND actions.schvaleno=\"ano\" ";
			//echo "má to být schváleno";
		}
		else if ($approved == "schvaleno-ne") {
			$param .= " AND actions.schvaleno=\"ne\" ";
			//echo "má to být neschváleno";
		}
		else {
			$param .= "";
			//echo "má to být vše";
		}	

		
			

		/*$sql = "SELECT id_form, pharmacy.nazev, actions.datum, actions.produkt_1, actions.produkt_2, actions.produkt_3, actions.produkt_4, actions.produkt_5 FROM form
					WHERE id_form > 0 $param   
					ORDER BY $sortBy $sort
					LIMIT $limit";*/

		$sql = "SELECT actions.id_action, company.nazev, actions.splneno, actions.schvaleno, actions.bonus, actions.datum, actions.cas, pharmacy.nazev, pharmacy.ulice, pharmacy.mesto, pharmacy.okres, pharmacy.stat, users.prijmeni, actions.obr1, actions.obr2, actions.obr3, actions.obr4, actions.obr5
				FROM actions 
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
							$param $user
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy, actions.id_action $sort
						LIMIT $limit";

		$sqlVyplata = "SELECT actions.cil, actions.cil_ks, actions.poc_hodin, actions.bonus, actions.celkem_trzba, actions.celkem_kusu, actions.otatni_ks, actions.otatni_cena, users.cena_za_h

					FROM actions 
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
							$param $user
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy, actions.id_action $sort
						LIMIT $limit";

		$sqlKoo = "SELECT users.prijmeni
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
							$param $user
							AND actions.datum BETWEEN '$dateFrom' AND '$dateTo'
						ORDER BY $sortBy, actions.id_action $sort
						LIMIT $limit";



?>
		<div class="container per100 padd-top-13-5">
			<main>
				<section class="seznam">
					<h2>Výpis akcí</h2>
					<?php 
						//echo "$sql<br>";
						//echo "$sqlKoo<br>";
					?>
					<table id="pharmacy">
						<thead>
							<tr>
								<th>ID</th>
								<th>Firma</th>
								<th>Splněno</th>
								<th>Schváleno</th>
								<th>Motivace</th>
								<th>Datum</th>
								<th>Čas</th>
								<th>Lékárna</th>
								<th>Adresa</th>
								<th>Okres</th>
								<th>Stát</th>
								<th>Promotér</th>
								<th>Fotografie</th>
								<th>Koordinátor</th>
								<th>Upravit</th>
							</tr>
						</thead>
						<tbody>	 
							<?php 
							//echo "<br>$sql<br>";
							//echo "<br>$sqlKoo<br>";
							$data = mysqli_query($conn, $sql);
							$data2 = mysqli_query($conn, $sqlKoo);
							$dataVyplata = mysqli_query($conn, $sqlVyplata);
							$counterCykl=0;
							while ( $row = mysqli_fetch_row($data) ) {
								$counterCykl++;
								$row2 = mysqli_fetch_row($data2);
								$rowVyplata = mysqli_fetch_row($dataVyplata);
								echo "
											<tr>";
								
								for ($i=0; $i < count($row); $i++) { 
								//for ($i=0; $i < 2; $i++) { 
									if ($i == 4) { //motivace
										//if (empty($row[$i])) {
										//	echo "
										//		<td>0</td>";
										//}
										//else {
										//	echo "
										//		<td>".$row[$i]."</td>";
										//}

										
										//$bonus = true;
										$vyplata = false;
										if ($vyplata != true) {
											
											$cilKc 			= $rowVyplata[0];
											$cilKs 			= $rowVyplata[1];
											$pocHodin 		= $rowVyplata[2];
											$bonus	 		= $rowVyplata[3];
											$trzbaProm 		= $rowVyplata[4];
											$ksProm	 		= $rowVyplata[5];
											$ksNeprom	 	= $rowVyplata[6];
											$trzbaNeprom 	= $rowVyplata[7];
											$hodinovka		= $rowVyplata[8];
									
											$ksCelkem = $ksProm + $ksNeprom;
											$trzbaCelkem = $trzbaProm + $trzbaNeprom;
											$zakladniMzda = $pocHodin * $hodinovka;
										}
										if ($trzbaCelkem >= $cilKc && $cilKc > 0) {
											$vyplataZakladni = $bonus;
											//echo "ano";
										}
										else if ($ksCelkem >= $cilKs && $cilKs > 0) {
											$vyplataZakladni = $bonus;
											//echo "ano";
										}
										else {
											$vyplataZakladni = 0;
											//echo "ne";
										}
										echo "
											<td>$vyplataZakladni</td>";
										//echo "Bonus je $bonus <br>";
									
										
										continue;


											
									}
									if ($i == 5) {
										echo "
												<td>".date("d. m. Y", strtotime($row[$i]))."</td>";
										continue;
									}
									if ($i==6) {
										$timeArray 	= explode("|", $row[$i]);
										$time 		= vypisCas( $timeArray );
										echo "
												<td>".$time."</td>";
										continue;
									}
									if ($i == 8) {
										continue;
									}
									if ($i == 9) {
										echo "
												<td>$row[8], $row[9]</td>";	
										continue;
									}
									if ($i == 13) {
										if (!empty($row[$i])) {
										   	//$dataImg 	= mysqli_query($conn, $sqlImg);	
											//$row		= mysqli_fetch_row($dataImg);
											//echo "$id<br>$row[0]<br>$row[1]<br>$row[2]<br>";
											$name1 = explode("/", $row[$i+0]);
											$name2 = explode("/", $row[$i+1]);
											$name3 = explode("/", $row[$i+2]);
											$name4 = explode("/", $row[$i+3]);
											$name5 = explode("/", $row[$i+4]);
											if ($row[$i+0]=="Array" || empty($row[$i+0])) {
												$show1 = $row[$i+0] = "/images/none.png";
												$name1[5] = "Nenahraná";
											}
											else {
												$show1 = "/images/show.png";
											}
											if ($row[$i+1]=="Array" || empty($row[$i+1])) {
												$show2 = $row[$i+1] = "/images/none.png";
												$name2[5] = "Nenahraná";
											}
											else {
												$show2 = "/images/show.png";
											}
											if ($row[$i+2]=="Array" || empty($row[$i+2])) {
												$show3 = $row[$i+2] = "/images/none.png";
												$name3[5] = "Nenahraná";
											}
											else {
												$show3 = "/images/show.png";
											}
											if ($row[$i+3]=="Array" || empty($row[$i+3])) {
												$show4 = $row[$i+3] = "/images/none.png";
												$name4[5] = "Nenahraná";
											}
											else {
												$show4 = "/images/show.png";
											}
											if ($row[$i+4]=="Array" || empty($row[$i+4])) {
												$show5 = $row[$i+4] = "/images/none.png";
												$name5[5] = "Nenahraná";
											}
											else {
												$show5 = "/images/show.png";
											}
											//echo "$row[0]<br>$row[1]<br>$row[2]<br>";
										 ?>
											<td class="photo">	
												<a href="<?php echo $row[$i+0]; ?>" data-lightbox="akce-<?php echo "$counterCykl"; ?>" data-title="<?php echo "$name1[5]"; ?>"><img src="<?php echo $show1 ?>" height="50px" alt="Náhled" title="Klikni pro zvětšení"></a>
												<a href="<?php echo $row[$i+1]; ?>" data-lightbox="akce-<?php echo "$counterCykl"; ?>" data-title="<?php echo "$name2[5]"; ?>"><img src="<?php echo $show2 ?>" height="50px" alt="Náhled" title="Klikni pro zvětšení"></a>
												<a href="<?php echo $row[$i+2]; ?>" data-lightbox="akce-<?php echo "$counterCykl"; ?>" data-title="<?php echo "$name3[5]"; ?>"><img src="<?php echo $show3 ?>" height="50px" alt="Náhled" title="Klikni pro zvětšení"></a>
												<a href="<?php echo $row[$i+3]; ?>" data-lightbox="akce-<?php echo "$counterCykl"; ?>" data-title="<?php echo "$name3[5]"; ?>"><img src="<?php echo $show4 ?>" height="50px" alt="Náhled" title="Klikni pro zvětšení"></a>
												<a href="<?php echo $row[$i+4]; ?>" data-lightbox="akce-<?php echo "$counterCykl"; ?>" data-title="<?php echo "$name4[5]"; ?>"><img src="<?php echo $show5 ?>" height="50px" alt="Náhled" title="Klikni pro zvětšení"></a>
											</td>


											<?php 
									   	}
									   	else {
									   		echo "
											<td></td>";
									   	}
									   	$i = $i + 4;
										continue;
									}
									if ($row[$i]=="ano") {
										$row[$i] = 1;
									}
									if ($row[$i]=="ne") {
										$row[$i] = 0;
									}
									echo "
												<td>".$row[$i]."</td>";	
								
								}
								echo "
												<td>".$row2[0]."</td>";	
								echo '
							<td class="center"><a href="action-edit.php?id=' . $row[0] . '" target="_blank">hlavicka | </a><a href="action-revision.php?id=' . $row[0] . '" target="_blank">zkontrolovat | </a><a href="action-fill.php?id=' . $row[0] . '" target="_blank">splnit | </a><a href="action-show.php?id=' . $row[0] . '" target="_blank">zobrazit</a></td>';

								
								echo "
											</tr>";

						}
						?>
										</tbody>
									</table>
								</section>
			</main>
		</div>

		<?php

		dbClose($conn);
	}

 ?>