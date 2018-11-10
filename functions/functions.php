<?php

    $db= mysqli_connect("localhost","root","","natours");

    function getPro(){

        global $db;
 
        $get_products = "select * from products order by 1 DESC LIMIT 0,8";//LIMIT 0,8 means that we want only 8 items in the home page uder the section of latest products

        $run_products = mysqli_query($db,$get_products);//to run the query

        while ($row_products=mysqli_fetch_array($run_products)) {
            
            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_title'];

            $pro_days = $row_products['days'];

            $pro_img1 = $row_products['product_img1']; // only one image is needed in the home section 2 other are needed when only the user click view_details button

            echo"
            
                <div class='col-md-4 col-sm-6 single'>

                    <div class='product'>

                        <a href='details.php?pro_id=$pro_id'>
                        
                            <img src='admin_area/product_images/$pro_img1' class='img_responsive';

                        </a>

                        <div class='text'>

                            <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>

                            <p class='price'>$pro_price</p>

                            <p class='buttons'>

                                <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View details</a>

                                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                    <i class='fa fa-shopping-cart'></i>
                                        Add to cart
                                </a>
                            </p>

                        </div>

                    </div>

                </div>
            
            ";

        }


    }

    // getPCats function Starts 

    function getPCats(){

        global $db;

        $get_p_cats = "select * from packages_categories";

        $run_p_cats = mysqli_query($db,$get_p_cats);

        while($row_p_cats = mysqli_fetch_array($run_p_cats)){
            
            $p_cat_id = $row_p_cats['p_cat_id'];

            $p_cat_title = $row_p_cats['p_cat_title'];

            echo " 
            
                <li> <a href='Order_now.php?p_cat=$p_cat_id'> $p_cat_title </a></li>
            
            ";
        }

    }


    function getpcatpro(){

        global $db;

        if(isset($_GET['p_cat'])){


            $p_cat_id = $_GET['p_cat'];

            $get_p_cat = "select * from packages_categories where p_cat_id='$p_cat_id'";

            $run_p_cat = mysqli_query($db,$get_p_cat);

            $row_p_cat = mysqli_fetch_array($run_p_cat);

            $p_cat_title = $row_p_cat['p_cat_title'];

            $p_cat_desc = $row_p_cat['p_cat_desc'];

            $get_products = "select * from products where p_cat_id = '$p_cat_id'";

            $run_products = mysqli_query($db,$get_products);

            $count = mysqli_num_rows($run_products);

            if($count==0){

                echo"
                
                    <div class='box'>

                        <h1>No Packages Found in This Category</h1>

                    </div>
                
                ";

            }else {
                
                echo"
                
                    <div class='box'>
                    
                        <h1>$p_cat_title</h1>

                        <p>$p_cat_desc</p>
                    
                    </div>
                
                ";

            }

            while($row_products = mysqli_fetch_array($run_products)){

                $pro_id = $row_products['product_id'];

                $pro_title = $row_products['product_title'];

                $pro_price = $row_products['product_price'];

                $days = $row_products['days'];

                $pro_img1 = $row_products['product_img1'];

                echo"
                
                    <div class='col-md-4 col-md-6 center-responsive'>
                    
                        <div class='product'>

                            <a href='details.php?pro_id=$pro_id'>

                                <img src='admin_area/product_images/$pro_img1' class='img-responsive'>

                            </a>

                            <div class='text'>
                            
                                <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>

                                <p class='price'>$$pro_price</p>

                                <p class='price>$days</p>

                                <p class='buttons'>

                                    <a href='details.php?pro_id=$pro_id' class='btn btn-default'> View Details </a>

                                    <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>

                                        <i class='fa fa-shopping-cart'></i> Add to cart

                                    </a>
                                
                                </p>

                            </div>

                        </div>
                    
                    </div>
                
                ";
            }

        }

    }

?>