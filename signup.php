<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!DOCTYPE html>
<html>
    <title>Sign Up || On-Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="include/style.css">
</head>

  <body>
    <!-- Include header.php -->        
    <?php
        include "header.php";
    ?><br>

  <div class="container">
    <div class="row team_columns_carousel_wrapper">
      <div class="col-lg-8 col-lg-offset-2">
        <h1>Sign In</h1>
                
      <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="form_name">Firstname :</label>
                <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" autofocus="">
                <div class="help-block with-errors"></div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="form_lastname">Lastname :</label>
                <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required">
                <div class="help-block with-errors"></div>
            </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <label for="form_email">E-Mail :</label>
              <input type="email" id="form_email" class="form-control" placeholder="Your Email id *" name="email" required="required">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <label for="form_password">Password :</label>
              <input type="password" id="form_password" class="form-control" placeholder="Enter Your Password *" name="pwd" required="required">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label for="form_name">City :</label>
                <input id="form_name" type="text" name="city" class="form-control" placeholder="Please enter City name *" required="required">
                <div class="help-block with-errors"></div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                  <label for="form_phone">Pin Code :</label>
                  <input id="form_lastname" type="number" name="pin" class="form-control" placeholder="Please enter your pincode *" required="required">
                  <div class="help-block with-errors"></div>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
              <label for="form_password">Phone No :</label>
              <input type="number" id="form_name" class="form-control" placeholder="Enter Your Contact No *" name="phone_no" required="required">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Address :</label>
                <textarea id="form_message" name="address" class="form-control" placeholder="Address *" rows="4" required="required"></textarea>
                <div class="help-block with-errors"></div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div><br>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form> 
  </div></div>
</div><br>
    <!-- Include footer.php -->
    <?php
        include "footer.php";
    ?>

    <script src="include/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
    <script src="include/bootstrap/js/validator.js"></script>
    <script src="include/bootstrap/js/contact.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
