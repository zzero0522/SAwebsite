<html>
<head>
	<title>NTOUSA Voting System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-panels.min.js"></script>
		<script src="/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel-noscript.css" />
			<link rel="stylesheet" href="/css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body class="homepage">
	<!-- Header -->
		<?php include($_SERVER['DOCUMENT_ROOT']."/template/header.php"); ?>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<form name="form" method="post" action="register_action.php">
						<p>帳號：<input type="text" name="id" /></p> 
						<p>密碼：<input type="password" name="pw" /></p> 
						<p>再一次輸入密碼：<input type="password" name="pw2" /></p> 
					<input type="submit" class="button" value="確定" />
					<a href="login.php" class="button">返回登入頁</a>
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


