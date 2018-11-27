<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{
?>

    <div class="row"><!-- row starts -->
        
        <div class="col-lg-12"><!-- col-lg-12 starts -->
        
            <ol class="breadcrumb"><!-- breadcrumb starts -->
            
              <li class="active">
              
                <i class="fa fa-dashboard"></i>Dashboard / View Orders
              
              </li>
            
            </ol><!-- breadcrumb ends -->

        </div><!-- col-lg-12 ends -->
    
    </div><!-- row ends -->

    <div class="row"> <!-- row2 starts -->
        
        <div class="col-lg-12"><!-- col-lg-12 starts -->
        
            <div class="panel panel-default"><!-- panel panel-default starts -->
            
                <div class="panel-heading"><!-- panel-heading starts -->
                
                    <h3 class="panel-title">
                    
                        <i class="fa fa-money fa-fw"></i>View Orders
                    
                    </h3>

                </div><!-- panel-heading ends -->

                <div class="panel-body">
                
                    <div class="table-responsive">
                    
                        <table class="table table-bordered table-hover table-striped">

                            <thead>
                            
                                <tr>
                                
                                    <th>Customer ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Country</th>
                                    <th>Customer City</th>
                                    <th>Customer Contact</th>
                                    <th>Customer Image</th>

                                </tr>

                            </thead>

                            <tbody>
                            
                                <?php

                                    $get_cus = "select * from customers";

                                    $run_cus = mysqli_query($con,$get_cus);

                                    while($row_pro=mysqli_fetch_array($run_cus)){

                                          $cus_id = $row_pro['customer_id'];
                                          
                                          $cus_name = $row_pro['customer_name'];

                                          $cus_email = $row_pro['customer_email'];

                                          $cus_country = $row_pro['customer_country'];

                                          $cus_city = $row_pro['customer_city'];

                                          $cus_contact = $row_pro['customer_contact'];

                                          $cus_img = $row_pro['customer_image'];

                                ?>

                                <tr>
                                
                                    <td><?php echo  $cus_id ?></td>

                                    <td><?php echo $cus_name ?></td>

                                    <td><?php echo $cus_email ?></td>

                                    <td><?php echo $cus_country ?></td>

                                    <td><?php echo $cus_city ?></td>

                                    <td><?php echo $cus_contact ?></td>

                                    <td><img src="../customer/customer_images/<?php echo $cus_img ?>" width="60" height="60"></td>

                                <?php } ?>
                            
                            </tbody>
                        
                        </table>

                        <div class="text-left"><!-- text-right starts -->

                            <a href="customers_document.php">Generate Document</a>

                        </div><!-- text-right ends -->

                    </div>
                
                </div>
            
            </div>

        </div>


    </div>

<?php } ?>