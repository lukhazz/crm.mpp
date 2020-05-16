<?php 
	
	$userId = $_SESSION['id_user'];
	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");
	$usersSplneno = "";
	$nazevTemp = "";

	//$from = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
	//$to = mktime(0, 0, 0, date("m"), date("d"), date("Y")+3);
	//$dateFrom = date("Y-m-d", $from);
	//$dateTo = date("Y-m-d", $to);
	$today = date("Y-d-m");
	//AND actions.datum>'$today'
	//echo "$dateFrom<br>$dateTo<br>$today<br>";

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

	WHERE test.id_user='$userId'";



	$sqlSplnenoId = "SELECT test_otazky.id_test_otazky

			$additional

			AND test.splneno = 'ano'";

	//echo "$sqlSplnenoId<br><br>";
	$dataSplnenoId = mysqli_query($conn, $sqlSplnenoId);

	while ( $rowSplnenoId = mysqli_fetch_row($dataSplnenoId) ) {
		$usersSplneno .= "AND test.id_test_otazky != '$rowSplnenoId[0]'";
	}


	$sqlSplneno = "SELECT test.id_test, test_otazky.test_nazev_zadani, company.nazev, test_zadani.max_pokusu, test.cislo_pokusu, test_pokus.procent, test_pokus.cas_od, test_pokus.cas_vygenerovani, test_pokus.cas_do, test_otazky.id_test_otazky

			$additional

			AND test.splneno = 'ano'";

	//echo "$sqlSplneno<br><br>";
	$dataSplneno = mysqli_query($conn, $sqlSplneno);


	$sqlNesplneno = "SELECT test.id_test, test_otazky.test_nazev_zadani, company.nazev, test_zadani.max_pokusu, test.cislo_pokusu, test_pokus.procent, test_pokus.cas_od, test_pokus.cas_vygenerovani, test_pokus.cas_do, test_pokus.cas_do, test_otazky.id_test_otazky

			$additional
			$usersSplneno

			AND test.splneno = 'ne'";

	//echo "$sqlNesplneno<br>";
	$dataNesplneno = mysqli_query($conn, $sqlNesplneno);

 ?>

 			<section class="seznam">
				<h2>Nesplněné testy</h2>
				<table>
					<thead>
						<tr>
							<th>Název zadání</th>
							<th>Firma</th>
							<th>Pokus</th>
							<th>Procent</th>
							<th>Čas</th>
							<th>Zadání vytvořeno</th>
							<th>Odesláno</th>
							<th>Akce</th>
						</tr>
					</thead>
					<tbody>

