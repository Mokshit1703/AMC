<?php include('header2.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
        <div class="col-md-12 stretch-card">
          <div class="card card-custom">
            <div class="card-body">
              <h6 class="card-title">
                <h4>Edit Product:</h4>
              </h6><br>
              <form method="post" action="<?php echo base_url() . 'index.php/welcome/edit_product/' . $user['sr_no']; ?>">
                <div class="row">
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Code</h5>
                      </label>
                      <input type="text" name="product_code" class="form-control" value="<?php echo set_value('product_code', $user['product_code']); ?>">
                      <?php echo form_error('product_code'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Brand</h5>
                      </label>
                      <input type="text" name="product_brand" class="form-control" value="<?php echo set_value('product_brand', $user['product_brand']); ?>">
                      <?php echo form_error('product_brand'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Name</h5>
                      </label>
                      <input type="text" name="product_name" class="form-control" value="<?php echo set_value('product_name', $user['product_name']); ?>">
                      <?php echo form_error('product_name'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Unit</h5>
                      </label>
                      <input type="text" name="product_unit" class="form-control" value="<?php echo set_value('product_unit', $user['product_unit']); ?>">
                      <?php echo form_error('product_unit'); ?>
                    </div>
                  </div><!-- Col -->
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Details</h5>
                      </label>
                      <textarea rows="4" name="product_details" type="text" class="form-control" value="<?php echo set_value('product_details', $user['product_details']); ?>"></textarea>
                      <?php echo form_error('product_details'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Warranty</h5>
                      </label>
                      <input type="text" name="product_warranty" class="form-control" value="<?php echo set_value('product_warranty', $user['product_warranty']); ?>">
                      <?php echo form_error('product_warranty'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Image</h5>
                      </label>
                      <input type="text" name="product_image" class="form-control" value="<?php echo set_value('product_image', $user['product_image']); ?>">
                      <?php echo form_error('product_image'); ?>
                    </div>

                  </div><!-- Col -->
                </div><!-- Row -->
                <div class="separator separator-dashed my-10">
                </div>
                <div class="form-group align-center">
                  <button class="btn btn-primary ">Update</button>
                  <a href="<?php echo base_url() . 'index.php/welcome/manage_product'; ?>" class="btn-secondary btn">Cancle</a>
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