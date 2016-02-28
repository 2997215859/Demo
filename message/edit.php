<?php 
include "conn.php";
//提交之后修改数据库中的内容
if(isset($_POST['bt_edit']) && $_POST['bt_edit']){
	$love = implode(',', $_POST['love']);
	$sql = "update t_message set user='$_POST[user]',sex='$_POST[sex]',edu='$_POST[edu]',love='$love',title='$_POST[title]',content='$_POST[content]' where id = '$_GET[cid]'";
	$res1 = $conn->query($sql);
	if($res1){
		echo "修改成功";
	}else{
		echo "ERROR".$conn->errno.":".$conn->error;
	}
}	
//得到数据库中的数据并显示
$sql = "select * from t_message where id = $_GET[cid]";
$res = $conn->query($sql);
if($res){
	echo "成功获取数据";
}else{
	echo "ERROR".$conn->errno.":".$conn->error;
}
$row = $res->fetch_assoc();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
</head>
<body>
<form action="edit.php?cid=<?php echo $row['id'] ?>" method="post">
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
 		<td><input type="text" name="user" value="<?php echo $row['user']?>"></td>
 	</tr>
 	<tr>
 		<td>性别</td>
 		<td>
 			<input type="radio" name="sex" value="男"
 			<?php if($row['sex'] == '男'){echo "checked='checked'";}?>>男;
 			<input type="radio" name="sex" value="女"
 			<?php if($row['sex'] == '女'){echo "checked='checked'";}?>>女;
 		</td>
 	</tr>
 	<tr>
 		<td>学历</td>
 		<td>
 			<select name="edu" id="edu">
 				<option value="小学" <?php if($row['edu']=='小学'){
 					echo "selected = 'selected'";
 					} ?>>小学</option>
 				<option value="初中" <?php if($row['edu']=='初中'){
 					echo "selected = 'selected'";
 					} ?>>初中</option>
 				<option value="高中" <?php if($row['edu']=='高中'){
 					echo "selected = 'selected'";
 					} ?>>高中</option>
 				<option value="大学" <?php if($row['edu']=='大学'){
 					echo "selected = 'selected'";
 					} ?>>大学</option>
 			</select>
 		</td>
 	</tr>
 	<tr>
 		<td>爱好</td>
 		<td>
 			<?php 
 			$love = explode(',',$row['love']);
 			?>
 			<input name="love[]" type="checkbox" value="上网" 
 			<?php 
 			if(in_array('上网', $love)){
 				echo "checked = 'checked'";
 				} ?>>上网
 			<input name="love[]" type="checkbox" value="睡觉"
 			<?php 
 			if(in_array('睡觉', $love)){
 				echo "checked = 'checked'";
 				} ?>>睡觉
 			<input name="love[]" type="checkbox" value="游戏"
 			<?php 
 			if(in_array('游戏', $love)){
 				echo "checked = 'checked'";
 				} ?>>游戏
 			<input name="love[]" type="checkbox" value="旅游"
 			<?php 
 			if(in_array('旅游', $love)){
 				echo "checked = 'checked'";
 				} ?>>旅游
 		</td>
 	</tr>
 	<tr>
 		<td>留言标题</td>
 		<td>
 			<input type="text" name="title" value=<?php echo "$row[title]" ?>>
 		</td>
 	</tr>
 	<tr>
 		<td>留言内容</td>
 		<td>
 			<textarea name="content" id="content" cols="30" rows="10"><?php echo "$row[content]" ?></textarea>
 		</td>
 	</tr>
 	<tr >
 	<td colspan="2"><input type="submit" name="bt_edit" value="提交"></td>
 	</tr>
 </table>
</form>
</body>
</html>