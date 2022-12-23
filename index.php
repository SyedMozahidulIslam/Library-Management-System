<?php
	require "db_connect.php";
	require "header.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/home.php");
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<div id="member">
				<a href="member">
					<img src="img/ic_membership.svg" width="250px" height="auto"/><br />
					&nbsp;Member Login
				</a>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a id="librarian-link" href="librarian">
						<img src="img/ic_librarian2.svg" width="250px" height="220" /><br />
						&nbsp;&nbsp;&nbsp;Librarian Login
					</a>
				</div>
			</div>
		</div>
	</body>
</html>