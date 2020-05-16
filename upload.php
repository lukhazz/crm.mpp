<?php

	/******************************************************************************* 
	 								NAHRÁNÍ OBRÁZKŮ 
	 *******************************************************************************/
	if ( !empty($_POST['fileToUpload'] ) ) {
		//$target_dir = "images/profile/";
		$target_dir = "C:/wamp64/tmp/";

		//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$target_file = "C:/wamp64/tmp/bageta.jpg";
		$valuePhoto = $_POST['fileToUpload'];
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $error_photo = "Soubor není obrázek";
		        $valuePhoto  = "";
		        $uploadOk = 0;
		        $error = true;	
		    }
		}			
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
	        $error_photo = "Soubor již existuje";
	        $valuePhoto  = "";
		    $uploadOk = 0;
		    $error = true;
		}
		// Check file size
		/*if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
	        $error_photo = "Omlouváme se, obrázek je příliš veliký. Pokud nevíte, jak ho zmenšit, klikněte na návod <a href=\"files/navod-foto\" target=\"_blank\">zde</a>";
	        $valuePhoto  = "";
		    $uploadOk = 0;
		    $error = true;
		}*/
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo $imageFileType;
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$error_photo = "Omlouváme se, ale povolené formáty fotografie jsou pouze: JPG, JPEG, PNG a GIF.";
	        $valuePhoto  = "";
		    $uploadOk = 0;
		    $error = true;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
			$error_photo_overall = "Vaše fotografie nebyla nahraná.";
	        $valuePhoto  = "";
		    $error = true;
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "Obrázek ". basename( $_FILES["fileToUpload"]["name"]). " byl úspěšně nahrán na server.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
				$error_photo_overall = "2) Vaše fotografie nebyla nahraná.";
		        $valuePhoto  = "";
		        $error = true;
		    }
		}
	}

	/******************************************************************************* 
	 							KONEC NAHRÁNÍ OBRÁZKŮ 
	 *******************************************************************************/


?>