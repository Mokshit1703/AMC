<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
<div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                  <div class="row flex-grow">
                    
                      <div class="col-md-12 stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h6 class="card-title"><h1>Add New Customer:</h1></h6><br>
                              <form>
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Mobile no:</h4></label>
                                      <input type="number" class="form-control border-dark" placeholder="Enter Mobile No">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Customer Code:</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Customer Code">
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Customer Name</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Customer Name">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Company Name</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Company Name">
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Customer Type</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Customer Type">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Address</h4></label>
                                      <textarea rows="4" type="text" class="form-control border-dark" placeholder="Enter Address"></textarea>
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>CITY</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter City Name">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>STATE</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter State Name">
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>ZIP/PinCode</h4></label>
                                      <input type="number" class="form-control border-dark" placeholder="Enter ZIP/PinCode">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Alt. Phone Number</h4></label>
                                      <input type="number" class="form-control border-dark" placeholder="Enter Alt. Phone Number">
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Email</h4></label>
                                      <input type="email" class="form-control border-dark" placeholder="Enter Email-ID">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Password</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Password">
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                
                                <div class="row">
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Note(if any)</h4></label>
                                      <input type="text" class="form-control border-dark" placeholder="Enter Note">
                                    </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6 ">
                                    <div class="form-group">
                                      <label class="control-label"><h4>Select file</h4></label>
                                      <div class="card">
							<div class="card-body">
								<h6 class="card-title">Add File</h6>
								<p class="card-description">Upload File Here.</p>
								<input type="file" id="myDropify" class="border"/>
							</div>
						</div>
                                    </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                              </form>
                              <button type="button" class="btn btn-success submit"><h4>Submit</h4></button>
                              <button type="reset" class="btn btn-danger submit"><h4>Reset</h4></button>
                          </div>
                        </div>
                      </div>
		            		
                  </div>
                </div>
              </div>
            </div>

<?php include('footer.php'); ?>