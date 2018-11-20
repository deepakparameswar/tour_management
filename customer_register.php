<?php

    session_start();

    include("includes/db.php");

    include("functions/functions.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Natours | Exciting tours for adventurous people</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>
    
    <body>

    <div id="top"><!-- top starts -->
        <div class="container"><!-- container starts -->
            <div class="col-md-6 offer"><!-- col-md-6 offer starts -->
                <a href="#" class="btn btn-success btn-sm">
                    <?php

                        if(!isset($_SESSION['customer_email'])){
                            
                            echo"Welcome :Guest";

                        }else {
                            
                            echo "Welcome : ".$_SESSION['customer_email']. "";

                        }

                    ?>
                </a>
                <a href="#">
                    Sopping Cart Total Price: <?php total_price(); ?>, Total Item <?php items(); ?>
                </a>
            </div> <!-- col-md-6 offer ends -->

            <div class="col-md-6"> <!-- col-md-6 starts -->
                <ul class="menu"><!-- menu starts -->
                    <li><a href="customer_register.php">Register</a></li> 
                    <li>
                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='checkout.php'> My Account </a>";

                            }else{

                                echo"<a href='customer/my_account.php?my_orders'>My Account </a>";
                                
                            }

                        ?>
                    </li> 
                    <li><a href="cart.php">Go to Cart</a></li>
                    
                    <?php

                        if(!isset($_SESSION['customer_email'])){

                            echo "<li><a href='login.php'>Login</a></li>";

                        }else{

                            echo "<li><a href='logout.php'>LogOut</a></li>";

                        }
                    ?>

                </ul><!-- menu starts -->
            </div><!-- col-md-6 ends -->
        </div><!-- container ends -->
    </div><!-- top ends -->
    
    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default starts -->
        <div class="container"> <!-- container starts -->
            <div class="navbar-header"> <!-- navbar-header starts -->
                
                <a href="index.php" class="navbar-brand home"> <!-- navbar navbar-brabds home starts -->
                    <img src="images/logo-green-small-1x.png" alt="Logo" class="hidden-xs">
                    <img src="images/logo-green-small-1x.png" alt="Logo" class="visible-xs">
                </a> <!-- navbar navbar-brabds home starts -->

                <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div> <!-- navbar-header ends -->

            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse starts -->

                <div class="padding-nav"> <!-- padding-nav starts -->
                    <ul class="nav navbar-nav navbar-left"> <!-- nav navbar-nav navbar-left starts-->
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="Order_now.php">Order now</a>
                        </li>
                        <li>
                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='checkout.php'> My Account </a>";

                            }else{

                                echo"<a href='customer/my_account.php?my_orders'>My Account </a>";
                                
                            }

                            ?>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul> <!-- nav navbar-nav navbar-left ends-->
                </div> <!-- padding-nav ends -->

                <a href="cart.php" class="btn btn-primary navbar-btn right"> <!-- btn btn-primary navbar-btn right starts -->
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> items in cart</span>
                </a> <!-- btn btn-primary navbar-btn right starts -->

                <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right starts -->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div><!-- navbar-collapse collapse right ends -->
                
                <div id="search" class="collapse clearfix"> <!-- collapse clearfix starts -->
                    <form class="navbar-form" method="get" action="results.php"> <!-- navbar-form starts -->
                        <div class="input-group"> <!-- input-group starts -->
                            <input type="text" class="form-control" palceholder="Search" name="user_query" required>
                            <span class="input-group-btn"> <!-- input-group-btn srats -->
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span> <!-- input-group-btn ends-->
                        </div> <!-- input-group ends -->
                    </form> <!-- navbar-form ends -->
                </div> <!-- collapse clearfix ends -->

            </div> <!-- navbar-collapse collapse ends -->
        </div> <!-- container starts -->
    </div><!-- navbar navbar-default ends -->


    <div id="content"> <!-- content starts-->

        <div class="container"> <!-- container starts -->

            <div class="col-md-12"><!-- col-md-12 starts -->

                <ul class="breadcrumb"><!-- breadcrumb starts-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Register</li>
                </ul><!-- breadcrumb ends-->

            </div><!-- col-md-12 ends -->

            <div class="col-md-3"><!-- col-md-3 starts -->

                <?php
                    include("includes/sidebar.php");
                ?>

            </div><!-- col-md-3 ends -->

            <div class="col-md-9"><!-- col-md-9 starts -->

                <div class="box"><!-- box starts -->
            
                    <div class="box-header"><!-- box-header starts -->

                        <center>
                        
                            <h2>Register A New Account</h2>
                        
                        </center>

                    </div><!-- box-header ends -->

                    <form action="customer_register.php" method="post" enctype="multipart/form-dataSSS"><!-- form starts -->
                    
                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Name</label>

                            <input type="text" class="form-control" name="c_name" required>

                        </div><!-- form-group ends -->

                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Email</label>

                            <input type="email" class="form-control" name="c_email" required>

                        </div><!-- form-group ends -->
                    
                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Password</label>

                            <input type="password" class="form-control" name="c_pass" required>

                        </div><!-- form-group ends -->
                        
                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Country</label>

                            <input type="text" class="form-control" name="c_country" required>

                        </div><!-- form-group ends -->

                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer City</label>

                            <input type="text" class="form-control" name="c_city" required>

                        </div><!-- form-group ends -->

                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Contact</label>

                            <input type="text" class="form-control" name="c_contact" required>

                        </div><!-- form-group ends -->

                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Address</label>

                            <input type="text" class="form-control" name="c_address" required>

                        </div><!-- form-group ends -->

                        <div class="form-group"><!-- form-group starts -->
                        
                            <label>Customer Image</label>

                            <input type="file" name="c_image" class="form-control" required>

                         </div><!-- form-group ends -->
                        

                        <div class="text-center">
                        
                            <button class="btn btn-primary" type="submit" name="register">
                            
                                <i class="fa fa-user-md"></i>Register
                            
                            </button>
                        
                        </div>


                    </form><!-- form ends -->
            
                </div><!-- box ends -->
            
            </div><!-- col-md-9 ends -->


        </div> <!-- container ends -->

    </div> <!-- content ends-->
    

    <?php
        include("includes/footer.php");
    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    </body>

</html>

<?php 

    if(isset($_POST['register'])){

        $c_name = $_POST['c_name'];

        $c_email = $_POST['c_email'];

        $c_pass = $_POST['c_pass'];

        $c_country = $_POST['c_country'];

        $c_city = $_POST['c_city'];

        $c_contact = $_POST['c_contact'];

        $c_address = $_POST['c_address'];


        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];


        $c_ip =  getRealUserIp();

        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

        $run_customer = mysqli_query($con,$insert_customer);

        $sel_cart = "select * from cart where ip_add='$c_ip'";

        $run_cart = mysqli_query($con,$sel_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if($check_cart>0){

            $_SESSION['customer_email']=$c_email;

            echo"<script>alert('You have been Registered Successfully')</script>";

            echo"<script>window.open('checkout.php','_self')</script>";

        }else{

            $_SESSION['customer_email']=$c_email;

            echo"<script>alert('You have been Registered Successfully')</script>";

            echo"<script>window.open('index.php','_self')</script>";

        }

    }

?>