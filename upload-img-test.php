<!DOCTYPE html>
<html>
<?php 
$pageTitle="Upload"; 
$description="Upload Test"; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>

<body>
	<div class="page">
		<?php //require_once("login-db.php") ?>
		<?php //$revisionEdit = false; ?>
		<?php //require_once("login.php") ?>
		<?php //require_once("roles.php") ?>
		<?php //$permArrayViewOthers = array("nahled-akci"); ?>
		<?php //$permArrayTemp = array("editace-akci"); checkPermById($permArrayTemp); ?>
		<?php //require("block-header.php"); ?>
		<?php require("functions.php") ?>
		<div class="container">
			<main>
				<section class="form">
					<h2>Test nahrávání obrázků</h2>
					<?php $id = $goal = $time =""; ?>	
					<?php //require('action-fill-send.php') ?>
					<?php //require('action-fill-list.php') ?>

					<?php 
						if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

							/**************************************************************************
																UPLOAD
							 **************************************************************************/

							$file_prename 			= makeFilePreName( $id );	
							$file_path_original 	= "promoday/original/".date("Y");
							$file_path_resized 		= "promoday/resized/".date("Y");
							//echo $file_path."<br>".$file_path_original."<br>".$file_path_resized."<br>".$file_prename."<br>";


							//require("upload-test.php");
							$image1 = $image2 = $image3 = "";

							$obr1  		= $_FILES['image-1']; 

							if (isset($_FILES['image-1'])) {
								$image1 = uploadMyImage("image-1", $file_path, $file_path_original, $file_path_resized, $file_prename);
								//echo "$image1<br>";
								if ($image1 == "chyba") {
									$error = true;
									$error_img1 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
								}
								else {
									echo "IMG 1 -  nahrán $image1<br><br><br>";
								}
							}

							//$obr2  		= $_FILES['image-2']; 
							////echo "$obr2<br>";
							//if (isset($_FILES['image-2']) && $error == false) {
							//	$image2 = uploadMyImage("image-2", $file_path, $file_path_original, $file_path_resized, $file_prename);
							//	//echo "$image2<br>";
							//	if ($image2 == "chyba") {
							//		$error = true;
							//		$error_img2 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
							//	}
							//	else {
							//		echo "IMG 2 -  nahrán $image1<br>";
							//	}
							//}
							//
							//$obr3  		= $_FILES['image-3']; 
							////echo "$obr3<br>";
							//if (isset($_FILES['image-3']) && $error == false) {
							//	$image3 = uploadMyImage("image-3", $file_path, $file_path_original, $file_path_resized, $file_prename);
							//	//echo "$image3<br>";
							//	if ($image3 == "chyba") {
							//		$error = true;
							//		$error_img3 = "Zkontrolujte prosím správnost formátu fotografie: JPG, JPEG nebo PNG a maximální velikost 4MB";
							//	}
							//	else {
							//		echo "IMG 3 -  nahrán $image1<br>";
							//	}
							//}
						}

					 ?>
					


					<form action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return checkFile();" method="post" enctype="multipart/form-data" name="register" class="clearfix">
						

						
						<label for="image-1">Obrázek 1</label><input type="file" id="image-1" name="image-1" accept=".jpg,.png,.jpeg"
						 required="required" />	
						<div class="error"><?php if(!empty($error_img1)) { echo $error_img1; } ?></div>	
						<!--<label for="image-2">Obrázek 2</label><input type="file" id="image-2" name="image-2" accept=".jpg,.png,.jpeg" />	-->					
						<!--<div class="error"><?php if(!empty($error_img2)) { echo $error_img2; } ?></div>	-->
						<!--<label for="image-3">Obrázek 3</label><input type="file" id="image-3" name="image-3" accept=".jpg,.png,.jpeg" />	-->					
						<!--<div class="error"><?php if(!empty($error_img3)) { echo $error_img3; } ?></div>	-->


						<?php //require('upload-images.php'); ?><br>
						<?php //dbClose($conn);  ?>

						<input type="hidden" name="id_action" value="<?php echo $id; ?>"/>

						<input type="submit" name="submit" id="submit" value="Odeslat"  onClick="getSize();">
						<!--<input type="reset" name="reset" id="reset" value="Resetovat">-->
					</form>

						<script type="text/javascript">

							var uploadField1 = document.getElementById("image-1");
							var uploadField2 = document.getElementById("image-2");
							var uploadField3 = document.getElementById("image-3");
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

						</script>

				</section>
			</main>
		</div>	
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>