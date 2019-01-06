<?php 
session_start(); 
include "mysqli_connect.inc.php";
?>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
	<input type = "button" value = "新增提案" onclick = "location.href='templated_new.php'"/>
</head>
<body>
<div class="container">
	<!--好像不是必要-->
      <h1>現有提案</h1>
			<?php
				$query = "SELECT * FROM proposal ORDER BY 'id'";
				$i = 0;
				if($stmt = $db->query($query))
				{
					echo "<table border='1'>";
					while($result=mysqli_fetch_object($stmt))
					{
						$arr[$i]=$result->id;
						echo "<section><tr><td colspan ='3'>".$arr[$i]."</td><td>".$result->topic."</td><td>目前連署人數".$result->count."</td></section>";//醜爆no程式碼
						echo "<td colspan ='3'><a href='ntousa_vote.php?topic_ID=".$arr[$i]."' class='btn btn-default'>詳情</a></td></tr>";
						$i++;
					}
					echo "</table>";
				}
			?>	
</div>
</body>

</html>