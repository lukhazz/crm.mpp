<!DOCTYPE html>
<html>
<?php 
$pageTitle="Protokol hodnocení"; 
$description="Vyplnit protokol hodnocení."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>

<body>
	<div class="page">
		<?php require_once("login-db.php") ?>
		<?php $revisionEdit = false; ?>
		<?php require_once("login.php") ?>
		<?php require_once("roles.php") ?>
		<?php $permArrayViewOthers = array("nahled-akci"); ?>
		<?php $permArrayTemp = array("editace-akci"); checkPermById($permArrayTemp); ?>
		<?php require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<div class="container">
			<main>
				<section class="form">
					<h2>Protokol hodnocení</h2>
					<?php $id = $goal = $time =""; ?>	
					<?php require('action-fill-send.php') ?>
					<?php require('action-fill-list.php') ?>
					


					<form action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return checkFile();" method="post" enctype="multipart/form-data" name="register" class="clearfix">
						<?php require('table-summary.php') ?><br>
						<?php 
							$conn = dbConnect();
							mysqli_query($conn, "SET NAMES utf8");

							$error = false;
							//$messageError = "";
							//$messageSuccess = "";
							
							//if (!empty($_GET['id'])) {
							//	$id = $_GET['id'];
							//}
							//else {
							//	$id = "0";
							//}

							//$sql  = "SELECT * FROM form WHERE actions.id_form = form.id_form AND form.id_action = '$id'";
							//echo "ID je: ".$id;
							//$sql  	= "SELECT nazev_formulare FROM form WHERE actions.id_form = form.id_form";
							$sqlForm = "SELECT id_form FROM actions WHERE id_action=$id";
							$sqlCompany = "SELECT id_company FROM actions WHERE id_action=$id";
							$formResult  = mysqli_query($conn, $sqlForm);
							$companyResult  = mysqli_query($conn, $sqlCompany);
							$idForm  = mysqli_fetch_row($formResult);	
							$idCompany  = mysqli_fetch_row($companyResult);	
							$sqlCompanyCena = "SELECT cena_firmy FROM company WHERE id_company=$idCompany[0]";
							$priceResult  = mysqli_query($conn, $sqlCompanyCena);
							$priceCompany  = mysqli_fetch_row($priceResult);	
							//echo "ID akce je: ".$id."<br>";
							//echo "ID formuláře je: ".$idForm[0]."<br>";
							//echo "ID firmy je: ".$idCompany[0]."<br>";
							$sql  	 = "SELECT produkt_1, produkt_2, produkt_3, produkt_4, produkt_5, produkt_6, produkt_7, produkt_8, produkt_9, produkt_10, produkt_11, produkt_12, produkt_13, produkt_14, produkt_15, produkt_16, produkt_17, produkt_18, produkt_19, produkt_20, produkt_21, produkt_22, produkt_23, produkt_24, produkt_25, produkt_26, produkt_27, produkt_28, produkt_29, produkt_30, produkt_31, produkt_32, produkt_33, produkt_34, produkt_35, produkt_36, produkt_37, produkt_38, produkt_39, produkt_40
										FROM form WHERE id_form = $idForm[0]";

							$data 	= mysqli_query($conn, $sql);	
							$i 		= 0;	
							$revision = false;		

						 ?>					
						<?php require('table-products.php'); ?><br>
						<?php $gift = $customer = $othersKs = $othersKc = 0; $othersSummary = ""; ?><br>
						<?php require('table-others.php') ?>

						<?php 

							$sqlGift  	 = "SELECT darek_1, darek_2, darek_3, darek_4, darek_5, darek_6, darek_7, darek_8, darek_9, darek_10, darek_11, darek_12, darek_13, darek_14, darek_15, darek_16, darek_17, darek_18, darek_19, darek_20
										FROM form WHERE id_form = $idForm[0]";
							$dataGift 	= mysqli_query($conn, $sqlGift);	
						 ?>


						<?php require('table-gifts.php'); ?><br>
						<?php 

							$error = false;
							//$messageError = "";
							//$messageSuccess = "";
							
							//if (!empty($_GET['id'])) {
							//	$id = $_GET['id'];
							//}
							//else {
							//	$id = "0";
							//}

							//$sql  = "SELECT * FROM form WHERE actions.id_form = form.id_form AND form.id_action = '$id'";
							//echo "ID je: ".$id;
							//$sql  	= "SELECT nazev_formulare FROM form WHERE actions.id_form = form.id_form";
							$sqlForm = "SELECT id_form FROM actions WHERE id_action=$id";
							$formResult  = mysqli_query($conn, $sqlForm);
							$idForm  = mysqli_fetch_row($formResult);	
							//echo "ID akce je: ".$id."<br>";
							//echo "ID formuláře je: ".$idForm[0]."<br>";
							$sql  	 = "SELECT otazka_1, otazka_2, otazka_3, otazka_4, otazka_5, otazka_6, otazka_7, otazka_8, otazka_9, otazka_10, otazka_11, otazka_12, otazka_13, otazka_14, otazka_15
										FROM form WHERE id_form = $idForm[0]";

										//INNER JOIN actions
										//ON actions.id_action=$id";


							$data 	= mysqli_query($conn, $sql);	
							$i 		= 0;	
							$revision = false;	

						 ?>
						<?php require('table-questions.php'); ?><br>
				

						
						<label for="image-1">Obrázek 1</label><input type="file" id="image-1" name="image-1" accept=".jpg,.png,.jpeg"
						 required="required" />	
						<div class="error"><?php if(!empty($error_img1)) { echo $error_img1; } ?></div>	

						<label for="image-2">Obrázek 2</label><input type="file" id="image-2" name="image-2" accept=".jpg,.png,.jpeg" />	<div class="error"><?php if(!empty($error_img2)) { echo $error_img2; } ?></div>

						<label for="image-3">Obrázek 3</label><input type="file" id="image-3" name="image-3" accept=".jpg,.png,.jpeg" />	
						<div class="error"><?php if(!empty($error_img3)) { echo $error_img3; } ?></div>	

						<label for="image-4">Obrázek 4</label><input type="file" id="image-4" name="image-4" accept=".jpg,.png,.jpeg" />	<div class="error"><?php if(!empty($error_img4)) { echo $error_img4; } ?></div>

						<label for="image-5">Obrázek 5</label><input type="file" id="image-5" name="image-5" accept=".jpg,.png,.jpeg" />	
						<div class="error"><?php if(!empty($error_img5)) { echo $error_img5; } ?></div>	
						


						<?php //require('upload-images.php'); ?><br>
						<?php dbClose($conn);  ?>

						<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>

						<input type="submit" name="submit" id="submit" value="Odeslat"  onClick="getSize();">
						<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
					</form>

						<script type="text/javascript">

							var uploadField1 = document.getElementById("image-1");
							var uploadField2 = document.getElementById("image-2");
							var uploadField3 = document.getElementById("image-3");
							var uploadField4 = document.getElementById("image-4");
							var uploadField5 = document.getElementById("image-5");
							var fileExtension = "";

							uploadField1.onchange = function () {

								if (uploadField1.value.lastIndexOf(".") > 0) {
						            fileExtension = uploadField1.value.substring(uploadField1.value.lastIndexOf(".") + 1, uploadField1.value.length);
						        }

						        if (fileExtension.toLowerCase() != "jpeg" && fileExtension.toLowerCase() != "jpg"  && fileExtension.toLowerCase() != "png") {
								       alert(fileExtension+" - Omlouváme se, ale fotografie musí být ve formátu: JPG, JPEG nebo PNG");
								       this.value = "";
						        }
							    if(this.files[0].size > 4194304){
							       alert("Omlouváme se, ale fotografie je příliš velká, maximální velikost činí 4MB");
							       this.value = "";
							    };
							};

							uploadField2.onchange = function () {

								if (uploadField2.value.lastIndexOf(".") > 0) {
						            fileExtension = uploadField2.value.substring(uploadField2.value.lastIndexOf(".") + 1, uploadField2.value.length);
						        }

						        if (fileExtension.toLowerCase() != "jpeg" && fileExtension.toLowerCase() != "jpg"  && fileExtension.toLowerCase() != "png") {
								       alert(fileExtension+" - Omlouváme se, ale fotografie musí být ve formátu: JPG, JPEG nebo PNG");
								       this.value = "";
						        }
							    if(this.files[0].size > 4194304){
							       alert("Omlouváme se, ale fotografie je příliš velká, maximální velikost činí 4MB");
							       this.value = "";
							    };
							};

							uploadField3.onchange = function () {

								if (uploadField3.value.lastIndexOf(".") > 0) {
						            fileExtension = uploadField3.value.substring(uploadField3.value.lastIndexOf(".") + 1, uploadField3.value.length);
						        }

						        if (fileExtension.toLowerCase() != "jpeg" && fileExtension.toLowerCase() != "jpg"  && fileExtension.toLowerCase() != "png") {
								       alert(fileExtension+" - Omlouváme se, ale fotografie musí být ve formátu: JPG, JPEG nebo PNG");
								       this.value = "";
						        }
							    if(this.files[0].size > 4194304){
							       alert("Omlouváme se, ale fotografie je příliš velká, maximální velikost činí 4MB");
							       this.value = "";
							    };
							};

							uploadField4.onchange = function () {

								if (uploadField4.value.lastIndexOf(".") > 0) {
						            fileExtension = uploadField4.value.substring(uploadField4.value.lastIndexOf(".") + 1, uploadField4.value.length);
						        }

						        if (fileExtension.toLowerCase() != "jpeg" && fileExtension.toLowerCase() != "jpg"  && fileExtension.toLowerCase() != "png") {
								       alert(fileExtension+" - Omlouváme se, ale fotografie musí být ve formátu: JPG, JPEG nebo PNG");
								       this.value = "";
						        }
							    if(this.files[0].size > 4194304){
							       alert("Omlouváme se, ale fotografie je příliš velká, maximální velikost činí 4MB");
							       this.value = "";
							    };
							};
							
							uploadField5.onchange = function () {

								if (uploadField5.value.lastIndexOf(".") > 0) {
						            fileExtension = uploadField5.value.substring(uploadField5.value.lastIndexOf(".") + 1, uploadField5.value.length);
						        }

						        if (fileExtension.toLowerCase() != "jpeg" && fileExtension.toLowerCase() != "jpg"  && fileExtension.toLowerCase() != "png") {
								       alert(fileExtension+" - Omlouváme se, ale fotografie musí být ve formátu: JPG, JPEG nebo PNG");
								       this.value = "";
						        }
							    if(this.files[0].size > 4194304){
							       alert("Omlouváme se, ale fotografie je příliš velká, maximální velikost činí 4MB");
							       this.value = "";
							    };
							};

						</script>

				</section>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>