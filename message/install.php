<?php 
	header('content-type:text/html;charset=utf-8');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>install</title>
 </head>
 <body>
 	<form action="installsava.php" method="post">
 	<table border="1">
 		<tr>
 			<td>数据库ip</td>
 			<td><input type="text" name="db_ip"></td>
 		</tr>
 		<tr>
 			<td>用户</td>
 			<td><input type="text" name="username"></td>
 		</tr>
 		<tr>
 			<td>密码</td>
 			<td><input type="text" name="pwd"></td>
 		</tr>
 		<tr>
 			<td>新建数据库名</td>
 			<td><input type="text" name="ndb_name"></td>
 		</tr>
 		<tr>
 			<td colspan='2'>
 			<input type="submit" name="bt_ndb" value="提交">
 			</td>
 		</tr>
 	</table>
 	</form>
 </body>
 </html>