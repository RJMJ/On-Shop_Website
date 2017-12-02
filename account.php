<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}

include 'config.php';

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account || On-Shop</title>
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="include/style.css">
  </head>
  <body>

    <?php
        include 'header.php';
    ?>

<div class="container">
  <div class="jumbotron">
        <p><?php echo '<h3>Hi ' .$_SESSION['fname'] .',</h3>'; ?></p>
        <h4>User Details</h4>
        <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form method ="POST" class="form-horizontal" action="update.php">
        <fieldset>
          <div class="form-group">
            <label class="col-sm-2 control-label" id="right-label" for="textinput">First&nbsp;Name&nbsp;:</label>
            <div class="col-sm-10">
      
          <?php

                 $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                 if($result === FALSE){
                   die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
              
                  echo '<input type="text" id="right-label" placeholder="'. $obj->fname. '" name="fname" class="form-control" required="">';
                  echo '</div>';
                  echo '</div>';

                  echo '<div class="form-group">';
                  echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Last&nbsp;Name&nbsp;:</label>';
                  echo '<div class="col-sm-10">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->lname. '" name="fname" class="form-control" required="">';
                  echo '</div>';
                  echo '</div>';

                  echo '<div class="form-group">';
                  echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Email&nbsp;Id&nbsp;:</label>';
                  echo '<div class="col-sm-10">';
                  echo '<input type="email" id="right-label" placeholder="'. $obj->email. '" name="email" class="form-control" required="">';
                  echo '</div>';
                  echo '</div>';

                  echo '<div class="form-group">';
                  echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">City&nbsp;:</label>';
                  echo '<div class="col-sm-4">';
                  echo '<input type="text" id="right-label" placeholder="' .$obj->city. '" name="city" class="form-control" required="">';
                  echo '</div>';

                  echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Pin&nbsp;Code&nbsp;:</label>';
                  echo '<div class="col-sm-4">';
                  echo '<input type="number" id="right-label" placeholder="'. $obj->pin. '" name="pin" class="form-control" required="">';
                  echo '</div>';
                  echo '</div>';
                  
                  echo '<div class="form-group">';
                  echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Phone&nbsp;No&nbsp;:</label>';
                  echo '<div class="col-sm-10">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->phone_no. '" name="fname" class="form-control" required="">';
                  echo '</div>';
                  echo '</div>';

                  echo '<div class="form-group">';
                  echo '<label class="col-sm-2 control-label" id="right-label" for="textinput">Address&nbsp;:</label>';
                  echo '<div class="col-sm-10">';
                  echo '<input type="text" id="right-label" placeholder="'. $obj->address. '" name="address" class="form-control" required="">';
                  echo '</div>';
                  echo '</div>';
                }
                echo '<div class="form-group">
                    <label class="col-sm-2 control-label" id="right-label" for="textinput">Password&nbsp;:</label>
                    <div class="col-sm-10">
                      <input type="password" id="right-label" placeholder="***********" name="pwd" class="form-control" required="">
                    </div>
                    </div>';
        ?>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <div class="pull-right">
              <input type="submit" id="right-label" value="Update" class="btn btn-primary">
              <input type="reset" id="right-label" value="Reset" class="btn btn-primary">
            </div></div>
          </div>
        </div>
        </fieldset>
      </form>
    </div>
</div><hr>

    <?php
        include 'footer.php';
    ?>

    <script src="include/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
