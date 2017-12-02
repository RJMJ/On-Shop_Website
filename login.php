<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In || On-Shop</title>
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/style.css">
    <link rel="stylesheet" href="include/login.css">
</head>

<body id="login">
	
	<!-- Include header.php -->
	<?php
		include "header.php";
	?>;
	
	<div  id="login">
    <div class="container" id="log-in-form">
        <div class="heading">
         	<h1>Log In Your Account</h1>''
        </div>
        <form method="POST" action="verify.php">
            <div class="form-group">
                <input type="email" class="form-control" name="username" placeholder="Enter email id" required="required" autofocus=" ">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Enter password" required="required">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group form-group-btn">
                <button type="submit" class="btn btn-success btn-lg" value="Login"><i class="glyphicon glyphicon-user"></i> Log In</button>
            </div>
            <div class="clearfix"></div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </form>
    </div>
    </div>
    
	<!-- Include footer.php -->
	<?php
		include "footer.php";
	?>

	<script src="include/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
