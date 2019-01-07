<?php 
session_start(); 
include "mysqli_connect.inc.php";
$username = @$_SESSION['username'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id = $_POST['id'];
if($username == null)
{
	echo '<h1>請先登入喔，系統將自動跳轉登入頁!</h1>';
	header('Refresh:1.5;url=login.php');
	exit;
}
else if($id != null)
{
	$sql = "select * from proposal_$id where id = '$username'";
	$stmt = $db->query($sql);
	$result = mysqli_fetch_object($stmt);
	if($result != null)
	{
		echo '<h1>你已參與過此項提案連署囉，系統將自動跳轉回前頁!</h1>';
		header('Refresh:2.5;url=ntousa_vote.php?topic_ID='.$id.'');
		exit;
	}
	else
	{
		$sql2 = "insert into proposal_$id (id) values ('$username')";
		$sql3 = "update proposal set count = count+1 where id = '$id'";
		if(mysqli_query($db,$sql2) && mysqli_query($db,$sql3))
		{
			echo '<h1>連署成功，系統將自動跳轉回前頁!</h1>';
			header('Refresh:1.5;url=ntousa_vote.php?topic_ID='.$id.'');
			exit;	
		}
		else
		{
			echo '<h1>連署失敗1!</h1>';
			header('Refresh:1.5;url=vote.php');
		}	
	}  
}
/*else
{
        echo '您無權限觀看此頁面!';
}*/
?>