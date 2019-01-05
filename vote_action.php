<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysqli_connect.inc.php");

$id = $_POST['id'];
//$datetime = $_POST['startdays'];
//$user_ID = $_SESSION['user_ID'];

if(/*$user_ID != null && */$id != null)
{
        //新增資料進資料庫語法
        //$sql = "insert into lend_room (user_ID,room_ID,lend_date) values ('$user_ID','$room_ID','$datetime')";
        //if(mysqli_query($db,$sql))
        //{
			$sql2 = "update proposal set count += 1 where id = '$id'";
			if(mysqli_query($db,$sql2))
			{
				echo '連署成功!';
			}
			else
			{
				echo '連署失敗1!';
			}				
        //}
        //else
        //{
        //        echo '連署失敗2!';
        //}
}
/*else
{
        echo '您無權限觀看此頁面!';
}*/
?>