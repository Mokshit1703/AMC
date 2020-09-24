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
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">New/Renew AMC ? * </label>
                                        <div class="col-sm-4">
                                            <div class="radio-custom radio-primary">
                                                <input type="radio" onclick="javascript:AMCTypeCheck();" id="NoRenew" value="1" name="AMCType" checked="">
                                                <label for="NoRenew">New AMC</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="radio-custom radio-success">
                                                <input type="radio" onclick="javascript:AMCTypeCheck();" id="renew" value="0" name="AMCType">
                                                <label for="renew"> Renewal AMC </label>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        window.onload = function() {
                                            document.getElementById('ifYes').style.display = 'none';
                                            document.getElementById('renew_amccode').required = false;
                                        };

                                        function AMCTypeCheck() {
                                            if (document.getElementById('renew').checked) {
                                                document.getElementById('ifYes').style.display = '';
                                                document.getElementById('renew_amccode').required = true;

                                            } else document.getElementById('ifYes').style.display = 'none';
                                            document.getElementById('renew_amccode').required = false;
                                        }
                                    </script>
                                    <div class="form-group row" id="ifYes">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">Select Expired AMC * </label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selectTwo name="renew_amccode" id="renew_amccode" required class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select Expred AMC", "allowClear": true }'>
                                                <option value=""></option>
                                                <option value="AWMT-00238">AWMT-00238 - 2020-07-28</option>
                                            </select>
                                        </div>
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
                                    
                                      </div><!-- Col -->
                </div><!-- Row -->
                <div class="separator separator-dashed my-10">
                </div>
                <?php include('jscript.php'); ?>              
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tabs tabs-primary">
                      <ul class="nav nav-tabs nav-justified ">
                        <li class="nav-item active  border border-dark"> <a class="nav-link" href="#product_tab" data-toggle="tab"><i class="fas fa-tags"></i><h4> Products Under AMC</h4></a> </li>
                        <li class="nav-item active border border-dark"> <a class="nav-link" href="#service_tab" data-toggle="tab"><i class="fas fa-wrench"></i><h4> Service Schedule</h4></a> </li>
                        <li class="nav-item active border border-dark"> <a class="nav-link" href="#payment_tab" data-toggle="tab"><i class="fas fa-rupee-sign"></i><h4> Schedule Payment</h4></a> </li>
                      </ul>
                      <div class="tab-content">
                        <div id="product_tab" class="tab-pane active">
                          <div class="card-body  border border-dark">
                            <div class="col-lg-12 " id="prodserialreload">
						  
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <td><h6>Product Name</h6></td>
                                      <td><h6>Qty.</h6></td>
                                      <td><h6>Price</h6></td>
                                      <td><h6>Total</h6></td>
                                      <td><h6>Action</h6></td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td ><div class="form-group " id="selectprodserial" >
									  
									  <select data-plugin-selectTwo name="prodcode2" id="prodcode" unique="prodserialcode" onBlur="prodtotalval()" required class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select Product", "allowClear": true }'>
									  
                                            <!-- here prodcode stands for prodserialcode  -->
                                            <option value=""></option>
                                                                                        <option value="001" >001 - DRIVE - drive-5hp</option>
                                                                                        <option value="002" >002 - butterfly contact - butterfly contact</option>
                                                                                        <option value="DSAFFDS" >DSAFFDS - butterfly contact - butterfly contact</option>
                                                                                        <option value="003" >003 - FLAT CABLE - FLAT CABLE</option>
                                                                                        <option value="08202310001" >08202310001 - FLAT CABLE - FLAT CABLE</option>
                                                                                        <option value="004" >004 - 220 cable - 220 CABLE</option>
                                                                                        <option value="LOOLK5877458854" >LOOLK5877458854 - 220 cable - 220 CABLE</option>
                                                                                        <option value="005" >005 - 110 v relay - 110 V RELAY</option>
                                                                                        <option value="006" >006 - POWER SUPPLY CARD - POWER SUPPLY CARD</option>
                                                                                        <option value="007" >007 - 220 V CLAPPER - 220 CLAPPER</option>
                                                                                        <option value="008" >008 - 110 V CLAPPER - 110 V CLAPPER</option>
                                                                                        <option value="009" >009 - CAMP COIL - camp coil</option>
                                                                                        <option value="010" >010 - BREAK COIL - break coil</option>
                                                                                        <option value="011" >011 - BREAK SHOE - break shoe</option>
                                                                                        <option value="012" >012 - OVER LOD - over load</option>
                                                                                        <option value="013" >013 - LED LIGHT - led light</option>
                                                                                        <option value="014" >014 - PHASE FAILOURE - PHASE FAUILOURE</option>
                                                                                        <option value="015" >015 - METAL RECTIFIER - METAL RECTIFIER</option>
                                                                                        <option value="016" >016 - oindrilley - OINDRILLEY</option>
                                                                                        <option value="017" >017 - DOB CARD - DOB CARD</option>
                                                                                        <option value="018" >018 - TRANSFORMA  2 PHASE - TRANSFORMA 2 PHASE</option>
                                                                                        <option value="019" >019 - 12-15 V TRANSFORMA - 12-15 V TRANSFORMA</option>
                                                                                        <option value="020" >020 - SPEAKER - SPEAKER</option>
                                                                                        <option value="021" >021 - SMPS - SMPS</option>
                                                                                        <option value="022" >022 - CAMP ROPE - CAMP ROPE</option>
                                                                                        <option value="024" >024 - GATELOCK - GATE LOCK</option>
                                                                                        <option value="025" >025 - FINAL LIMIT - FINAL LIMIT</option>
                                                                                        <option value="025" >025 - FINAL LIMIT - FINAL LIMIT</option>
                                                                                        <option value="026" >026 - CAR GATE SWITCH - CAR GATE SWITCH</option>
                                                                                        <option value="027" >027 - service oil - GEAR OIL</option>
                                                                                        <option value="028" >028 - MAIN SHIP - MAIN SHIP</option>
                                                                                        <option value="030" >030 - MAIN ROPE - MAIN ROPE</option>
                                                                                        <option value="029" >029 - LOP SWITCH - LOP SWITCH</option>
                                                                                        <option value="023" >023 - D-LOCKING KEY - D LOCKING KEY</option>
                                                                                        <option value="031" >031 - Box reed - BOOX REED</option>
                                                                                        <option value="032" >032 - LOP DISPLAY CARD - LOP DISPLAY CARD</option>
                                                                                        <option value="033" >033 - no product - no product</option>
                                                                                        <option value="034" >034 - Mother Board - Mother Board</option>
                                                                                        <option value="101" >101 - samsung s8 - s series </option>
                                                                                      </select>
										  <div class="display_none">
										  <select data-plugin-selectTwo name="prodname" id="prodname" unique="prodserialcode" required class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Product Name", "allowClear": false }'>
                        
										</select>
										</div>
                                          </div></td>
                                      <td ><div class="form-group" >
                                          <input name="prodqty2" type="text"  required class="form-control" id="prodqty" placeholder="Product Quantity" onBlur="prodtotalval()" value="1"  >
                                        </div></td>
                                      <td >
									  <div class="form-group " >
       <select data-plugin-selectTwo name="prodprice" id="prodprice" unique="prodserialcode" required class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Product Price", "allowClear": false }'>
                        
                      </select>
                          </div>
									</td>
                                      <td><div class="form-group" >
                                          <input name="prodtotal2" type="text" required class="form-control" id="prodtotal" placeholder="Total Value" readonly  >
                                        </div></td>
                                      <td ><div class="form-group" ><button type="button" name="reset" value="Add new row" onclick="prodtotalval()" class="btn btn-warning add-row"><i class="fa fa-plus"></i> Add Item</button>
                                      </div></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="table-responsive">
                                  <table class="table table-striped" id="warrantymaster" >
                                    <thead>
                                      <tr>
                                        <th>Select</th>
                                        <th>>Product Serial Code</th>
										<th>Product Name</th>
                                        <th>Product Qty.</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                      </tr>
                                    </thead>
                                    <tbody class="productdetails">
                                    </tbody>
                                  </table>
                                  <br>
                                  <button type="button" class="btn btn-danger delete-row"><i class="fa fa-trash"></i> Delete UN-CHECKED Products</button>
                                </div>
                              </div>                          </div>
                        </div>
                        <div id="service_tab" class="tab-pane">
                          <div class="card-body border border-dark">
                            <div class="col-lg-12" id="">
                              <table class="tablex">
							  <thead>
                                  <tr>
                                    <td> Number of Service </td>
                                    <td>Commnent </td>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td >
									<div class="form-group row">
                        
                        <div class="col">
                          <input name="date" type="text" required class="form-control required" id="service">
                        </div>
                      </div>
					</td>
                                    <td >
									
									<div class="form-group row">
                        
                        <div class="col">
                          <input name="notes" type="text" required class="form-control required" id="notes" value="FREE" placeholder="Notes (If any)">
                        </div>
                      </div>
					  </td>
                                    <td >
									<div class="form-group row">
                        
                        <div class="col">
                          <div class="input-group ">
                                          <button type="button" name="submit" value="Add new row" id="AddService"  class="btn btn-info add-service"><i class="fa fa-plus"></i> Set Service</button>
                                        </div>
                        </div>
                      </div>
									
									</td>
                                    
                                    <td >
									<div class="form-group row">
                        
                        <div class="col">
                          <div class="input-group ">
                                          <button type="button" name="reset" id="DeleteService" value="Clear Fields" onclick="clearBox('servicedates2')" class="btn btn-warning clear-row"><i class="fa fa-trash"></i> Clear All</button>
                                        </div>
                        </div>
                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              
                              
                              <table class="table table-bordered" id="servicedates" >
                                <thead>
                                  <tr>
                                    <td>#</td>
                                    <td>Service Dates (mm/dd/yyyy)</td>
                                    <td>Notes</td>
                                  </tr>
                                </thead>
                                <tbody class="servicedates" id="servicedates2">
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div id="payment_tab" class="tab-pane">
                          <div class="card-body border border-dark">
                            <div class="table-responsive col-lg-12 " id="">
                              <table class="tablex">
                                <thead>
                                  <tr>
                                    <td> Total Bill Value</td>
                                    <td> Contract Amount</td>
                                    <td> GST (%)</td>
                                    <td> GST Amount</td>
                                    <td> Total Amount</td>
                                    <td>No of Installment</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td >
									<div class="form-group row">
                        
									<div class="col">
									  <input name="totalbill" type="text" required class="form-control" id="totalbill"  value="0.00" readonly />
									</div>
								  </div>
									
									</td>
                                    <td ><div class="form-group row" >
                                        <div class="col ">
                                          <input name="contractamt" type="number" required class="form-control" id="contractamt" >
                                        </div>
                                      </div></td>
                                    <td ><div class="form-group row" >
                                        <div class="col ">
                                          <input type="number" name="gst" id="gst" class="form-control" value="0.00" required>
                                        </div>
                                      </div></td>
                                    <td ><div class="form-group row" >
                                        <div class="col">
                                          <input type="text" name="gstamt" id="gstamt" class="form-control" readonly required >
                                        </div>
                                      </div></td>
                                    <td ><div class="form-group row" >
                                        <div class="col ">
                                          <input type="text" name="totalamt" id="totalamt" class="form-control" required readonly >
                                        </div>
                                      </div></td>
                                    <td ><div class="form-group row" >
                                        <div class="col ">
                                          <input type="number" name="installment" id="installment" class="form-control">
                                        </div>
                                      </div></td>
                                    <td ><div class="form-group row" >
                                        <div class="col ">
                                          <button type="button" name="submit" id="AddNewInstallment" value="Set Installment"  class="btn btn-info add-installment"><i class="fa fa-plus"></i> Set Installment</button>
                                        </div>
                                      </div></td>
                                    
                                    <td ><div class="form-group row" >
                                        <div class="col ">
                                          <button type="button" name="reset" id="DeleteInstallment" value="Clear Fields" onclick="clearBox2('installments2')" class="btn btn-warning clear-row"><i class="fa fa-trash"></i> Clear All</button>
                                        </div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--<div class="result" id="servicedates"></div>-->
                              
                              <table class="table table-bordered" id="installments" >
                                <thead>
                                  <tr>
                                    <td>#</td>
                                    <td>Installment Date (mm/dd/yyyy)</td>
                                    <td>Installment Amount</td>
                                  </tr>
                                </thead>
                                <tbody class="installments" id="installments2">
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                  <div class="row justify-content-end">
                    <div class="col-sm-12">
                    <button class="btn btn-primary ">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="<?php echo base_url() . 'index.php/welcome/product_amc'; ?>" class="btn-danger btn">Cancle</a>
                      
                    </div>
                  </div>
                
              </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

		<!-- Vendor -->
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/popper/umd/popper.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/common/common.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/select2/js/select2.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
		
		
		
		
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/examples/examples.datatables.default.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/examples/examples.datatables.row.with.details.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/examples/examples.datatables.tabletools.js"></script>
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/summernote/summernote-bs4.js"></script>
		
		
				
		
		<!-- Theme Base, Components and Settings -->
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/theme.init.js"></script>
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/js/examples/examples.modals.js"></script>

		
		
      
        <style> 

