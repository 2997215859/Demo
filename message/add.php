<?php 
if (isset($_POST['submit']) && $_POST['submit']){
	$love = $_POST['love'];
	$love = implode(',', $love);
	$conn = new mysqli('127.0.0.1','root','bngd1223','db_message');
	if(mysqli_connect_errno()){
		die('Unable to connect!'.mysqli_connect_errno());
	}
	$conn->set_charset('utf8');
	$sql = "INSERT t_message(user,sex,edu,love,title,content) value('$_POST[user]','$_POST[sex]','$_POST[edu]','$love','$_POST[title]','$_POST[content]')";
	$res = $conn->query($sql);
	if($res){
		echo '发送成功';
	}else{
		echo 'ERROR'.$conn->errno.':'.$conn->error;
	}
	$conn->close();
}

/*
*	添加数据
 */
/*$sql = "INSERT t_message(user,sex,edu,love,title,content) value('$_POST[user]','$_POST[sex]','$_POST[edu]','$love','$_POST[title]','$_POST[content]')";
	$res = $conn->query($sql);
	if($res){
		echo '发送成功';
	}else{
		echo 'ERROR'.$conn->errno.':'.$conn->error;
	}
	$conn->close();*/
/*
*	查询数据
 */
/*$sql = "select * from table";
	$res = $conn->query($sql);
	print_r($res);
	if($res && $res->num_rows>0){
		//echo $res->num_rows;
		
	}else{
		echo '查询错误或者结果集中没有记录';
	}
	$conn->close();*/
#$sql = "set names 'gbk'";

//$sql = "INSERT t_message(user,sex,edu,love,title,content) VALUE('wuwei','男','大学','上网','第一条消息','打算发阿斯蒂芬')";

//$sql = "INSERT t_message(user,sex,edu,love,title,content) value('$_POST[user]','男','大学','上网','第一条消息','打算发阿斯蒂芬')";



//print_r($_POST['user']);


/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
//$conn = mysqli_connect('127.0.0.1','root','bngd1223','db_message') or die("connect failed");
//$sql = "insert into t_message(user) value('wuwei')";
//$result = mysqli_query($conn,$sql);
//mysql_select_db("db_message",$conn) or die("no this datebase");
//mysql_query("set names 'gbk'");
//$sql = "insert into t_message(user) value('wuwei')";
//$res = mysql_query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>message_add</title>
</head>
<body>
	<form action='add.php' method='post'>
	<table border="1">
	<tr>
		<td colspan='2'>
			<a href="list1.php">留言列表</a>
		</td>
	</tr>
	<tr>
		<td>用户名</td>
		<td><input type="text" name="user"></input></td>
	</tr>
	<tr>
		<td>性别</td>
		<td>
			<input type="radio" name="sex" value="男" checked="checked">男
 			<input type="radio" name="sex" value="女">女
		</td>
	</tr>
 	<tr>
 		<td>学历</td>
 		<td>
 			<select name="edu" id="edu">
 				<option value="小学">小学</option>
 				<option value="初中">初中</option>
 				<option value="高中">高中</option>
 				<option value="大学">大学</option>
 			</select><br />
 		</td>
 	</tr>
 	<tr>
 		<td>
 			兴趣爱好
 		</td>
 		<td>
 			<input name="love[]" type="checkbox" value="上网">上网
 			<input name="love[]" type="checkbox" value="睡觉">睡觉
 			<input name="love[]" type="checkbox" value="游戏">游戏
 			<input name="love[]" type="checkbox" value="旅游">旅游
 		</td>
 	</tr>
 	<tr>
 		<td>留言标题</td>
 		<td><input type="text" name="title"><br /></td>
 	</tr>
	<tr>
		<td>留言内容</td>
		<td>
			<textarea name="content" id="content" cols="30" rows="10"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="reset" value="reset">
		</td>
	</tr>
	</table>
	</form>
</body>
</html>