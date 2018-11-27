<?php 

    include("includes/db.php");

    $get_doc = "select * from customers";

    $run_doc = mysqli_query($con,$get_doc);

    $data = "Customer ID"."Customer Name"."Customer Email"."Customer Country"."Customer City"."Customer Contact"."\n";

while($row = mysqli_fetch_array($run_doc)) {

  $data .= $row['customer_id'].",".$row['customer_name'].",".$row['customer_email'].",".$row['customer_country'].",".$row['customer_city'].",".$row['customer_contact']."\n";
  
}

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="filename.csv"');
echo $data; exit();
?>