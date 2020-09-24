<?php include('header.php'); ?>
<?php include('body.php'); ?>
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Customer</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Customer</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Manage Customer</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                  <tr>
                  	
                  	
                    <th>Sl No</th>
                    <th>AMC Code</th>
					<th>AMC Type</th>
                    <th>Customer</th>
					<th>Address</th>
					<th>Mobile No</th>
                    <th>AMC Range</th>
					<th>AMC Days Left</th>
					<th>Renewed ?</th>
					<th>Action</th>
					
                    <th style="display: none;">Total Bill</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                                    <tr>
                  <td>1</td>
                  <td>
				  
				   <a target="_blank" href="amcdata.php?wc=WNTC-00001&amc=ACWC-00001&cc=CUST47499" target="_blank">ACWC-00001</a>
				  
				  
				  
				  </td>
                  <td> <label>AMC With WC </label>
</td>
				  <td><a target="_blank" href="customer_details.php?overview=CUST47499">SADANANDA PLAZA [ CUST47499 ] </a></td>
				  <td>SODEPUR,TETULTOLA<br>KOLKATA-700110</td>
				  <td>9830409412</td>
                   
				   <td>01-01-1970<br/>01-01-1970</td>
				  <td style="background-color:#D44865;color: white">18529 Days</td>
				  
				  <td>
				  
				  Not Renewed
				  
				  
				  
				  </td>
				  
				  
                  
                   <td style="display: none"><input name="recvdamt_3478" type="text" required class="form-control required" id="recvdamt_3478" value=" " readonly></td>
                   <td>
				   
          <div class="btn-group flex-wrap">
<button type="button" class="mb-1 mt-1 mr-1 btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
<div class="dropdown-menu" role="menu">

<a class="dropdown-item text-1" href="amc_details_print.php?wc=ACWC-00001&cc=CUST47499"><i class="fas fa-file-invoice"></i> Print Bill</a>

<a class="dropdown-item text-1" onclick='javascript:confirmationDelete($(this));return false;' href="amc_delete.php?delete=ACWC-00001"><i class="fa fa-minus-circle"></i> Delete</a>
</div>
</div>

<!-- <a class="btn btn-danger" onclick='javascript:confirmationDelete($(this));return false;' href="amc_delete.php?delete=ACWC-00001"><i class="fa fa-minus-circle"></i> Delete</a> -->                 
                   
				   </td>
                   
                   <div class="btn-group flex-wrap">
<button type="button" class="mb-1 mt-1 mr-1 btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
<div class="dropdown-menu" role="menu">

<a class="dropdown-item text-1" href="amc_details_print.php?wc=ACWC-00001&cc=CUST47499"><i class="fas fa-file-invoice"></i> Print Bill</a>

<a class="dropdown-item text-1" onclick='javascript:confirmationDelete($(this));return false;' href="amc_delete.php?delete=ACWC-00001"><i class="fa fa-minus-circle"></i> Delete</a>
</div>
</div>
                   



                    
                  </tr>

                  </tbody>
                        </table>
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
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js">
		
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

<script>
function getDaysRemainColor($days){ "use strict";
    if ($var > 0 )
        return '#FF0000';
   
    else if ($var < 0)
        return = '#00FF00';
}		
</script>
<?php include('footer.php'); ?>