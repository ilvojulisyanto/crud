<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan produk</title>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
  <div class="container">
      <h1><center>Tambahkan Produk</center></h1>
      <div class="col-md-6 offset-md-3">
          <form action="<?php echo site_url('product/save');?>"
          method="post">
          <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" name="product_name" placeholder="product Name">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="product_price" placeholder="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

            <!--load jquery js file-->
        <script src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>