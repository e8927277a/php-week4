<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
	<form action = "week7_actioncatalog.php" method = "POST">
		
	選擇商品:<select name = "Item[]" size = "1" mutiple = "True">
		<option value="S001">10吋變形平板</option>
		<option value="S002">15.6吋筆記型電腦</option>
		<option value="S003">iphone 手機</option>
	</select>
	<input type="text" name="quantity" value="1">
	<input type="submit" name="submit" value="submit"><br/>

	</form>

	<table>
		<tr><td><a href = "week7_shopping.php">檢視購物車</a></td></tr>
	</table>
	
	</body>
</html>



<?php

// session_start();

// if(isset($_POST["Item"])){
// 	$_SESSION["Quantity"]=$_POST["Quantity"];
// 	$id=$_POST["Item"];
// 	$_SESSION["ID"]=$id;
// 	switch (strtoupper($id)) {
// 		case 'S001':
// 			$_SESSION["Name"]="10吋變形平板";
// 			$_SESSION["Price"]=12000;
// 			break;
// 		case 'S002':
// 			$_SESSION["Name"]="15.6吋筆記型電腦";
// 			$_SESSION["Price"]=27000;
// 			break;
// 		case 'S003':
// 			$_SESSION["Name"]="iphone 手機";
// 			$_SESSION["Price"]=21000;
// 			break;
// 	}
// 	header("Location:savecart.php");
// }
?>