<?php 
session_start(); 
include "mysqli_connect.inc.php";
$username = @$_SESSION['username'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id = @$_POST['president_vote'];//避免沒選擇候選人出現錯誤訊息
if($username == null)
{
	echo '<h1>請先登入喔，系統將自動跳轉登入頁!</h1>';
	header('Refresh:1.5;url=login.php');
	exit;
}
else if($id != null)
{
	$sql = "select * from president_voted where id = '$username'";
	$stmt = $db->query($sql);
	$result = mysqli_fetch_object($stmt);
	if($result != null)
	{
		echo '<h1>你已參與過此次投票囉，系統將自動跳轉回前頁!</h1>';
		header('Refresh:2.5;url=president.php');
		exit;
	}
	$sql2 = "insert into president_voted (id) values ('$username')";
	$sql3 = "update president set count = count+1 where id = '$id'";
	if(mysqli_query($db,$sql2) && mysqli_query($db,$sql3))
	{
		echo '<h1>投票成功，系統將自動跳轉回前頁!</h1>';
		header('Refresh:1.5;url=president.php');
		exit;	
	}
	else
	{
		echo '<h1>投票失敗1!</h1>';
	}				  
}
else
{
	echo '<h1>投票失敗，請選擇候選人!</h1>';
	header('Refresh:1.5;url=president.php');
}
/*else
{
        echo '您無權限觀看此頁面!';
}*/
?>