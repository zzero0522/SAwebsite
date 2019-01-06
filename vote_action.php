<?php 
session_start(); 
include "mysqli_connect.inc.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id = $_POST['fucku'];
if($id != null)
{
		$sql = "update proposal set count = count+1 where id = '$id'";
		if(mysqli_query($db,$sql))
		{
			echo '連署成功，系統將自動跳轉回前頁!';
			header('Refresh:1.5;url=vote.php');
			exit;
			
		}
		else
		{
			echo '連署失敗1!';
		}				
        
}
/*else
{
        echo '您無權限觀看此頁面!';
}*/
?>