<?php
/***********************************
File: change_email.php
Author: Adam Krone
Description: Handles user email changes.
***********************************/

session_start();

require "func.inc.php";
require "class.inc.php";

$email = $_POST['email'];

$user = new User();
$output = $user->changeEmail($_SESSION['user_id'], $email);
$output .= redirect("account.php");

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
