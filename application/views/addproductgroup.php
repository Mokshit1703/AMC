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
                            <form method="post" action="<?php echo base_url().'index.php/welcome/addproductgroup';?>">
                              <div class="row">
                                <div class="col-xl-1">
                                </div>
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Product Group Code</h4></label>
                                      <input type="text" name="product_group_code" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('product_group_code');?>">
                                      <?php echo form_error('product_group_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Product Group Name</h4></label>
                                      <input type="text" name="product_group_name" class="form-control border-dark" placeholder="Enter Executive" value= "<?php echo set_value('product_group_name');?>">
                                      <?php echo form_error('product_group_name');?>
                                    </div>                                    
                                  </div><!-- Col -->
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary "><h4>Submit</h4></button>    
                            <a href="<?php echo base_url().'index.php/welcome/addproductgroup';?>" class="btn-secondary btn"><h4>Reset</h4></a>
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