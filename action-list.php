<?php 

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$sql = "SELECT actions.id_action, company.nazev, actions.datum, pharmacy.nazev, users.prijmeni, users.jmeno
			FROM actions 

			INNER JOIN company
			ON actions.id_company=company.id_company

			INNER JOIN pharmacy
			ON actions.id_pharmacy=pharmacy.id_pharmacy

			INNER JOIN users
			ON actions.id_user=users.id_user

			ORDER BY actions.id_action DESC";
	
	$sql2 = "SELECT users.prijmeni, users.jmeno
			FROM users 

			INNER JOIN actions
			ON actions.id_user_koo=users.id_user";

	$sqlUnion = $sql." UNION ".$sql2;

	$data = mysqli_query($conn, $sql);
?>
			<section class="seznam">
				<h2>Seznam šablon akcí</h2>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Firma</th>
							<th>Datum</th>
							<th>Lékárna</th>
							<th>Promotér</th>
							<th>Upravit</th>
							<th>Vyplnit</th>
						</tr>
					</thead>
					<tbody>

<?php 
	while ( $row = mysqli_fetch_row($data) ) {
			echo "
						<tr>";
			
			for ($i=0; $i < count($row); $i++) { 
				if (strlen($row[$i]) >= 15 && $i <= 3 ) {
					echo "
							<td>".mb_substr($row[$i], 0, 15,'UTF-8')."...</td>";
				}	
				else if ($i == 2) {
					echo "
								<td>".date("d. m. Y", strtotime($row[$i]))."</td>";
				}
				else {
					if ($i == 4 || $i == 6) {
					echo "
							<td>".$row[$i]." ".$row[$i+1]."</td>";
							$i++;
					}
					else {
					echo "
							<td>".$row[$i]."</td>";
					}
					
				}
				
			}				
			echo '
							<td><a href="action-edit.php?id=' . $row[0] . '">Edit</a></td>';				
			echo '
							<td><a href="action-fill.php?id=' . $row[0] . '">Splnit</a></td>';

			
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