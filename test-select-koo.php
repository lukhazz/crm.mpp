
							

							<?php $i=0; $inline="";?>
								
									<?php 
										$sqlKoo = "SELECT id_user, jmeno, prijmeni
													FROM users
													WHERE id_user > 1 AND pozice='Koordinátor' AND aktivni='ano'
													ORDER BY prijmeni";

											//echo "$sqlKoo<br>";
									 ?>

									 <?php 

								 		$conn = dbConnect();
										mysqli_query($conn, "SET NAMES utf8");

										$dataKoo = mysqli_query($conn, $sqlKoo);
										while($rowKoo = mysqli_fetch_row($dataKoo)) {

									
											$idKoo = $rowKoo[$i];

											if ($idUser == $idKoo) {
												$inline = "inline";
											}
											else {
												$inline = "";
											}

											$sql = "SELECT id_user, jmeno, prijmeni
													FROM users
													WHERE id_user > 0 
														AND (sef='$idKoo' OR id_user='$idKoo')
														AND aktivni='ano' 
														AND (pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní')
													ORDER BY prijmeni";
											//echo "$sql<br>";

										 ?>

									<script>
										$(document).ready(function(){
										    $("<?php echo "#header-toggle-$idKoo";?>").click(function(){
										        $("<?php echo ".toggle-$idKoo";?>").toggle(1000, 'swing');
										    });
										});
									</script>

									<div id="<?php echo "koo-$idKoo";?>" >

										<h3 style="cursor:pointer" id="<?php echo "header-toggle-$idKoo";?>"><?php echo "".$rowKoo[$i+2]." ".$rowKoo[$i+1]; ?> (Klikněte pro zobrazení)</h3>
										<select class="users-koo <?php echo "toggle-$idKoo $inline";?>" name="users[]" id="users" multiple="multiple"><?php
		 
											

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

									
									</div>
									<?php } ?>				
							
