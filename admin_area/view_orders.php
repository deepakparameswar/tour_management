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
                                
                                    <th>Order ID</th>
                                    <th>Customer ID</th>
                                    <th>Due_amount</th>
                                    <th>Invoice No</th>
                                    <th>Qty</th>
                                    <th>Starting Date</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>

                                </tr>

                            </thead>

                            <tbody>
                            
                                <?php

                                    $get_ord = "select * from customer_orders";

                                    $run_ord = mysqli_query($con,$get_ord);

                                    while($row_pro=mysqli_fetch_array($run_ord)){

                                          $order_id = $row_pro['order_id'];
                                          
                                          $customer_id = $row_pro['customer_id'];

                                          $due_amount = $row_pro['due_amount'];

                                          $invoice_no = $row_pro['invoice_no'];

                                          $qty = $row_pro['qty'];

                                          $s_date = $row_pro['s_date'];

                                          $order_date = $row_pro['order_date'];

                                          $order_status = $row_pro['order_status'];

                                ?>

                                <tr>
                                
                                    <td><?php echo $order_id ?></td>

                                    <td><?php echo $customer_id ?></td>

                                    <td><?php echo $due_amount ?></td>

                                    <td><?php echo $invoice_no ?></td>

                                    <td><?php echo $qty ?></td>

                                    <td><?php echo $s_date ?></td>

                                    <td><?php echo $order_date ?></td>

                                    <td><?php echo $order_status ?></td>

                                <?php } ?>
                            
                            </tbody>
                        
                        </table>

                        <div class="text-left"><!-- text-right starts -->

                            <a href="orders_document.php">Generate Document</a>

                        </div><!-- text-right ends -->

                    </div>
                
                </div>
            
            </div>

        </div>


    </div>

<?php } ?>