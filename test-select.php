
<?php if (!empty($messageSuccess)) { echo 
						'<div class="message-success">'.$messageSuccess.'</div>';		} ?>
						<?php if (!empty($messageError))   { echo '
						<div class="message-error">'.$messageError.'</div>';	}	 ?>
						<?php $i=0; ?>


							<div class="flex space">
								<div class="col-1">
									
									<select class="per100" name="test" id="test" required="required">
										<option <?php echo "$select"; ?>  value=""  disabled>Vybrat test</option><?php
		
											$sql = "SELECT id_test_otazky, test_nazev_zadani
													FROM test_otazky
													ORDER BY test_nazev_zadani, id_test_otazky";
											$conn = dbConnect();
											mysqli_query($conn, "SET NAMES utf8");
		
											$data = mysqli_query($conn, $sql);

											$i = 0;

											while($radek = mysqli_fetch_row($data)) {
												//echo $radek[$i];
												if ($radek%3==1) {
													//if ($radek[$i] == $users) {
													//	$status ="available";
													//}
													//for($i=0;$i<	count($radek);$i++) {
														//$i=0;
													echo "
										<option value=\"$radek[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radek[$i+1]." (".	$radek[$i].")</option>";
													//} 
												}
											$status ="";
												
											}
		
										?>
		
									</select>

									<select class="per100" id="company" name="company" required="required">
										<option <?php echo "$select"; ?> value=""  disabled>Vybrat klientskou firmu</option><?php
											
											$sql = "SELECT id_company, nazev
													FROM company
													ORDER BY nazev, id_company";
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


									<select class="per100" name="form" id="form" required="required">
									<option <?php echo "$select"; ?>  value=""  disabled>Vybrat šablonu akcí, na kterou bude proškolen uživatel</option><?php
	
										$sql = "SELECT id_form, nazev_formulare
												FROM form
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
								<br><br>
								
									<label class="w83" for="questions">Otázek k úspěchu</label><input type="number" name="questions" required class="number" placeholder="1-20" min="1" max="20" value="<?php if (!empty($questions)) { echo $questions; } ?>"><br>
									<label class="w83" for="try">Pokusů</label><input type="number" name="try" class="number" required placeholder="1-10" min="1" max="99" value="<?php if (!empty($try)) { echo $try; } ?>"><br><br>

									<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>

									<input class="per100" type="submit" name="submit" id="submit" value="Vygenerovat">
									<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
								</div>
								<div class="space"></div>
								<div class="col-3">
									<div id="all-users">
										<script>
											$(document).ready(function(){
											    $("#header-toggle-all").click(function(){
											        $(".toggle-all").toggle(1000, 'swing');
											    });
											});
											$(document).ready(function(){
											    $("#header-toggle-cz").click(function(){
											        $(".toggle-cz").toggle(1000, 'swing');
											    });
											});
											$(document).ready(function(){
											    $("#header-toggle-sk").click(function(){
											        $(".toggle-sk").toggle(1000, 'swing');
											    });
											});
										</script>
										<h3 style="cursor:pointer" id="header-toggle-all">Všichni uživatelé (Klikněte pro zobrazení)</h3>
										<select class="users toggle-all" name="users[]" id="users"  multiple="multiple"><?php
			 
												$sql = "SELECT id_user, jmeno, prijmeni
														FROM users
														WHERE id_user > 0 AND aktivni='ano' AND ( pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní' ) 
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
									</div>
									<div id="all-users-cz">
										<h3 style="cursor:pointer" id="header-toggle-cz">Všichni CZ uživatelé (Klikněte pro zobrazení)</h3>
										<select class="users toggle-cz" name="users[]" id="users"  multiple="multiple"><?php
			 
												$sqlCz = "SELECT id_user, jmeno, prijmeni
														FROM users
														WHERE id_user > 0 AND users.stat=\"cz\" AND aktivni='ano' AND ( pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní' ) 
														ORDER BY prijmeni";
												//$conn = dbConnect();
												mysqli_query($conn, "SET NAMES utf8");

												$dataCz = mysqli_query($conn, $sqlCz);
												while($radekCz = mysqli_fetch_row($dataCz)) {
													//echo $radek[$i];
													if ($radekCz%3==1) {
														if ($radekCz[$i] == $users) {
															$status ="available";
														}
														//for($i=0;$i<	count($radek);$i++) {
															//$i=0;
														echo "
											<option value=\"$radekCz[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radekCz[$i+2]."	 ".$radekCz[$i+1]." (".$radekCz[$i].")</option>";
														//}
													}
												$status ="";
													
												}

											?>

										</select>	
									</div>
									<div id="all-users-sk">
										<h3 style="cursor:pointer" id="header-toggle-sk">Všichni SK uživatelé (Klikněte pro zobrazení)</h3>
										<select class="users toggle-sk" name="users[]" id="users"  multiple="multiple"><?php
			 
												$sqlSk = "SELECT id_user, jmeno, prijmeni
														FROM users
														WHERE id_user > 0 AND users.stat=\"sk\" AND aktivni='ano' AND ( pozice='Koordinátor' OR pozice='Promotér' OR pozice='Ostatní' ) 
														ORDER BY prijmeni";
												//$conn = dbConnect();
												mysqli_query($conn, "SET NAMES utf8");
												echo "$sqlSk sfsdsdfsd <br>";

												$dataSk = mysqli_query($conn, $sqlSk);
												while($radekSk = mysqli_fetch_row($dataSk)) {
													//echo $radek[$i];
													if ($radekSk%3==1) {
														if ($radekSk[$i] == $users) {
															$status ="available";
														}
														//for($i=0;$i<	count($radek);$i++) {
															//$i=0;
														echo "
											<option value=\"$radekSk[$i]\" ";?><?php if($status=="available"){ echo "selected=\"selected\""; } ?><?php echo ">".$radekSk[$i+2]."	 ".$radekSk[$i+1]." (".$radekSk[$i].")</option>";
														//}
													}
												$status ="";
													
												}

											?>

										</select>	
									</div>
									<?php require('test-select-koo.php') ?>			
								</div>

								
							</div>

							
							<div class="error">
							<?php if(!empty($error_company)) { echo $error_company."<br>"; } ?>
							<?php if(!empty($error_pharmacy)) { echo $error_pharmacy."<br>"; } ?>
							<?php if(!empty($error_form)) { echo $error_form."<br>"; } ?>
							<?php if(!empty($error_users)) { echo $error_users."<br>"; } ?>
							<?php if(!empty($error_usersKoo)) { echo $error_usersKoo."<br>"; } ?>
							<?php if(!empty($error_tradesman)) { echo $error_tradesman."<br>"; } ?>
							</div>
