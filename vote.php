<?php session_start(); ?>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head></head>
<body>
<div class="container">
	<form action='vote_action.php' method ='post'>
    <div class="form-group">
      <label for="votebase"><h1>現有提案</h1></label>	
			<?php
				include "mysqli_connect.inc.php";
				$query = "SELECT * FROM proposal";
				if($stmt = $db->query($query))
				{
					echo "<table border='1'>";
					while($result=mysqli_fetch_object($stmt))
					{
						echo "<tr><td colspan ='3'><input type='hidden' name='id' value ='".$result->id."'>".$result->id."</td><td>".$result->topic."</td><td>目前連署人數".$result->count."</td>";//醜爆no程式碼
						echo "<td colspan ='3'><button type='submit' class='btn btn-default'>連署</button></td></tr>";
					}
					echo "</table>";
				}
			?>	
	</div>
	
	</form>
</div>
</body>

</html>