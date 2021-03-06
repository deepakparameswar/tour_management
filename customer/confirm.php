<?php

    session_start();

    if(!isset($_SESSION['customer_email'])){

        echo"<script>window.open('../checkout.php','_self')</script>";

    }else{   

    include("includes/db.php");

    include("functions/functions.php");

    if(isset($_GET['order_id'])){

        $order_id = $_GET['order_id'];

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
                    Sopping Cart Total Price: <?php total_price(); ?>, Total Item <?php items() ?>
                </a>

            </div> <!-- col-md-6 offer ends -->

            <div class="col-md-6"> <!-- col-md-6 starts -->
                <ul class="menu"><!-- menu starts -->
                    <li><a href="../customer_register.php">Register</a></li> 
                    <li>
                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='../checkout.php'> My Account </a>";

                            }else{

                                echo"<a href='customer/my_account.php?my_orders'>My Account </a>";
                                
                            }

                        ?>
                    </li>
                    <li><a href="../cart.php">Go to Cart</a></li>
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../Order_now.php">Order now</a>
                        </li>
                        <li class="active">
                        
                            <?php

                            if(!isset($_SESSION['customer_email'])){

                                echo"<a href='../checkout.php'> My Account </a>";

                            }else{

                                echo"<a href='customer/my_account.php?my_orders'>My Account </a>";
                                
                            }

                            ?>
                    
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>
                    </ul> <!-- nav navbar-nav navbar-left ends-->
                </div> <!-- padding-nav ends -->

                <a href="cart.php" class="btn btn-primary navbar-btn right"> <!-- btn btn-primary navbar-btn right starts -->
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items() ?> items in cart</span>
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
                    <li>My Account</li>
                </ul><!-- breadcrumb ends-->

            </div><!-- col-md-12 ends -->

            <div class="col-md-3"><!-- col-md-3 starts -->

                <?php
                    include("includes/sidebar.php");
                ?>

            </div><!-- col-md-3 ends -->

            <div class="col-md-9"><!-- col-md-9 starts -->
            
                <div class="box"><!-- box stsrts -->
                
                    <h1 align="center"> Please Confirm Your Payment </h1>

                    <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
                    
                        <div class="form-group">
                        
                            <label>Invoice No:</label>
                            <input type="text" class="form-control" name="invoice_no" required>
                        
                        </div>

                        <div class="form-group">
                        
                            <label>Amount Send:</label>
                            <input type="text" class="form-control" name="amount_sent" required>
                        
                        </div>

                        <div class="form-group">
                        
                            <label>Select Payment Mode:</label>
                            <select name="payment_mode" class="form-control">
                            
                                <option>Select Payment Mode</option>
                                <option>Bank Code</option>
                                <option>Paypal</option>
                                <option>Western Union</option>

                            </select>
                        </div>

                        <div class="form-group">
                        
                            <label>Transaction/Reference Id:</label>
                            <input type="text" class="form-control" name="ref_no" required>
                        
                        </div>

                        <div class="form-group">
                        
                            <label>Payment Date:</label>
                            <input type="date" class="form-control" name="payment_date" required>
                        
                        </div>

                        <div class="text-center">
                        
                            <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
                            
                                <i class="fa fa-user-md"></i>Confirm Payment

                            </button>

                        </div>

                    
                    </form>

                    <?php
                    
                            if(isset($_POST['confirm_payment'])){

                                $update_id = $_GET['update_id'];

                                $invoice_no = $_POST['invoice_no'];

                                $amount = $_POST['amount_sent'];

                                $payment_mode = $_POST['payment_mode'];

                                $ref_no = $_POST['ref_no'];

                                $payment_date = $_POST['payment_date'];

                                $complete = "Complete";

                                $insert_payment = "insert into payments(invoice_no,amount,payment_mode,ref_no,payment_date) values('$invoice_no','$amount','$payment_mode','$ref_no','$payment_date')";

                                $run_payment = mysqli_query($con,$insert_payment);

                                $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id' ";

                                $run_customer_order = mysqli_query($con,$update_customer_order);

                                $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

                                $run_pending_order = mysqli_query($con,$update_pending_order);

                                if($run_pending_order){

                                    echo"<script>alert('your Payment has been received,order will be completed in 24 hours')</script>";

                                    echo"<script>window.open('my_account.php?my_orders','_self')</script>";

                                }

                            }

                    ?>

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

<?php } ?>