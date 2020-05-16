<?php
   if(isset($_FILES['image'])){
      echo "je tam IMG!<br>";
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_name = strtolower(removeCzechChars($file_name));
      $file_name = str_replace(" ","_",$file_name);
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $file_ext = explode(".", $_FILES['image']['name']);
      $file_ext = strtolower(array_pop($file_ext));  //
      //$fileName = array_shift($value);  //Line 34
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="tato přípona souboru není podporovaná, použijte prosím JPEG nebo PNG obrázek.";
      }
      
      if($file_size > 4194304){
         $errors[]='Obrázek nesmí být větší než 4 MB, zmenšete ho před nahráním prosím.';
      }
      if(empty($errors)){

         $target_file = "files/images/".$file_path_original."/".$file_prename."_".$file_name;
         $resized_file = "files/images/".$file_path_resized."/".$file_prename."_".$file_name;

         move_uploaded_file($file_tmp,$target_file);

         // ---------- Include Universal Image Resizing Function --------      
         $wmax = 1080;
         $hmax = 1080;
         ak_img_resize($target_file, $resized_file, $wmax, $hmax, $file_ext);
         // ----------- End Universal Image Resizing Function -----------
         
         echo "Soubor se jménem <strong>$file_name</strong> byl úspěšně nahrán na server.<br><br>";
         echo "Soubor má velikost <strong>$file_size</strong> bytů.<br><br>";
         echo "Soubor má typ <strong>$file_type</strong>.<br><br>";
         echo "Soubor má koncovku <strong>$file_ext</strong>.<br><br>";
         echo "Cesta k souboru je :$resized_file<br><br>";
         //echo "The Error Message output for this upload is: $errors";

      }else{
         print_r($errors);
      }
   }
?>