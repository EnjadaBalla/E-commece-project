<?php
include('../db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .top {
            font-size: 28px;
            background-color: #e6e6e6;
            text-align: center;
            padding: 8px 0;
            margin-bottom: 20px;
            box-shadow: 0 -20px 15px -10px rgba(155, 155, 155, 0.3) inset,
                0 20px 15px -10px rgba(155, 155, 155, 0.3) inset,
                0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>


</head>

<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="top">
                <i class="fa fa-dashboard fa-fw">
                </i> <a href="index.php">Fashion Store Dashboard </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insert Product Category
                    </h3>
                </div>

                <div class="panel-body">
				<br><br>
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Category</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="product_category" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-md-3 control-label">Category Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="category_description" required>
                            </div>
                        </div>

                        

                        <div class="form-group" style="display: flex;justify-content:center">
                            <div class="col-md-3">
                                <input name="submit" type="submit" class="btn btn-primary form-control" value="Insert Category">
                            </div>
                        </div>

                    </form>
					<br><br>

                </div>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="tinymce/tinymce.min.js"></script>

</body>

</html>


<?php

if (isset($_POST['submit'])) {

    $p_cat = $_POST['product_category'];
    $cat_desc = $_POST['category_description'];
    

    $insert_product = "Insert into product_categories (p_cat_title,p_cat_desc)
    values ('$p_cat','$cat_desc')";

    $run_insert_product = mysqli_query($con, $insert_product);

    if ($run_insert_product) {
        echo "<script>alert('Category Inserted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>