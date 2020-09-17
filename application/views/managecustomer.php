<?php include('header.php');?>
<?php include('body.php'); ?>
<div class="page-content">
                <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Customer</a></li>
						<li class="breadcrumb-item active" aria-current="page">Manage Customer</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Manage Customer</h6>
                            <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Customer Type</th>
                                        <th>Address</th>
                                        <th>Mobile No.</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th width="60">Edit</th>
                                        <th width="100">Delete</th>
                                        <th>Function</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($new_customer)) { foreach($new_customer as $user){?>
                                <tr>
                                    <td><?php echo $user['sr_no'];  ?></td>
                                    <td><?php echo $user['customer_code']; ?></td>
                                    <td><?php echo $user['customer_name'] ;?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['customer_type']; ?></td>
                                    <td><?php echo $user['address']; ?></td>
                                    <td><?php echo $user['mobile_no']; ?></td>
                                    <td><?php echo $user['password']; ?></td>
                                    <td><?php echo "status"; ?></td>
                                    <td>
                                    <a href="<?php echo base_url().'index.php/welcome/edit_customer/'.$user['sr_no']?>" class="btn btn-primary">
                                        Edit</a>    
                                    </td> 
                                    <td>
                                        <a href="<?php echo base_url().'index.php/welcome/delete_customer/'.$user['sr_no']?>" class="btn btn-danger">
                                        delete</a>    
                                    </td> 
                                    <td><div class="btn-group flex-wrap">
                                            <button type="button" class="mb-1 mt-1 mr-1 btn btn-default dropdown-toggle" data-toggle="dropdown">Action 
                                                <span class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu" role="menu"> 
                                                <a class="dropdown-item " href="<?php echo base_url().'index.php/welcome/edit_customer'.$user['sr_no']?>">
                                                    <i class=""></i> Edit
                                                </a>
                                                <a class="dropdown-item"  href="<?php echo base_url().'index.php/welcome/delete_customer'.$user['sr_no']?>">
                                                    <i class=""></i> Delete
                                                </a>
                    						</div>
                                      </div>
                                    </td>
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
