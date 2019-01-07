<!DOCTYPE HTML>
<?php 
session_start(); 
include "mysqli_connect.inc.php";
?>
<html>
	<head>
		<title>NTOUSA Voting System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">NTOUSA Voting System</a></h1>
						<span>Code by G0</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="templated_vote.php">Homepage</a></li>
							<li><a href="#">Two Sidebars</a></li>
							<li><a href="#">Left Sidebar</a></li>
							<li><a href="#">Right Sidebar</a></li>
							<li><a href="#">No Sidebar</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<header>
					<h2>現有提案</h2>
					<a href="templated_new.php" class="button">我要新增提案</a>
				</header>
				<div class="row">
					<?php
						$query = "SELECT * FROM proposal ORDER BY 'id'";
						$i = 0;
						if($stmt = $db->query($query))
						{
							while($result=mysqli_fetch_object($stmt))
							{
								$arr[$i]=$result->id;
								echo "<div class='3u'>";
								echo "	<section>";
								echo "		<img src='images/ntousa_demo.png' class='image full'/>";
								echo "		<p>".$result->topic."</p>";
								echo "		<p>目前連署人數： ".$result->count." 人</p>";
								echo "		<a href='ntousa_vote.php?topic_ID=".$arr[$i]."' class='button'>提案 ".$arr[$i]." 詳情</a>";
								echo "	</section>";
								echo "</div>";
								$i++;
							}
						}
					?>
				</div>			
			</div>
		</div>
	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				National Taiwan Ocean University Student Association
			</div>
		</div>

	</body>
</html>