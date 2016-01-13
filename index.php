<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>GoHoop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body ng-controller="loginCntrl">
	<div class="login-wrapper">
		<div id="login-header">GoHoop</div> 
		<div id="login-form" ng-hide="signup">
			<form action="" method="post">
				<input type="text" name="user" value="" placeholder="Username">
				<input type="password" name="pass" value="" placeholder="Password">
				<button type="submit" name="login" class="login login-submit" value="login">Login</button>
			</form>
			<div class="login-help">
				<a href="#">Register</a><a href="#">Forgot Password</a>
			</div>
		</div>
		<!-- <div id="signup-form" ng-show="signup">
			<form action="" method="post">
				<input type="text" name="email" value="" placeholder="Email">
				<input type="text" name="username" value="" placeholder="Username">
				<input type="password" name="password" value="" placeholder="Password">
				<input type="password" name="confPass" value="" placeholder="Confirm Password">
				<button type="submit" name="signin" class="login login-submit" value="signin">Signup</button>
				<div class="login-help">
					<a href="#">Login</a><a href="#">Forgot Password</a>
				</div>
			</form>
		</div> -->
	</div>
</body>
</html>