<?php 

	$counterPokusuNesplneno = 0;
	while ( $row = mysqli_fetch_row($dataNesplneno) ) {
			$counterPokusuNesplneno++;
			echo "
						<tr>";

			if ($row[1]!=$nazevTemp) {
				$counterPokusuNesplneno = 1;
			}


			
			for ($j=1; $j < (count($row)-2); $j++) {  
				$nazevTemp = $row[1];

				if ($j==3) {
					$idOtazky = $row[(count($row)-1)];
					$sqlMaxPokusu = "SELECT COUNT(*)
								$additional
								AND test.id_test_otazky=$idOtazky";

					//echo "$sqlMaxPokusu<br>";

					$dataMaxPokusu = mysqli_query($conn, $sqlMaxPokusu);
					$rowMaxPokusu = mysqli_fetch_row($dataMaxPokusu);
					$maxPokusu = $rowMaxPokusu[0];


					echo "<td>".$counterPokusuNesplneno.". pokus z $maxPokusu</td>"; 

					$j++;
					continue;	
				}

				//Procenta
				if ( $j==5 ) {
					if (($row[$j])!=NULL) {
						echo "
							<td>".$row[$j]."%</td>";
					}
					else {
						echo "
							<td>neodeslán</td>";						
					}
					

					continue;
				} 

				//Cas
				if ( $j==6 ) {
					//echo "$j)".$row[($j+2)]."<br>";
					$datumOd = date("Y-j-n-G-i-s", strtotime($row[$j]));
					$datumDo = date("Y-j-n-G-i-s", strtotime($row[($j+2)]));
					if (empty($row[($j+2)])) {
						echo "
							<td>00:00:00</td>";
						continue;
					//	//$row[($j+2)] = date("Y-j-n-G-i-s");
					//	$datumDo = $odeslano = date("Y-j-n-G-i-s");
					//	//$datumDo = date("Y-j-n-G-i-s", strtotime($odeslano));
					//	echo "Nebylo ještě odesláno $datumOd - $datumDo<br>";
					}

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
				//Datum odeslani
				if ($j==7 && !empty($row[$j])) {
					echo "
								<td>".date("d.m.Y H:i", strtotime($row[$j]))."</td>";
					continue;
				}
				if ($j==8) {
					if ( !empty($row[$j])) {
						echo "
								<td>".date("d.m.Y H:i", strtotime($row[$j]))."</td>";
					}
					else {
						echo "
							<td>neodeslán</td>";
					}
					continue;
				}
				echo "
							<td>".$row[$j]."</td>";
			}
			if ($row[8]!=NULL) {
				echo '
							<td><a href="test-show.php?id=' . $row[0] . '">Zobraz</a></td>';
			}
			else {
				echo '
							<td><a href="test-fill.php?id=' . $row[0] . '">Vyplň</a></td>';
			}

			
			
			echo "
						</tr>";

	}
	?>
					</tbody>
				</table>
			</section>

 <section class="seznam">
				<h2>Splněné testy</h2>
				<table>
					<thead>
						<tr>
							<th>Název zadání</th>
							<th>Firma</th>
							<th>Pokus</th>
							<th>Procent</th>
							<th>Čas</th>
							<th>Zadání vytvořeno</th>
							<th>Odesláno</th>
							<th>Akce</th>
						</tr>
					</thead>
					<tbody>

<?php 


	$counterPokusuSplneno = 0;
	while ( $row = mysqli_fetch_row($dataSplneno) ) {
			//$idOtazky = (count($row)-1);
			//$usersSplneno .= "AND test.id_test_otazky != '$row[$idOtazky]'";
			echo "
						<tr>";

			if ($row[1]!=$nazevTemp) {
				$counterPokusuSplneno = 1;
			}
			
			for ($j=1; $j < (count($row)-1); $j++) {  

				if ($j==3) {
					$idOtazky = $row[(count($row)-1)];
					$sqlMaxPokusu = "SELECT COUNT(*)
								$additional
								AND test.id_test_otazky=$idOtazky";

					//echo "$sqlMaxPokusu<br>";

					$dataMaxPokusu = mysqli_query($conn, $sqlMaxPokusu);
					$rowMaxPokusu = mysqli_fetch_row($dataMaxPokusu);
					$maxPokusu = $rowMaxPokusu[0];

					$sqlMinPokusu = "SELECT COUNT(*)

							$additional
							AND test.id_test_otazky=$idOtazky
							AND test.id_test <= $row[0]";

					//echo "$sqlMinPokusu<br><br>";
							
					$dataMinPokusu = mysqli_query($conn, $sqlMinPokusu);
					$rowMinPokusu = mysqli_fetch_row($dataMinPokusu);
					$minPokusu = $rowMinPokusu[0];



					echo "<td>".$minPokusu.". pokus z $maxPokusu</td>"; 


					$j++;
					continue;	
				}

				//Cas
				if ( $j==5 ) {
					echo "
							<td>".$row[$j]."%</td>";

					continue;
				} 

				//Cas
				if ( $j==6 ) {
					$datumDo = date("Y-j-n-G-i-s", strtotime($row[($j+2)]));
					$datumOd = date("Y-j-n-G-i-s", strtotime($row[$j]));

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
				//Datum odeslani
				if ($j==7 && !empty($row[$j])) {
					echo "
								<td>".date("d.m.Y H:i", strtotime($row[$j]))."</td>";
					continue;
				}
				if ($j==8 && !empty($row[$j])) {
					echo "
								<td>".date("d.m.Y H:i", strtotime($row[$j]))."</td>";
					continue;
				}
				echo "
							<td>".$row[$j]."</td>";
			}					
			echo '
							<td><a href="test-show.php?id=' . $row[0] . '">Zobraz</a></td>';

			
			
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