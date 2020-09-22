<?php include('header.php'); ?>
<?php include('body.php'); ?>



<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Product AMC</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Product AMC</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Manage Product AMC</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Code</th>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Mobile No.</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($product_amc)) {
                                    foreach ($product_amc as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['sr_no'];  ?></td>
                                            <td><?php echo $user['customer_code']; ?></td>
                                            <td><?php echo $user['customer_name']; ?></td>
                                            <td><?php echo $user['address']; ?></td>
                                            <td><?php echo $user['mobile_no']; ?></td>
                                            <td>
                                                <div class="btn-group d-flex" role="group">
                                                    <a title="Quote AMC without Warranty" href="<?php echo base_url() . 'index.php/welcome/edit_product_amc' ?>" type="button" class="btn btn-primary"> <i class="" data-feather="edit"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="5">Records not found</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>