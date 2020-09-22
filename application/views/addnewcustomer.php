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
              <h6 class="card-title">
                <h4>Add New Customer:</h4>
              </h6><br>
              <form method="post" name="addnewcustomer" action="<?php echo base_url() . 'index.php/welcome/addnewcustomer'; ?>">
                <div class="row">
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Mobile no.</h5>
                      </label>
                      <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile No" value="<?php echo set_value('mobile_no'); ?>">
                      <?php echo form_error('mobile_no'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Customer Code</h5>
                      </label>
                      <input type="text" name="customer_code" class="form-control" placeholder="Enter Customer Code" value="<?php echo set_value('customer_code'); ?>">
                      <?php echo form_error('customer_code'); ?>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
                <div class="row">

                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Customer Name</h5>
                      </label>
                      <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name" value="<?php echo set_value('customer_name'); ?>">
                      <?php echo form_error('customer_name'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Company Name</h5>
                      </label>
                      <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name" value="<?php echo set_value('company_name'); ?>">
                      <?php echo form_error('company_name'); ?>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->

                <div class="row">

                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Customer Type</h5>
                      </label>
                      <input type="text" name="customer_type" class="form-control" placeholder="Enter Customer Type" value="<?php echo set_value('customer_type'); ?>">
                      <?php echo form_error('customer_type'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>CITY</h5>
                      </label>
                      <input type="text" name="city" class="form-control" placeholder="Enter City Name" value="<?php echo set_value('city'); ?>">
                      <?php echo form_error('city'); ?>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->

                <div class="row">



                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>STATE</h5>
                      </label>
                      <input type="text" name="state" class="form-control" placeholder="Enter State Name" value="<?php echo set_value('state'); ?>">
                      <?php echo form_error('state'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>ZIP/PinCode</h5>
                      </label>
                      <input type="number" name="zip" class="form-control" placeholder="Enter ZIP/PinCode" value="<?php echo set_value('zip'); ?>">
                      <?php echo form_error('zip'); ?>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->

                <div class="row">


                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Alt. Phone Number</h5>
                      </label>
                      <input type="number" name="alt_phone" class="form-control" placeholder="Enter Alt. Phone Number" value="<?php echo set_value('alt_phone'); ?>">
                      <?php echo form_error('alt_phone'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Email</h5>
                      </label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email-ID" value="<?php echo set_value('email'); ?>">
                      <?php echo form_error('email'); ?>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->

                <div class="row">


                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Password</h5>
                      </label>
                      <input type="text" name="password" class="form-control" placeholder="Enter Password" value="<?php echo set_value('password'); ?>">
                      <?php echo form_error('password'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Note(if any)</h5>
                      </label>
                      <input type="text" name="note" class="form-control" placeholder="Enter Note" value="<?php echo set_value('note'); ?>">
                      <?php echo form_error('note'); ?>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->

                <div class="row">


                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Address</h5>
                      </label>
                      <textarea rows="4" name="address" type="text" class="form-control" placeholder="Enter Address" value="<?php echo set_value('address'); ?>"></textarea>
                      <?php echo form_error('address'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Select file</h5>
                      </label>
                      <div class="card">
                        <div class="card-body">
                          <h6 class="card-title">Add File</h6>
                          <p class="card-description">Upload File Here.</p>
                          <input type="file" name="select_file" id="myDropify" class="border" />
                        </div>
                      </div>
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
                <button class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url() . 'index.php/welcome/addnewcustomer'; ?>" class="btn-secondary btn">Reset</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>