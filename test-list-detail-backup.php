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

	$sqlPokus = "SELECT users.prijmeni, users.jmeno, users.pozice, users.id_user

			$additional

			GROUP BY test.id_user 
			ORDER BY test_otazky.test_nazev_zadani, test.id_test_otazky, users.prijmeni, users.id_user
	";
	$sqlMaxPokusu = "SELECT test_zadani.max_pokusu

			$additional
 
			ORDER BY test_zadani.max_pokusu DESC
			LIMIT 1
	";

	$dataMaxPokusu 		= mysqli_query($conn, $sqlMaxPokusu);
	$rowMaxPokus 		= mysqli_fetch_row($dataMaxPokusu);
	$maxPokusu 			= $rowMaxPokus[0];
	$sloupcu			= 5;

	

	//echo "$sql<br>";
	//echo "$id<br>";
	//echo "Max pokusu $maxPokusu <br>";

	$data = mysqli_query($conn, $sqlPokus);
?>
			<section class="seznam">
				<h2>Testy<?php //echo "$row[0]"; ?></h2>
				<table>
					<thead>
						<tr>
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
	
	while ( $row = mysqli_fetch_row($data) ) {
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
			if ($row2[1]=="ano") {
				echo '
							<td><a href="test-show.php?id=' . $row2[0] . '">Zobraz</a></td>';
			}
			else {
				echo '
							<td><a href="test-fill.php?id=' . $row2[0] . '">Vyplň</a></td>';
			}
				
				
		}


		//echo '
		//					</td>';

			//}			





		//echo '
		//					<td><a href="test-fill.php?id=' . $row[0] . '">Pokus</a></td>';
		//echo '
		//					<td><a href="test-edit.php?id=' . $row[0] . '">Edit</a></td>';

			
		echo "
						</tr>";

	}
	/*while ( $row = mysqli_fetch_row($data) ) {
			echo "
						<tr>";
			
			for ($i=0; $i < count($row); $i++) { 
				echo "
							<td>".$row[$i]."</td>";
			}				
			echo '
							<td><a href="test-fill.php?id=' . $row[0] . '">Pokus</a></td>';
			echo '
							<td><a href="test-edit.php?id=' . $row[0] . '">Edit</a></td>';

			
			echo "
						</tr>";

	}
	*/
	?>
					</tbody>
				</table>
			</section>
<?php


	dbClose($conn);
 ?>