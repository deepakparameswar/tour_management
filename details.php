<?php
    include("includes/db.php");

    include("functions/functions.php");
?>

<?php

    if(isset($_GET['pro_id'])){

        $product_id = $_GET['pro_id'];

        $get_product = "select * from products where product_id='$product_id'";

        $run_product = mysqli_query($con,$get_product);

        $row_product = mysqli_fetch_array($run_product);

        $p_cat_id = $row_product['p_cat_id'];

        $p_title = $row_product['product_title'];

        $pro_price = $row_product['product_price'];

        $pro_desc = $row_product['product_desc'];

        $pro_img1 = $row_product['product_img1'];

        $pro_img2 = $row_product['product_img2'];

        $pro_img3 = $row_product['product_img3'];
        
        $days = $row_product['days'];

        $get_p_cat = "select * from packages_categories where p_cat_id='$p_cat_id'";

        $run_p_cat = mysqli_query($con,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];

    }

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

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    </head>
    
    <body>

    <div id="top"><!-- top starts -->
        <div class="container"><!-- container starts -->
            <div class="col-md-6 offer"><!-- col-md-6 offer starts -->
                <a href="#" class="btn btn-success btn-sm">
                    Welcome :Guest
                </a>
                <a href="#">
                    Sopping Cart Total Price: $100, Total Item 2
                </a>
            </div> <!-- col-md-6 offer ends -->

            <div class="col-md-6"> <!-- col-md-6 starts -->
                <ul class="menu"><!-- menu starts -->
                    <li><a href="customer_register.php">Register</a></li> 
                    <li><a href="checkout.php">My Account</a></li> 
                    <li><a href="cart.php">Go to Cart</a></li>
                    <li><a href="checkout.php">Login</a></li>
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
                        <li>
                            <a href="checkout.php">My Account</a>
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
                    <span>4 items in cart</span>
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

                <div class="row" id=productMain><!-- row starts -->

                    <div class="col-sm-6"><!-- col-sm-6 starts -->

                        <?php

                            echo"
                            
                            <div id='mainImage'>

                                <div id='myCarousel' class='crousel slide' data-ride='carousel'>

                                    <ol class='carousel-indicators'>

                                        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                                        <li data-target='#myCarousel' data-slide-to='1' class='active'></li>
                                        <li data-target='#myCarousel' data-slide-to='2' class='active'></li>
                                    
                                    </ol>

                                    <div class='carousel-inner'>

                                        <div class='item active'>
                                            <center>

                                                <img src='admin_area/product_images/$pro_img1' alt='Product 1' class='img-responsive'>
                                            
                                            </center>
                                        </div>

                                        <div class='item'>

                                            <img src='admin_area/product_images/$pro_img2' alt='Product 1' class='img-responsive'>
                                            
                                        </div>
                                    
                                        <div class='item'>
                                        
                                            <img src='admin_area/product_images/$pro_img3' alt='Product 1' class='img-responsive'>
                                            
                                        </div>

                                    </div>


                                </div>

                            </div>


                            ";

                        ?>

                    </div><!-- col-sm-6 ends -->

                    <div class="col-sm-6"><!-- col-sm-6 starts -->

                        <?php

                            echo"
                            
                                <div class='box'>

                                    <h1 class='text-center'>$p_title</h1>

                                    <br>

                                    <form action='details.php' method='post' class='form-horzontal'>

                                        <div class='form-group'>

                                            <label class='col-md-5 control-label'>From </label>

                                            <div class='col-md-7'>

                                                <input required type='text' name='shootdate1' id='shootdate1' title='Choose your desired date'/>
                                                
                                            </div>

                                        </div>

                                        <br>
                                        <br>

                                        <div class='form-group'>

                                            <label class='col-md-5 control-label'>Price </label>

                                            <div class='col-md-7'>

                                                <p class='price'>$$pro_price </p>
                                                
                                            </div>
                                        
                                        </div>

                                        <br>

                                        <div class='form-group'>

                                            <label class='col-md-5 control-label'>Days </label>

                                            <div class='col-md-7'>

                                                <p class='price'>$days </p>
                                                
                                            </div>
                                        
                                        </div>

                                        <br>

                                        <p class='text-center buttons'>
                                            
                                            <button class='btn btn-primary' type='submit'>
                                        
                                                <i class='fa fa-shopping-cart'></i>Add to Cart
                                            </button>
                                        
                                        </p>

                                    </form>

                                </div>
                            
                            ";

                        ?>
                        
                    </div><!-- col-sm-6 ends -->

                </div><!-- row ends -->

                <div class="box" id="details"><!-- box starts -->

                    <p>

                        <h4>Package details</h4>
                
                    </p>

                    <p>
                        Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the area’s tropical spice plantations.
                    </p>
                    <br>

                    <div class="form-group"><!-- form-group starts -->

                        <h4 class="col-md-5">Rate this product</h4>

                        <div class="col-md-7"><!-- col-md-7 starts -->

                            <button class="btn btn-primary " type="submit">
                                <i class="fa fa-star"></i> Rate product
                            </button> 

                        </div><!-- col-md-7 ends -->     

                    </div><!-- form-group ends -->

                    <br>
                    <br>

                </div><!-- box ends -->

            </div><!-- col-md-9 ends -->

        </div> <!-- container ends -->

    </div> <!-- content ends-->
    

    <?php
        include("includes/footer.php");
    ?>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>

    $( function() {
	   			$( "#shootdate1" ).datepicker({
	   				minDate: 0
	   			});
	  		});
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>



    </body>

</html>