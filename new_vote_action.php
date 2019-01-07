<?php 
session_start(); 
include "mysqli_connect.inc.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$topic = $_POST['topic'];
$content = $_POST['content'];
if($topic != null && $content != null)
{
		$sql = "insert into proposal(topic,content) values('$topic','$content')";
		if(mysqli_query($db,$sql))
		{
			echo '新增成功，系統將自動跳轉回前頁!';
			header('Refresh:1.5;url=vote.php');
			exit;
		}
		else
		{
			echo '新增失敗1!';
		}				
        
}
else
{
        echo '請完成內容填寫，系統將自動跳轉回前頁!';
		header('Refresh:1.5;url=new.php');
		exit;
}
?>