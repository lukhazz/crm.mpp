<?php 
function checkPerm( $perm ) {
	//echo "$perm";
	$permision = false;
	for ($i=0; $i < count($_SESSION['role']); $i++) { 
		for ($j=0; $j < count($perm); $j++) { 
			if ($perm[$j]==$_SESSION['role'][$i] && $_SESSION['aktivni']=='ano') {
				$permision = true;
				break;
			}
		}	
	} 
	return $permision;
	if ($permision==false) {
		//header('location: perm.php'); 
		print '<script type="text/javascript">window.location.replace("perm.php");</script>';	
	}

}

function checkPermRedirect( $perm ) {
	//echo "$perm";
	$permision = false;
	for ($i=0; $i < count($_SESSION['role']); $i++) { 
		for ($j=0; $j < count($perm); $j++) { 
			if ($perm[$j]==$_SESSION['role'][$i] && $_SESSION['aktivni']=='ano') {
				$permision = true;
				break;
			}
		}	
	} 
	if ($permision==false) {
		//header('location: perm.php'); 	
		print '<script type="text/javascript">window.location.replace("perm.php");</script>';	
	}

}

function checkPermById( $permArrayTemp ) {
	$idUser = $_SESSION['id_user'];
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "0";
	}

	$sqlProtocol = "SELECT users.id_user
		FROM actions 

		INNER JOIN users
		ON actions.id_user=users.id_user

		WHERE actions.id_action=$id";

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$data 		= mysqli_query($conn, $sqlProtocol);
	$row 		= mysqli_fetch_row($data);
	$userIdCurrent = $row[0];

	dbClose($conn); // Odpojíme se z DB

	//echo "ID formu je: $id<br>"; 
	//echo "ID uživatele formu je: $userIdCurrent<br>"; 
	//echo "ID přihlášeného uživatele je: $idUser<br>";

	//$permArrayTemp = array("editace-akci");
	$permStatusTemp = checkPerm($permArrayTemp);
	//echo "Perm status: $permStatusTemp";

	if ( $userIdCurrent != $idUser && $permStatusTemp == false ) {
		//header('location: perm.php');
		print '<script type="text/javascript">window.location.replace("perm.php");</script>';	
	}
	else {
		return 1;
	}

}

function checkPermByIdTest( $permArrayTemp ) {
	$idUser = $_SESSION['id_user'];
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
	}
	else {
		$id = "0";
	}

	$sqlTest = "SELECT test.id_user
		FROM test 

		WHERE test.id_test=$id";

	$conn = dbConnect();
	mysqli_query($conn, "SET NAMES utf8");

	$data 		= mysqli_query($conn, $sqlTest);
	$row 		= mysqli_fetch_row($data);
	$userIdCurrent = $row[0];

	dbClose($conn); // Odpojíme se z DB

	//echo "ID formu je: $id<br>"; 
	//echo "ID uživatele formu je: $userIdCurrent<br>"; 
	//echo "ID přihlášeného uživatele je: $idUser<br>";

	//$permArrayTemp = array("editace-akci");
	$permStatusTemp = checkPerm($permArrayTemp);
	//echo "Perm status: $permStatusTemp";

	if ( $userIdCurrent != $idUser && $permStatusTemp == false ) {
		//header('location: perm.php');
		print '<script type="text/javascript">window.location.replace("perm.php");</script>';	
	}
	else {
		return 1;
	}

}


$permArrayMdgAccess = array("mdg-pristup");
$permArrayView = array("nahled-akci");
$permArrayView = array("nahled-akci");
$permArrayCurrent = array("nahled-akci");
$permArray = array("pridani-akci", "editace-akci","pridani-firem-formularu","editace-firem-formularu", "pridani-uzivatelu", "editace-uzivatelu");
$permArrayMdg = array("mdg-pridani-udalosti", "mdg-editace-udalosti","mdg-pridani-obchodu","mdg-editace-pridani-obchodu", "mdg-pridani-produktu", "mdg-editace-produktu"); 

//$permArrayViewOthers = array("pridani-akci", "editace-akci", "pridani-uzivatelu", "editace-uzivatelu");
checkPermRedirect($permArrayView);

 ?>