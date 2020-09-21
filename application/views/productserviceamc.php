<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h4>Issue Product & Service of AMC:</h4></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/productserviceamc';?>">
                              <div class="row">
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h5>AMC Code:</h5></label>
                                      <input type="text" name="product_code" class="form-control" placeholder="Enter AMC Code" value= "<?php echo set_value('product_code');?>">
                                      <?php echo form_error('product_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>AMC Date Range:</h5></label>
                                      <h6> From: </h6>
                                      <input type="date" name="product_brand" class="form-control" value= "<?php echo set_value('product_brand');?>">
                                      <?php echo form_error('product_brand');?>
                                      <h6> To: </h6>
                                      <input type="date" name="product_brand" class="form-control"  value= "<?php echo set_value('product_brand');?>">
                                      <?php echo form_error('product_brand');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>New/Renew AMC:</h5></label>
                                      <input type="radio" id="new" name="product_name" class="form-control" placeholder="Enter Product Name" value= "<?php echo set_value('product_name');?>">
                                      <?php echo form_error('product_name');?>
                                      <label for="new"><h6>New Amc</h6></label><br>
                                      <input type="radio" id="renew" name="product_name" class="form-control" placeholder="Enter Product Name" value= "<?php echo set_value('product_name');?>">
                                      <?php echo form_error('product_name');?>
                                      <label for="renew"><h6>Renewal Amc</h6></label><br>
                                    </div>
                                    
                                  </div><!-- Col -->
                                  <div class="col-lg-5 my-2 ">
                                  <div class="form-group">
                                      <label class="control-label"><h5>Customer Name:</h5></label>
                                      <input type="text" name="product_warranty" class="form-control" placeholder="Enter Customer Name" value= "<?php echo set_value('product_warranty');?>">
                                      <?php echo form_error('product_warranty');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Note (If Any): </h5></label>
                                      <textarea rows="4" name="product_details" type="text" class="form-control" placeholder="Enter Note" value= "<?php echo set_value('product_details');?>"></textarea>
                                      <?php echo form_error('product_details');?>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label class="control-label"><h5>Invoice Date:</h5></label>
                                      
                                      <input type="date" name="product_brand" class="form-control" value= "<?php echo set_value('product_brand');?>">
                                      <?php echo form_error('product_brand');?>
                                      
                                    </div>

                                      <div class="form-group">
                                        <label class="control-label"><h5>Select Image</h5></label>
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
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary ">Submit</button>    
                            <a href="<?php echo base_url().'index.php/welcome/productserviceamc';?>" class="btn-secondary btn">Reset</a>
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