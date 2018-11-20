<?php

    $db= mysqli_connect("localhost","root","","natours");

    //IP address code starts 

        function getRealUserIp(){

            switch(true){
                case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
                default : return $_SERVER['REMOTE_ADDR'];
                
            }

        }

    //Ip address code ends

    // add to cart starts 

        function add_cart(){

            global $db;

            if(isset($_GET['add_cart'])){

                $ip_add = getRealUserIp();

                $p_id = $_GET['add_cart'];

                $s_date = $_POST['shootdate'];

                $qty = $_POST['qty'];

                $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

                $run_check = mysqli_query($db,$check_product);

                if(mysqli_num_rows($run_check)>0){

                    echo"<script> alert('This Product is already added in cart') </script>";
                    
                    echo"<script> window.open('details.php?pro_id=$p_id','_self') </script>";

                }else{

                    $query = " insert into cart (p_id,ip_add,s_date,qty) values('$p_id','$ip_add','$s_date','$qty')";

                    $run_query = mysqli_query($db,$query);

                    echo" <script> window.open('details.php?pro_id=$p_id','_self') </script> ";

                }

            }

        }

    // add to cart ends 

    //items function starts 

    function items(){

        global $db;

        $ip_add= getRealUserIp();

        $get_items = "select * from cart where ip_add='$ip_add'";

        $run_items = mysqli_query($db,$get_items);

        $count_items = mysqli_num_rows($run_items);

        echo $count_items;

    }

    //items function ends 


    // total_price function starts 

    function total_price(){

        global $db;

        $ip_add = getRealUserIp();

        $total = 0;

        $select_cart = "select * from cart where ip_add='$ip_add'";

        $run_cart = mysqli_query($db,$select_cart);

        while($record = mysqli_fetch_array($run_cart)){

            $pro_id=$record['p_id'];

            $pro_qty=$record['qty'];

            $get_price = "select * from products where product_id='$pro_id'";

            $run_price = mysqli_query($db,$get_price);

            while($row_price=mysqli_fetch_array($run_price)){

                $sub_total = $row_price['product_price']*$pro_qty;

                $total+=$sub_total;

            }

        }

        echo "$". $total;

    }

    // total_price function ends

    function getPro(){

        global $db;
 
        $get_products = "select * from products order by 1 DESC LIMIT 0,8";//LIMIT 0,8 means that we want only 8 items in the home page uder the section of latest products

        $run_products = mysqli_query($db,$get_products);//to run the query

        while ($row_products=mysqli_fetch_array($run_products)) {
            
            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

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

                            <p class='price'>$$pro_price</p>

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