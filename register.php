<script type="text/javascript"> var registerUser = false; </script>
<?php
include 'inc/db_connect.php';

if(isset($_GET['logout'])) {
	session_destroy();
}

if(isset($_SESSION['uid'])){
	header('location: index.php');
	exit;
}

if(isset($_GET['register'])):
?> 
<script> registerUser = true; </script>
<?php
endif;
?>

<!DOCTYPE html>
<html ng-app="goHoopApp">
<head>
	<title>GoHoop - Login / Register</title>
	<?php include('inc/head.php') ?>
</head>
<body>
	<?php include 'inc/header.php'; ?>
	<div ng-controller="registerCntrl">
		<div class="login-wrapper">
			<div id="login-header">GoHoop</div> 
			<div id="login-form" ng-hide="signup">
				<form action="signup.php" method="post">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<button type="submit" name="login" class="login login-submit" value="login">Login</button>
				</form>
				<div class="login-help">
					<a ng-click="signup = true">Register</a><a href="#">Forgot Password</a>
				</div>
			</div>
			<div id="signup-form" ng-show="signup">
				<form action="signup.php" method="post">
					<input type="text" name="email" placeholder="Email">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="password" name="confPass" placeholder="Confirm Password">
					<button type="submit" name="signup" class="login login-submit" value="signup">Signup</button>
					<div class="login-help">
						<a ng-click="signup = false">Login</a><a href="#">Forgot Password</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include 'inc/footer.php'; ?>
</body>
</html>

