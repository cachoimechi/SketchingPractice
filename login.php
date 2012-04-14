<?php
/***********************************
File: login.php
Author: Adam Krone
Description: Handles user login.
***********************************/


require "func.inc.php";
require "class.inc.php";

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User();
$output = $user->login($username, $password);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SketchingPractice.com | User Login</title>
	<link href="style/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div id="redirect">
		<?php echo $output; ?>
	</div>

</body>
</html>
