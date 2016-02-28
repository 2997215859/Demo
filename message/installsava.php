<?php 
	header('content-type:text/html;charset=utf-8');
	if(isset($_POST['bt_ndb']) && $_POST['bt_ndb']){
		$word = "<?php \n".
		'$db_ip='."'$_POST[db_ip]';\n".
		'$username='."'$_POST[username]';\n".
		'$password='."'$_POST[pwd]';\n".
		'$new_database='."'$_POST[ndb_name]';".
		"\n?>";
		$file = fopen('config.php','w');
		fwrite($file,$word);
		//创建链接
		$conn = new mysqli("$_POST[db_ip]","$_POST[username]","$_POST[pwd]");
		//检测链接
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		//创建数据库database
		$sql = "CREATE DATABASE "."$_POST[ndb_name]";
		if($conn->query($sql) === TRUE){
			echo '操作成功';
		}else{
			echo 'ERROR'.$conn->errno.':'.$conn->error;
		}
		include "conn.php";
		//建立表t_message
		$sql = "CREATE TABLE IF NOT EXISTS `t_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `sex` enum('男','女') NOT NULL,
  `edu` enum('小学','初中','高中','大学') NOT NULL,
  `love` set('上网','睡觉','游戏','旅游') NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70";
		if($conn->query($sql) === TRUE){
			echo '操作成功';
		}else{
			echo 'ERROR'.$conn->errno.':'.$conn->error;
			echo "操作失败";
		}
		//建立表t_comment
		$sql = "CREATE TABLE IF NOT EXISTS `t_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comm_username` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16";
		if($conn->query($sql) === TRUE){
			echo '表格创建成功';
		}else{
			echo 'ERROR'.$conn->errno.':'.$conn->error;
		}
		//建立表t_admin
		$sql = "CREATE TABLE IF NOT EXISTS `t_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2";
		if($conn->query($sql) === TRUE){
			echo '表格创建成功';
			echo "<script>
				alert('表格创建成功');
				location.href = 'add.php';
			</script>";
		}else{
			echo 'ERROR'.$conn->errno.':'.$conn->error;
		}
		/*$sql = "";
		$conn->query($sql);
		$sql = "";
		$conn->query($sql);*/
	}
?>