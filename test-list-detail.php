<?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");
	$idCurrentUser = 1;

	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "0";
	}

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

	WHERE test.id_test_otazky='$id'";

	//$sql = "SELECT * FROM company ORDER BY nazev ASC";

	$sqlPokusSplneno = "SELECT users.prijmeni, users.jmeno, users.pozice, users.id_user

			$additional

			AND test.splneno = 'ano'
			GROUP BY test.id_user 
			ORDER BY test_otazky.test_nazev_zadani, test.id_test_otazky, users.prijmeni, users.id_user
	";


	$sqlMaxPokusu = "SELECT test_zadani.max_pokusu, company.nazev, test_otazky.test_nazev_zadani

			$additional
 
			ORDER BY test_zadani.max_pokusu DESC
			LIMIT 1
	";

	$usersSplneno = "";
	$dataMaxPokus 		= mysqli_query($conn, $sqlMaxPokusu);
	$rowMaxPokus 		= mysqli_fetch_row($dataMaxPokus);
	//$maxPokusu 			= $rowMaxPokus[0];
	if (!empty($rowMaxPokus[1])) {	$nazevFirmy = $rowMaxPokus[1];	} else { $nazevFirmy = ""; }
	if (!empty($rowMaxPokus[2])) {	$nazevZadani = $rowMaxPokus[2];	} else { $nazevZadani = ""; }
	//$nazevFirmy 		= $rowMaxPokus[1];
	//$nazevZadani 		= $rowMaxPokus[2];
	$sloupcu			= 5;





	$sqlMaxPokusu = "SELECT COUNT(test.id_user)
		$additional
		GROUP BY test.id_user

		";

	//echo "$sqlMaxPokusu<br>";

	$dataMaxPokusu = mysqli_query($conn, $sqlMaxPokusu);
	$rowMaxPokusu = mysqli_fetch_row($dataMaxPokusu);
	$maxPokusu = 0;
	//$maxPokusu = $rowMaxPokusu[0];
	//if (!empty($rowMaxPokus[0])) {	$maxPokusu = $rowMaxPokusu[0];	} else { $maxPokusu = 0; }
	while ( $rowMaxPokusu = mysqli_fetch_row($dataMaxPokusu) ) {
		if ($rowMaxPokusu[0]>$maxPokusu) {
			$maxPokusu = $rowMaxPokusu[0];
		}
	}
	//$maxPokusu2 = $rowMaxPokusu[0];
	//echo "Max pokusu $maxPokusu <br>";

	

	//echo "$sql<br>";
	//echo "$id<br>";
	//echo "Max pokusu $maxPokusu <br>";

	$dataSplneno 	= mysqli_query($conn, $sqlPokusSplneno);

?>
			<section class="seznam">
				<h2>Testování "<?php echo "$nazevZadani"; ?>" pro firmu <?php echo "$nazevFirmy"; ?></h2>



				<h3>Splněno</h3>
				<table>
					<thead>
						<tr>
							<th rowspan="2">#</th>
							<th rowspan="2">Uživatel</th>
							<th rowspan="2">Pozice</th>
					<?php 
							for ($i=1; $i <= $maxPokusu; $i++) { 
								echo "
							<th colspan=\"$sloupcu\">Pokus $i</th>";
							}

					 ?>
						</tr>
						<tr>
					<?php 
							for ($i=1; $i <= $maxPokusu; $i++) { 
								echo "
							<th>Splněno</th>
							<th>Procent</th>
							<th>Čas</th>
							<th>Odesláno</th>
							<th>Akce</th>
							";
							}

					 ?>
						</tr>
					</thead>
					<tbody>

