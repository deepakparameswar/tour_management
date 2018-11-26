
<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id = '$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$total_records = mysqli_num_rows($run_orders);

$f = (int)$total_records;

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

    $order_id = $row_orders['order_id'];

    $due_amount = $row_orders['due_amount'];

    $invoice_no = $row_orders['invoice_no'];

    $qty = $row_orders['qty'];

    $s_date = $row_orders['s_date'];

    $order_date =substr($row_orders['order_date'],0,11); // substr is an function that used to show only the date

    $order_status = $row_orders['order_status'];

    $i++;

    if($order_status = 'pending'){

        $order_status = "Unpaid";


    }else{

        $order_status = "Paid";

    }

}

?>


<center><!-- center starts -->

    <h1>My Orders</h1>

    <p class="lead"> Your orders on one place. </p>

    <p class="text-muted">If you have any question, please feel free to <a href="../contact.php"> contact us,</a> our customer service is working for u 24/7 </p>

    

</center><!-- center ends -->

<hr>

<?php 
if($f >= 1){
?>

<div class="table-responsive"><!-- table-responsive starts -->

    <table class="table table-bordered table-hover"><!-- table table-bordered table-hover starts -->
    
        <thead><!-- thead starts -->
        
            <tr>
            
                <th>O N:</th>
                <th>Due Amount:</th>
                <th>Invoice No:</th>
                <th>No of tickets:</th>
                <th>Order Date:</th>
                <th>Starting Date</th>
                <th>Paid/Unpaid:</th>
                <th>Status:</th>

            </tr>

        </thead><!-- thead ends -->

        <tbody><!-- tbody starts -->

                <tr>
            
                    <td><?php echo $i; ?></td>
                    <td><?php echo $due_amount; ?></td>
                    <td><?php echo $invoice_no; ?></td>
                    <td><?php echo $qty; ?></td>
                    <td><?php echo $order_date; ?></td>
                    <td><?php echo $s_date; ?></td>
                    <td><?php echo $order_status; ?></td>

                    <td>
                
                        <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-primary btn-sm">Confirm If Paid</a>

                    </td>
            
                </tr>

        </tbody><!-- tbody ends -->
    
    </table><!-- table table-bordered table-hover ends -->

</div><!-- table-responsive ends -->

<?PHP }else{ ?>

<?php echo"
<center>
<h3>At Yet There is No Orders</h3>
</center>
";
}
?>