<?php 
// echo set_title('title', 'User');
echo add_assets('header', 
    array(
        '<link rel="stylesheet" href="'.base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').'">',
        '<link rel="stylesheet" href="'.base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css').'">',
        '<link rel="stylesheet" href="'.base_url('assets/bower_components/select2/dist/css/select2.min.css').'">',
        '<link rel="stylesheet" href="'.base_url('assets/plugins/bootoast/bootoast.min.css').'">',
        '<link rel="stylesheet" href="'.base_url('assets/css/trainee.css').'">',
    )
);
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Trainee
            <small>Assign trainee to a batch</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?=base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#">Users</a></li> -->
            <li class="active">Users</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <h1>Orders Info</h1>

                <table border="1px solid red" class="display nowrap" style="width: 100%">
                    <tr>
                        <th>Product Name</th>
                        <th>Order Name</th>
                        <th>Additional Service</th>
                        <th>Sub Total</th>
                        <th>Quantity</th>
                        <th>Vat</th>
                        <th>Delivery Price</th>
                        <th>Total Photo Amount</th>
                    </tr>
                    <?php if($order_file != null): ?>
                        <?php foreach($order_file as $order_info): ?>
                        <tr>
                            <td></td>
                            <td>7</td>
                            <td>6</td>
                            <td>5</td>
                            <td>4</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        No Data Found
                    <?php endif; ?>
                </table>

                <br>
                <h3>Uploaded Files</h3>
                <br>
                
            	<table border="1px solid red" id="example" class="display nowrap" style="width:90%">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Product ID</th>
                            <th class="text-center">File</th>
                            <th class="text-center">Uploaded At</th>
                        </tr>
                    <?php if($view_file != null){ ?>
                    <?php foreach($view_file as $order): ?>
                            <tr>
                                <td align="center"><?= $order->order_id; ?></td>
                                <td align="center"><?= $order->product_id; ?></td>
                                <td align="center"><a href="<?php echo base_url('assets/zip/').$order->file; ?>">Download</a></td>
                                <td align="center"><?= $order->created_on; ?></td>
                            </tr>
                    <?php endforeach; ?>
                    <?php } else{ ?>
                        <tr>
                            <td align="center">NO Data</td>
                            <td align="center">NO Data</td>
                        </tr>
                    <?php } ?>
                </table>
                
            </div>
        </div>
    </section>
</div>



<?php 
echo add_assets('footer', 
    array(
        '<script src="'.base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js').'"></script>',
        '<script src="'.base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js').'"></script>',
        '<script src="'.base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js').'"></script>',
        '<script src="'.base_url('assets/plugins/bootoast/bootoast.min.js').'"></script>',
        '<script src="'.base_url('assets/bower_components/select2/dist/js/select2.full.min.js').'"></script>',
        '<script src="'.base_url('assets/scripts/trainee.js').'"></script>',
        '<script src="'.base_url('assets/scripts/enrol.js').'"></script>',
    )
);
?>
