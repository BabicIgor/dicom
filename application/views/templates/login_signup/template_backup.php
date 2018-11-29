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
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | Blank Page Layout</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->

        <link href="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />



        <link href="<?php echo base_url();?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />



        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url();?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/dicom/js/cornerstone.min.css">

        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="<?php echo base_url();?>assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo base_url();?>assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="login/logout">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <?php if($menu == 'dashboard') {?>
                                <li class="nav-item start active open ">
                                    <a href="<?php echo base_url();?>" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                            <?php } else {?>
                                <li class="nav-item start">
                                    <a href="<?php echo base_url();?>" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($menu == 'hospital') {?>
                                <li class="nav-item start active open ">
                                    <a href="<?php echo base_url();?>Hospital" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Hospital / Institution</span>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item start ">
                                    <a href="<?php echo base_url();?>Hospital" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Hospital / Institution</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($menu == 'doctor') {?>
                                <li class="nav-item start active open">
                                    <a href="<?php echo base_url();?>Doctor" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Doctor</span>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item start ">
                                    <a href="<?php echo base_url();?>Doctor" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Doctor</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if($menu == 'radio') {?>
                                <li class="nav-item start active open">
                                    <a href="<?php echo base_url();?>Radio" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Radiologist</span>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item start ">
                                    <a href="<?php echo base_url();?>Radio" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Radiologist</span>
                                    </a>
                                </li>
                            <?php } ?>
                            
                            
                            <li class="nav-item start ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Equipment Master</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Prediction Type</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="background-color:#fff;min-height:-webkit-fill-available;">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        {content}
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="javascript:;" class="page-quick-sidebar-toggler">
                    <i class="icon-login"></i>
                </a>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
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
        <script src="<?php echo base_url();?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>


        <script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script> 
               
        <script src="<?php echo base_url();?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>



        <script src="<?php echo base_url();?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>


        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/pages/scripts/table-datatables-managed.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/pages/scripts/components-select2.js" type="text/javascript"></script>

        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        	
        <script src="<?php echo base_url();?>assets/dicom/js/hammer.min.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/js/cornerstone.min.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/js/cornerstoneMath.min.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/js/cornerstoneTools.min.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/js/dicomParser.min.js" ></script>
        	
        	
        <script src="<?php echo base_url();?>assets/dicom/codecs/openJPEG-FixedMemory.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/codecs/charLS-FixedMemory-browser.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/codecs/jpegLossless.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/codecs/jpeg.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/codecs/pako.min.js" ></script>
        <script src="<?php echo base_url();?>assets/dicom/uids.js" ></script>
        	
        	
        	
		<script>window.cornerstoneWADOImageLoader || document.write('<script src="https://unpkg.com/cornerstone-wado-image-loader">\x3C/script>')</script>
        <script src="<?php echo base_url();?>assets/dicom/utils/initializeWebWorkers.js" ></script>
        	
        
        <script>
            $('#add_hospital').on('click', function(){
                $('#add_hospital_dialog').modal('show');
            });
            $('#add_doctor').on('click', function(){
                $('#add_doctor_dialog').modal('show');
            });
            $('#add_radio').on('click', function(){
                $('#add_radio_dialog').modal('show');
            });
            $('#expand_address_info_radiologist').on('click', function(){
               
               
               if($(this).children().hasClass('fa fa-plus'))
               {
                   $(this).children().removeClass('fa fa-plus');
                   $(this).children().addClass('fa fa-minus');
                   $('#extra_address_radiologist').css('display', 'block');                   
               }
               else
               {
                   $(this).children().removeClass('fa fa-minus');
                   $(this).children().addClass('fa fa-plus');
                   $('#extra_address_radiologist').css('display', 'none');                   
               }
                
            });
           
        </script>
        	
        <script>
        	
	        cornerstoneWADOImageLoader.external.cornerstone = cornerstone;
		    cornerstoneWADOImageLoader.configure({
		        beforeSend: function(xhr) {
		            // Add custom headers here (e.g. auth tokens)
		            //xhr.setRequestHeader('x-auth-token', 'my auth token');
		        },
		        useWebWorkers: true,
		    });

		    let loaded = false;	    
		    
        	
		    const element = document.getElementById('dicomImage');
		    if(element !=null)
		    {
		    cornerstone.enable(element);    
		    }
		    
    	    function loadAndViewImage(imageId) {
		        const element = document.getElementById('dicomImage');
		        const start = new Date().getTime();

		        cornerstone.loadImage(imageId).then(function(image) {
		        	
		            const viewport = cornerstone.getDefaultViewportForImage(element, image);
		            cornerstone.displayImage(element, image, viewport);
	                if(loaded === false) {
		                cornerstoneTools.mouseInput.enable(element);
		                cornerstoneTools.mouseWheelInput.enable(element);
		                cornerstoneTools.wwwc.activate(element, 1); // ww/wc is the default tool for left mouse button
		                cornerstoneTools.pan.activate(element, 2); // pan is the default tool for middle mouse button
		                cornerstoneTools.zoom.activate(element, 4); // zoom is the default tool for right mouse button
		                cornerstoneTools.zoomWheel.activate(element); // zoom is the default tool for middle mouse wheel

		                //cornerstoneTools.imageStats.enable(element);
		                loaded = true;
		            }


		        }, function(err) {
		            alert(err);
		        });
		    }
		    $('#btn_file_open_dcm').on('click', function(){
		    	$('#selectFile').click();
		    });
		    function handleDragOver(evt) {
		        evt.stopPropagation();
		        evt.preventDefault();
		        evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
		    }
		    if(document.getElementById('selectFile')!=null)
		    {
    		    document.getElementById('selectFile').addEventListener('change', function(e) {
    		        const file = e.target.files[0];
    		        const imageId = cornerstoneWADOImageLoader.wadouri.fileManager.add(file);
    		        loadAndViewImage(imageId);
    		    });    
		    }
		    
		    const imageZone = document.getElementById('dicomImage');
		    if(imageZone!=null)
		    {
		        imageZone.addEventListener('dragover', handleDragOver, false);
    			imageZone.addEventListener('mousedown', function (e) {
    				let lastX = e.pageX;
    				let lastY = e.pageY;
    				function mouseMoveHandler(e) {
    					const deltaX = e.pageX - lastX;
    					const deltaY = e.pageY - lastY;
    					lastX = e.pageX;
    					lastY = e.pageY;
    
    					const viewport = cornerstone.getViewport(element);
    					viewport.translation.x += (deltaX / viewport.scale);
    					viewport.translation.y += (deltaY / viewport.scale);
    					cornerstone.setViewport(element, viewport);
    				}
    
    				function mouseUpHandler() {
    					document.removeEventListener('mousemove', mouseMoveHandler);
    					document.removeEventListener('mouseup', mouseUpHandler);
    				}
    
    				var checkbox = document.getElementById('pan');
    				if (checkbox.checked == true){
    					document.addEventListener('mousemove', mouseMoveHandler);
    					document.addEventListener('mouseup', mouseUpHandler);
    				}
    				else{
    					document.removeEventListener('mousemove', mouseMoveHandler);
    					document.removeEventListener('mouseup', mouseUpHandler);
    				}
    			});
		    }
		    
			function removePanningEventHandler(e) {
				//alert('removePanningEventHandler');
				let lastX = e.pageX;
				let lastY = e.pageY;
				
				document.removeEventListener('mousemove', mouseMoveHandler);
				document.removeEventListener('mouseup', mouseUpHandler);
			}
		    $('#pan').on('change', function(){
		    	if($(this).prop('checked', true))
				{
			    	$('#adjust').prop('checked', false);
			    	$('#magnify').prop('checked', false);
				}
				else
				{
				}
		    });
			$('#adjust').on('change', function(){
				if($(this).prop('checked', true))
				{
			    	$('#pan').prop('checked', false);
				}
				else
				{
					
				}
		    });
			$('#invert').on('change', function(){
		        let viewport = cornerstone.getViewport(imageZone);
		        viewport.invert = !viewport.invert;
		        cornerstone.setViewport(element, viewport);
		    });
			var magnifyConfig = {
		        magnifySize: parseInt(100, 10),
		        magnificationLevel: parseInt(4, 10)
		    };
			
			cornerstoneTools.magnify.setConfiguration(magnifyConfig);

			$('#magnify').on('change', function(){
				if($(this).prop('checked', true))
				{
			    	$('#pan').prop('checked', false);
					
			    	$('#this').prop('checked', false);
					
					cornerstoneTools.magnify.activate(element, 1);
		            cornerstoneTools.magnifyTouchDrag.activate(element);
				}
				else
				{
					cornerstoneTools.magnify.disable(element);
		            cornerstoneTools.magnifyTouchDrag.disable(element);
			    	$('#pan').prop('checked', true);
					$('#this').prop('checked', true);
				}

		    });
		    
		    
		    $('#reset').on('click', function(){
    	        cornerstone.reset(element);
		    });
			$('#flip').on('click', function(){
		        const viewport = cornerstone.getViewport(element);
		        viewport.hflip = !viewport.hflip;
		        cornerstone.setViewport(element, viewport);
		    });
            document.addEventListener("DOMContentLoaded", function(event) {
                
            });
        </script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>