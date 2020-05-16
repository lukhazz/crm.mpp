<?php 

	$sortBy = $param = "";
	$sort = "ASC";
	$limit = 50;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$conn = dbConnect();
		mysqli_query($conn, "SET NAMES utf8");
		$error         	= false;
		$filled 			= $_POST['filled'];

		if (!empty($_POST['nazev_formulare'])) 	{ $valuenazev 	= $_POST['nazev_formulare'];	$param .= " AND company.nazev LIKE '%$valuenazev%'"; }
		
		if (!empty($_POST['sort-by']))  { $sortBy 		= $_POST['sort-by'];  }
		if (!empty($_POST['sort']))  	{ $sort 		= $_POST['sort']; 	 }
		if (!empty($_POST['limit']))  	{ (int)$limit 	= $_POST['limit']; 	 }


		if (!empty($_POST['stat'])) { $valuestat 	= $_POST['stat'];  }
		if ($valuestat == "cz") {
			$param .= " AND company.stat=\"cz\" ";
		}
		else if ($valuestat == "sk") {
			$param .= " AND company.stat=\"sk\" ";
		}
		else {
			$param .= "";
		}

		if ($filled == "splneno-ano") {
			$param .= " AND aktivni=\"ano\" ";
		}
		else if ($filled == "splneno-ne") {
			$param .= " AND aktivni=\"ne\" ";
		}
		else {
			$param .= "";
		}

		if (!empty($_POST['cena'])) { $valuePrice 	= $_POST['cena'];  }
		if ($valuePrice == "moc") {
			$param .= " AND company.cena_firmy=\"moc\" ";
		}
		else if ($valuePrice == "voc") {
			$param .= " AND company.cena_firmy=\"voc\" ";
		}
		else {
			$param .= "";
		}



		$sql = "SELECT * FROM company

					WHERE id_company > 0 $param   
					ORDER BY $sortBy $sort
					LIMIT $limit";
		$data = mysqli_query($conn, $sql);

		
?>
		<div class="container per100 padd-top-14">
			<main>
				<section class="seznam">
				<h2>Seznam firem</h2>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Jméno</th>
							<th>Typ ceny</th>
							<th>Stát</th>
							<th>Aktivní</th>
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
							<td><a href="company-edit.php?id=' . $row[0] . '">Edit</a></td>';

			
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