<?php 
	
	$counterRow = 0;
	while ( $row = mysqli_fetch_row($dataSplneno) ) {
		$counterRow++;
		$idCurrentUser=$row[3];
		//echo "$idCurrentUser";
		$sqlPokusPodrobnosi = "SELECT test.id_test, test.splneno, test_pokus.procent, test_pokus.cas_od, test_pokus.cas_do
			$additional
			AND test.id_user=$idCurrentUser
		";
		$usersSplneno .= "AND test.id_user != '$idCurrentUser'
		";
		
		$counterCurrentPokus = 0;
		$data2 = mysqli_query($conn, $sqlPokusPodrobnosi);
		//echo "$sqlPokusPodrobnosi<br>";
		echo "
						<tr>";
		echo "
							<td>$counterRow)</td>";	
		echo "
							<td>".$row[0]." ".$row[1]."</td>";
		echo "
							<td>".$row[2]."</td>";



		//while ( $row2 = mysqli_fetch_row($data2) ) {
		for ($k=0; $k < $maxPokusu; $k++) { 
			$row2 = mysqli_fetch_row($data2);

			$counterCurrentPokus++;
		//$row2 = mysqli_fetch_row($data2);
			//echo '
			//					<td><a href="test-fill.php?id=' . $row2[0] . '">Pokus ' . $counterCurrentPokus. '</a></td>';
			for ($j=1; $j <= ($sloupcu-1); $j++) { 

				//Procenta
				if ($j==2 && !empty($row2[$j])) {
					echo "
								<td>$row2[$j]%</td>";
					continue;
				}
				else if ($j==2 && empty($row2[$j])) {
					echo "								
								<td>0%</td>";
					continue;
				}

				//Cas
				if ( $j==3 && (!empty($row2[$j])) && (!empty($row2[4])) ) {
					$datumDo = date("Y-j-n-G-i-s", strtotime($row2[4]));
					$datumOd = date("Y-j-n-G-i-s", strtotime($row2[$j]));

					$timeDo = explode("-", $datumDo);
					$timeOd = explode("-", $datumOd);

					$seconds = (($timeDo[5] - $timeOd[5]))
					         + (($timeDo[4] - $timeOd[4]) * 60)
					         + (($timeDo[3] - $timeOd[3]) * 60 * 60)
					         + (($timeDo[2] - $timeOd[2]) * 60 * 60 * 24)
					         + (($timeDo[1] - $timeOd[1]) * 60 * 60 * 24 * 30)
					         + (($timeDo[0] - $timeOd[0]) * 60 * 60 * 24 * 365);

			        echo "
							<td>".gmdate("H:i:s", $seconds)."</td>";
					//echo "$datumDo<br>";

					continue;
				}
				else if ($j==3 && empty($row2[4])) {
					echo "								
								<td>&nbsp;</td>";
					continue;
				}

				//Datum odeslani
				if ($j==4 && !empty($row2[$j])) {
					echo "
								<td>".date("d.m.Y H:i", strtotime($row2[$j]))."</td>";
					continue;
				}

				if (!empty($row2[$j])) {
					echo "
							<td>".$row2[$j]."</td>";
				}
				else {
					echo "
							<td>&nbsp;</td>";
				}
				
				
			}
			if (empty($row2[0])) {
				echo '
								<td></td>';
			}
			//if (empty($row2[0]) || $row2[0]>=1) {
			else {
				if (!empty($row2[4])) {
					echo '
								<td><a href="test-show.php?id=' . $row2[0] . '">Zobraz</a></td>';
				}
				else {
					echo '
								<td><a href="test-fill.php?id=' . $row2[0] . '">Vyplň</a></td>';
				}
			}
			//else {
			//	echo '
			//					<td></td>';
			//}
			
		}

		echo "
						</tr>";

	}
	?>
					</tbody>
				</table>

<?php 




	
$sqlPokusNesplneno = "SELECT users.prijmeni, users.jmeno, users.pozice, users.id_user

		$additional
		$usersSplneno
		GROUP BY test.id_user 
		ORDER BY test_otazky.test_nazev_zadani, test.id_test_otazky, users.prijmeni, users.id_user
";

$dataNesplneno 	= mysqli_query($conn, $sqlPokusNesplneno);

 ?>
				<h3>Nesplněno</h3>
				<table>
					<thead>
						<tr>
							<th rowspan="2">#</th>
							<th rowspan="2">Uživatel</th>
							<th rowspan="2">Pozice</th>
					<?php 
							for ($i=1; $i <= $maxPokusu; $i++) { 
								echo "
							<th colspan=\"$sloupcu\">Pokus $i</th>";
							}

					 ?>
						</tr>
						<tr>
					<?php 
							for ($i=1; $i <= $maxPokusu; $i++) { 
								echo "
							<th>Splněno</th>
							<th>Procent</th>
							<th>Čas</th>
							<th>Odesláno</th>
							<th>Akce</th>
							";
							}

					 ?>
						</tr>
					</thead>
					<tbody>

