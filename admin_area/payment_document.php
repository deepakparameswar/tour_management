<?php 

    include("includes/db.php");

    $get_doc = "select * from payments";

    $run_doc = mysqli_query($con,$get_doc);

    $data = "Payment ID"."Invoice No"."Amount to Be paid"."Payment Mode"."Ref No"."Payment Date"."\n";

while($row = mysqli_fetch_array($run_doc)) {

  $data .= $row['payment_id'].",".$row['invoice_no'].",".$row['amount'].",".$row['payment_mode'].",".$row['ref_no'].",".$row['payment_date']."\n";
  
}

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="filename.csv"');
echo $data; exit();
?>