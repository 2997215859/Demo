<?php 
include 'conn.php';
if(isset($_POST['bt_loginadmin']) && $_POST['bt_loginadmin']){
	$admin = $_POST['tx_admin'];
	$pwd = $_POST['tx_pwd'];
	$sql = "select count(*) from t_admin where admin = '$admin' and pwd = '$pwd'";
	$res = $conn->query($sql);
	$row = $res->fetch_assoc();
	session_start();
	$_SESSION['admin'] = $row['count(*)'];
	if($_SESSION['admin'] == 1){
		echo "<script>
		alert('成功登陆');
		location.href='list1.php';
		</script>";
	}else{
		echo "ERROR";
		echo "<script>
		alert('输入用户名或者密码错误');
		location.href='login.php';
		</script>";
	}
	//print_r($rows);
	//$mysql_admin = $rows['admin'];

}
 ?>