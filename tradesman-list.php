 <?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$sql = "SELECT tradesman.id_tradesman, company.nazev, tradesman.prijmeni, tradesman.telefon, tradesman.stat
			FROM tradesman 
				JOIN company
					ON 		tradesman.id_company=company.id_company
					ORDER BY company.nazev, tradesman.prijmeni ASC";
	$data = mysqli_query($conn, $sql);
?>
			<section class="seznam">
				<h2>Seznam reprezentantů</h2>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Firma</th>
							<th>Příjmení</th>
							<th>Telefon</th>
							<th>Stát</th>
							<th>Upravit</th>
						</tr>
					</thead>
					<tbody>

<?php 
	while ( $row = mysqli_fetch_row($data) ) {
			echo "
						<tr>";
			
			for ($i=0; $i < count($row); $i++) { 
				echo "
							<td>".$row[$i]."</td>";
			}				
			echo '
							<td><a href="tradesman-edit.php?id=' . $row[0] . '">Edit</a></td>';

			
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