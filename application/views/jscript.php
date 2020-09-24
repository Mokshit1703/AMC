<!-- Vendor CSS --><link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/animate/animate.css">

		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/font-awesome/css/all.css" />
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/morris/morris.css" />
		
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

	
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/css/custom.css">
		
		
		<!-- Head Libs -->
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/modernizr/modernizr.js"></script>
		
		
		<link rel="stylesheet" href="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/datatables/media/css/dataTables.bootstrap4.css" />
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery/jquery.js"></script>
		
		<script src="http://www.xlinkinfocom.com/amc-call-management-system/app/source/vendor/jquery-ui/jquery-ui.js"></script>
		
		
		
		
		
		
      
<style> 

.dataTables_wrapper table,th,td { font-size: 12px }
a[target="_blank"]::after {
  content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==);
  margin: 0 3px 0 5px;
}
</style>   
      
<script type="text/javascript">
$(document).keydown(function(e) {
    if (e.keyCode == 27) return false;
});
	

</script>
<div class="modal" id="GeneralInfo" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Enter Item License Key</h5>
													
												</div>
												<div class="modal-body">
												
																								
												
			<form action="http://xlinkinfocom.com/amc-call-management-system/envatouser/API/validate.php" method="POST" class="form-horizontal">
													<div class="form-group row">
											<label class="col-sm-4 control-label text-sm-left pt-2">API Key </label>
											<div class="col-sm-8">
												<input name="apikey" placeholder="xxxxxxxx" autocomplete="off" type="text" required class="form-control required" onkeydown="" id="apikey">
												
												
            <input type="hidden" name="lic_url2" class="form-control" placeholder="url" value="http://www.xlinkinfocom.com/amc-call-management-system/app/admin/amcwithoutwc.php" />
			
			<input type="hidden" name="lic_url" class="form-control" placeholder="url" value="http://www.xlinkinfocom.com" />
												
											</div>
										</div>
										<div class="alert alert-success" role="alert">
										<p>You are installing this application in <b><?php echo $referer; ?></b></p><p>How to get API Key ? <a target="_blank" href="http://xlinkinfocom.com/amc-call-management-system/#activate_application">Click Here to get details</a></p>
										</div>													
												</div>
												<div class="modal-footer">
																								<button type="submit" name="confirm" class="btn btn-primary">Confirm</button>
												</div>
												</form>
											</div>
										</div>
									</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>