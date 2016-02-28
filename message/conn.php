<?php 
include "config.php";
header('content-type:text/html;charset=utf-8');
$conn = new mysqli($db_ip,$username,$password,$new_database);
if(mysqli_connect_errno()){
	die('Unable to connect!'.mysqli_connect_errno());
}else{
	$conn->set_charset('UTF8');
}

?>
