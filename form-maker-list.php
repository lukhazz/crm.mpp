<?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$sql = "SELECT id_form,nazev_formulare,dat_vytvoreni,produkt_1,produkt_2,produkt_3,produkt_4,produkt_5 FROM form ORDER BY id_form DESC";
	$data = mysqli_query($conn, $sql);
?>
			<section class="seznam" id="pharmacy">
				<h2>Seznam formulářů</h2>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Jméno</th>
							<th>Datum vytvoření</th>
							<th>Produkty</th>
							<th>Upravit</th>
						</tr>
					</thead>
					<tbody>

<?php 
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
			for ($i=3; $i < count($row); $i++) { 
				$product = explode("|", $row[$i]);
				if (!empty($product[0])) {
					echo $product[0].", ";
				}
				
			}		
			echo "...</td>";	
			echo '
							<td><a href="form-maker-edit.php?id=' . $row[0] . '">Edit</a></td>';

			
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