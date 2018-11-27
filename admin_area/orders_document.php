<?php 

    include("includes/db.php");

    $get_doc = "select * from customer_orders";

    $run_doc = mysqli_query($con,$get_doc);

    $data = "Order ID"."Customer ID"."Due Amount"."Invoice No"."No of Tickets"."Starting Date"."Order Date"."Order Status"."\n";

while($row = mysqli_fetch_array($run_doc)) {

  $data .= $row['order_id'].",".$row['customer_id'].",".$row['due_amount'].",".$row['invoice_no'].",".$row['qty'].",".$row['s_date'].",".$row['order_date'].",".$row['order_status']."\n";
  
}

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="filename.csv"');
echo $data; exit();
?>