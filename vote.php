<?php session_start(); ?>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head></head>
<body>
<div class="container">
	<form action='vote_action.php' method ='post'>
    <div class="form-group">
      <label for="votebase">現有提案</label>
		
			<?php
				include "mysqli_connect.inc.php";
				$query = "SELECT * FROM proposal ";
				if($stmt = $db->query($query))
				{
					while($result=mysqli_fetch_object($stmt))
					{
						echo "<tr><td><name ='id'>".$result->id."</td><td>".$result->topic."</td><td>".$result->count."</td></tr>";//這裡可能要大修
					}
				}
			?>
		<br>
		
	</div>
	<button type='submit' class='btn btn-default'>連署</button>
	</form>
</div>
</body>

</html>