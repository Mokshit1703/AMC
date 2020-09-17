<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
  <div class="row">
    <div class="col-xl-1">
    </div>
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">              
        <div class="col-md-12 stretch-card">
          <div class="card card-custom">
            <div class="card-body">
              <h6 class="card-title"><h1>Add New Customer:</h1></h6><br>
              <form method="post" name="addnewcustomer" action="<?php echo base_url().'index.php/welcome/addnewcustomer';?>">
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Mobile no.</h4></label>
                                        <input type="number" name="mobile_no" class="form-control border-dark" placeholder="Enter Mobile No" value= "<?php echo set_value('mobile_no');?>">
                                        <?php echo form_error('mobile_no');?>
                                      </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Customer Code</h4></label>
                                        <input type="text" name="customer_code" class="form-control border-dark" placeholder="Enter Customer Code" value= "<?php echo set_value('customer_code');?>">
                                        <?php echo form_error('customer_code');?>
                                      </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Customer Name</h4></label>
                                        <input type="text" name="customer_name" class="form-control border-dark" placeholder="Enter Customer Name" value= "<?php echo set_value('customer_name');?>">
                                        <?php echo form_error('customer_name');?>
                                      </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Company Name</h4></label>
                                        <input type="text" name="company_name" class="form-control border-dark" placeholder="Enter Company Name" value= "<?php echo set_value('company_name');?>">
                                        <?php echo form_error('company_name');?>
                                      </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Customer Type</h4></label>
                                        <input type="text" name="customer_type" class="form-control border-dark" placeholder="Enter Customer Type" value= "<?php echo set_value('customer_type');?>">
                                        <?php echo form_error('customer_type');?>
                                      </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>CITY</h4></label>
                                        <input type="text" name="city" class="form-control border-dark" placeholder="Enter City Name"  value= "<?php echo set_value('city');?>">
                                        <?php echo form_error('city');?>
                                      </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    
                                    
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>STATE</h4></label>
                                        <input type="text" name="state" class="form-control border-dark" placeholder="Enter State Name" value= "<?php echo set_value('state');?>">
                                        <?php echo form_error('state');?>
                                      </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>ZIP/PinCode</h4></label>
                                        <input type="number" name="zip" class="form-control border-dark" placeholder="Enter ZIP/PinCode" value= "<?php echo set_value('zip');?>" >
                                        <?php echo form_error('zip');?>
                                      </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Alt. Phone Number</h4></label>
                                        <input type="number" name="alt_phone" class="form-control border-dark" placeholder="Enter Alt. Phone Number"  value= "<?php echo set_value('alt_phone');?>">
                                        <?php echo form_error('alt_phone');?>
                                      </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Email</h4></label>
                                        <input type="email" name="email" class="form-control border-dark" placeholder="Enter Email-ID"  value= "<?php echo set_value('email');?>" >
                                        <?php echo form_error('email');?>
                                    </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Password</h4></label>
                                        <input type="text" name="password" class="form-control border-dark" placeholder="Enter Password"  value= "<?php echo set_value('password');?>" >
                                        <?php echo form_error('password');?>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Note(if any)</h4></label>
                                        <input type="text" name="note" class="form-control border-dark" placeholder="Enter Note"  value= "<?php echo set_value('note');?>" >
                                        <?php echo form_error('note');?>
                                      </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  
                                  <div class="row">
                                    <div class="col-xl-1">
                                    </div>
                                    
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Address</h4></label>
                                        <textarea rows="4" name="address" type="text" class="form-control border-dark" placeholder="Enter Address" value= "<?php echo set_value('address');?>"></textarea>
                                        <?php echo form_error('address');?>
                                      </div>
                                    </div><!-- Col -->
                                    <div class="col-lg-5 my-2 ">
                                      <div class="form-group">
                                        <label class="control-label"><h4>Select file</h4></label>
                                        <div class="card">
                                          <div class="card-body">
                                            <h6 class="card-title">Add File</h6>
                                            <p class="card-description">Upload File Here.</p>
                                            <input type="file" name="select_file" id="myDropify" class="border"/>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!-- Col -->
                                  </div><!-- Row -->
                                  <button  class="btn btn-primary">Submit</button>
                                  <a href="<?php echo base_url().'index.php/welcome/addnewcustomer';?>" class="btn-secondary btn">Reset</a>
              </form>
            </div>
          </div>
        </div>		            		
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>