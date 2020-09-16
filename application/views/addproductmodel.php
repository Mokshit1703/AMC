<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h1>Add New Executive:</h1></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/addnewexecutive';?>">
                              <div class="row">
                                <div class="col-xl-1">
                                </div>
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Executive Code</h4></label>
                                      <input type="text" name="executive_code" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('executive_code');?>">
                                      <?php echo form_error('executive_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Executive Name</h4></label>
                                      <input type="text" name="executive_name" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('executive_name');?>">
                                      <?php echo form_error('executive_name');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Executive Type</h4></label>
                                      <input type="text" name="executive_type" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('executive_type');?>">
                                      <?php echo form_error('executive_type');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Email Address</h4></label>
                                      <input type="text" name="email" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('email');?>">
                                      <?php echo form_error('email');?>
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Address</h4></label>
                                      <textarea rows="4" name="address" type="text" class="form-control border-dark" placeholder="Enter Address" value= "<?php echo set_value('address');?>"></textarea>
                                      <?php echo form_error('address');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Mobile No.</h4></label>
                                      <input type="text" name="mobile_no" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('mobile_no');?>">
                                      <?php echo form_error('mobile_no');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Password</h4></label>
                                      <input type="text" name="password" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('password');?>">
                                      <?php echo form_error('password');?>
                                    </div>
                                    
                                  </div><!-- Col -->
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary "><h4>Submit</h4></button>    
                            <a href="<?php echo base_url().'index.php/welcome/addnewexecutive';?>" class="btn-secondary btn"><h4>Reset</h4></a>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>          		
        </div>
    </div>
</div>
<?php include('footer.php'); ?>