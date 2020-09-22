<?php include('header.php'); ?>
<?php include('body.php'); ?>


<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Product Group</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Manage Product Group</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Product Group Code</th>
                                    <th>Product Group Name</th>
                                    <th>Status</th>
                                    <th>Function</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($new_product_group)) {
                                    foreach ($new_product_group as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['product_group_code'] ?></td>
                                            <td><?php echo $user['product_group_name'] ?></td>
                                            <td><?php echo "status" ?></td>
                                            <td>
                                                <div class="btn-group flex-wrap">
                                                    <button type="button" class="mb-1 mt-1 mr-1 btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
                                                        <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu" x-placement="bottom-start">
                                                        <a class="dropdown-item text-1" href="<?php echo base_url() . 'index.php/welcome/edit_product_group/' . $user['sr_no'] ?>">
                                                            <i class="" data-feather="edit"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item text-1" href="<?php echo base_url() . 'index.php/welcome/delete_product_group/' . $user['sr_no'] ?>">
                                                            <i class="" data-feather="delete"></i> Delete
                                                        </a>
                                                    </div>
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