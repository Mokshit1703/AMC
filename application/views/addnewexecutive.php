<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h1>Add New Customer:</h1></h6><br>
                            <form method="post" action="<?php echo base_url().'/index.php/welcome/addnewcustomer/';?>">
                            <div class="row">
                                <div class="col-xl-1">
                                </div>
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Executive Code</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Executive">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Executive Name</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Executive">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Executive Type</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Executive">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Email Address</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Executive">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Address</h4></label>
                                      <textarea rows="4" type="text" class="form-control border-dark" placeholder="Enter Address"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Mobile No.</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Executive">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Password</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Executive">
                                    </div>
                                    
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="separator separator-dashed my-10">
								</div>
                            </form>
                            
                            <div class="form-group align-center">
                            <button type="button" class="btn btn-primary "><h4>Submit</h4></button>    
                            <button type="reset" class="btn-secondary btn"><h4>Reset</h4></button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>          		
        </div>
    </div>
</div>
<?php include('footer.php'); ?>