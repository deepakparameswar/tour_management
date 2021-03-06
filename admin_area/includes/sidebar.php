<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{
?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top  starts -->

    <div class="navbar-header"> <!-- navbar-header starts -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <!-- navbar-ex1-collapse starts -->
            <span class="sr-only"> Toggle Navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

        </button><!-- navbar-ex1-collapse ends -->

            <a href="index.php?dashboard" class="navbar-brand"> Admin panel</a>

    </div> <!-- navbar-header ends -->

    <ul class="nav navbar-right top-nav"> <!-- nav navbar-right top-nav starts -->

        <li><!-- dropdown starts -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle starts -->

                <i class="fa fa-user"></i>

                <?php echo $admin_name ?><b class="caret"></b>

            </a><!-- dropdown-toggle ends -->

        </li><!-- dropdown ends -->

    </ul> <!-- nav navbar-right top-nav ends -->

    <div class="collapse navbar-collapse navbar-ex1-collapse"> <!-- navbar-collapse navbar-ex1-collapse starts -->
    
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav starts -->
        
            <li> <!-- li starts -->
            
                <a href="index.php?dashboard">
                    
                    <i class="fa fa-fw fa-dashboard"></i>Dashboard

                </a>

            </li> <!-- li ends -->

            <li> <!-- li starts -->
            
                <a href="#" data-toggle="collapse" data-target="#products">
                    
                    <i class="fa fa-fw fa-table"></i>Products

                    <i class="fa fa-fw fa-caret-down"></i>

                </a>

                <ul id="products" class="collapse">
                
                    <li>
                        <a href="index.php?insert_product">Insert Products</a>
                    </li>

                    <li>

                        <a href="index.php?view_products">View Products</a>
                    
                    </li>
                
                </ul>

            </li> <!-- li ends -->

            <li> <!-- li starts -->
            
            <a href="#" data-toggle="collapse" data-target="#products_categories">
                
                <i class="fa fa-fw fa-table"></i>Products Categories

                <i class="fa fa-fw fa-caret-down"></i>

            </a>

            <ul id="products_categories" class="collapse">
            
                <li>
                    <a href="index.php?insert_p_cat">Insert Products Categories</a>
                </li>

                <li>

                    <a href="index.php?view_p_cat">View Products Categories</a>
                
                </li>
            
            </ul>

        </li> <!-- li ends -->

        <li>
        
            <a href="index.php?view_customers" >

                <i class="fa fa-fw fa-edit"></i>View Customers
            
            </a>

        </li>

        <li>
        
            <a href="index.php?view_orders">

                <i class="fa fa-fw fa-list"></i>View Orders

            </a>
        </li>

        <li>
    
            <a href="index.php?view_payments">

                <i class="fa fa-fw fa-pencil"></i>View Payments

            </a>

        </li>

        <li><!-- li starts -->
        
            <a href="logout.php">

                <i class="fa fa-fw fa-power-off"></i>Log Out

            </a>

        </li><!-- li ends -->
        
        </ul><!-- nav navbar-nav side-nav ends -->

    </div><!-- navbar-collapse navbar-ex1-collapse ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top  ends -->

<?php } ?>