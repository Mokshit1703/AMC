<?php include('header2.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h4>Edit Executive:</h4></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/edit_executive/'. $user['sr_no'];?>">
                              <div class="row">
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h5>Executive Code</h5></label>
                                      <input type="text" name="executive_code" class="form-control"  value= "<?php echo set_value('executive_code',$user['executive_code']);?>">
                                      <?php echo form_error('executive_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Executive Name</h5></label>
                                      <input type="text" name="executive_name" class="form-control"  value= "<?php echo set_value('executive_name',$user['executive_name']);?>">
                                      <?php echo form_error('executive_name');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Executive Type</h5></label>
                                      <input type="text" name="executive_type" class="form-control"  value= "<?php echo set_value('executive_type',$user['executive_type']);?>">
                                      <?php echo form_error('executive_type');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Email Address</h5></label>
                                      <input type="text" name="email" class="form-control"  value= "<?php echo set_value('email',$user['email']);?>">
                                      <?php echo form_error('email');?>
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h5>Address</h5></label>
                                      <textarea rows="4" name="address" type="text" class="form-control" value= "<?php echo set_value('address',$user['address']);?>"></textarea>
                                      <?php echo form_error('address');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Mobile No.</h5></label>
                                      <input type="text" name="mobile_no" class="form-control"  value= "<?php echo set_value('mobile_no',$user['mobile_no']);?>">
                                      <?php echo form_error('mobile_no');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Password</h5></label>
                                      <input type="text" name="password" class="form-control"  value= "<?php echo set_value('password',$user['password']);?>">
                                      <?php echo form_error('password');?>
                                    </div>
                                    
                                  </div><!-- Col -->
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary ">Update</button>    
                            <a href="<?php echo base_url().'index.php/welcome/manageexecutive';?>" class="btn-secondary btn">Cancle</a>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>          		
        </div>
    </div>
</div>
<?php include('footer2.php'); ?>