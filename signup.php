<?php

	include("inc/db_connect.php"); 

	if($_POST['signin'] == "signin") {
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
	

	if($_POST['login'] = "login"){
		$username = $_POST['user'];
		$password = $_POST['pass'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		try {
			DB::query('SELECT 1 FROM users WHERE name =%s0 AND pass =%s1', $username, $hashed_password);
		} catch(MeekroDBException $e){
			header('location: /?error=yes');
			exit;
		}

		$_SESSION['username'] = $username;
		$_SESSION['uid'] = DB::insertId();
		header('location: /?login=success');
	}

?>