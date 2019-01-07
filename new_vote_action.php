<?php 
session_start(); 
include "mysqli_connect.inc.php";
$username = $_SESSION['username'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$topic = $_POST['topic'];
$content = $_POST['content'];
if($username == null)
{
	echo '<h1>請先登入喔，系統將自動跳轉登入頁!</h1>';
	header('Refresh:1.5;url=login.php');
	exit;
}
else if($topic != null && $content != null)
{	
		$sql = "insert into proposal(topic,content) values('$topic','$content')";//新增提案
		$sql2 = "select max(id) from proposal";//取得提案編號
		$stmt = $db->query($sql2);
		$result = mysqli_fetch_array($stmt);
		$new_id = $result[0]+1;
		$sql3 = "create table proposal_$new_id (id varchar(8) unique)";//新增資料表
		$sql4 = "insert into proposal_$new_id (id) values ('$username')";
		$sql5 = "update proposal set count = count+1 where id = '$new_id'";
		if(mysqli_query($db,$sql) && mysqli_query($db,$sql3) && mysqli_query($db,$sql4) && mysqli_query($db,$sql5))
		{
			echo '<h1>新增成功，系統將自動跳轉回前頁!</h1>';
			header('Refresh:1.5;url=vote.php');
			exit;
		}
		else
		{
			echo '<h1>新增失敗1!</h1>';
		}				
        
}
else
{
        echo '<h1>請完成內容填寫，系統將自動跳轉回前頁!</h1>';
		header('Refresh:1.5;url=new.php');
		exit;
}
?>