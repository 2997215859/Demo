<?php 
header('content-type:text/html;charset=utf-8');
session_start();
session_destroy();
echo "<script>
	alert('退出登录');
	location.href = 'list1.php';
</script>";
?>