<?php 
	include 'conn.php';
	//这条语句使得php中的汉字不乱码
	header('content-type:text/html;charset=utf-8');
	$sql = "select * from t_message";
	if($res = $conn->query($sql)){
		echo '操作成功';
	}else{
		echo 'ERROR'.$conn->errno.':'.$conn->error;
	}
	//print_r($res);
	if($res && $res->num_rows>0){
		while($row = $res->fetch_assoc()){
			//print_r($row);
			//echo $row['title'];
			//echo "<hr/>";
			$rows[] = $row;
		}
		print_r($rows);
		//关闭结果集
		$res->close();
	}else{
		echo "查询错误或者结果集中没有记录";
	}
	//关闭连接
	$conn->close();
?>

