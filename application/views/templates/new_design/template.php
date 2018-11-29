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
        <title>Sign</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        
        <link href="<?php echo base_url();?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url();?>assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font.css">
        
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style>
        ::-webkit-input-placeholder { /* Chrome */
          color: #000000;
        }
        :-ms-input-placeholder { /* IE 10+ */
          color: #000000;
        }
        ::-moz-placeholder { /* Firefox 19+ */
          color: #000000;
          opacity: 1;
        }
        :-moz-placeholder { /* Firefox 4 - 18 */
          color: #000000;
          opacity: 1;
        }
        ::placeholder {
            color: #000000;
            opacity: 1; /* Firefox */
        }
        
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
           color: #000000;
        }
        
        ::-ms-input-placeholder { /* Microsoft Edge */
           color: #000000;
        }
        	.or-seperator {
		    margin-top: 32px;
		    text-align: center;
		    border-top: 1px solid #e0e0e0;
		}
		.or-seperator b {
		    color: #666;
		    padding: 0 8px;
		    width: 30px;
		    height: 30px;
		    font-size: 13px;
		    text-align: center;
		    line-height: 26px;
		    background: #fff;
		    display: inline-block;
		    border: 1px solid #e0e0e0;
		    border-radius: 50%;
		    position: relative;
		    top: -15px;
		    z-index: 1;
		}
        .has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .form-control-feedback, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label {
            color: #fff;
        }
        </style>
        	</head>
    <!-- END HEAD -->

    <body class=" login" style="background:#222232;">
        <!-- BEGIN LOGO -->
        <div class="logo">
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog" style="margin-top:100px;">
                <div class="modal-content" style="background:#222227;">
                    <div class="modal-header" style="border-bottom:none;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" style="text-align:center;"><span style="color:#fff;">Terms & Condition</span></h4>
                    </div>
                    <div class="modal-body"> 
				        <span style="font-size:18px;color:#fff;line-height:2;"><strong>Privacy reminder from DiagAi.com</strong></span>
						<br>
						<span style="font-size:13px;color:#fff;line-height:2;">In order to comply with data protection laws, we ask you to review the key pooints below of our Privacy Policy.</span>
						<span style="font-size:13px;color:#fff;line-height:2;">To continue using our website, you need to select your preferences and click 'Save'.You can read more about</span>
						
						<span style="font-size:13px;color:#fff;line-height:2;">our privacy policy.We document your agreement and you can opt out by going to our privacy policy and clicking on the widget.</span>
						<br><br>
						<div class="row">
							<div class="col-md-12">
	                            <div class="portlet red-pink box" style="margin-bottom:15px;border:none;">
	                                <div class="portlet-title">
	                                    <div class="caption">
	                                        <i class="fa fa-cogs"></i><span style="font-size:13px;">Medical Device</span></div>
	                                        <div class="tools">
	                                            <a href="javascript:;" class="expand"> </a>
	                                        </div>
	                                </div>
	                                <div class="portlet-body" style="display:none;">
	                                </div>
	                            </div>
	                        </div>
						</div>
						<div class="row">
							<div class="col-md-12">
	                            <div class="portlet red-pink box" style="margin-bottom:15px;border:none;">
	                                <div class="portlet-title">
	                                    <div class="caption">
	                                        <i class="fa fa-cogs"></i><span style="font-size:13px;">Privacy Policy</span></div>
	                                        <div class="tools">
	                                            <a href="javascript:;" class="expand"> </a>
	                                        </div>
	                                </div>
	                                <div class="portlet-body" style="display:none;">
	                                </div>
	                            </div>
	                        </div>
						</div>
						<div class="row">
							<div class="col-md-12">
	                            <div class="portlet red-pink box" style="border:none;">
	                                <div class="portlet-title">
	                                    <div class="caption">
	                                        <i class="fa fa-cogs"></i><span style="font-size:13px;">User Content</span></div>
	                                        <div class="tools">
	                                            <a href="javascript:;" class="expand"> </a>
	                                        </div>
	                                </div>
	                                <div class="portlet-body" style="display:none;">
	                                </div>
	                            </div>
	                        </div>
						</div>
         			</div>
                    <div class="modal-footer" style="border-top:none;">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal" style="background:#dd8434;border:none;color:#fff;">Cancel</button>
                        <button type="button" id="btn_accept_con" class="btn green" style="background:#0072BB;border:none;">Accept</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="content" style="background-color:#222227;opacity:0.92;border-radius:2px !important;">
            <!-- BEGIN LOGIN FORM -->
            
            <form class="login-form" action="<?php echo base_url();?>login" method="post">
                <div class="form-title" style="text-align:center;">
        			<span style="color:#fff;font-size:22px;">DiagAI</span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control form-control-solid placeholder-no-fix" style="border-radius:4px !important;" type="text" id="email" placeholder="Email" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" style="border-radius:4px !important;" type="password" id="password" placeholder="Password" name="password" /> </div>
                    
                <div class="form-actions">
			        <div class="pull-left">
                        <label class="rememberme mt-checkbox mt-checkbox-outline" style="padding-left:0px;font-size:12px;">
                            Forgot Password?
                            
                        </label>
                    </div>
                    <div class="pull-right forget-password-block" style="width:32%;">
	                    <button type="button" id="login-submit-btn" style="background:#8dc73f;border-radius:4px !important;border:none;" class="btn red btn-block uppercase">Login</button>
                    </div>
                    
                </div>
                <div class="form-group" style="margin-bottom:3px;margin-top:3px;display:inline-block;position:relative;width:100%;display:none;" id="error_result">
			        <span class="help-block" style="color:#ffffff;background:#ff0000;padding:5px;border-radius:3px !important;" id="error_text">Already Email Existed!</span>
                </div>
                <div class="login-options">
            		<div class="or-seperator"><b>or</b></div>
                </div>
                <div class="create-account" style="border-top:none;padding-top:0px;margin-top:0px;">
                    <p style="margin-top:0px;">
                        <a class="btn-primary btn" id="" style="width:100%;border:none;border-radius:4px !important;" data-toggle="modal" href="#basic">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <div class="form-title" style="color:#ffffff;">
                    <span class="form-subtitle">A confirmation email has been sent to your email. Check your inbox and click on the email link to confirm your email address.</span>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" style="background:#8dc73f;color:#fff;" class="btn btn-default">Back</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="<?php echo base_url();?>signup" method="post">
                <div class="form-title" style="text-align:center;">
        			<span style="color:#fff;font-size:22px;">DiagAI</span>
                </div>
                <div class="form-group" style="margin-bottom:3px;margin-top:3px;display:inline-block;position:relative;width:100%;display:none;" id="error_reg_result">
			        <span class="help-block" style="color:#ffffff;background:#ff0000;padding:5px;border-radius:3px !important;margin-bottom:12px;" id="error_reg_text">Already Email Existed!</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Email" name="email" id="reg_email" /> </div>

                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" style="border-radius:4px !important;" autocomplete="off" id="register_password" placeholder="Password" name="password" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
                    <input class="form-control placeholder-no-fix" type="password" style="border-radius:4px !important;" autocomplete="off" placeholder="Confirm Password" name="rpassword" /> </div>
				<div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Hospital</label>
                    		<select class="form-control" id="user_type" name="user_type" style="border-radius:4px !important;">
                                <option value="" disabled selected>Select User Type</option>
                                <option value="0">Doctor</option>
                                <option value="1">Radiologist</option>
                                <option value="2">Patient</option>
                            </select>
				</div>
				<div id="extra_info_patient" style="display:none;">
				    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">First Name</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="First Name" name="fname" /> </div>
    				<div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Last Name" name="lname" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Age</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Age" name="age" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Sex</label>
                        <select class="form-control" style="border-radius:4px !important;">
                            <option value="0">Man</option>
                            <option value="1">Woman</option>
                        </select>
                    </div>    
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Contact</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Contact" name="contact" /> </div> 
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Demographic Info</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Demographic Info" name="demograph" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Race</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Race" name="race" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Ethinicity</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Ethinicity" name="ethinicity" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Country</label>
                        <input class="form-control placeholder-no-fix" style="border-radius:4px !important;" type="text" placeholder="Country" name="country" /> </div>          
                </div>                        
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn btn-default" style="border-radius:4px !important;">Back</button>
                    <button type="button" id="register-submit-btn" class="btn blue uppercase pull-right" style="border-radius:4px !important;">Sign Up</button>
                </div>
				
				
            </form>
			
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright"> Contact support@DiagAI.com
        <br>Brillersys LLC | Terms of use | Privacy Policy
        <br>© 2018 DiagAI. ALL RIGHTS RESERVED. </div>
        <!-- END LOGIN -->
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
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/backstretch/jquery.backstretch.js" type="text/javascript"></script>
        	
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/pages/scripts/ui-modals.js" type="text/javascript"></script>
        	
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/pages/scripts/login-4.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            
        </script>
    </body>

</html>