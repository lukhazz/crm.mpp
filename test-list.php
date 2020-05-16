<?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	//if (!empty($_GET['id'])) {
	//	$id = $_GET['id'];
	//}
	//else {
	//	$id = "0";
	//}

	//$sql = "SELECT * FROM company ORDER BY nazev ASC";
	/*$sql = "SELECT 
	test.id_test_otazky, test.id_test, test_otazky.test_nazev_zadani
	FROM test 

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

	GROUP BY test.id_test_otazky

	ORDER BY test_otazky.test_nazev_zadani, test.id_test_otazky, users.prijmeni 
	";*/

	$sql = "SELECT 
	test_otazky.id_test_otazky, test_otazky.test_nazev_zadani
	FROM test_otazky

	ORDER BY test_otazky.test_nazev_zadani 
	";

	

	$data = mysqli_query($conn, $sql);
?>
			<section class="seznam">
				<?php 
					//echo "$sql<br>";
					//echo "$id<br>";
	 			?>
				<h2>Zadání testů</h2>
				<table>
					<thead>
						<tr>
							<th>Název testu</th>
							<th>Zobrazit</th>
							<th>Upravit</th>
						</tr>
					</thead>
					<tbody>

<?php 
	while ( $row = mysqli_fetch_row($data) ) {
			echo "
						<tr>";
			
			for ($i=1; $i < count($row); $i++) { 
				echo "
							<td>".$row[$i]."</td>";
			}				
			echo '
							<td><a href="test-view-detail.php?id=' . $row[0] . '">Výsledky</a></td>';
			echo '
							<td><a href="test-maker-edit.php?id=' . $row[0] . '">Edit</a></td>';

			
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