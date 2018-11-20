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

                                echo"<a href='customer/my_account.php?my_orders'>Mu Account </a>";
                                
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
                        <li class="active">
                            <a href="Order_now.php">Order now</a>
                        </li>
                        <li>                       <li>
                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='checkout.php'> My Account </a>";

                            }else{

                                echo"<a href='customer/my_account.php?my_orders'>Mu Account </a>";
                                
                            }

                        ?>
                        </li>>
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
                    <span><?php items(); ?>items in cart</span>
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
                    <li>Order now</li>
                </ul><!-- breadcrumb ends-->

            </div><!-- col-md-12 ends -->

            <div class="col-md-3"><!-- col-md-3 starts -->

                <?php
                    include("includes/sidebar.php");
                ?>

            </div><!-- col-md-3 ends -->

            <div class="col-md-9"><!-- col-md-9 starts -->

                <?php

                    if(!isset($_GET['p_cat'])){
                        
                        echo"
                        
                            <div class='box'>
                                <h1>Order now</h1>
                                <p>Order From us and get quality services.</p>
                            </div>
                        
                        ";

                    }

                ?>                

                <div class="row"><!-- row starts -->

                    <?php

                        if(!isset($_GET['p_cat'])){
                            
                            $per_page = 6;
                            
                            if(isset($_GET['page'])){

                                $page = $_GET['page'];

                            }else {

                                $page = 1;

                            }

                            $start_from = ($page-1) * $per_page;

                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page"; 

                            $run_products = mysqli_query($con,$get_products);

                            while ($row_products=mysqli_fetch_array($run_products)) {
                                
                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_days = $row_products['days'];

                                $pro_img1 = $row_products['product_img1'];

                                echo"
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>

                                        <div class='product'>

                                            <a href='details.php?pro_id=$pro_id'>

                                                <img src='admin_area/product_images/$pro_img1' class='img-responsive'>

                                            </a>

                                            <div class='text'>

                                                <h3> <a href='details.php?=$pro_id'> $pro_title </a> </h3>

                                                <p class='price'>Price: $$pro_price </p>

                                                <p class='price'>Days: $pro_days </p>

                                                <p class='buttons'>

                                                    <a href='details.php?pro_id='$pro_id' class='btn btn-default'>View details</a>

                                                    <a href='details.php?pro_id='$pro_id' class='btn btn-primary'>

                                                        <i class='fa fa-shopping-cart'></i> Add To Cart
                                                    
                                                    </a> 

                                                </p>

                                            </div>

                                        </div>

                                    </div>
                                
                                ";

                            }
                    ?>          
                    
                </div><!-- row ends -->

                <center><!-- center starts -->

                    <ul  class="pagination"><!-- pagination starts -->

                    <?php

                            $query = "select * from products";

                            $result = mysqli_query($con,$query);

                            $total_records = mysqli_num_rows($result);

                            $total_pages = ceil($total_records / $per_page);

                            echo"
                            
                                <li><a href='shop.php?page=1'>".'First Page'."</a></li>
                            
                            ";

                            for($i=1;$i<$total_pages;$i++){

                                echo"
                                
                                    <li><a href='shop.php?page=".$i."'>".$i."</a></li>
                                
                                ";

                            };

                            echo"
                            
                                <li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
                            
                            
                            ";

                        }
                    

                    ?>

                    </ul><!-- pagination ends -->

                </center><!-- center ends -->

                <div class="row"><!-- row starts --> 

                    <?php
                
                        getpcatpro();
                
                    ?>
                    
                </div><!-- row ends -->

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