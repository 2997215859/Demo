<?php 
//print_r($_POST);
session_start();
include 'conn.php';
// if(isset($_POST['delete']) && $_POST['delete']){
// 	echo $_POST['sid'];
// 	$sql = "delete from t_message where id=$_POST[sid]";
// 	$conn->query($sql);
// }
if(isset($_GET['dmn']) && $_GET['dmn']){
	$sql = "delete from t_message where id=$_GET[dmn]";
	$conn->query($sql);
}
if(isset($_POST['bt_pdel']) && $_POST['bt_pdel']){
	// $sql = "delete from t_message where id=$_GET[dmn]";
	// $conn->query($sql);
	$qdel = $_POST['qdel'];
	$qdel = implode(',',$qdel);
	$sql = "delete from t_message where id in ($qdel)";
	if($res = $conn->query($sql)){
		echo "批量删除成功";
	}else{
		echo "ERROR".$conn->errno.":".$conn->error;
	}
}
$page = isset($_GET['page'])?$_GET['page']:1;
$pagesize = 10;
if($page<1){
	$page = 1;
}
$begin = ($page-1)*$pagesize;
$sql = "select * from t_message order by id desc limit $begin,$pagesize";
$res = $conn->query($sql);

$sql = "select * from t_message";
$res_sum = $conn->query($sql);
$message_num = $res_sum->num_rows;
$page_num = ceil($message_num/$pagesize);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<table border="1" cellspacing="0" align="center">
		<tr>
			<?php 
			if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
				echo "<td colspan='8'>欢迎管理员<a href='loginout.php'>退出登录</a></td>";
				
			}else{
				echo "<td colspan='8'>
				<a href='login.php'>管理员登录</a>
				<a href='add.php'>添加留言</a></td>";
			}
			?>
		</tr>
		<tr>
			<td>多选</td> 
			<td>用户id</td>
			<td>用户名</td>
			<td>性别</td>
			<td>学历</td>
			<td>爱好</td>
			<td>留言标题</td>
			<td>操作</td>
		</tr>
		<form action="list1.php" method="post">
		<?php 
		while($row = $res->fetch_assoc()) 
		{?>
			
			<tr>
				<td><input type="checkbox" name="qdel[]" value="<?php echo $row['id'] ?>"></td>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['user'] ?></td>
				<td><?php echo $row['sex'] ?></td>
				<td><?php echo $row['edu'] ?></td>
				<td><?php echo $row['love'] ?></td>
				<td><?php echo $row['title'] ?></td>
				<td>
				<a href="content.php?cid=<?php echo $row['id'] ?>">查看</a>
				<?php 
				if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
				?>
				<a href='list1.php?dmn=<?php echo $row['id'] ?>'>
				删除</a>
				<a href="edit.php?cid=<?php echo $row['id'] ?>">修改</a>
				<?php 
				} ?>
				
				</td>

			</tr>
		<?php 
		}
		$res->close(); 
		$conn->close();
		?>
		<?php if($page_num>1){?>

		<tr>
			<td colspan="2"><input type="submit" name="bt_pdel" value="批量删除"></td>
			<td colspan="5">
				<a href="list1.php">首页</a>
				
				<?php if($page>1) {?>
				<a href="list1.php?page=<?php 
				//$page=$page-1;
				echo $page-1;?>">上一页</a>
				<?php } ?>

				<?php if($page<$page_num){ ?>
				<a href="list1.php?page=<?php 
				//$page=$page+2;
				echo $page+1;?>">下一页</a>
				<?php } ?>
				<a href="list1.php?page=<?php 
				 echo $page_num?>">末页</a>
				<?php echo "第".$page."页"." "."共".$page_num."页"?>
				<?php echo "共".$message_num."条消息" ?>
			</td>
		</tr>
		</form>
		<?php } ?>
	</table>
	
</body>
</html>