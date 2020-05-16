<?php 

	$sortBy = $param = "";
	$sort = "ASC";
	$limit = 50;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$conn = dbConnect();
		mysqli_query($conn, "SET NAMES utf8");


	
		$error         	= false;

		if (!empty($_POST['nazev_formulare'])) 	{ $valuenazev 	= $_POST['nazev_formulare'];	$param .= " AND form.nazev_formulare LIKE '%$valuenazev%'"; }
		if (!empty($_POST['produkty'])) 	{ $valueprodukt 	= $_POST['produkty'];	$param .= " AND form.produkt_1 LIKE '%$valueprodukt%' OR form.produkt_2 LIKE '%$valueprodukt%' OR form.produkt_3 LIKE '%$valueprodukt%' OR form.produkt_4 LIKE '%$valueprodukt%' OR form.produkt_5 LIKE '%$valueprodukt%' OR form.produkt_6 LIKE '%$valueprodukt%' OR form.produkt_7 LIKE '%$valueprodukt%' OR form.produkt_8 LIKE '%$valueprodukt%' OR form.produkt_9 LIKE '%$valueprodukt%' OR form.produkt_10 LIKE '%$valueprodukt%' OR form.produkt_11 LIKE '%$valueprodukt%' OR form.produkt_12 LIKE '%$valueprodukt%' OR form.produkt_13 LIKE '%$valueprodukt%' OR form.produkt_14 LIKE '%$valueprodukt%' OR form.produkt_15 LIKE '%$valueprodukt%' OR form.produkt_16 LIKE '%$valueprodukt%' OR form.produkt_17 LIKE '%$valueprodukt%' OR form.produkt_18 LIKE '%$valueprodukt%' OR form.produkt_19 LIKE '%$valueprodukt%' OR form.produkt_20 LIKE '%$valueprodukt%'"; }
		if (!empty($_POST['id_form']))   	{ $valueid 	= $_POST['id_form']; $param .= " AND form.id_form LIKE '%$valueid%'";}
		if (!empty($_POST['date-from']))   	{ $dateFrom = $_POST['date-from']; $dateTo = $_POST['date-to']; $param .= " AND form.dat_vytvoreni BETWEEN '$dateFrom' AND '$dateTo'"; }
		if (!empty($_POST['sort-by']))  { $sortBy 		= $_POST['sort-by'];  }
		if (!empty($_POST['sort']))  	{ $sort 		= $_POST['sort']; 	 }
		if (!empty($_POST['limit']))  	{ (int)$limit 	= $_POST['limit']; 	 }


		if (!empty($_POST['stat'])) { $valuestat 	= $_POST['stat'];  }
		if ($valuestat == "cz") {
			$param .= " AND form.stat=\"cz\" ";
		}
		else if ($valuestat == "sk") {
			$param .= " AND form.stat=\"sk\" ";
		}
		else {
			$param .= "";
		}




		$sql = "SELECT id_form,nazev_formulare,dat_vytvoreni,produkt_1,produkt_2,produkt_3,produkt_4,produkt_5,stat FROM form
					WHERE id_form > 0 $param   
					ORDER BY $sortBy $sort
					LIMIT $limit";

?>
		<div class="container per100 padd-top-14">
			<main>
				<section class="seznam">
					<h2>Výpis formulářů</h2>
					<table id="pharmacy">
						<thead>
							<tr>
								<th>ID</th>
								<th>Jméno</th>
								<th>Datum vytvoření</th>
								<th>Produkty</th>
								<th>Stát</th>
								<th>Upravit</th>
							</tr>
						</thead>
						<tbody>	 
							<?php 
							$data = mysqli_query($conn, $sql);
							while ( $row = mysqli_fetch_row($data) ) {
							//$product1 = explode("|", $allProduct1);
							//echo $product1[0];
								echo "
											<tr>";
								
								//for ($i=0; $i < count($row); $i++) { 
								for ($i=0; $i < 2; $i++) { 
									echo "
												<td>".$row[$i]."</td>";
								}	
								if ($i == 2) {
									echo "
												<td>".date("d. m. Y", strtotime($row[$i]))."</td>";
								}
								echo "
												<td>";
								for ($i=3; $i < (count($row)-1); $i++) { 
									$product = explode("|", $row[$i]);
									if (!empty($product[0])) {
										echo $product[0].", ";
									}
									
								}		
								echo "...</td>";	
								echo "
												<td>".$row[8]."</td>";
								echo '
												<td><a href="form-maker-edit.php?id=' . $row[0] . '">Edit</a></td>';

								
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