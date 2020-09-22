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
                <h4>Add product serial:</h4>
              </h6><br>
              <form method="post" action="<?php echo base_url() . 'index.php/welcome/addproductserial'; ?>">
                <div class="row">
                  <div class="col-lg-5 my-2 ">
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Serial Code</h5>
                      </label>
                      <input type="text" name="product_serial_code" class="form-control" placeholder="Enter product serial code" value="<?php echo set_value('product_serial_code'); ?>">
                      <?php echo form_error('product_serial_code'); ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>product Model</h5>
                      </label>
                      <select class="form-control" name="product_model" value="<?php echo set_value('product_model'); ?>">
                        <?php echo form_error('product_model'); ?>
                        <option>Select an option below</option>
                        <option>Drive/Amc/Electrical</option>
                        <option>220 Cable</option>
                        <option>440 Transformer</option>
                        <option>110 V Relay</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>product Name</h5>
                      </label>
                      <select class="form-control" name="product_name" value="<?php echo set_value('product_name'); ?>">
                        <?php echo form_error('product_name'); ?>
                        <option>Select an option below</option>
                        <option>Wire</option>
                        <option>Cable</option>
                        <option>Transformer</option>
                        <option>Relay</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label">
                        <h5>Product Price</h5>
                      </label>
                      <input type="number" name="product_price" class="form-control" placeholder="Enter product pricel" value="<?php echo set_value('product_price'); ?>">
                      <?php echo form_error('product_price'); ?>
                    </div>
                  </div><!-- Col -->

                </div><!-- Row -->
                <div class="separator separator-dashed my-10">
                </div>
                <div class="form-group align-center">
                  <button class="btn btn-primary ">Submit</button>
                  <a href="<?php echo base_url() . 'index.php/welcome/addproductserial'; ?>" class="btn-secondary btn">Reset</a>
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