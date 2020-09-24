<?php include('header.php'); ?>
<?php include('body.php'); ?>

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <section class="card">
                <div class="card-body">
                    <form class="form-horizontal" id="form" enctype="multipart/form-data" name="customermaster" method="post">
                        <div class="form-group row">
                            <div class="col-lg-6 form-group">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">AMC Code * </label>
                                        <div class="col-sm-8">
                                            <input name="amccode" value="" readonly="" type="text" required="" class="form-control required" id="amccode" onkeydown="upperCaseF(this)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">AMC Date Range * </label>
                                        <div class="col-sm-8">
                                            <div class="input-daterange input-group" data-plugin-datepicker="">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="" data-feather="caleder"></i> </span>
                                                </span>
                                                <input readonly="" name="amcissuedate" id="amcissuedate" type="text" class="form-control">
                                                <span class="input-group-text border-left-0 border-right-0 rounded-0"> to </span>
                                                <input readonly="" name="amcenddate" id="amcenddate" type="text" class="form-control">
                                            </div>
                                        </div>
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
                                    <div class="form-group row" id="ifYes" style="display: none;">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">Select Expired AMC * </label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selecttwo="" name="renew_amccode" id="renew_amccode" class="form-control populate placeholder select2-hidden-accessible" data-plugin-options="{ &quot;placeholder&quot;: &quot;Select Expred AMC&quot;, &quot;allowClear&quot;: true }" data-select2-id="renew_amccode" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="2"></option>
                                                <option value="AWMT-00238">AWMT-00238 - 2020-07-28</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" data-select2-id="1" style="width: 325.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-renew_amccode-container"><span class="select2-selection__rendered" id="select2-renew_amccode-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select Expred AMC</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">Select Customer * </label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selecttwo="" name="custcode" id="custcode" required="" class="form-control populate placeholder select2-hidden-accessible" data-plugin-options="{ &quot;placeholder&quot;: &quot;Select Customer&quot;, &quot;allowClear&quot;: true }" data-select2-id="custcode" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="4"></option>
                                                <option value="CUST00229">CUST00229 - GOURI APARTMENT</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" data-select2-id="3" style="width: 325.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-custcode-container"><span class="select2-selection__rendered" id="select2-custcode-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select Customer</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">Customer Site * </label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selecttwo="" name="sitecode" id="sitecode" required="" class="form-control populate placeholder select2-hidden-accessible" data-plugin-options="{ &quot;placeholder&quot;: &quot;Select customer site&quot;, &quot;allowClear&quot;: true }" data-select2-id="sitecode" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="6"></option>

                                            </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" data-select2-id="5" style="width: 325.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sitecode-container"><span class="select2-selection__rendered" id="select2-sitecode-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select customer site</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">Select Quotation * </label>
                                        <div class="col-sm-8">
                                            <select data-plugin-selecttwo="" name="invoiceno" id="invoiceno" required="" class="form-control populate placeholder select2-hidden-accessible" data-plugin-options="{ &quot;placeholder&quot;: &quot;Select Quotation&quot;, &quot;allowClear&quot;: true }" data-select2-id="invoiceno" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="8"></option>

                                                <option value="NO-QUOTATION">No Quotation</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" data-select2-id="7" style="width: 325.656px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-invoiceno-container"><span class="select2-selection__rendered" id="select2-invoiceno-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select Quotation</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-left pt-2">Invoice Date * </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </span>
                                                </span>
                                                <input name="invoicedate" id="invoicedate" type="text" data-plugin-datepicker="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span id="is-availability-status"></span>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tabs tabs-primary">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="nav-item active"> <a class="nav-link" href="#service_tab" data-toggle="tab"><i class="fas fa-wrench"></i> Service Schedule</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#payment_tab" data-toggle="tab"><i class="fas fa-rupee-sign"></i> Schedule Payment</a> </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="service_tab" class="tab-pane active">
                                            <div class="card-body">
                                                <div class="col-lg-12" id="">
                                                    <table class="tablex">
                                                        <thead>
                                                            <tr>
                                                                <td> Number of Service </td>
                                                                <td> Commnent</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <input name="date" type="text" required="" class="form-control required" id="service">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <input name="notes" type="text" required="" class="form-control required" id="notes" value="FREE" placeholder="Notes (If any)">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <div class="input-group ">
                                                                                <button type="button" name="submit" value="Add new row" id="AddService" class="btn btn-info add-service"><i class=""></i> Set Service</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <div class="input-group ">
                                                                                <button type="button" name="reset" id="DeleteService" value="Clear Fields" onclick="clearBox('servicedates2')" class="btn btn-warning clear-row"><i class="fa fa-trash"></i> Clear All</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--<div class="result" id="servicedates"></div>-->

                                                    <table class="table table-bordered" id="servicedates">
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
                                            <div class="panel-body">
                                                <div class="table-responsive col-lg-12" id="">
                                                    <table class="tablex">
                                                        <thead>
                                                            <tr>

                                                                <td> Contract Amount</td>
                                                                <td> GST (%)</td>
                                                                <td> GST Amount</td>
                                                                <td> Total Amount</td>
                                                                <td> No of Installment</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col ">
                                                                            <input name="contractamt" type="text" required="" class="form-control" id="contractamt">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col ">
                                                                            <input type="text" name="gst" id="gst" class="form-control" value="0.00" required="">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col">
                                                                            <input type="text" name="gstamt" id="gstamt" class="form-control" readonly="" required="">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col ">
                                                                            <input type="text" name="totalamt" id="totalamt" class="form-control" required="" readonly="">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col ">
                                                                            <input type="text" name="installment" id="installment" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col ">
                                                                            <button type="button" name="submit" id="AddNewInstallment" value="Set Installment" class="btn btn-info add-installment" disabled="disabled"><i class="fa fa-plus"></i> Set Installment</button>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="form-group row">
                                                                        <div class="col ">
                                                                            <button type="button" name="reset" id="DeleteInstallment" value="Clear Fields" onclick="clearBox2('installments2')" class="btn btn-warning clear-row"><i class="fa fa-trash"></i> Clear All</button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--<div class="result" id="servicedates"></div>-->

                                                    <table class="table table-bordered" id="installments">
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
                        <footer class="card-footer">
                            <div class="row justify-content-end">
                                <div class="col-sm-12">
                                    <button class="btn btn-success " id="submit" type="submit" name="submit" value="Save and Submit" disabled=""><i class="fa fa-save"></i>&nbsp;&nbsp;<span class="bold">Submit</span></button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </footer>
                    </form>
                </div>
            </section>
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
        .dataTables_wrapper table,
        th,
        td {
            font-size: 12px
        }
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
        (function($) {

            'use strict';

            if ($.isFunction($.fn['bootstrapDP'])) {

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

    <script>
        function upperCaseF(a) {
            "use strict";
            setTimeout(function() {
                a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            "use strict";

            $("#prodcode").change(function() {
                "use strict";
                $(this).after('<div id="loader"><img src="img/loading.gif" alt="Loading Product Price" /></div>');
                $.get('loadprodmrp.php?psc=' + $(this).val(), function(data) {
                    $("#prodprice").html(data);
                    $('#loader').slideUp(200, function() {
                        $(this).remove();
                    });
                });
            });

            $("#prodcode").change(function() {
                "use strict";
                $(this).after('<div id="loader2"><img src="img/loading.gif" alt="Loading Warranty Date" /></div>');
                $.get('loadwcenddate.php?prodcode=' + $(this).val(), function(data) {
                    $("#prodwarrenty").html(data);
                    $('#loader2').slideUp(200, function() {
                        $(this).remove();
                    });
                });
            });

            $("#custcode").on('change', function() {
                "use strict";
                $(this).after('<div id="loader2"><img src="img/loading.gif" alt="Loading SITE Details" /></div>');
                $.get('loadsite.php?cust=' + $(this).val(), function(data) {
                    $("#sitecode").html(data);
                    $('#loader2').slideUp(200, function() {
                        $(this).remove();
                    });
                });
            });

            $("#sitecode").on('change', function() {
                "use strict";
                $("#loaderIcon").show();

                jQuery.ajax({
                    url: "checkamcstatus.php",
                    data: 'amcissuedate=' + $("#amcissuedate").val() + '&amcenddate=' + $("#amcenddate").val() + '&custcode=' + $("#custcode").val() + '&sitecode=' + $("#sitecode").val(),
                    type: "POST",
                    success: function(data) {
                        $("#is-availability-status").html(data);
                        $("#loaderIcon").hide();
                    },
                    error: function() {}
                });
            });


        });
    </script>

    <script>
        $(document).ready(function() {
            "use strict";

            var count = 0;

            $('.add-service').click(function(e) {

                var notes1 = $("#notes").val();
                var amccode = $("#amccode").val();

                var start = moment($('#amcissuedate').val());
                var end = moment($('#amcenddate').val());
                var service = parseFloat($('#service').val()) + 1;

                var interval = (end.diff(start, 'second') + 1) / service;



                for (var i = 1; i < service; i++) {
                    var servicedate = moment(start).add(interval * i, 'second').format('YYYY-MM-DD');

                    if (servicedate == "") {
                        alert("please fill minimum 1 row");
                        return false;
                    }



                    var dateresult = "<tr><td><input type='checkbox' class='select-checkbox2' readonly checked='checked' name='record2[]' value=" + servicedate + " id='chk_" + servicedate + "'></td><td><div class='' id='data_1' ><div class='input-group date '> <span class='input-group-addon'></span><input name='amccode_" + servicedate + "' value=" + servicedate + " type='date'  required class='form-control' id='amccode_" + servicedate + "'  ></div></div></td><td><div class='' ><div class='input-group'> <input type='text'  placeholder='Notes - If any' class='form-control' name='notes_" + servicedate + "' id='notes_" + servicedate + "' value=" + notes1 + " ></div></div></td></tr>"

                    $("#servicedates").append(dateresult);
                    count++;
                }

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $('#AddNewInstallment').attr('disabled', 'disabled');
            $("#AddService").click(function() {
                buttonEnabler();
            });
            $("#DeleteService").click(function() {
                buttonEnabler();
            });

            function buttonEnabler() {
                var rowCount = $('#servicedates tbody.servicedates tr').length;
                if (rowCount < 1) {
                    $('#AddNewInstallment').attr('disabled', 'disabled');
                } else {
                    $('#AddNewInstallment').removeAttr('disabled');
                }
            }
        });
    </script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            "use strict";

            var total = 0;
            var cVal;
            var producttotal;
            var check;


            $('.select-checkbox').prop('checked' == true, function() {

                cVal = $(this).attr('id');



                if ($('#' + cVal).is(':checked')) {

                    producttotal = parseFloat($('#prodtotal_' + $(this).val()).val());
                    total += producttotal;
                    $('#inttotal').html(total);
                } else {


                    producttotal = parseFloat($('#prodtotal_' + $(this).val()).val());
                    total -= producttotal;





                    $('#inttotal').html(total);
                }

                parseFloat(document.getElementById('totalbill').value = total);




            });

            $('#gst').on('keyup', function() {
                var value1 = parseFloat(document.getElementById("contractamt").value);
                var value2 = parseFloat(document.getElementById("gst").value);

                document.getElementById('gstamt').value = value1 * value2 / 100;
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
                var interval = value4a / value5;
                var amccode2 = $("#amccode").val();




                for (var i = 0, j = 1; i < value5, j < instalmentdate; i++, j++) {
                    var installment = (i, interval)
                    var instalmentdate2 = moment(start2).add(interval2 * j, 'second').format('YYYY-MM-DD')

                    if (installment == "") {
                        alert("please fill minimum 1 row");
                        return false;
                    }

                    var instamt = "<tr><td><input type='checkbox' class='select-checkbox3' readonly checked='checked' name='record3[]' value=" + i + " id='chk2_" + installment + "'></td><td><div class='' id='data_2' ><div class='input-group date '> <span class='input-group-addon'></span><input name='installdate_" + i + "' value=" + instalmentdate2 + " type='date'  required class='form-control' id='installdate_" + i + "'  ></div></div></td><td><div class='input-group'><input name='amccode2_" + i + "' value=" + installment + " type='text'  required class='form-control' id='amccode2_" + i + "'  ></div></td></tr>"

                    $("#installments").append(instamt);
                }

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $(':input[type="submit"]').prop('disabled', true);
            $("#AddNewInstallment").click(function() {
                buttonEnabler();
            });
            $("#DeleteInstallment").click(function() {
                buttonEnabler();
            });

            function buttonEnabler() {
                var rowCount = $('#installments tbody.installments tr').length;
                if (rowCount < 1) {
                    $('#submit').attr('disabled', 'disabled');
                } else {
                    $('#submit').removeAttr('disabled');
                }
            }
        });
    </script>
    <script>
        function clearBox(servicedates2) {
            document.getElementById(servicedates2).innerHTML = "";
        }
    </script>
    <script>
        function clearBox2(installments2) {
            document.getElementById(installments2).innerHTML = "";
        }
    </script>
    <?php include('footer.php'); ?>