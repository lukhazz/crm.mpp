<?php 
	$sqlOthers = "SELECT otatni_soupis, otatni_ks, otatni_cena, celkem_zakazniku, celkem_darku  FROM actions WHERE id_action=$id";
	$formResult  = mysqli_query($conn, $sqlOthers);
	$others  = mysqli_fetch_row($formResult);	

 ?>

					<table id="produkty-neprom">
						<caption>Ostatní nepromované produkty</caption>
						<thead>
							<tr>
								<th>Prodané nepromované produkty</th>
								<th>Počet kusů celkem</th>
								<th>Cena celkem</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo "$others[0]"; ?></td>
								<td><?php echo "$others[1]"; ?>&nbsp;Ks</td>
								<td><?php echo "$others[2]"; ?>&nbsp;<?php echo $mena; ?></td>					
							</tr>
						</tbody>
					</table>
					<table id="darky-zakaznici">
						<caption>Oslovení zákaznící a vydané dárky</caption>
						<thead>
							<tr>
								<th>Počet oslovených zákazníků</th>
								<th>Počet vydaných dárků celkem</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo "$others[3]"; ?>&nbsp;</td>
								<td><?php echo "$others[4]"; ?>&nbsp;Ks</td>					
							</tr>
						</tbody>
					</table>	