.dataTables_wrapper table,th,td { font-size: 12px }

</style>   
      
<script type="text/javascript">
$(document).keydown(function(e) {
    if (e.keyCode == 27) return false;
});
	
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isPrice(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
            $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        return false;
    }
    return true;
}


</script>


<script type="text/javascript">
    function prodtotalval() { "use strict";
		var prodqty = parseFloat(document.getElementById("prodqty").value);
        var prodprice = parseFloat(document.getElementById("prodprice").value);
        document.getElementById("prodtotal").value = (prodqty * prodprice )   ;
		var prodtotal = parseFloat(document.getElementById("prodtotal").value);
	}
	</script> 
<script>
$("#MyButton").click(function() {
    $("#prodcode").load(" #prodcode > *");
  });
</script>
<script>
function upperCaseF(a){ "use strict";
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}

(function($) {

	'use strict';

	if ( $.isFunction($.fn[ 'bootstrapDP' ]) ) {

		$(function() {
			
			$('#amcissuedate').bootstrapDP().on('changeDate', function(e) {
				
				var endDate = new Date(e.date);
				endDate.setFullYear(endDate.getFullYear() + 1);
				
				$('#amcenddate').bootstrapDP('update', endDate);
				
			});
			
			$('#amcenddate').bootstrapDP();

			
		});

	}

}).apply(this, [jQuery]);	
	
