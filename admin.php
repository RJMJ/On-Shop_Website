<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:account.php");
}

if($_SESSION["type"]!="admin") {
  header("location:account.php");
}

include 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || On-Shop</title>
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="include/style.css">
  </head>
  <body>

    <?php
      include 'header.php';
    ?>
  <div class="container">
    <div class="row" style="margin-top:10px;">
      <div class="large-12">
      <div class="jumbotron">
        <h2>Hey Admin!</h2>
      </div>
      
         <?php
           $result = $mysqli->query("SELECT * from products order by id asc");
           if($result) {
             while($obj = $result->fetch_object()) {
               echo '<div class="large-4 columns">';
               echo '<p><h3>'.$obj->product_name.'</h3></p>';
               echo '<img src="assets/img/product/'.$obj->product_img_name.'" style="width:300px; height:180px"/>';
               echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
               echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
               echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
               echo '<div class="large-6 columns" style="padding-left:0;">';
               echo '<form method="post" name="update-quantity" action="admin-update.php">';
               echo '<p><strong>New Qty</strong>:</p>';
               echo '</div>';
               echo '<div class="large-6 columns">';
               echo '<input type="number" name="quantity[]"/>';
               echo '</div>';
               echo '</div>';
             }
          }
        ?> 
      </div>
    </div>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center><p><input style="clear:both;" type="submit" class="btn btn-primary" value="Update"></p></center><hr>
  </div>
</div>
</div>
  
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
