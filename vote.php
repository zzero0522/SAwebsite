<?php session_start(); ?>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
</head>
<body>
<div class="container">
	<form action='ntousa_vote.php' method ='get'>
      <label for="votebase"><h1>現有提案</h1></label>	
			<?php
				include "mysqli_connect.inc.php";
				$query = "SELECT * FROM proposal ORDER BY 'id'";
				//$result = mysql_query($query,$db);//$db is in m_c.inc.php
				
				//$data_nums = mysql_num_rows($result);//總數
				//$per = 5;//每頁數目
				$i = 0;
				if($stmt = $db->query($query))
				{
					echo "<table border='1'>";
					while($result=mysqli_fetch_object($stmt))
					{
						$arr[$i]=$result->id;
						echo "<tr><td colspan ='3'><input type='hidden' name='id_".$arr[$i]."' value ='".$arr[$i]."'>".$arr[$i]."</td><td>".$result->topic."</td><td>目前連署人數".$result->count."</td>";//醜爆no程式碼
						echo "<td colspan ='3'><a href='ntousa_vote.php?topic_ID=".$arr[$i]."' class='btn btn-default'>詳情</a></td></tr>";
						$i++;
					}
					//print_r($arr);
					echo "</table>";
				}
			?>	
	
	</form>
</div>
</body>

</html>