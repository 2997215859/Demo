<?php 
	//echo $_GET['cid'];
	include "conn.php";
	//从数据库中获取所查看用户的留言内容
	$sql = "select * from t_message where id = '$_GET[cid]'";
	$res = $conn->query($sql);
	$row = $res->fetch_assoc();
	//将评论的内容及发表评论的用户id插入到数据表t_comment中
	if(isset($_POST['comm_username']) && isset($_POST['comment'])){
		$sql = "insert t_comment(user_id,comm_username,comment) value('$_GET[cid]','$_POST[comm_username]','$_POST[comment]')";
		$res = $conn->query($sql);
		if($res){
			echo "评论成功";
		}else{
			echo "ERROR".$conn->errno.":".$conn->error;
		}
	}
	
	$conn->close();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>content</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<td colspan="2">
 				<a href="list1.php">留言列表</a>
 				<a href="add.php">添加留言</a>
 			</td>
 		</tr>
 		<tr>
 			<td>用户id</td>
 			<td><?php echo $row['id']?></td>
 		</tr>
 		<tr>
 			<td>用户</td>
 			<td><?php echo $row['user']?></td>
 		</tr>
 		<tr>
 			<td>性别</td>
 			<td><?php echo $row['sex']?></td>
 		</tr>
 		<tr>
 			<td>学历</td>
 			<td><?php echo $row['edu']?></td>
 		</tr>
 		<tr>
 			<td>爱好</td>
 			<td><?php echo $row['love']?></td>
 		</tr>
 		<tr>
 			<td>留言标题</td>
 			<td><?php echo $row['title']?></td>
 		</tr>
 		<tr>
 			<td>留言内容</td>
 			<td><?php echo $row['content']?></td>
 		</tr>
 	</table>
 	<hr/>
 	<form action="content.php?cid=<?php echo $row['id'] ?>" method="post">
 	<table border="1">
 		<tr>
 			<td>用户昵称</td>
 			<td><input type="text" name="comm_username"></td>
 		</tr>
 		<tr>
 			<td>评论</td>
 			<td><textarea name="comment" id="comment" cols="19" rows="10"></textarea></td>
 		</tr>
 		<tr>
 			<td colspan="2">
 				<input type="submit" name="bt_comm" value="提交">
 			</td>
 		</tr>
 	</table>
 	</form>
 	<hr/>
 	<?php 
 		include "conn.php";
 		//$comment ;
 		$sql = "select * from t_comment where user_id = '$_GET[cid]'";
 		$res = $conn->query($sql);
 		if(!$res){
 			echo "ERROR".$conn->errno.":".$conn->error;
 		}
 		$conn->close();
 	?>
 	
 	 		<?php
 	 	while($row = $res->fetch_assoc()){
 	 		?>
 	 		<table border="1">
 	 		<tr>
 	 			<td>用户昵称</td>
 	 			<td>
 	 				<?php echo $row['comm_username'] ?>
 	 			</td>
 	 		</tr>
 	 		<tr>
 	 			<td>评论</td>
 	 			<td>
 	 				<?php echo $row['comment'] ?>
 	 			</td>
 	 		</tr>
 	 		</table>
 	 		<hr/>
 	 	<?php  
 	 	}
 	 	?>
 	 	
 </body>
 </html>