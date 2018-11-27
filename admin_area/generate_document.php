<?php 

    include("includes/db.php");

    $get_doc = "select * from pending_orders";

    $run_doc = mysqli_query($con,$get_doc);

    $data = "Order ID"."Customer ID"."Invoice No"."Product ID"."No of Tickets"."Starting Date"."Order Status"."\n";

while($row = mysqli_fetch_array($run_doc)) {

  $data .= $row['order_id'].",".$row['customer_id'].",".$row['invoice_no'].",".$row['product_id'].",".$row['qty'].",".$row['s_date'].",".$row['order_status']."\n";
  
}

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="filename.csv"');
echo $data; exit();
?>