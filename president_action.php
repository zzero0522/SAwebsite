<?php 
session_start(); 
include "mysqli_connect.inc.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id = $_POST['president_vote'];
if($id != null)
{
		$sql = "update president set count = count+1 where id = '$id'";
		if(mysqli_query($db,$sql))
		{
			echo '投票成功，系統將自動跳轉回前頁!';
			header('Refresh:1.5;url=president.php');
			exit;
			
		}
		else
		{
			echo '投票失敗1!';
		}				
        
}
/*else
{
        echo '您無權限觀看此頁面!';
}*/
?>