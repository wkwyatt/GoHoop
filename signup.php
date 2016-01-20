<?php

	require_once("inc/db_connect.php"); 

	if(isset($_POST['signup']) && $_POST['signup'] == "signup") {
		$username = $_POST['user'];
		$password = $_POST['password'];
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
			foreach($result as $row){
				$hash = $row['pass'];
				$uid = $row['uid'];
				$passwordVerify = password_verify($password, $hash);

				if($passwordVerify){
					$_SESSION['username'] = $row['name'];
					$_SESSION['uid'] = $row['uid'];
					header('location: index.php?login=success');
					exit;
				} else {
					header('location: register.php?error=nomatch');
				}
			}

		} catch(MeekroDBException $e){
			header('location: register.php?error=meekro');
			exit;
		}
	}

	if($_POST['logout'] = "true"){
		session_destroy();
	}

?>