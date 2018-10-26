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
                        <li>
                            <a href="Order_now.php">Order now</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
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
                    <li>Cart</li>
                </ul><!-- breadcrumb ends-->

            </div><!-- col-md-12 ends -->

            <div class="col-md-9" id="cart"><!-- col-md-9 starts  -->

                <div class="box"><!-- box starts -->
                
                    <form action="cart.php" method="post" enctype="multipart-form-data">
                    
                        <h1>Shopping Cart</h1>

                        <p class="text-muted">You currently have 3 item(s) in your cart.</p>

                        <div class="table-responsive"><!-- table-responsive starts -->
                        
                            <table class="table">
                            
                                <thead> <!-- thead starts -->
                                
                                    <tr>
                                    
                                        <th colspan="2">Package</th>

                                        <th>From</th>

                                        <th>To</th>

                                        <th>Price</th>

                                        <th colspan="1">Delete</th>

                                        <th colspan="2">Sub Total</th>

                                    </tr>
                                
                                </thead> <!-- thead ends -->

                                <tbody><!-- tbody starts -->
                                
                                    <tr><!-- tr starts -->
                                    
                                        <td>
                                        
                                            <img src="admin_area/product_images/paris1_258x163.jpg">
                                        
                                        </td>

                                        <td>
                                        
                                            <a href="#">Paris</a>

                                        </td>

                                        <td>
                                        
                                            2/10/18
                                        
                                        </td>

                                        <td>
                                        
                                            2/20/18
                                        
                                        </td>

                                        <td>
                                        
                                            $500
                                        
                                        </td>

                                        <td>
                                        
                                            <input type="checkbox" name="remove[]">  
                                        
                                        </td>
                                        
                                        <td>
                                        
                                            $500
                                        
                                        </td>
                                    
                                    </tr><!-- tr ends -->
                                

                                    <tr><!-- tr starts -->
                                    
                                        <td>
                                    
                                            <img src="admin_area/product_images/goa.jpg">
                                    
                                        </td>

                                        <td>
                                    
                                            <a href="#">Goa</a>

                                        </td>

                                        <td>
                                    
                                            2/20/18
                                    
                                        </td>

                                        <td>
                                    
                                            2/28/18
                                    
                                        </td>

                                        <td>
                                    
                                            $100
                                    
                                        </td>

                                        <td>
                                    
                                            <input type="checkbox" name="remove[]">  
                                    
                                        </td>
                                    
                                        <td>
                                    
                                            $100
                                    
                                        </td>
                                
                                    </tr><!-- tr ends -->

                                </tbody><!-- tbody ends -->

                                <tfoot><!-- tfoot starts -->

                                    <tr>

                                        <th colspan="5">Total</th>

                                        <th colspan="2">$600</th>

                                    </tr>                                    

                                </tfoot><!-- tfoot ends -->

                            </table>

                        </div><!-- table-responsive ends -->

                        <div class="box-footer"><!-- box-footer starts -->

                            <div class="pull-left"><!-- pull-left starts -->

                                <a href="index.php" class="btn btn-default">

                                    <i class="fa fa-chevron-left"></i>Continue

                                </a>

                            </div><!-- pull-left ends -->

                            <div class="pull-right"><!-- pull-right starts -->

                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">

                                <i class="fa fa-refresh"></i>Update Cart

                                </button>

                                <a href="checkout.php" class="btn btn-primary">

                                    Proceed to checkout <i class="fa fa-chevron-right"></i>

                                </a>

                            </div><!-- pull-right ends -->

                        </div><!-- box-footer ends -->
                        

                    </form>

                </div><!-- box ends -->

            </div><!-- col-md-9 ends -->

            <div class="col-md-3"><!-- col-md-3 starts -->

                <div class="box" id="order-summary"><!-- box starts -->

                    <div class="box-header"><!-- box-header starts -->

                        <h3>Booking Summary</h3>

                    </div><!-- box-header ends -->

                    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered</p>

                    <div class="table-responsive"><!-- table-responsive starts -->

                        <table class="table"><!-- table starts -->

                            <tbody><!-- tbody starts -->

                                <tr>

                                    <td>Order Subtotal</td>
                                    <th>$600.00</th>

                                </tr>

                                <tr>

                                    <td>Additional Taxs</td>

                                    <td>$0.00</td>

                                </tr>

                                <tr class="total">

                                    <td>Total</td>

                                    <th>$600.00</th>

                                </tr>

                            </tbody><!-- tbody ends -->

                        </table><!-- table ends -->

                    </div><!-- table-responsive ends -->

                </div><!-- box ends -->

            </div><!-- col-md-3 ends -->

        </div> <!-- container ends -->

    </div> <!-- content ends-->
    

    <?php
        include("includes/footer.php");
    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

    </body>

</html>