<?php

    $customer_session = $_SESSION['customer_email'];

    $get_customer = "select * from customers where customer_email='$customer_session'";

    $run_customer = mysqli_query($con,$get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['customer_id'];

    $customer_name = $row_customer['customer_name'];

    $customer_email = $row_customer['customer_email'];

    $customer_country = $row_customer['customer_country'];

    $customer_city = $row_customer['customer_city'];

    $customer_contact = $row_customer['customer_contact'];

    $customer_address = $row_customer['customer_address'];

    $customer_image = $row_customer['customer_image'];


?>



<h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form starts -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Name: </label>
        <input type="text" Name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Email: </label>
        <input type="text" Name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Country: </label>
        <input type="text" Name="c_country" class="form-control" required value="<?php echo $customer_country; ?>">
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer City: </label>
        <input type="text" Name="c_city" class="form-control" required value="<?php echo $customer_city; ?>">
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Contact: </label>
        <input type="text" Name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Address: </label>
        <input type="text" name="c_address"  class="form-control"  required value="<?php echo $customer_address; ?>">
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Image: </label>
        <input type="file" Name="c_image" class="form-control" required><br>
        <img src="customer_images/<?php echo $customer_image; ?>" width="100" height="100" class="img-responsive">
     
    </div><!-- form-group ends -->

    <div class="text-center">
    
        <button Name="update" class="btn btn-primary">
        
            <i class="fa fa-user-md"></i>Update Now
        
        </button>
    
    </div>


</form><!-- form ends -->

<?php 

if(isset($_POST['update'])){

    $c_up_name = $_POST['c_name'];

    $c_up_email = $_POST['c_email'];

    $c_up_country = $_POST['c_country'];

    $c_up_city = $_POST['c_city'];

    $c_up_contact = $_POST['c_contact'];

    $c_up_address = $_POST['c_address'];

    $c_up_image = $_FILES['c_image']['name'];

    $c_up_image_tmp = $_FILES['c_image']['tmp_name'];

    move_uploaded_file($c_up_image_tmp,"customer_images/$c_up_image");

    $update_customer = "update customers set customer_name='$c_up_name',customer_email='$c_up_email', customer_country='$c_up_country',customer_city='$c_up_city',customer_contact='$c_up_contact',customer_address='$c_up_address',customer_image='$c_up_image' where customer_id='$customer_id'";

    $run_update_customer = mysqli_query($con,$update_customer);

    if($run_update_customer){

        echo"<script>alert('You have been Updated Your Account Successfully')</script>";

        echo"<script>window.open('logout.php','_self')</script>";

    }else{

        echo"<script>alert('Somthing Wrong Plz Try again')</script>";

    }

}

?>