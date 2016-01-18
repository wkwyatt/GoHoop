<?php

	include("inc/db_connect.php"); 

	if(isset($_POST['signup']) && $_POST['signup'] == "signup") {
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$email = $_POST['email'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);


		try {
			DB::insert('users',array(
				'name' => $username,
				'email' => $email,
				'pass' => $hashed_password,
				'status' => 1
			));
		} catch(MeekroDBException $e){
			header('location: /?error=yes');
			exit;
		}

		$_SESSION['username'] = $username;
		$_SESSION['uid'] = DB::insertId();
		header('location: /?callback=registration');	
	}
	

	if(isset($_POST['login']) && $_POST['login'] == "login"){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		try {
			$result = DB::query('SELECT * FROM users WHERE name=%s', $username);
			if(sizeof($result) ==  1){
				$hash = $result[0]['pass'];
				$uid = $result[0]['uid'];
				$passwordVerify = password_verify($password, $hash);
print "pass: ".$passwordVerify;
exit;
// 				print (password_verify('x', '$2y$10$IzDDrUoMuwyjLzNEVcRoRednY1AO41cUc4owAhr9hi4i.r2QYQy0C'));
// 				print "<br />";
// 				print_r($hash);
// 				print "<br />";
// 				print_r($password);
// 				print "<br />";
// exit;
				if($passwordVerify){
					print "inside if";
					$_SESSION['username'] = $result['name'];
					$_SESSION['uid'] = $result['uid'];
					header('location: index.php?login=success');
				}
			}

		} catch(MeekroDBException $e){
			header('location: register.php?error=yes');
			exit;
		}
	}

	if($_POST['logout'] = "true"){
		session_destroy();
	}

?>