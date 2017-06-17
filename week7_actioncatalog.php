<?php

session_start();

if(isset($_POST["Item"])){
	$_SESSION["quantity"] = $_POST["quantity"];
	$id=$_POST["Item"];
	$_SESSION["ID"]=$id;
    $a = implode($id);
    //echo $a;
    
    if ($a == "S001") {
        $_SESSION["Name"] = "10吋變形平板";
        $_SESSION["Price"] = 12000;
    } else if ($a == "S001") {
        $_SESSION["Name"] = "15.6吋筆記型電腦";
        $_SESSION["Price"] = 27000;
    } else {
        $_SESSION["Name"] = "iphone 手機";
        $_SESSION["Price"] = "21000";
    }
	// switch (strtoupper($id)) {
	// 	case 'S001':
	// 		$_SESSION["Name"]="10吋變形平板";
	// 		$_SESSION["Price"]=12000;
	// 		break;
	// 	case 'S002':
	// 		$_SESSION["Name"]="15.6吋筆記型電腦";
	// 		$_SESSION["Price"]=27000;
	// 		break;
	// 	case 'S003':
	// 		$_SESSION["Name"]="iphone 手機";
	// 		$_SESSION["Price"]=21000;
	// 		break;
	// }
    $_SESSION["ID"]=$a;
	header("Location:week7_savecart.php");
} else {
    echo "請選購商品";
}
?>