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

                        
								<h4 class="card-title">Horizontal wizard</h4>
								<p class="card-description">Read the <a href="http://www.jquery-steps.com/" target="_blank"> Official jQuery Steps Documentation </a>for a full list of instructions and other options.</p>
                <div id="wizard">
                  <h2>First Step</h2>
                  <section>
                    <h4>Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis, 
                        sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. 
                        Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                  </section>
  
                  <h2>Second Step</h2>
                  <section>
                    <h4>Heading</h4>
                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                        Donec non pulvinar urna. Aliquam id velit lacus.</p>
                  </section>
  
                  <h2>Third Step</h2>
                  <section>
                    <h4>Heading</h4>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                  </section>
  
                  <h2>Forth Step</h2>
                  <section>
                    <h4>Heading</h4>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                  </section>
                </div>
							
                        </div>
                        
                    </div>
                </div>
            </div>          		
        </div>
    </div>
</div>
<?php include('footer.php'); ?>