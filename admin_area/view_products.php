<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{
?>

    <div class="row"><!-- row starts -->
        
        <div class="col-lg-12"><!-- col-lg-12 starts -->
        
            <ol class="breadcrumb"><!-- breadcrumb starts -->
            
              <li class="active">
              
                <i class="fa fa-dashboard"></i>Dashboard / View Products
              
              </li>
            
            </ol><!-- breadcrumb ends -->

        </div><!-- col-lg-12 ends -->
    
    </div><!-- row ends -->

    <div class="row"> <!-- row2 starts -->
        
        <div class="col-lg-12"><!-- col-lg-12 starts -->
        
            <div class="panel panel-default"><!-- panel panel-default starts -->
            
                <div class="panel-heading"><!-- panel-heading starts -->
                
                    <h3 class="panel-title">
                    
                        <i class="fa fa-money fa-fw"></i>View Products
                    
                    </h3>

                </div><!-- panel-heading ends -->

                <div class="panel-body">
                
                    <div class="table-responsive">
                    
                        <table class="table table-bordered table-hover table-striped">

                            <thead>
                            
                                <tr>
                                
                                    <th>Package ID</th>
                                    <th>Package title</th>
                                    <th>Package Image</th>
                                    <th>Package Price</th>
                                    <th>Tour Days</th>
                                    <th>Product Keywords</th>
                                    <th>Package Sold</th>
                                    <th>package Delete</th>
                                    <th>package Edit</th>

                                </tr>

                            </thead>

                            <tbody>
                            
                                <?php

                                    $i=0;

                                    $get_pro = "select * from products";

                                    $run_pro = mysqli_query($con,$get_pro);

                                    while($row_pro=mysqli_fetch_array($run_pro)){

                                          $pro_id = $row_pro['product_id'];
                                          
                                          $pro_title = $row_pro['product_title'];

                                          $pro_image = $row_pro['product_img1'];

                                          $pro_price = $row_pro['product_price'];

                                          $days = $row_pro['days'];

                                          $pro_keywords = $row_pro['product_keywords'];

                                          $i++;

                                ?>

                                <tr>
                                
                                    <td><?php echo $i ?></td>

                                    <td><?php echo $pro_title ?></td>

                                    <td><img src="product_images/<?php echo $pro_image ?>" width="60" height="60"></td>

                                    <td><?php echo $pro_price ?></td>

                                    <td><?php echo $days ?></td>

                                    <td><?php echo $pro_keywords ?></td>

                                    <td>
                                    
                                        <?php

                                            $get_sold = "select * from pending_orders where product_id='$pro_id'";

                                            $run_sold = mysqli_query($con,$get_sold);

                                            $count = mysqli_num_rows($run_sold);

                                            echo $count;

                                        ?>

                                    </td>

                                
                                </tr>

                                <?php } ?>
                            
                            </tbody>
                        


                        </table>

                    </div>
                
                </div>
            
            </div>

        </div>


    </div>

<?php } ?>