<?php 
	
	$counterRow = 0;
	while ( $row = mysqli_fetch_row($dataNesplneno) ) {
		$counterRow++;
		$idCurrentUser=$row[3];
		//echo "$idCurrentUser";
		$sqlPokusPodrobnosi = "SELECT test.id_test, test.splneno, test_pokus.procent, test_pokus.cas_od, test_pokus.cas_do
			$additional
			AND test.id_user=$idCurrentUser
		";


			
		$counterCurrentPokus = 0;
		$data2 = mysqli_query($conn, $sqlPokusPodrobnosi);
		//echo "$sqlPokusPodrobnosi<br>";
		echo "
						<tr>";
		echo "
							<td>$counterRow)</td>";	
		echo "
							<td>".$row[0]." ".$row[1]."</td>";
		echo "
							<td>".$row[2]."</td>";



		//while ( $row2 = mysqli_fetch_row($data2) ) {
		for ($k=0; $k < $maxPokusu; $k++) { 
			$row2 = mysqli_fetch_row($data2);

			if (empty($row2[0])) {
				echo "<td class=\"center\" colspan=\"$sloupcu\">není pokus</td>";
				continue;
			}

			$counterCurrentPokus++;
		//$row2 = mysqli_fetch_row($data2);
			//echo '
			//					<td><a href="test-fill.php?id=' . $row2[0] . '">Pokus ' . $counterCurrentPokus. '</a></td>';
			for ($j=1; $j <= ($sloupcu-1); $j++) { 

				//Procenta
				if ($j==2 && !empty($row2[$j])) {
					echo "
								<td>$row2[$j]%</td>";
					continue;
				}
				else if ($j==2 && empty($row2[$j])) {
					echo "								
								<td>0%</td>";
					continue;
				}

				//Cas
				if ( $j==3 && (!empty($row2[$j])) && (!empty($row2[4])) ) {
					$datumDo = date("Y-j-n-G-i-s", strtotime($row2[4]));
					$datumOd = date("Y-j-n-G-i-s", strtotime($row2[$j]));

					$timeDo = explode("-", $datumDo);
					$timeOd = explode("-", $datumOd);

					$seconds = (($timeDo[5] - $timeOd[5]))
					         + (($timeDo[4] - $timeOd[4]) * 60)
					         + (($timeDo[3] - $timeOd[3]) * 60 * 60)
					         + (($timeDo[2] - $timeOd[2]) * 60 * 60 * 24)
					         + (($timeDo[1] - $timeOd[1]) * 60 * 60 * 24 * 30)
					         + (($timeDo[0] - $timeOd[0]) * 60 * 60 * 24 * 365);

			        echo "
							<td>".gmdate("H:i:s", $seconds)."</td>";
					//echo "$datumDo<br>";

					continue;
				}
				else if ($j==3 && empty($row2[4])) {
					echo "								
								<td>&nbsp;</td>";
					continue;
				}

				//Datum odeslani
				if ($j==4 && !empty($row2[$j])) {
					echo "
								<td>".date("d.m.Y H:i", strtotime($row2[$j]))."</td>";
					continue;
				}

				if (!empty($row2[$j])) {
					echo "
							<td>".$row2[$j]."</td>";
				}
				else {
					echo "
							<td>&nbsp;</td>";
				}
				
				
			}
			if ($row2[0]>=1) {
				if (!empty($row2[4])) {
					echo '
								<td><a href="test-show.php?id=' . $row2[0] . '">Zobraz</a></td>';
				}
				else {
					echo '
								<td><a href="test-fill.php?id=' . $row2[0] . '">Vyplň</a></td>';
				}
			}
			else {
				echo '
								<td></td>';
			}
		}

		echo "
						</tr>";

	}
	?>
					</tbody>
				</table>
			</section>
<?php


	dbClose($conn);
 ?>