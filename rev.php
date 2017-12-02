<!DOCTYPE html>
<html>
    <title>Review Us || On-Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="include/style.css">
</head>

<body id="contactus">
    <!-- Include header.php -->
    <?php
        include "header.php";
    ?><br>

    <!-- Review -->
        <div class="container">
            <div class="row team_columns_carousel_wrapper">
                <div class="col-lg-8 col-lg-offset-2">
                <h1>Review</h1>
                    <form id="contact-form" method="post" action="contact.php" role="form">
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label for="form_name">Firstname :</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname :</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email :</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone :</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message :</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input href="#" type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><hr>
    <!-- Review End -->

    <!-- Include footer.php -->
    <?php
        include "footer.php";
    ?>
    <script src="include/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="include/bootstrap/js/bootstrap.min.js"></script>
    <script src="include/bootstrap/js/validator.js"></script>
    <script src="include/bootstrap/js/contact.js"></script>
</body>
</html>