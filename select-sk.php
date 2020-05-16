

						<div id="action-sk">
							<select name="company" id="company" class="company" required="required">
								<option <?php echo "$select"; ?> value=""  disabled>Vybrat klientskou firmu</option><?php
									
									$sql = "SELECT id_company, nazev
											FROM company
											WHERE ( nazev LIKE '%".$last_year."%' OR nazev LIKE '%".$current_year."%' ) AND aktivni = 'ano'
											ORDER BY nazev";
									$conn = dbConnect();
									mysqli_query($conn, "SET NAMES utf8");
	
									$data = mysqli_query($conn, $sql);
									while($radek = mysqli_fetch_row($data)) {
										
										if ($radek%3==1) {
											if ($radek[$i=0] == $company) {
												$status ="available";
											}
											//for($i=0;$i<count($radek);$i++) {
												//$i=0;
											//echo $radek[$i];
											echo "
								<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+1]." (".	$radek[$i].")</option>";
											//}
										}
										$status ="";
									}
	
								?>
	
							</select>
	
							<div class="flex">
								<select name="pharmacy" id="pharmacy" required="required">
									<option <?php echo "$select"; ?>  value=""  disabled>Vybrat lékárnu</option><?php
	
										$sql = "SELECT  id_pharmacy, nazev, mesto, ulice
												FROM pharmacy
												WHERE stat='sk' OR stat='vse'
												ORDER BY mesto, nazev, ulice";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												if ($radek[$i] == $pharmacy) {
													$status ="available";
												}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+2]."	 - ".$radek[$i+1].", ".$radek[$i+3]."</	option>";
												//}
											}
										$status ="";
											
										}
	
								?>

								</select>
							

								<select name="form" id="form" required="required">
									<option <?php echo "$select"; ?>  value=""  disabled>Vybrat formulář</option><?php
	
										$sql = "SELECT id_form, nazev_formulare
												FROM form
												WHERE ( stat='sk' OR stat='vse' ) AND ( nazev_formulare LIKE '%".$last_year."%' OR nazev_formulare LIKE '%".$current_year."%' )
												ORDER BY nazev_formulare";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												if ($radek[$i] == $form) {
													$status ="available";
												}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+1]."	 (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}
	
									?>
	
								</select>
							</div>
	
							<div class="flex">
								<select name="users" id="users">
									<option <?php echo "$select"; ?>  value="1"  disabled>Vybrat promotéra</option><?php
	 
										$sql = "SELECT id_user, jmeno, prijmeni
												FROM users
												WHERE id_user > 0 AND ( stat='sk' OR stat='vse') AND ( pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní' ) AND aktivni='ano'
												ORDER BY prijmeni";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												if ($radek[$i] == $users) {
													$status ="available";
												}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+2]."	 ".$radek[$i+1]." (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}
	
									?>
	
								</select>
								
								<select name="users-koo" id="users-koo" required="required">
									<option <?php echo "$select"; ?>  value="" disabled>Vybrat koordinátora</option><?php
										$position1 = "Koordinátor";
										$sql = "SELECT id_user, jmeno, prijmeni
												FROM users
												WHERE pozice='$position1' AND id_user>0  AND aktivni='ano'
												ORDER BY prijmeni";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												//if ($radek[$i] == $usersKoo) {
												//	$status ="available";
												//}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($usersKoo==$radek[$i]){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+2]."	 ".$radek[$i+1]." (".$radek[$i].")</option>";
												//}
											}
										$status ="";
											
										}
	
									?>
								</select>
							</div>

							<div class="flex">
								<select name="tradesman" id="tradesman" required="required">
									<option <?php echo "$select"; ?>  value="" disabled>Vybrat reprezentanta</option><?php
	
										$sql = "SELECT tradesman.id_tradesman, tradesman.prijmeni, company.nazev
												FROM tradesman
													JOIN company

													ON tradesman.id_company=company.id_company
													WHERE ( tradesman.stat='sk' OR tradesman.stat='vse') AND tradesman.aktivni='ano'
													ORDER BY company.nazev
													";
										$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");
	
										$data = mysqli_query($conn, $sql);
										while($radek = mysqli_fetch_row($data)) {
											//echo $radek[$i];
											if ($radek%3==1) {
												//if ($radek[$i] == $users) {
												//	$status ="available";
												//}
												//for($i=0;$i<	count($radek);$i++) {
													//$i=0;
												echo "
									<option value=\"$radek[$i]\" ";?><?php if($tradesman==$radek[$i]){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+2]." - ".$radek[$i+1]." (".$radek[$i].")</option>";
												//} 
											}
										$status ="";
											
										}
	
									?>
	
								</select>
							</div>

						</div>
							
							
