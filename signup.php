<?php

	include("inc/db_connect.php"); 

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	try {
		DB::insert('users',array(
			'uid' => '',
			'name' => $username,
			'pass' => $hashed_password,
			'status' => 1
		));
	} catch(MeekroDBException $e){
		header('location: /signup.php/error=yes');
		exit;
	}

	$_SESSION['username'] = $username;
	$_SESSION['uid'] = DB::insertId();
	header('location: /?callback=registration');

?>