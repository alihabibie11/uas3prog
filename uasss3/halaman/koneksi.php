<?php
$server="localhost";
$user="root";
$password="";
$database="dbz3";

$home=mysqli_connect($server,$user,$password);

if($home){
	echo "Connected!";
}else{
	echo "Cek Lagi mase!!";
}
$db=mysqli_select_db($home,$database);
if($db){
	echo " ted! ";
}else{
	echo 'Cek Lagi mase!!';
}
?>