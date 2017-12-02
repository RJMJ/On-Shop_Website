<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart || On-Shop</title>
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="include/style.css">
    <link rel="stylesheet" type="text/css" href="include/display.css">
</head>

<body>

    <!-- Include header.php -->
    <?php
        include "header.php";
    ?><br>

<div class="container">
  <div class="team_columns_carousel_wrapper">
  <div class="jumbotron">
    <p><h1><center>Your Shopping Cart</center></h1></p>
  </div>
    <div class="row" style="margin-top:10px;">
      <div class="col-md-12"></div>
        <div class="alert alert-success" style="display:none;">
          <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>

          <?php

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table class="table"><thread>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th></thread>';
            echo '</tr>';
            echo '<tbody>';

            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr class="active">';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="add-to-cart" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="add-to-cart" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }

          echo '<tr class="success">';
          echo '<td colspan="3" align="left">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';

          echo '</tr>';
          echo '</tbody>';
          echo '</table><hr>';
          echo '<a href="update-cart.php?action=empty"><button class="add-to-cart">Empty Cart</button></a>&nbsp;<a href="product.php"><button class="add-to-cart">Continue Shopping</button></a>';

          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button class="add-to-cart" style="float:right;">Check Out</button></a>';
          }

          else {
            echo '<a href="login.php" class="add-to-cart" style="float:right">Login</a>';
          }
          echo '<hr>';
        }

        else {
          echo "<h4><center>You have no items in your shopping cart!!.</center></h4>";
        }

          echo '</div>';
          echo '</div>';
          ?>
    </div>
  </div><br>

<!-- Include footer.php -->
    <?php
        include "footer.php";
    ?>
 
    </div>
  </div>

    <script src="include/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
