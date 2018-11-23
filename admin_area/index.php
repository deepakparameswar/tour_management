<?php
    session_start();
    include("includes/db.php");
    if(!isset($_SESSION['admin_email'])){
        echo"<script> window.open('login.php','_self') </script>";
    }
    else{
?>

<?php

        $admin_session=$_SESSION['admin_email'];

        $get_admin = "select * from admins where admin_email='$admin_session'";

        $run_admin = mysqli_query($con,$get_admin);

        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];

        $admin_name = $row_admin['admin_name'];

        $admin_email = $row_admin['admin_email'];

        $admin_image = $row_admin['admin_image'];

        $admin_country = $row_admin['admin_country'];

        $admin_job = $row_admin['admin_job'];

        $admin_contact = $row_admin['admin_contact'];

        $admin_about = $row_admin['admin_about'];

        

        $get_products = "select * from products";
        $run_products = mysqli_query($con,$get_products);
        $count_products = mysqli_num_rows($run_products);
        
        $get_packages = "select * from packages_categories";
        $run_packages = mysqli_query($con,$get_packages);
        $count_packages = mysqli_num_rows($run_packages);
        
        
        $get_customers = "select * from customers";
        $run_customers = mysqli_query($con,$get_customers);
        $count_customers = mysqli_num_rows($run_customers);

        $get_pending_orders = "select * from pending_orders";
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        $count_pending_orders = mysqli_num_rows($run_pending_orders);
        

?>
<!DOCTYPE html>
<html>
    <head>

        <title>Natours | Admin Panel</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
    </head>

    <body>
        
        <div id="wrapper"><!-- wrapper  starts -->
            <?php include("includes/sidebar.php") ?>
            <div id="page-wrapper"> <!-- page-wrapper starts -->
                <div class="container-fluid"><!-- container-fluid starts -->

                    <?php
                        if(isset($_GET['dashboard'])){
                            include("dashboard.php");
                        }

                        if(isset($_GET['insert_product'])){
                            include("insert_product.php");
                        }

                        if(isset($_GET['view_products'])){
                            include("view_products.php");
                        }
                    ?>

                </div><!-- container-fluid ends -->
            </div><!-- page-wrapper ends -->
        </div><!-- wrapper ends -->


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>


<?php }  ?>