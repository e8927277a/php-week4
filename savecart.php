<?php

session_start();

if(isset($_SESSION["ID"])){
	$id=$_SESSION["ID"];
	$name=$_SESSION["Name"];
	$price=$_SESSION["Price"];
	$quantity=$_SESSION["quantity"];

	
	// echo $id;
	// echo $name;
	// echo $price;
	// echo $quantity;


	setcookie($id."[ID]",$id,time()+3600);
	setcookie($id."[Name]",$name,time()+3600);
	setcookie($id."[Price]",$price,time()+3600);
	setcookie($id."[quantity]",$quantity,time()+3600);
}
header("Location:shoppingcart.php");
?>