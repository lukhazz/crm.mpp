<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$conn = dbConnect();
		mysqli_query($conn, "SET NAMES utf8");

		$param = "";
	
		$error         	= false;

		if (!empty($_POST['nazev'])) 	{ $valuenazev 	= $_POST['nazev']; 	 	$param .= " AND nazev LIKE '%$valuenazev%'"; }
		if (!empty($_POST['vdl']))   	{ $valuevdl 	= $_POST['vdl']; 	 	$param .= " AND vdl LIKE '%$valuevdl%'";}
		if (!empty($_POST['okres']))   	{ $valueokres 	= $_POST['okres']; 	 	$param .= " AND okres LIKE '%$valueokres%'";}
		if (!empty($_POST['mesto']))   	{ $valuemesto 	= $_POST['mesto']; 	 	$param .= " AND mesto LIKE '%$valuemesto%'";}
		if (!empty($_POST['retezec']))  { $valueretezec = $_POST['retezec'];  	$param .= " AND retezec LIKE '%$valueretezec%'";}
		if (!empty($_POST['stat']))  	{ $valuestat 	= $_POST['stat'];  		}
		if (!empty($_POST['rating']))   { $valuerating 	= $_POST['rating'];  	$param .= " AND rating LIKE '%$valuerating%'";}
		if (!empty($_POST['phone']))   	{ $valuephone 	= $_POST['phone']; 	 	$param .= " AND k_cislo LIKE '%$valuephone%'";}
		if (!empty($_POST['kontakt']))  { $valuekontakt = $_POST['kontakt'];  	$param .= " AND k_jmeno LIKE '%$valuekontakt%'";}
		if (!empty($_POST['sort-by']))  { $sortBy 		= $_POST['sort-by'];  }
		if (!empty($_POST['sort']))  	{ $sort 		= $_POST['sort']; 	 }
		if (!empty($_POST['limit']))  	{ (int)$limit 	= $_POST['limit']; 	 }

		if ($valuestat == "cz") {
			$param .= " AND stat=\"cz\" ";
		}
		else if ($valuestat == "sk") {
			$param .= " AND stat=\"sk\" ";
		}
		else {
			$param .= "";
		}


		$sql = "SELECT * FROM pharmacy 
					WHERE vdl > 0 $param 
					ORDER BY $sortBy $sort
					LIMIT $limit";

?>
		<div class="container per100 padd-top-14">
			<main>
				<section class="seznam td-right">
					<h2>Výpis lékáren</h2>
					<table id="pharmacy">
						<thead>
							<tr>
								<th>VDL</th>
								<th>Rating</th>
								<th>Řetězec</th>
								<th>Název</th>
								<th>Ulice</th>
								<th>Město</th>
								<th>Okres</th>
								<th>Stát</th>
								<th>Kontaktní osoba</th>
								<th>Telefon</th>
								<th>Upravit</th>
							</tr>
						</thead>
						<tbody>	 
							<?php 
							$data = mysqli_query($conn, $sql);
							while ( $row = mysqli_fetch_row($data) ) {
								echo "
							<tr>";
									
								for ($i=1; $i < count($row); $i++) { 
									if (!empty($row[$i])) {
									echo "
								<td>".$row[$i]."</td>";
									}
									else {
										echo "
								<td>&nbsp;</td>";
									}
								}
								echo '
								<td><a href="pharmacy-edit.php?id=' . $row[0] . '">Edit</a></td>';
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