<?php session_start(); ?>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>

<?php
include "mysqli_connect.inc.php";
$id = $_GET['topic_ID'];
$query = "SELECT * FROM proposal WHERE id ='$id'";
if($stmt = $db->query($query))
{
	while($result=mysqli_fetch_object($stmt))
	{
		echo "<h1>這是投票系統第 $id 號提案</h1>";
		echo "<h2>提案主題：".$result->topic."</h2>";
		echo "<h3>提案主文：".$result->content."</h3>";
		echo "<label>現有連署人數：".$result->count."</label>";
		echo "<br>";
		echo "<form action='vote_action.php' method ='post'>";
		echo "<input type = 'hidden' name='fucku' value = '$id'>";
		echo "<button type = 'submit' id='vote_btn'>連署</button></form>";
	}	
}

?>

</head>
<body>
</body>
</html>