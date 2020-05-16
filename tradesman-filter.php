<?php 

	$sortBy = $param = "";
	$sort = "ASC";
	$limit = 50;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$conn = dbConnect();
		mysqli_query($conn, "SET NAMES utf8");
		$filled 		= $_POST['filled'];
		$error         	= false;

		if (!empty($_POST['nazev_formulare'])) 	{ $valuenazev 	= $_POST['nazev_formulare'];	$param .= " AND tradesman.prijmeni LIKE '%$valuenazev%'"; }
		if (!empty($_POST['telefon'])) 	{ $valuenazev 	= $_POST['telefon'];	$param .= " AND tradesman.telefon LIKE '%$valuenazev%'"; }
		if (!empty($_POST['email'])) 	{ $valuenazev 	= $_POST['email'];	$param .= " AND tradesman.email LIKE '%$valuenazev%'"; }
		
		if (!empty($_POST['sort-by']))  { $sortBy 		= $_POST['sort-by'];  }
		if (!empty($_POST['sort']))  	{ $sort 		= $_POST['sort']; 	 }
		if (!empty($_POST['limit']))  	{ (int)$limit 	= $_POST['limit']; 	 }

		if ($filled == "splneno-ano") {
			$param .= " AND tradesman.aktivni=\"ano\" ";
		}
		else if ($filled == "splneno-ne") {
			$param .= " AND tradesman.aktivni=\"ne\" ";
		}
		else {
			$param .= "";
		}


		if (!empty($_POST['stat'])) { $valuestat 	= $_POST['stat'];  }
		if ($valuestat == "cz") {
			$param .= " AND tradesman.stat=\"cz\" ";
		}
		else if ($valuestat == "sk") {
			$param .= " AND tradesman.stat=\"sk\" ";
		}
		else {
			$param .= "";
		}

		//echo $_POST['company']."<br>afsd";
		if (!empty($_POST['company']))   	{ 
			$valueCompany 	= $_POST['company']; 
			$param .= " AND (";	 	
			for ($i=0; $i < count($valueCompany); $i++) { 
				$param .= "company.id_company = '$valueCompany[$i]'";
				if (($i+1)!=count($valueCompany)) {
					$param .= " OR ";
				}
				else {
					$param .= ") ";
				}
				//echo "<br>$valueCompany[$i]<br>";
			}
		}


		$sql = "SELECT tradesman.id_tradesman, company.nazev, tradesman.prijmeni, tradesman.telefon, tradesman.email, tradesman.stat, tradesman.aktivni
			FROM tradesman 
				JOIN company
					ON 		tradesman.id_company=company.id_company
					$param   
					ORDER BY $sortBy $sort
					LIMIT $limit";
		$data = mysqli_query($conn, $sql);



		
?>
		<div class="container per100 padd-top-14">
			<main>
				<section class="seznam">
				<h2>Seznam reprezentantů</h2>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Firma</th>
							<th>Příjmení</th>
							<th>Telefon</th>
							<th>Email</th>
							<th>Stát</th>
							<th>Aktivní</th>
							<th>Upravit</th>
						</tr>
					</thead>
					<tbody>

<?php 
	//echo "$sql<br>";
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
			</main>
		</div>

		<?php

		dbClose($conn);
	}

 ?>