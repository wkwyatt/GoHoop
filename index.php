<?php
include 'inc/db_connect.php';
if(!isset($_SESSION['username'])){ 
	header("location: register.php"); 
	exit;
}

if($_GET['logout'] == 'true') {
	session_destroy();
}

?>

<!DOCTYPE html>
<html ng-app="goHoopApp">
<head>
	<title>GoHoop</title>
	<?php include('inc/head.php') ?>
</head>
<body ng-controller="loginCntrl">
	<?php include 'inc/header.php'; ?>
	<div ng-controller="">
		<div id="main" class="hero">
			<h2>Easily find good basketball runs near you.  Up vote players, runs, and posts. Find somewhere to go hoop!</h2>
			<button id="post-btn">Post</button>
		</div>
		<div class="post-wrapper">
			<div class="post-content" >
				<p>Some content</p>
				<p class="timestamp">DAte time</p>
				<span class="votes">2</span>
				<i class="fa fa-chevron-up"></i>
				<i class="fa fa-chevron-down"></i>
			</div>
			<div class="post-content" >
				<p>Some content</p>
				<p class="timestamp">DAte time</p>
				<i class="fa fa-chevron-up"></i>
				<span class="votes">2</span>
				<i class="fa fa-chevron-down"></i>
			</div>
		</div>
	</div>
	<?php include 'inc/footer.php'; ?>
</body>
</html>