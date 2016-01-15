<?php
	include 'inc/db_connect.php';
	$results = DB::query("SELECT users.uid, users.name FROM users");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'inc/head.php';?>
</head>
<body>
<?php include 'inc/header.php';?>

	<div class="first-container">
		<div class="row">
			<?php
				foreach($results as $user){
					print '<div class="user">'.$user['name'].'</div>';
					print '<div class="follow-uesr">
								<button class="" uid="'.$user['uid'].'">Follow</div>';
				}
			?>
		</div>
	</div>

<?php include 'inc/footer.php';?>
</body>
</html>