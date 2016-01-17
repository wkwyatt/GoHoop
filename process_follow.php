<?php
include 'inc/db_connect.php';
	try {
		DB::insert('following', array(
		'user_id' => $_SESSION['uid'],
		'subscriber' => $_POST['uid']
		));
	} catch(MeekroDBException $e){
		header("location: follow.php?error=yes");
		exit;
	}

	print json_encode("Success!");
?>