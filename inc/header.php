<?php

// print_r($_SESSION);
// exit;

?>

<script type="text/javascript"> var verifyLogin = false; </script>
<?php if(isset($_SESSION['uid'])): ?>
    <script type="text/javascript"> verifyLogin = true; </script>
<?php endif; ?>

<header ng-controller="headerCntrl">
    <div class="container clearfix">
        <a href="index.php"><h1 id="logo">
            GoHoop
        </h1></a>
        <nav ng-show="login" id="welcome-msg">
            <a href="#">Welcome, <?php echo $_SESSION['username']?></a>
            <a href="#" ng-click="logout()">Logout</a>
        </nav>
        <nav ng-hide="login">
        	<a href="register.php"><button>Login</button></a>
        	<a href="register.php?register=true"><button>Sign Up</button></a>
        </nav>
    </div>
</header>