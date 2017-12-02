<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

?>

<!DOCTYPE html>
<html>
	<title>Online Shopping India</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" type="text/css" href="include/style.css">
    <link rel="stylesheet" type="text/css" href="include/display.css">
</head>

<body>

   <!-- Include header.php -->
   <?php
      include "header.php";
   ?><br>

   <!-- Carousal ================================================================ -->
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">

		  <div class="item active">
			<a href="product.php"><img src="assets/img/slides/oppo.jpg" style="width:100%;"></a>
			<div class="carousel-caption">
			</div>
		  </div>

		  <div class="item">
			<a href="product.php"><img src="assets/img/slides/headphones.jpg" style="width:100%;"></a>
			<div class="carousel-caption">

			</div>
		  </div>
		  <div class="item">
			<a href="product.php"><img src="assets/img/slides/oppo.jpg" style="width:100%;"></a>
			<div class="carousel-caption">
			
			</div>
		  </div>
	  
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div><br>
<!-- Carousal End -->

<!-- Slider Product =========================================================== -->
   <div class="container">
   <div class="row">
      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="5000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->
            <div class="item active">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a href="product.php"><img src="assets/img/product/android.jpeg" alt="slider 01"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Smart Phones</a></h5>
                     <hr>
                     <h6>Android</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <a href="product.php"><img src="assets/img/product/Apple_iPhone6_Reuters.jpg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Smart Phones</a></h5>
                     <hr>
                     <h6>IOS</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <a href="product.php"><img src="assets/img/product/black.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Smart Phones</a></h5>
                     <hr>
                     <h6>BlackBerry</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <a href="product.php"><img src="assets/img/product/windows.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Smart Phones</a></h5>
                     <hr>
                     <h6>Windows</h6>
                  </div>
               </div>
            </div>
            <!--========= 2nd slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a href="product.php"><img src="assets/img/product/hp.jpg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Laptops</a></h5>
                     <hr>
                     <h6>HP</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <a href="product.php"><img src="assets/img/product/mac.jpg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Laptops</a></h5>
                     <hr>
                     <h6>MAC</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <a href="product.php"><img src="assets/img/product/sony.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Laptops</a></h5>
                     <hr>
                     <h6>Sony</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <a href="product.php"><img src="assets/img/product/dell.jpg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Laptops</a></h5>
                     <hr>
                     <h6>Dell</h6>
                  </div>
               </div>
            </div>
            <!--========= 3rd slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a href="product.php"><img src="assets/img/product/hard.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Accessorries</a></h5>
                     <hr>
                     <h6>Hard Drives</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <a href="product.php"><img src="assets/img/product/head.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Accessorries</a></h5>
                     <hr>
                     <h6>Head Phones</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <a href="product.hp"><img src="assets/img/product/power.jpeg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Accessorries</a></h5>
                     <hr>
                     <h6>Power Banks</h6>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <a href="product.php"><img src="assets/img/product/keyboard.jpg" alt="slider 02"></a>
                  <div class="team_columns_item_caption">
                     <h5><a href="product.php">Accessorries</a></h5>
                     <hr>
                     <h6>Keyboards</h6>
                  </div>
               </div>
            </div>
   
         <!--======= Navigation Buttons =========-->
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
   </div>
   </div>
   <div class="col-md-6">

   </div>
</div>
<!-- Slider Product End -->

<!-- Index Product ============================================================ -->

      <div class="container">
         <div class="row team_columns_carousel_wrapper">
            <?php

          $sql = $mysqli->query("SELECT * FROM products");

          if($sql){
              
              while($obj = $sql->fetch_object()) {
               echo '
               <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <a><img src="assets/img/product/'.$obj->product_img_name.'" width="100%" data-toggle="modal" data-target="#'.$obj->id.'"></a>    
                  <div class="team_columns_item_caption">
                     <h5 data-toggle="modal" data-target="#'.$obj->id.'"><a>'.$obj->product_name.'</a></h5>
                     <hr>
                     <h5>₹ '.$obj->price.'</h5>
                  </div>         
               </div>
               </div>';
               echo '
               <div class="modal fade" id="'.$obj->id.'" role="dialog">
   				 <div class="modal-dialog modal-lg">
      				<div class="modal-content">
			        	<div class="modal-header">
			          		<button type="button" class="close" data-dismiss="modal">&times;</button>
			          		<h4 class="modal-title">'.$obj->product_name.'</h4>
			        	</div>';
			       echo '<div class="modal-body">';
			   //    <div class="container">
						// <div class="card">
						// <div class="wrapper row">
						// <div class="preview col-md-8">
						// 	<div class="preview-pic tab-content">
						// 	  <div class="tab-pane active" id="pic-1"><img src="assets/img/product/'.$obj->product_img_name.'" /></div>
						// 	</div>
						// </div>
						// <div class="details col-md-8">
						// 	<h3 class="product-title">Product Display</h3>
			   //            	<p><h3>'.$obj->product_name.'</h3></p>
      //                   	<p><h4><strong>Description</strong>: '.$obj->product_desc.'</h4></p>
      //                   	<p><h3><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</h3></p>
						// 	<p class="vote"><h4><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></h4></p>
						// 	<h5 class="colors">colors:
						// 	<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
						// 	<span class="color green"></span>
						// 	<span class="color blue"></span><br><br><br>		
			   //              <p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
			                
                         echo '<div class="col-lg-4"><img src="assets/img/product/'.$obj->product_img_name.'"></div>
                               <p><h3>'.$obj->product_name.'</h3></p>
                               <p><h4><strong>Description</strong>: '.$obj->product_desc.'</h4></p>
                               <p><h3><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</h3></p>
                               <p><strong>Units Available</strong>: '.$obj->qty.'</p><br>';
                 if($obj->qty > 0){
	                	echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" class="add-to-cart" value="Add To Cart" style=";">';
				        echo '</div></div>';
			        }
			        else {
						echo 'Out Of Stock!';
					}
			            //echo '</div></div>';
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
