<?php

session_start();

$id = $_SESSION["ID"];
$name=$_SESSION["Name"];
$price=$_SESSION["Price"];
$quantity=$_SESSION["quantity"];


echo "<table>";
echo "<tr><td>功能</td><td>編號</td><td>產品名稱</td><td>價格</td><td>數量</td></tr>";
echo "<tr><td><a href = 'delete.php?id = $id'>刪除</a></td><td>$id</td><td>$name</td><td>$price</td><td>$quantity</td></tr>";
echo "</table>";
// while (list($arr,$value)=each($_COOKIE)) {
// 	if(isset($_COOKIE[$arr])&&is_array($_COOKIE[$arr])){
// 		// if($flag){
// 		// 	$flag=false;
// 		// 	$color="#FF99CC";
// 		// }
// 		// else{
// 		// 	$flag=ture;
// 		// 	$color="#99FFC";
// 		// }
// 		//echo "<tr bgcolor='".$color."'><td>";
// 		// echo "<td><a herf='delete.php?Id=".$arr."'>";
// 		// echo "刪除</a></td>";
// 		$price=0;
// 		$quantity=0;
// 		echo "<table>";
// 		while (list($name,$value)=each($_COOKIE[$arr])) {
// 			echo "<td>".$value."</td>";
// 			if($name=="Price")
// 				$price=$value;
// 			if($name=="Quantity")
// 				$quantity=$value;
// 		}
 		$total = $price * $quantity;
 		echo "總金額:".$total;
		echo "<br>";
		echo "<a href = 'catalog.php'>回目錄</a>";
// 		$total += $price * $quantity;
// 		echo "</tr>";
// 		echo "</table>";
// 	}
// }
?>