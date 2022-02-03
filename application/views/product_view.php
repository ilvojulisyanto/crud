<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1><center>Product List</center></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <?php
            $count = 0;
            foreach ($product->result() as $row) :
                $count++;
            ?>
            <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $row->product_name;?></td>
                <td><?php echo number_format($row->product_price);?></td>
                <td><a href="<?php echo site_url('product/delete/'.$row->product_id);?>" class="btn btn-sm btn-danger">Delete</a>
                    <a href="<?php echo site_url('product/get_edit/'.$row->product_id);?>" class="btn btn-sm btn-info">Update</a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>
            </div>

            <!--load jquery js file-->
        <script src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
</body>
</html>