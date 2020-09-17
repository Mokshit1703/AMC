<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h1>Add product_serial:</h1></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/edit_product_serial/'. $user['sr_no'];?>">
                              <div class="row">
                                <div class="col-xl-1">
                                </div>
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Product Serial Code</h4></label>
                                      <input type="text" name="product_serial_code" class="form-control border-dark"  value= "<?php echo set_value('product_serial_code',$user['product_serial_code']);?>">
                                      <?php echo form_error('product_serial_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>product Model</h4></label>
                                      <input type="text" name="product_model" class="form-control border-dark"  value= "<?php echo set_value('product_model',$user['product_model']);?>">
                                      <?php echo form_error('product_model');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>product Name</h4></label>
                                      <input type="text" name="product_name" class="form-control border-dark"  value= "<?php echo set_value('product_name',$user['product_name']);?>">
                                      <?php echo form_error('product_name');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Product Price</h4></label>
                                      <input type="text" name="product_price" class="form-control border-dark" value= "<?php echo set_value('product_price',$user['product_price']);?>">
                                      <?php echo form_error('product_price');?>
                                    </div>
                                  </div><!-- Col -->
                                  
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary "><h4>Submit</h4></button>    
                            <a href="<?php echo base_url().'index.php/welcome/manage_product_serial';?>" class="btn-secondary btn"><h4>Reset</h4></a>
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