<?php
/***********************************************
File: logout.php
Author: Adam Krone
Description: Handles user logout.
***********************************************/

	session_start();
	
	require "func.inc.php";
	require "class.inc.php";
	
	$user = new User();
	$output = $user->logout();
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SketchingPractice.com | Logout</title>
		<link href="style/css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="transition_box">
	
		<div id="redirect">
				<?php echo $output; ?>
		</div>
		
	</body>
</html>	