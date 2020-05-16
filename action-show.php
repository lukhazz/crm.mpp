<!DOCTYPE html>
<html>
<?php 
$pageTitle="Protokol hodnocení"; 
$description="Vyplnit protokol hodnocení."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<link rel="stylesheet" href="css/lightbox.css">
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
					<?php $id = $goal = $time = $users =""; ?>	
					<?php require('action-fill-send.php') ?>
					<?php require('action-show-list.php') ?>

					<?php require('table-summary.php') ?><br>	
					<?php 
							$conn = dbConnect();
							mysqli_query($conn, "SET NAMES utf8");
							$id = $_GET['id'];
							//echo $id;

							$error = false;
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
							$sqlForm  	 = "SELECT produkt_1, produkt_2, produkt_3, produkt_4, produkt_5, produkt_6, produkt_7, produkt_8, produkt_9, produkt_10, produkt_11, produkt_12, produkt_13, produkt_14, produkt_15, produkt_16, produkt_17, produkt_18, produkt_19, produkt_20, produkt_21, produkt_22, produkt_23, produkt_24, produkt_25, produkt_26, produkt_27, produkt_28, produkt_29, produkt_30, produkt_31, produkt_32, produkt_33, produkt_34, produkt_35, produkt_36, produkt_37, produkt_38, produkt_39, produkt_40
										FROM form WHERE id_form = $idForm[0]";

							$sqlProduct  	 = "SELECT produkt_1, produkt_2, produkt_3, produkt_4, produkt_5, produkt_6, produkt_7, produkt_8, produkt_9, produkt_10, produkt_11, produkt_12, produkt_13, produkt_14, produkt_15, produkt_16, produkt_17, produkt_18, produkt_19, produkt_20, produkt_21, produkt_22, produkt_23, produkt_24, produkt_25, produkt_26, produkt_27, produkt_28, produkt_29, produkt_30, produkt_31, produkt_32, produkt_33, produkt_34, produkt_35, produkt_36, produkt_37, produkt_38, produkt_39, produkt_40
										FROM actions WHERE id_action = $id";

							$dataForm 		= mysqli_query($conn, $sqlForm);	
							$data 			= mysqli_query($conn, $sqlProduct);	
							$i 		= 0;	
							$revision = true;	

						 ?>					
					<?php require('table-products-show.php') ?><br>
					<?php $gift = $customer = $othersKs = $othersKc = 0; $othersSummary = ""; require('action-show-others.php') ?><br>


					<?php 

						$sqlGiftForm  	 = "SELECT darek_1, darek_2, darek_3, darek_4, darek_5, darek_6, darek_7, darek_8, darek_9, darek_10, darek_11, darek_12, darek_13, darek_14, darek_15, darek_16, darek_17, darek_18, darek_19, darek_20
									FROM form WHERE id_form = $idForm[0]";
						$sqlGift  	 = "SELECT darek_1, darek_2, darek_3, darek_4, darek_5, darek_6, darek_7, darek_8, darek_9, darek_10, darek_11, darek_12, darek_13, darek_14, darek_15, darek_16, darek_17, darek_18, darek_19, darek_20
									FROM actions WHERE id_action = $id";

						$dataGiftForm	= mysqli_query($conn, $sqlGiftForm);	
						$dataGift 		= mysqli_query($conn, $sqlGift);	
					 ?>

					<?php require('table-gifts-show.php') ?><br>

					<?php 

						$error = false;
						
						$sqlForm = "SELECT id_form FROM actions WHERE id_action=$id";
						$formResult  = mysqli_query($conn, $sqlForm);
						$idForm  = mysqli_fetch_row($formResult);	
						//echo "ID akce je: ".$id."<br>";
						//echo "ID formuláře je: ".$idForm[0]."<br>";
						$sql  	 = "SELECT otazka_1, otazka_2, otazka_3, otazka_4, otazka_5, otazka_6, otazka_7, otazka_8, otazka_9, otazka_10, otazka_11, otazka_12, otazka_13, otazka_14, otazka_15
									FROM actions WHERE  id_action = $id";

									//INNER JOIN actions
									//ON actions.id_action=$id";


						$data 	= mysqli_query($conn, $sql);	
						$i 		= 0;		

					 ?>
					<?php require('action-show-questions.php') ?><br>

					<?php 

						$sqlImg  	= "SELECT obr1, obr2, obr3, obr4, obr5
									   FROM actions 
									   WHERE id_action = $id";
					   	$dataImg 	= mysqli_query($conn, $sqlImg);
					   	$rowImg		= mysqli_fetch_row($dataImg);
					   	if (!empty($rowImg[0])) {
						   	//$dataImg 	= mysqli_query($conn, $sqlImg);	
							//$rowImg		= mysqli_fetch_row($dataImg);
							//echo "$id<br>$rowImg[0]<br>$rowImg[1]<br>$rowImg[2]<br>";
							$name1 = explode("/", $rowImg[0]);
							$name2 = explode("/", $rowImg[1]);
							$name3 = explode("/", $rowImg[2]);
							$name4 = explode("/", $rowImg[3]);
							$name5 = explode("/", $rowImg[4]);
							if ($rowImg[0]=="Array" || empty($rowImg[0])) {
								$rowImg[0] = "images/none.png";
								$name1[5] = "Nenahraná";
							}
							if ($rowImg[1]=="Array" || empty($rowImg[1])) {
								$rowImg[1] = "images/none.png";
								$name2[5] = "Nenahraná";
							}
							if ($rowImg[2]=="Array" || empty($rowImg[2])) {
								$rowImg[2] = "images/none.png";
								$name3[5] = "Nenahraná";
							}
							if ($rowImg[3]=="Array" || empty($rowImg[3])) {
								$rowImg[3] = "images/none.png";
								$name4[5] = "Nenahraná";
							}
							if ($rowImg[4]=="Array" || empty($rowImg[4])) {
								$rowImg[4] = "images/none.png";
								$name5[5] = "Nenahraná";
							}
							//echo "$rowImg[0]<br>$rowImg[1]<br>$rowImg[2]<br>$rowImg[3]<br>$rowImg[4]<br>";
						 ?>
							<a href="<?php echo "$rowImg[0]"; ?>" data-lightbox="akce-<?php echo "$id"; ?>" data-title="<?php echo "$name1[5]"; ?>"><img src="<?php echo "$rowImg[0]"; ?>" width="20%" alt="Náhled" title="Klikni pro zvětšení"></a>
							<a href="<?php echo "$rowImg[1]"; ?>" data-lightbox="akce-<?php echo "$id"; ?>" data-title="<?php echo "$name2[5]"; ?>"><img src="<?php echo "$rowImg[1]"; ?>" width="20%" alt="Náhled" title="Klikni pro zvětšení"></a>
							<a href="<?php echo "$rowImg[2]"; ?>" data-lightbox="akce-<?php echo "$id"; ?>" data-title="<?php echo "$name3[5]"; ?>"><img src="<?php echo "$rowImg[2]"; ?>" width="20%" alt="Náhled" title="Klikni pro zvětšení"></a>
							<a href="<?php echo "$rowImg[3]"; ?>" data-lightbox="akce-<?php echo "$id"; ?>" data-title="<?php echo "$name4[5]"; ?>"><img src="<?php echo "$rowImg[3]"; ?>" width="19%" alt="Náhled" title="Klikni pro zvětšení"></a>
							<a href="<?php echo "$rowImg[4]"; ?>" data-lightbox="akce-<?php echo "$id"; ?>" data-title="<?php echo "$name5[5]"; ?>"><img src="<?php echo "$rowImg[4]"; ?>" width="19%" alt="Náhled" title="Klikni pro zvětšení"></a>

					<?php 
					   }
				    ?>
						
					<?php dbClose($conn);  ?>

				</section>
			</main>
		</div>	
		<script src="js/lightbox.js"></script>
		<?php require("block-footer.php") ?>
	</div>
</body>
</html>