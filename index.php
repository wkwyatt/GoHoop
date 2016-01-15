<?php
include 'inc/db_connect.php';
print_r($_SESSION);
exit;
// if(!isset($_SESSION['username'])){ 
// 	header("location: register.php"); 
// 	exit;
// }

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
		<?php
			if(!isset($_SESSION['uid'])){
				$posts = DB::query(
					"SELECT posts.content, posts.timestamp, users.name FROM posts
						LEFT JOIN users ON posts.uid = users.uid
						ORDER BY posts.timestamp desc limit 30");
				// not we have a maxof 30 results by timestamp
				foreach ($posts as $post) {
					print '<div class="post-content" >';
						print '<p class="posting-user">'.$post['name'].'</p>';
						print '<p class="post-comment">'.$post['content'].'</p>';
						print '<p class="timestamp">'.$post['timestamp'].'</p>';
						print '<span class="votes">2</span>';
						print '<i class="fa fa-chevron-up"></i>';
						print '<i class="fa fa-chevron-down"></i>';
					print '</div>';
				}
			}
		?>
			<div class="post-content">
				<p>Test content1</p>
				<p class="timestamp">DAte time</p>
				<span class="votes">2</span>
				<i class="fa fa-chevron-up"></i>
				<i class="fa fa-chevron-down"></i>
			</div>
			<div class="post-content" >
				<p>Test conntent2</p>
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