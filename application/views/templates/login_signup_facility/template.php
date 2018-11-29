<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" data-ng-app="MetronicApp">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>NUEVOZEN</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url();?>assets/loading-bar/loading-bar.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://unpkg.com/angular-toastr/dist/angular-toastr.css" />
        <!-- or -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/angular-toastr@2/dist/angular-toastr.css">        
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />



        <link href="<?php echo base_url();?>assets/fSelect/fSelect.css" rel="stylesheet" type="text/css" />

        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link id="ng_load_plugins_before" />

        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font.css">

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <script>
            var base_url = "<?php echo base_url();?>";
        </script>
        <script src="http://musicincline.com:8000/socket.io/socket.io.js"></script>
        
    <!-- END HEAD -->

    <body ng-controller="AppController" class="page-header-fixed page-sidebar-closed-hide-logo page-on-load" ng-class="{'page-content-white': settings.layout.pageContentWhite,'page-container-bg-solid': settings.layout.pageBodySolid, 'page-sidebar-closed': settings.layout.pageSidebarClosed}">
        
        <!--<div ng-spinner-bar class="page-spinner-bar">-->
        <!--    <div class="bounce1"></div>-->
        <!--    <div class="bounce2"></div>-->
        <!--    <div class="bounce3"></div>-->
        <!--</div>-->
        <!-- END PAGE SPINNER -->
        <!-- BEGIN HEADER -->
        <div data-ng-include="'tpl/header_facility.html'" data-ng-controller="HeaderController" class="page-header navbar navbar-fixed-top"> </div>
        <!-- END HEADER -->
        <div class="clearfix"> </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div data-ng-include="'tpl/sidebar_facility.html'" data-ng-controller="SidebarController" class="page-sidebar-wrapper"> </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN STYLE CUSTOMIZER(optional) -->
                    <!-- END STYLE CUSTOMIZER -->
                    <!-- BEGIN ACTUAL CONTENT -->
                    <div ui-view class="fade-in-up"> </div>
                    <!-- END ACTUAL CONTENT -->
                </div>
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div data-ng-include="'tpl/quick-sidebar.html'" data-ng-controller="QuickSidebarController" class="page-quick-sidebar-wrapper"></div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div data-ng-include="'tpl/footer.html'" data-ng-controller="FooterController" class="page-footer"> </div>
        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
        
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo base_url();?>assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>


        
        <script src="<?php echo base_url();?>assets/global/plugins/angularjs/angular.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/angularjs/angular-sanitize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/angularjs/angular-touch.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/angularjs/plugins/angular-ui-router.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/angularjs/plugins/ocLazyLoad.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/angularjs/plugins/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>


        
        <!--<script src="<?php echo base_url();?>assets/global/plugins/datatables/datatables.all.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url();?>assets/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/angular-datatables.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/colreorder/angular-datatables.colreorder.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/columnfilter/angular-datatables.columnfilter.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/colvis/angular-datatables.colvis.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/fixedcolumns/angular-datatables.fixedcolumns.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/fixedheader/angular-datatables.fixedheader.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/scroller/angular-datatables.scroller.min.js"></script>
        <script src="<?php echo base_url();?>assets/angular-datatables/dist/plugins/tabletools/angular-datatables.tabletools.min.js"></script> 
        
        <script src="https://unpkg.com/angular-toastr/dist/angular-toastr.tpls.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/angular-toastr@2/dist/angular-toastr.tpls.js"></script>
       

        <script src="<?php echo base_url();?>assets/global//plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

        
        <script src="<?php echo base_url();?>assets/fSelect/fSelect.js" type="text/javascript"></script>

        
        <script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>         
        <script src="<?php echo base_url();?>assets/global/plugins/echarts/echarts.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url();?>assets/loading-bar/loading-bar.js" type="text/javascript"></script>
        
        
        
        <script src="<?php echo base_url();?>js/main.js" type="text/javascript"></script>
        <!--<script src="<?php echo base_url();?>js/directives.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url();?>assets/apps/countries.js" type="text/javascript"></script>         

        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        
        
        <script>
            
        </script>
       
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>