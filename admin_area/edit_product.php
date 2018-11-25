<?php
    
    if(!isset($_SESSION['admin_email'])){

        echo"<script> window.open('login.php','_self') </script>";

    }else{

?>

<?php

    if(isset($_GET['edit_product'])){

        $edit_id = $_GET['edit_product'];

        $get_p = "select * from products where product_id='$edit_id'";

        $run_edit = mysqli_query($con,$get_p);

        $row_edit = mysqli_fetch_array($run_edit);

        $p_id = $row_edit['product_id'];

        $p_title = $row_edit['product_title'];

        $p_cat = $row_edit['p_cat_id'];

        $days = $row_edit['days'];

        $p_image1 = $row_edit['product_img1'];

        $p_image2 = $row_edit['product_img2'];

        $p_image3 = $row_edit['product_img3'];

        $p_price = $row_edit['product_price'];

        $p_desc = $row_edit['product_desc'];

        $p_keyword = $row_edit['product_keywords'];

    }

    $get_p_cats = "select * from packages_categories where p_cat_id='$p_cat'";

    $run_p_cat = mysqli_query($con,$get_p_cats);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Natours | Edit Products</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <link href="styles/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

    </head>
    
    <body>
    
        <div class="row"><!-- row starts -->
        
            <div class="col-lg-12"><!-- col-lg-12 starts -->
            
                <ol class="breadcrumb"><!-- breadcrumb starts -->
                
                  <li class="active">
                  
                    <i class="fa fa-dashboard"></i>Dashboard / Edit Products
                  
                  </li>
                
                </ol><!-- breadcrumb ends -->

            </div><!-- col-lg-12 ends -->
        
        </div><!-- row ends -->

        <div class="row"> <!-- row2 starts -->
        
            <div class="col-lg-12"><!-- col-lg-12 starts -->
            
                <div class="panel panel-default"><!-- panel panel-default starts -->
                
                    <div class="panel-heading"><!-- panel-heading starts -->
                    
                        <h3 class="panel-title">
                        
                            <i class="fa fa-money fa-fw"></i>Edit Products
                        
                        </h3>

                    </div><!-- panel-heading ends -->

                    <div class="panel-body"><!-- panel-body starts -->
                    
                        <form class="form-horizontal" method="post" enctype="multipart/form-data"> <!-- form-horizontal starts -->
                        
                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Title</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_title" class="form-control" value="<?php echo $p_title; ?>" required>

                                </div>
                            
                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Package Category</label>

                                <div class="col-md-6">

                                    <select name="package_cat" class="form-control">
                                    
                                        <option value="<?php echo $p_cat; ?>" > <?php echo $p_cat_title; ?></option>

                                        <?php

                                            $get_p_cats="select * from packages_categories";

                                            $run_p_cats = mysqli_query($con,$get_p_cats);

                                            while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                                                
                                                $p_cat_id = $row_p_cats['p_cat_id'];

                                                $p_cat_title = $row_p_cats['p_cat_title'];

                                                echo"<option value='$p_cat_id'>$p_cat_title</option>";

                                            }

                                        ?>
                                    
                                    </select>
                                    
                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Days</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_days" class="form-control" value="<?php echo $days; ?>"required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Image 1</label>

                                <div class="col-md-6">

                                    <input type="file" name="product_img1" class="form-control" required>
                                    <br>
                                    <img src="product_images/<?php echo $p_image1; ?>" width="70" height="70">

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Image 2</label>

                                <div class="col-md-6">

                                    <input type="file" name="product_img2" class="form-control" required>
                                    <br>
                                    <img src="product_images/<?php echo $p_image2; ?>" width="70" height="70">

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Image 3</label>

                                <div class="col-md-6">

                                    <input type="file" name="product_img3" class="form-control" required>
                                    <br>
                                    <img src="product_images/<?php echo $p_image3; ?>" width="70" height="70">

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Price</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_price" class="form-control" value="<?php echo $p_price; ?>" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label">Product Keywords</label>

                                <div class="col-md-6">

                                    <input type="text" name="product_keywords" class="form-control" value="<?php echo $p_keyword; ?>" required>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                                        
                                <label class="col-md-3 control-label">Product Description</label>

                                <div class="col-md-6">

                                    <textarea name="product_desc" class="form-control" rows="6" cols="19"><?php echo $p_desc; ?></textarea>

                                </div>

                            </div><!-- form-group ends -->

                            <div class="form-group"><!-- form-group starts -->
                            
                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6">

                                    <input type="submit" name="update" value="Update Product" class="btn btn-primary form-control">
                                </div>

                            </div><!-- form-group ends -->

                        </form> <!-- form-horizontal ends -->
                    
                    </div><!-- panel-body ends -->
                
                </div><!-- panel panel-default ends -->

            </div><!-- col-lg-12 ends -->
        
        </div><!-- row2 ends -->

    </body>

</html>


<?php

    if(isset($_POST['update'])){
        $product_title = $_POST['product_title'];
        $package_cat = $_POST['package_cat'];
        $product_days = $_POST['product_days'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];
        
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_namel = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_namel,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        $update_product = "update products set p_cat_id='$package_cat',product_title='$product_title',days='$days',product_price='$product_price',product_keywords='$product_keywords',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3'";

        $run_update_product = mysqli_query($con,$update_product);

        if($run_update_product){
            echo"<script>alert('Product has been updated successfully')</script>";
            echo"<script>window.open('index.php?view_products','_self')</script>";
        }
    }

?>

<?php 

    }

?>