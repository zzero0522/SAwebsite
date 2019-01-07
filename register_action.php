<?php session_start(); 
include "mysqli_connect.inc.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into member (id, pw) values ('$id', '$pw')";
        if(mysqli_query($db,$sql))
        {
                echo '<h1>註冊成功!</h1>';
                echo '<meta http-equiv=REFRESH CONTENT=1.5;url=login.php>';
        }
        else
        {
                echo '<h1>新增失敗!</h1>';
                echo '<meta http-equiv=REFRESH CONTENT=1.5;url=.php>';
        }
}
else if($pw != $pw2)
{
	echo "<h1>請確認密碼輸入相同!</h1>";
	echo '<meta http-equiv=REFRESH CONTENT=1.5;url=register.php>';
}
else
{
        echo '<h1>請確認填寫所有表格!</h1>';
        echo '<meta http-equiv=REFRESH CONTENT=1.5;url=register.php>';
}
?>