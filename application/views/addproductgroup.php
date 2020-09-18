<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h4>Add New Executive:</h4></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/addproductgroup';?>">
                              <div class="row">
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h5>Product Group Code</h5></label>
                                      <input type="text" name="product_group_code" class="form-control" placeholder="Enter Executive" value= "<?php echo set_value('product_group_code');?>">
                                      <?php echo form_error('product_group_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Product Group Name</h5></label>
                                      <input type="text" name="product_group_name" class="form-control" placeholder="Enter Executive" value= "<?php echo set_value('product_group_name');?>">
                                      <?php echo form_error('product_group_name');?>
                                    </div>                                    
                                  </div><!-- Col -->
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary ">Submit</button>    
                            <a href="<?php echo base_url().'index.php/welcome/addproductgroup';?>" class="btn-secondary btn">Reset</a>
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