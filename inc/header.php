<script type="text/javascript"> var verifyLogin = false; </script>
<?php 
include 'inc/db_connect.php'; 
if(isset($_SESSION['uid']) && isset($_SESSION['username'])):
?>
<script type="text/javascript"> verifyLogin = true; </script>
<?php 
endif;
?>

<header ng-controller="headerCntrl">
    <div class="container clearfix">
        <a href="index.php"><h1 id="logo">
            GoHoop
        </h1></a>
        <nav ng-show="login">
            <a href="#">Welcome, <?php echo $_SESSION['username']?></a>
            <a href="#" ng-click="logout()">Logout</a>
        </nav>
        <nav ng-hide="login">
        	<button href="register.php">Login</button>
        	<button href="register.php">Sign Up</button>
        </nav>
    </div>
</header>