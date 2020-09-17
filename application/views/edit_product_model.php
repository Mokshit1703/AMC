<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-12 stretch-card">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="card-title"><h1>Add Product Model:</h1></h6><br>
                            <form method="post" action="<?php echo base_url().'index.php/welcome/edit_product_model/'. $user['user_id'];?>">
                              <div class="row">
                                <div class="col-xl-1">
                                </div>
                                  <div class="col-lg-5 my-2 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Product Model Code</h4></label>
                                      <input type="text" name="product_model_code" class="form-control border-dark" value= "<?php echo set_value('product_model_code',$user['product_model_code']);?>">
                                      <?php echo form_error('product_model_code');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Product Model Name</h4></label>
                                      <input type="text" name="product_model_name" class="form-control border-dark" value= "<?php echo set_value('product_model_name',$user['product_model_name']);?>">
                                      <?php echo form_error('product_model_name');?>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label"><h4>Select Product</h4></label>
                                      <input type="text" name="select_product" class="form-control border-dark"  value= "<?php echo set_value('select_product',$user['select_product']);?>">
                                      <?php echo form_error('select_product');?>
                                    </div>
                                    
                                  </div><!-- Col -->
                                  
                              </div><!-- Row -->
                              <div class="separator separator-dashed my-10">
                              </div>                
                            <div class="form-group align-center">
                            <button  class="btn btn-primary "><h4>Submit</h4></button>    
                            <a href="<?php echo base_url().'index.php/welcome/manage_product_model';?>" class="btn-secondary btn"><h4>Reset</h4></a>
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