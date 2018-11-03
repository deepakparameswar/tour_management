<h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form starts -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Name: </label>
        <input type="text" Name="c_name" class="form-control" required>
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Email: </label>
        <input type="text" Name="c_email" class="form-control" required>
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Country: </label>
        <input type="text" Name="c_country" class="form-control" required>
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer City: </label>
        <input type="text" Name="c_city" class="form-control" required>
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Contact: </label>
        <input type="text" Name="c_contact" class="form-control" required>
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Address: </label>
        <textarea name="c_address" cols="5" rows="5" class="form-control" required></textarea>
    
    </div><!-- form-group ends -->

    <div class="form-group"><!-- form-group starts -->
    
        <label> Customer Image: </label>
        <input type="file" Name="c_image" class="form-control" required><br>
        <img src="customer_images/deepak.jpg" width="100" height="100" class="img-responsive">
     
    </div><!-- form-group ends -->

    <div class="text-center">
    
        <button Name="update" class="btn btn-primary">
        
            <i class="fa fa-user-md"></i>Update Now
        
        </button>
    
    </div>


</form><!-- form ends -->