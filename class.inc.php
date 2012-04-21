<?php
/***********************************************
File: class.inc.php
Author: Adam Krone
Description: Includes all classes used in the
SketchingPractice.com site.
***********************************************/

	//USER MANAGEMENT
	class User {

		//Login
		function login($username, $password) {

			//sanitize strings
			$username = sanitize($username);
			$password = md5(sanitize($password));

			//return values
			$nouser = "<h3>The username you specified does not exist!</h3>";
			$nomatch = "<h3>Incorrect password.</h3>";
			$success = "<h3>You have been logged in.</h3><p>Welcome back, $username!";

			//query db
			include "db.inc.php";
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = $mydb->query($sql);
			$row = $result->fetch_assoc();

			//check if user exists
			if ( $result->num_rows == 0 ) {

				$output = redirect("index.php");
				return $nouser . $output;

			//check if passwords match
			} else if ( $row['password'] != $password ) {

				$output = redirect("index.php");
				return $nomatch . $output;

			//setup session info
			} else {

				session_start();

				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = $row['user_id'];
				
				$output = redirect("members.php");
				return $success . $output;

			}

			$result->close();
			$mydb->close();

		}

		//Logout
		function logout() {
		
			$_SESSION['username'] = '';
		
			session_destroy();
			
			$output = redirect("index.php");
			
			return "<h3>You have been successfully logged out.</h3><div class=\"padding\">" . $output;
		
		}

		//Create User
		function create($username, $password, $email) {
		
			//sanitize strings
			$username = sanitize($username);
			$password = sanitize($password);
			$email = sanitize($email);
			
			//encrypt password
			$password = md5($password);
			
			//return values
			$success = "<h3>User created successfully!</h3>";
			$failure = "<h3>Error: Please try again later.</h3><div class=\"padding\">";
			$used = "<h3>That user name is already being used.</h3><div class=\"padding\">";
			
			//query db
			include "db.inc.php";
			$sql = "SELECT * FROM users WHERE username = '$username'";
			$result = $mydb->query($sql);
			
			//check if user exists
			if ( $result->num_rows != 0 ) {
				
				return $used . redirect("index.php");
			
			//setup user
			} else {
			
				$sql = "INSERT INTO users (username, password, email)
				VALUES ('$username', '$password', '$email')";
						
				//error handling
				if ($mydb->query($sql) == TRUE) {
				
					return $success;
				
				} else {
				
					return $failure . redirect("index.php");
				
				}
			
			}
			
			$mydb->close();
		
		}

		//Change Password
		function changePassword($userid, $oldPassword, $newPassword) {

			//sanitize strings
			$oldPassword = sanitize($oldPassword);
			$newPassword = sanitize($newPassword);

			//encrypt password
			$newPassword = md5($newPassword);

			//return values
			$nomatch = "<h3>The old password you specified does not match our records.</h3><div class=\"padding\">";
			$success = "<h3>Password successfully changed!</h3><div class=\"padding\">";
			$failure = "<h3>Error: Please try again later</h3><div class=\"padding\">";

			//query db
			include "db.inc.php";
			$sql = "SELECT * FROM users WHERE user_id = '$userid'";
			$result = $mydb->query($sql);
			$checkPassword = $result->fetch_assoc();

			//check if passwords match
			if ( $checkPassword['password'] == md5($oldPassword) ) {

				$sql = "UPDATE users SET password = '$newPassword' WHERE user_id = '$userid' ";

				//error handling
				if($mydb->query($sql) == TRUE) {

					return $success;

				} else {

					return $failure;

				}

			//passwords do not match
			} else {

				return $nomatch;

			}

			$result->close();

			$mydb->close();

		}

		//Change Email
		function changeEmail($userid, $email) {

			//sanitize strings
			$email = sanitize($email);

			//return values
			$success = "<h3>Email updated successfully!</h3><div class=\"padding\">";
			$failure = "<h3>Error: Please try again later.</h3><div class=\"padding\">";

			//query db
			include "db.inc.php";
			$sql = "UPDATE users SET email = '$email' WHERE user_id = '$userid'";

			//error handling
			if($mydb->query($sql) == TRUE) {

				return $success;

			} else {

				return $failure;

			}

			$mydb->close();

		}

		//Get username
		function getUser($userid) {

			//query db
			include "db.inc.php";
			$sql = "SELECT * FROM users WHERE user_id = '$userid'";
			$result = $mydb->query($sql);
			$row = $result->fetch_assoc();
			
			return $row;

		}
	}