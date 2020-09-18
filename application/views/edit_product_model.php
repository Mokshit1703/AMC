<?php include('header2.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h4>Edit Product Model:</h4></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/edit_product_model/'. $user['sr_no'];?>">
                              <div class="row">
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h5>Product Model Code</h5></label>
                                      <input type="text" name="product_model_code" class="form-control" value= "<?php echo set_value('product_model_code',$user['product_model_code']);?>">
                                      <?php echo form_error('product_model_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Product Model Name</h5></label>
                                      <input type="text" name="product_model_name" class="form-control" value= "<?php echo set_value('product_model_name',$user['product_model_name']);?>">
                                      <?php echo form_error('product_model_name');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h5>Select Product</h5></label>
                                      <input type="text" name="select_product" class="form-control"  value= "<?php echo set_value('select_product',$user['select_product']);?>">
                                      <?php echo form_error('select_product');?>
                                    </div>
                                    
                                  </div><!-- Col -->
                                  
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary ">Update</button>    
                            <a href="<?php echo base_url().'index.php/welcome/manage_product_model';?>" class="btn-secondary btn">Cancle</a>
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