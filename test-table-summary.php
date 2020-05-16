<?php 

	$additionalUser = "FROM test 

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

	WHERE test.id_user='$idUser'";

	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "0";
	}

	$sqlMaxPokusu = "SELECT COUNT(*)

			$additionalUser
			AND test.id_test_otazky=$idTestOtazky";

	$sqlMinPokusu = "SELECT COUNT(*)

			$additionalUser
			AND test.id_test_otazky=$idTestOtazky
			AND test.id_test <= $id";

	//echo "$sqlMinPokusu<br><br>";

	$dataMaxPokusu = mysqli_query($conn, $sqlMaxPokusu);
	$rowMaxPokusu = mysqli_fetch_row($dataMaxPokusu);
	$maxPokusu = $rowMaxPokusu[0];

	$dataMinPokusu = mysqli_query($conn, $sqlMinPokusu);
	$rowMinPokusu = mysqli_fetch_row($dataMinPokusu);
	$minPokusu = $rowMinPokusu[0];

 ?>

<table id="summary">
						<tr>
							<td>Jméno uživatele</td>
							<td><?php if (!empty($user)) { echo $user; } ?></td>
							<td>Firma</td>
							<td><?php if (!empty($company)) { echo $company; } ?></td>
						</tr>
						<tr>
							<td>Minimum</td>
							<td><?php 
							$minProcent = ($correct/($counterQuestions+1))*100;
							if (!empty($correct)) { echo "$minProcent%"; } ?></td>
							<td>Pokus</td>
							<td><?php if (!empty($try)) { echo "$minPokusu. pokus z $maxPokusu možných"; } ?></td>
						</tr>
						<?php if (!empty($percent)) { ?>
						<tr>
							<td>Výsledek</td>
							<td><?php if (!empty($percent)) { echo $percent."%"; } ?></td>
							<td>Čas</td>
							<td><?php if (!empty($time)) { echo "$time"; } ?></td>
						</tr>

						<?php } ?>
					</table>
					<br>