<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {

        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $query = $mysqli->query("INSERT INTO payment (product_code, product_name, product_desc, price, units, total, email, payed) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user', 'Yet to Pay')");

        
        }
      }
    }
  }

unset($_SESSION['cart']);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>On-Shop</title>
    <link rel="stylesheet" href="include/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="include/style.css">
  </head>
  <body>

    <?php
        include 'header.php';
    ?>
    <div class="container">
    <div class="jumbotron">
        <h1>Success,</h1> <p>Whatever task you performed, has been executed successfully. Congrats!</p>
        <p>In case you purchased a product, then please check your spam in email for the receipt.</p>
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
