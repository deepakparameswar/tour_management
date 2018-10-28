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

?>