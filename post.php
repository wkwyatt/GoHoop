<?php 
require_once('inc/db_connect.php');
print "<pre>";
print_r($_SESSION);
exit;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'inc/head.php' ?>
</head>
<body>
	<?php include 'inc/header.php' ?>
	<div class="post-wrapper container">
		<form action="submit_post.php" method="post">
			<div class="form-group">
				<label id="post-header" for="comment">POST</label>
				<textarea id="new-post" class="form-control" rows="5" name="newPost"></textarea>
			</div>
			<div class="form-group">
				<button class="post post-submit" type="submit" value="postMsg">Post</button>
			</div>
		</form>
	</div>
	<?php include 'inc/footer.php' ?>
</body>
</html>