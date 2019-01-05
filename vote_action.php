<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysqli_connect.inc.php");

$id = $_POST['id'];


if($id != null)
{
		$sql = "update proposal set count = count+1 where id = '$id'";
		if(mysqli_query($db,$sql))
		{
			echo '連署成功!';
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