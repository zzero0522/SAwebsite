<?php 
session_start(); 
include "mysqli_connect.inc.php";
?>
<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<form action='new_vote_action.php' method ='post'>
	<label>提案標題</label><input type = "text" name = "topic"/><br>
	<label>提案主文</label><input type = "text" name = "content"/><br>
	<button type = 'submit' >新增提案</button></form>
	<input type = "button" value = "放棄提案" onclick = "location.href='vote.php'"/>

</head>
<body>
</body>
</html>