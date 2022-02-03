<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Edit Product</title>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1<center>Edit Product</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('product/update');?>" method="post">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name" value="<?php echo $product_name;?>" placeholder="Product Name">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="product_price" value="<?php echo $product_price;?>" placeholder="Price">
    </div>
    <input type="hidden" name="product_id" value="<?php echo $product_id?>">
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>

    <script src="<?php echo base_url('asset/js/jquer.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>