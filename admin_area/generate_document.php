<?php 

    include("includes/db.php");

    $get_doc = "select * from customers";

    $run_doc = mysqli_query($con,$get_doc);

    $data = "customer id"."customer name"."\n";

while($row = mysqli_fetch_array($run_doc)) {

  $data .= $row['customer_id'].",".$row['customer_name']."\n";
  
}

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="filename.csv"');
echo $data; exit();
?>