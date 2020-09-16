<?php include('header.php'); ?>
<?php include('body.php'); ?>


<div class="page-content">
                <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Product Model</a></li>
						<li class="breadcrumb-item active" aria-current="page">Manage Product Model</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Manage Product Model</h6>
                            <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Product Model Code</th>
                                        <th>Product Model Name</th>
                                        <th>Product Model Type</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Mobile No.</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Function</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($new_product_model)) { foreach($new_product_model as $user){?>
                                <tr>
                                    <td><?php echo $user['Product Model_code'] ?></td>
                                    <td><?php echo $user['Product Model_name'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo $user['Product Model_type'] ?></td>
                                    <td><?php echo $user['address'] ?></td>
                                    <td><?php echo $user['mobile_no'] ?></td>
                                    <td><?php echo $user['password'] ?></td>
                                    <td><?php echo "status"?></td>
                                    <td><?php echo "function" ?></td>
                                </tr>
                                <?php } } else { ?>
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
