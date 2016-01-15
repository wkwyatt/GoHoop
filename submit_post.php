<?php
	include 'inc/db_connect.php';
	if(!isset($_SESSION['username'])){
		header('location: index.php?status=failedlogin');
		exit;
	}

	if(isset($_POST['newPost'])){
		try {
			DB::insert('posts',array(
				'uid' => $_SESSION['uid'],
				'content' => $_POST['newPost']
			));
		} catch(MeekroDBException $e){
			header('location: /?error=yes');
			exit;
		}
	}
?>