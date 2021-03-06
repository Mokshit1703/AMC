<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
        <div class="col-md-12 stretch-card">
          <div class="card card-custom">
            <div class="card-body">
              <h6 class="card-title">
                <h4>Add Product Model:</h4>
              </h6><br>
              <form method="post" action="<?php echo base_url() . 'index.php/welcome/addproductmodel'; ?>">
                <div class="row">
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Model Code</h5>
                      </label>
                      <input type="text" name="product_model_code" class="form-control" placeholder="Enter Product Model Code" value="<?php echo set_value('product_model_code'); ?>">
                      <?php echo form_error('product_model_code'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Model Name</h5>
                      </label>
                      <input type="text" name="product_model_name" class="form-control" placeholder="Enter Product Model Name" value="<?php echo set_value('product_model_name'); ?>">
                      <?php echo form_error('product_model_name'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Select Product</h5>
                      </label>
                      <select class="form-control" name="select_product" value="<?php echo set_value('select_product'); ?>">
                        <?php echo form_error('select_product'); ?>
                        <option>Select an option below</option>
                        <option>Drive/Amc/Electrical</option>
                        <option>220 Cable</option>
                        <option>440 Transformer</option>
                        <option>110 V Relay</option>
                      </select>


                    </div>

                  </div><!-- Col -->

                </div><!-- Row -->
                <div class="separator separator-dashed my-10">
                </div>
                <div class="form-group align-center">
                  <button class="btn btn-primary ">Submit</button>
                  <a href="<?php echo base_url() . 'index.php/welcome/addproductmodel'; ?>" class="btn-secondary btn">Reset</a>
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