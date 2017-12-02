<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

?>

<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products || On-Shop</title>
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

  <!-- Product Menu ====================================================== -->
  <div class="team_columns_carousel_wrapper">
        <div class="item active">
        <a href="signup.php"><img src="assets/img/slides/oppo.jpg" style="width:100%;"></a>
      </div>
    </div><br>
  <!-- Product Menu End -->

<!-- Index Product ============================================================ -->

      <div class="container">
         <div class="row team_columns_carousel_wrapper">
            <?php

          $sql = $mysqli->query("SELECT * FROM products");

          if($sql){
              
              while($obj = $sql->fetch_object()) {
                echo '<div class="item">';
                echo '<div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">';
                echo '  <a><img src="assets/img/product/'.$obj->product_img_name.'" width="100%" data-toggle="modal" data-target="#'.$obj->id.'"></a>';    
                echo '<div class="team_columns_item_caption">';
                echo '<h5 data-toggle="modal" data-target="#'.$obj->id.'"><a>'.$obj->product_name.'</a></h5>';
                echo '<hr>';
                echo '<h5>₹ '.$obj->price.'</h5>';
                echo '</div>';         
                echo '</div>';
                echo '</div>';
                echo '<div class="modal fade" id="'.$obj->id.'" role="dialog">';
                echo '<div class="modal-dialog modal-lg">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                echo '<h4 class="modal-title">'.$obj->product_name.'</h4>';
                echo '</div>';
                echo '<div class="modal-body">';
                // echo '<div class="container">';
                // echo '<div class="card">';
                // echo '<div class="container-fliud">';
                // echo '<div class="wrapper row">';
                // echo '<div class="preview col-md-6">';
                // echo '<div class="preview-pic tab-content">';
                // echo '<div class="tab-pane active" id="pic-1"><img src="assets/img/product/'.$obj->product_img_name.'" /></div>';
                // echo '</div>';
                // echo '</div>';
                // echo '<div class="details col-md-6">';
                // echo '<h3 class="product-title">Product Details</h3>';
                // echo '<p><h3>'.$obj->product_name.'</h3></p>';
                // echo '<p><h4><strong>Description</strong>: '.$obj->product_desc.'</h4></p>';
                // echo '<p><h3><strong>Price (Per Unit)</strong>: ₹ '.$currency.$obj->price.'</h3></p>';
                // echo '<p class="vote"><h4><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></h4></p>';
                // echo '<h5 class="colors">colors:';
                // echo '<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>';
                // echo '<span class="color green"></span>';
                // echo '<span class="color blue"></span><br><br><br>';    
                // echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
                                         echo '<div class="col-lg-4"><img src="assets/img/product/'.$obj->product_img_name.'"></div>
                               <p><h3>'.$obj->product_name.'</h3></p>
                               <p><h4><strong>Description</strong>: '.$obj->product_desc.'</h4></p>
                               <p><h3><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</h3></p>
                               <p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
              
                if($obj->qty > 0) {
                    
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" class="add-to-cart" value="Add To Cart" style=";">';
                    echo '</div></div>';
                }

                else {
                    
                    echo 'Out Of Stock!!!';
                }
                
                  echo '</div></div>';
            }
         }
         ?>
         <hr></div>
      </div><br>
<!-- Index Product End -->
            
    <!-- Include footer.php -->
    <?php
      include "footer.php";
    ?>
    <script src="include/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>