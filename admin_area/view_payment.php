<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{
?>

    <div class="row"><!-- row starts -->
        
        <div class="col-lg-12"><!-- col-lg-12 starts -->
        
            <ol class="breadcrumb"><!-- breadcrumb starts -->
            
              <li class="active">
              
                <i class="fa fa-dashboard"></i>Dashboard / View Payments
              
              </li>
            
            </ol><!-- breadcrumb ends -->

        </div><!-- col-lg-12 ends -->
    
    </div><!-- row ends -->

    <div class="row"> <!-- row2 starts -->
        
        <div class="col-lg-12"><!-- col-lg-12 starts -->
        
            <div class="panel panel-default"><!-- panel panel-default starts -->
            
                <div class="panel-heading"><!-- panel-heading starts -->
                
                    <h3 class="panel-title">
                    
                        <i class="fa fa-money fa-fw"></i>View Payments
                    
                    </h3>

                </div><!-- panel-heading ends -->

                <div class="panel-body">
                
                    <div class="table-responsive">
                    
                        <table class="table table-bordered table-hover table-striped">

                            <thead>
                            
                                <tr>
                                
                                    <th>Payment ID</th>
                                    <th>Invoice No</th>
                                    <th>Amount</th>
                                    <th>payment_mode</th>
                                    <th>ref_no</th>
                                    <th>payment_date</th>

                                </tr>

                            </thead>

                            <tbody>
                            
                                <?php

                                    $get_pri = "select * from payments";

                                    $run_pri = mysqli_query($con,$get_pri);

                                    while($row_pro=mysqli_fetch_array($run_pri)){

                                          $pri_id = $row_pro['payment_id'];
                                          
                                          $invoice_no = $row_pro['invoice_no'];

                                          $amount = $row_pro['amount'];

                                          $pay_mode = $row_pro['payment_mode'];

                                          $ref_no = $row_pro['ref_no'];

                                          $pay_date = $row_pro['payment_date'];

                                ?>

                                <tr>
                                
                                    <td><?php echo $pri_id ?></td>

                                    <td><?php echo $invoice_no ?></td>

                                    <td><?php echo $amount ?></td>

                                    <td><?php echo $pay_mode ?></td>

                                    <td><?php echo $ref_no ?></td>

                                    <td><?php echo $pay_date ?></td>

                                <?php } ?>
                            
                            </tbody>
                        

                        </table>

                        <div class="text-left"><!-- text-right starts -->

                            <a href="payment_document.php">Generate Document</a>

                        </div><!-- text-right ends -->

                    </div>
                
                </div>
            
            </div>

        </div>


    </div>

<?php } ?>