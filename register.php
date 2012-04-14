<?php
/***********************************************
File: register.php
Author: Adam Krone
Description: Handles user registration.
***********************************************/

	require "func.inc.php";
	require "class.inc.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$passwordVal = $_POST['password_repeat'];
	$email = $_POST['email'];
	
	//check if passwords match
	if ( $password != $passwordVal ) {
	
		$output = "<h3>Passwords do not match.</h3><div class=\"padding\">" . redirect("index.php");
	
	} else {
				$user = new User();
				$output = $user->create($username, $password, $email);
				if ($output == "<h3>User created successfully!</h3>") {
					$output .= $user->login($username, $password);
				}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SketchingPractice.com | User Registration</title>
		<link href="style/css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
		<div id="redirect" class="box_shadow">
				<?php echo $output; ?>
		</div>
		
	</body>
</html>	