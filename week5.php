<?php
$month=$_POST["month"];

if($month=="Jauary"){
	echo "Jauary";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/1_1.jpg>";
}
if($month=="February"){
	echo "February";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/2_1.jpg>";
}
if($month=="March"){
	echo "March";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/3_1.jpg>";
}
if($month=="April"){
	echo "April";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/4_1.jpg>";
}
if($month=="May"){
	echo "May";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/5_1.jpg>";
}
if($month=="June"){
	echo "June";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/6_1.jpg>";
}
if($month=="July"){
	echo "July";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/7_1.jpg>";
}
if($month=="August"){
	echo "August";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/8_1.jpg>";
}
if($month=="September"){
	echo "September";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/9_1.jpg>";
}
if($month=="October"){
	echo "October";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/10_1.jpg>";
}
if($month=="November"){
	echo "November";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/11_1.jpg>";
}
if($month=="December"){
	echo "December";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/12_1.jpg>";
}
echo "<br/>";
echo "<br/>";
$changed=strtotime("+8 hours");
echo date("It is Y year F d l G:i:s",$changed);
echo "<br/>";
$now=$changed;
$end=mktime(0,0,0,12,31,2017);
$time=$end-$now;
$show1=intval($time%60);
$show2=intval(($time/60)%60);
$show3=intval(($time/60/60)%24);
$show4=intval($time/60/60/24);

echo "to the end 2017/12/31 24:00 else".$show4."day".$show3.":".$show2.":".$show1;

?>