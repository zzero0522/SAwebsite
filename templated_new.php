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
					<h2>新增提案</h2>
					<a href="templated_vote.php" class="button">放棄提案</a>
				</header>
				
					<form action='new_vote_action.php' method ='post'>
						<h3>提案標題</h3><input type = "text" style="width:350px" placeholder="以20字為限" name = "topic"/><br>
						<h3>提案主文</h3><textarea style="width:350px;height:200px" placeholder="請盡量詳述提案內容" name = "content"></textarea><br>
						<button type = 'submit' class="button">新增提案</button>
					</form>
						
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