</script>
 
<script type="text/javascript">
$(document).ready(function() { "use strict";
    
	$("#prodcode").change(function() { "use strict";
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="Loading Product Price" /></div>');
		$.get('loadprodmrp.php?psc=' + $(this).val(), function(data) {
			$("#prodprice").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
	
	$("#prodcode").change(function() { "use strict";
		$(this).after('<div id="loadera"><img src="img/loading.gif" alt="Loading Product Name" /></div>');
		$.get('loadprodname.php?psc=' + $(this).val(), function(data) {
			$("#prodname").html(data);
			$('#loadera').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
	
	$("#prodcode").change(function() { "use strict";
		$(this).after('<div id="loader2"><img src="img/loading.gif" alt="Loading Warranty Date" /></div>');
		$.get('loadwcenddate.php?prodcode=' + $(this).val(), function(data) {
			$("#prodwarrenty").html(data);
			$('#loader2').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
	
		$("#custcode").on('change', function()  { "use strict";
		$(this).after('<div id="loader2"><img src="img/loading.gif" alt="Loading SITE Details" /></div>');
		$.get('loadsite.php?cust=' + $(this).val(), function(data) {
			$("#sitecode").html(data);
			$('#loader2').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
	
	
	$("#sitecode").on('change', function()  { "use strict";
		$("#loaderIcon").show();
		
	jQuery.ajax({
	url: "checkamcstatus.php",
	data:'amcissuedate='+$("#amcissuedate").val() + '&amcenddate='+$("#amcenddate").val() + '&custcode='+$("#custcode").val() + '&sitecode='+$("#sitecode").val(),
	type: "POST",
	success:function(data){
		$("#is-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
    });
	
	

});
</script> 
<script type="text/javascript">
	var gtot = 0;
    $(document).ready(function(){
		
		var count = 0;
		
        $(".add-row").click(function(){ "use strict";
				
            var prodcode1 = $("#prodcode").val();
			var prodname1 = $("#prodname").val();
			
            var prodqty1 = $("#prodqty").val();
			var prodmrp1 = $("#prodprice").val();
			var prodtotal1 = $("#prodtotal").val();
			
			gtot += parseFloat(prodtotal1);
			
			$('#totalbill').val(gtot);
			if(prodcode1 == "" || prodqty1 == "" ) {
             alert("Please insert atleast one product");
             return false;
			 
			 
         }
         for (var i = 0, row; row = document.getElementById("warrantymaster").rows[i]; i++) {
        var fields = new Array();
        for (var j = 0, col; col = row.cells[j]; j++) {
            fields[j] = col.innerHTML;
        }
        if (prodcode1 == fields[1]) {
			
			gtot -= parseFloat(prodtotal1);
			$('#totalbill').val(gtot);
            alert("Duplicate Product Serial Number Found");
            return false;
        }
    }
			
			
            var markup = "<tr><td><input type='checkbox' class='select-checkbox2' checked='checked' name='record[]' value="+ prodcode1 +" id='chk_"+ prodcode1 +"'></td><td>" + prodcode1 + "</td><td>" + prodname1 + "</td><td>" + prodqty1 + "</td><td><input required class='form-control inst_amount' readonly='readonly' type='hidden' id='prodtotal_"+ prodcode1 +"' name='prodtotal_"+ prodcode1 +"' value="+ prodtotal1 +" >" + prodmrp1 + "</td><td><input required class='form-control' readonly='readonly' type='hidden' id='prodprice_"+ prodcode1 +"' name='prodprice_"+ prodcode1 +"' value="+ prodmrp1 +" >" + prodtotal1 + "</td><input required class='form-control required' readonly='readonly' type='hidden' name='prodcode_"+ prodcode1 +"' value="+ prodcode1 +" ><input required class='form-control' readonly='readonly' type='hidden' name='prodqty_"+ prodcode1 +"' value="+ prodqty1 +" ></tr>";
			$("#warrantymaster").append(markup);
			count++;
		
		
        
		});
		
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){	
			var get_prop = "";
			var get_prop_val = "";
			var del_tot = 0;		
            $("table tbody.productdetails").find('input[name="record[]"]').each(function(){
            	if($(this).not(":checked").length){
					get_prop = $(this).attr('id');
					 get_prop_val = $('#'+get_prop).val();
					
					del_tot += parseFloat($('#prodprice_'+get_prop_val).val());
					
                    $(this).parents("tr").remove();
                }
            });
			
			gtot -= del_tot;
			console.log(gtot);
			$('#totalbill').val(gtot);
        });
    });    
</script> 
 
<script>

$(document).ready(function() { "use strict";

var count = 0;

  $('.add-service').click(function(e) {
	  
	  var notes1 = $("#notes").val();
	 var amccode = $("#amccode").val();
	
    var start = moment($('#amcissuedate').val());
    var end = moment($('#amcenddate').val());
    var service = parseFloat($('#service').val()) + 1;

    var interval = (end.diff(start, 'second') + 1) / service
    for (var i = 1; i < service; i++) {
      var servicedate = moment(start).add(interval * i, 'second').format('YYYY-MM-DD')
	  
	  if(servicedate == "") {
             alert("please fill minimum 1 row");
             return false;
         }
	  
	  var dateresult = "<tr><td><input type='checkbox' class='select-checkbox2' readonly checked='checked' name='record2[]' value="+ servicedate +" id='chk_"+ servicedate +"'></td><td><div class='' id='data_1' ><div class='input-group date '> <span class='input-group-addon'></span><input name='amccode_"+ servicedate +"' value="+ servicedate +" type='date'  required class='form-control' id='amccode_"+ servicedate +"'  ></div></div></td><td><div class='' ><div class='input-group'> <input type='text'  placeholder='Notes - If any' class='form-control' name='notes_"+ servicedate +"' id='notes_"+ servicedate +"' value=" +  notes1  + " ></div></div></td></tr>"

      $("#servicedates").append(dateresult);
	  count++;
    }

  });

});


</script> 
<script>
$(document).ready(function(){
$('#AddNewInstallment').attr('disabled','disabled');
    $("#AddService").click(function(){ buttonEnabler(); });
    $("#DeleteService").click(function(){ buttonEnabler(); });

    function buttonEnabler(){
    var rowCount = $('#servicedates tbody.servicedates tr').length;
    if(rowCount < 1){
               $('#AddNewInstallment').attr('disabled','disabled');
        } else {
               $('#AddNewInstallment').removeAttr('disabled');
               }
    }
    });
</script>
<script type="text/javascript" class="init">
$(document).ready(function() { "use strict";

	var total  = 0;
	var cVal;
	var producttotal;
	var check;
	
	
	$('.select-checkbox').prop('checked'== true, function() {		
	
		cVal = $(this).attr('id');
			
		//check = $('.select-checkbox2').is(':checked');
		
		if ($('#'+cVal).is(':checked'))
		{
			
			producttotal = parseFloat($('#prodtotal_' + $(this).val()).val());
			total += producttotal;
			$('#inttotal').html(total);			
		}
		else
		{
			
			
			producttotal = parseFloat($('#prodtotal_' + $(this).val()).val());
			total -= producttotal;
			
			
			
			
			
			$('#inttotal').html(total);	
		}
		 
		parseFloat(document.getElementById('totalbill').value = total);
		
		
		
		
	});
	
	$('#gst').on('keyup', function() {
     var value1 = parseFloat(document.getElementById("contractamt").value);
		var value2 = parseFloat(document.getElementById("gst").value);
		
		document.getElementById('gstamt').value = value1 * value2/100;
		var value3 = parseFloat(document.getElementById("gstamt").value);
		document.getElementById('totalamt').value = value1 + value3;
		var value4 = parseFloat(document.getElementById("totalamt").value);
});


$('.add-installment').click(function() {
	var start2 = moment($('#amcissuedate').val());
    var end2 = moment($('#amcenddate').val());
    var instalmentdate = parseFloat($('#installment').val()) + 1;

    var interval2 = (end2.diff(start2, 'second') + 1) / instalmentdate;

	
    var value4a = parseFloat(document.getElementById("totalamt").value);
	var value5 = parseFloat(document.getElementById("installment").value);
    var interval = value4a/value5;
	var amccode2 = $("#amccode").val();
	
	
	

    for (var i = 0, j = 1; i < value5, j < instalmentdate; i++, j++) {
      var installment = (i,interval)
	  var instalmentdate2 = moment(start2).add(interval2 * j, 'second').format('YYYY-MM-DD')
	  
	  var instamt = "<tr><td><input type='checkbox' class='select-checkbox3' readonly checked='checked' name='record3[]' value="+ i +" id='chk2_"+ installment +"'></td><td><div class='' id='data_2' ><div class='input-group date '> <span class='input-group-addon'></span><input name='installdate_"+ i +"' value="+ instalmentdate2 +" type='date'  required class='form-control' id='installdate_"+ i +"'  ></div></div></td><td><div class='input-group'><input name='amccode2_"+ i +"' value="+ installment +" type='text'  required class='form-control' id='amccode2_"+ i +"'  ></div></td></tr>"
	  
      $("#installments").append(instamt);
    }

  });
	
} ) ;



</script>
<script>
$(document).ready(function(){
$(':input[type="submit"]').prop('disabled', true);
    $("#AddNewInstallment").click(function(){ buttonEnabler(); });
    $("#DeleteInstallment").click(function(){ buttonEnabler(); });

    function buttonEnabler(){
    var rowCount = $('#installments tbody.installments tr').length;
    if(rowCount < 1){
               $('#submit').attr('disabled','disabled');
        } else {
               $('#submit').removeAttr('disabled');
               }
    }
    });
</script>
 
<script type="text/javascript">
$(document).ready(function() { "use strict";
    
	$("#prodmdlcode3").change(function() { "use strict";
		$(this).after('<div id="loader2"><img src="img/loading.gif" alt="Loading Product Details" /></div>');
		$.get('loadprodcode.php?pm=' + $(this).val(), function(data) {
			$("#prodcode3").html(data);
			$('#loader2').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
	
	
	
	
</script> 
<script>
    
	 function clearBox(servicedates2)
{
    document.getElementById(servicedates2).innerHTML = "";
}


    </script> 
<script>
    
	 function clearBox2(installments2)
{
    document.getElementById(installments2).innerHTML = "";
}


    </script>           
<?php include('footer.php'); ?>