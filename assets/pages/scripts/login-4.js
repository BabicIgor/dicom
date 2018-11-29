var Login = function () {

	var handleLogin = function () {
		$('.login-form').validate({
			errorElement: 'span', //default input error message container
			errorClass: 'help-block', // default input error message class
			focusInvalid: false, // do not focus the last invalid input
			ignore: "",
			rules: {
				email: {
					required: true,
					email: true
				},
				password: {
					required: true
				}
			},

			messages: {
				email: {
					required: "Email is required."
				},
				password: {
					required: "Password is required."
				}
			},

			invalidHandler: function (event, validator) { //display error alert on form submit   
				
			},

			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
					
			},

			success: function (label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			errorPlacement: function (error, element) {
				if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
					error.insertAfter($('#register_tnc_error'));
				} else if (element.closest('.input-icon').size() === 1) {
					error.insertAfter(element.closest('.input-icon'));
				} else {
					error.insertAfter(element);
				}
			},

			submitHandler: function (form) {
				form.submit();
			}
		});

		$('.login-form input').keypress(function (e) {
			if (e.which == 13) {
				if ($('.login-form').validate().form()) {
				    
					var data = {
        			    email : $('#email').val(),
        			    password : $('#password').val()
        			};
        		    $.ajax({
                        url: 'login',
                        data : data,
                        method : 'POST',
                        dataType : 'json',
                        success: function (result) {
                            console.log(result);
                            if(result.login == true)
                            {
                               $('#error_result').css('display', 'none');
                               location.href = "/";
                            }
                            else
                            {
                                $('#error_result').css('display', 'inline-block');
                                $('#error_text').css('display', 'block');
                                $('#error_text').html(result.message);
                            }
                        },
                        async: false
                    });	
                    
				}
				return false;
			}
		});
	}

	var handleForgetPassword = function () {
		$('.forget-form').validate({
			errorElement: 'span', //default input error message container
			errorClass: 'help-block', // default input error message class
			focusInvalid: false, // do not focus the last invalid input
			ignore: "",
			rules: {
				email: {
					required: true,
					email: true
				}
			},

			messages: {
				email: {
					required: "Email is required."
				}
			},

			invalidHandler: function (event, validator) { //display error alert on form submit   

			},

			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},

			success: function (label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			errorPlacement: function (error, element) {
				// error.insertAfter(element.closest('.input-icon'));
				if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
					error.insertAfter($('#register_tnc_error'));
				} else if (element.closest('.input-icon').size() === 1) {
					error.insertAfter(element.closest('.input-icon'));
				} else {
					error.insertAfter(element);
				}
			},

			submitHandler: function (form) {
				form.submit();
			}
		});

		$('.forget-form input').keypress(function (e) {
			if (e.which == 13) {
				if ($('.forget-form').validate().form()) {
					$('.forget-form').submit();
				}
				return false;
			}
		});

		jQuery('#forget-password').click(function () {
			jQuery('.login-form').hide();
			jQuery('.forget-form').show();
		});

		jQuery('#back-btn').click(function () {
			jQuery('.login-form').show();
			jQuery('.forget-form').hide();
		});





	}



    


	var handleRegister = function () {

        
		$('.register-form').validate({
			errorElement: 'span', //default input error message container
			errorClass: 'help-block', // default input error message class
			focusInvalid: false, // do not focus the last invalid input
			ignore: "",
			rules: {
				email: {
					required: true,
					email: true
				},
				user_type: {
					required: true
				},
				password: {
				    required: true
				},
				rpassword: {
					equalTo: "#register_password"
				},
			},

			messages: { // custom messages for radio buttons and checkboxes
				tnc: {
					required: "Please accept TNC first."
				}
			},

			invalidHandler: function (event, validator) { //display error alert on form submit   

			},

			highlight: function (element) { // hightlight error inputs
				$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
			},

			success: function (label) {
				label.closest('.form-group').removeClass('has-error');
				label.remove();
			},

			errorPlacement: function (error, element) {
				if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
					error.insertAfter($('#register_tnc_error'));
				} else if (element.closest('.input-icon').size() === 1) {
					error.insertAfter(element.closest('.input-icon'));
				} else {
					error.insertAfter(element);
				}
			},

			submitHandler: function (form) {
				form.submit();
			}
		});

		$('.register-form input').keypress(function (e) {
			if (e.which == 13) {
				if ($('.register-form').validate().form()) {
					var data = {
        			    email : $('#reg_email').val(),
        			    password : $('#register_password').val()
        			};
        		    $.ajax({
                        url: 'signup',
                        data : data,
                        method : 'POST',
                        dataType : 'json',
                        success: function (result) {
                            console.log(result);
                            if(result.login == true)
                            {
                                $('.register-form').hide();
        			            $('.forget-form').show();
                            }
                            else
                            {
                                $('#error_reg_result').css('display', 'block');
                                $('#error_reg_text').css('display', 'block');
                                
                                $('#error_reg_text').html(result.message);
                            }
                        },
                        async: false
                    });	
				}
				return false;
			}
		});
		
		
		

		jQuery('#register-btn').click(function () {
		    
            
			jQuery('.login-form').hide();
			jQuery('.register-form').show();
		});

		jQuery('#register-back-btn').click(function () {
			jQuery('.login-form').show();
			jQuery('.register-form').hide();
		});
	}
// 	var handleRegister1 = function () {
    
            
//     		$('.register-form').validate({
//     			errorElement: 'span', //default input error message container
//     			errorClass: 'help-block', // default input error message class
//     			focusInvalid: false, // do not focus the last invalid input
//     			ignore: "",
//     			rules: {
    
//     				fullname: {
//     					required: true
//     				},
//     				email: {
//     					required: true,
//     					email: true
//     				},
//     				user_type: {
//     					required: true
//     				},
//     				fname: {
//     					required: true
//     				},
//     				lname: {
//     					required: true
//     				},
//     				age: {
//     					required: true
//     				},
//     				contact: {
//     					required: true
//     				},
//     				demograph: {
//     					required: true
//     				},
//     				race: {
//     					required: true
//     				},
//     				ethinicity: {
//     					required: true
//     				},
//     				country: {
//     					required: true
//     				},
//     				username: {
//     					required: true
//     				},
//     				password: {
//     					required: true
//     				},
//     				rpassword: {
//     					equalTo: "#register_password"
//     				},
    
//     				tnc: {
//     					required: true
//     				}
//     			},
    
//     			messages: { // custom messages for radio buttons and checkboxes
//     				tnc: {
//     					required: "Please accept TNC first."
//     				}
//     			},
    
//     			invalidHandler: function (event, validator) { //display error alert on form submit   
    
//     			},
    
//     			highlight: function (element) { // hightlight error inputs
//     				$(element)
//     					.closest('.form-group').addClass('has-error'); // set error class to the control group
//     			},
    
//     			success: function (label) {
//     				label.closest('.form-group').removeClass('has-error');
//     				label.remove();
//     			},
    
//     			errorPlacement: function (error, element) {
//     				if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
//     					error.insertAfter($('#register_tnc_error'));
//     				} else if (element.closest('.input-icon').size() === 1) {
//     					error.insertAfter(element.closest('.input-icon'));
//     				} else {
//     					error.insertAfter(element);
//     				}
//     			},
    
//     			submitHandler: function (form) {
//     				form.submit();
//     			}
//     		});
    
//     		$('.register-form input').keypress(function (e) {
//     			if (e.which == 13) {
//     				if ($('.register-form').validate().form()) {
//     					$('.register-form').submit();
//     				}
//     				return false;
//     			}
//     		});
    
//     		jQuery('#register-btn').click(function () {
//     			jQuery('.login-form').hide();
//     			jQuery('.register-form').show();
//     		});
    
//     		jQuery('#register-back-btn').click(function () {
//     			jQuery('.login-form').show();
//     			jQuery('.register-form').hide();
//     		});
//     	}

	return {
		//main function to initiate the module
		init: function () {

			handleLogin();
			handleRegister();

			// init background slide images
			$.backstretch([
				"assets/pages/media/bg/1.jpg",
				"assets/pages/media/bg/8.jpg",
				"assets/pages/media/bg/9.jpg",
				"assets/pages/media/bg/10.jpg",
				"assets/pages/media/bg/2.jpg",
				"assets/pages/media/bg/3.jpg",
				"assets/pages/media/bg/4.jpg",
				"assets/pages/media/bg/5.jpg",
				"assets/pages/media/bg/6.jpg",
				"assets/pages/media/bg/7.jpg",
			], {
					fade: 700,
					duration: 6000
			}
			);
		}
		
	};

}();

jQuery(document).ready(function () {
	Login.init();
	
	$('#register-submit-btn').on('click', function(){
	    if ($('.register-form').validate().form()) {
			
			var data = {
			    email : $('#reg_email').val(),
			    password : $('#register_password').val()
			};
		    $.ajax({
                url: 'signup',
                data : data,
                method : 'POST',
                dataType : 'json',
                success: function (result) {
                    console.log(result);
                    if(result.login == true)
                    {
                        $('.register-form').hide();
			            $('.forget-form').show();
                    }
                    else
                    {
                        $('#error_reg_result').css('display', 'block');
                        $('#error_reg_text').css('display', 'block');
                        
                        $('#error_reg_text').html(result.message);
                    }
                },
                async: false
            });	
			
			
		}
	    
	})
	
	$('#login-submit-btn').on('click', function(){
	    if ($('.login-form').validate().form()) {
			
    		
			
			var data = {
			    email : $('#email').val(),
			    password : $('#password').val()
			};
		    $.ajax({
                url: 'login',
                data : data,
                method : 'POST',
                dataType : 'json',
                success: function (result) {
                    console.log(result);
                    if(result.login == true)
                    {
                       $('#error_result').css('display', 'none');
                       location.href = "/";
                    }
                    else
                    {
                        $('#error_result').css('display', 'inline-block');
                        $('#error_text').css('display', 'block');
                        $('#error_text').html(result.message);
                    }
                },
                async: false
            });	
			
			
		}
	    
	})
	
	
	
	
	$('#btn_accept_con').on('click', function () {
		$('#basic').modal('hide');
		$('#error_result').css('display', 'none');
		$('.login-form').hide();
		$('.register-form').show();

	})
	$('#back-btn').on('click', function(){
		$('.login-form').show();
		$('.register-form').hide();
		$('.forget-form').hide();
    });
    
    $('#user_type').on('change', function(){
        if($('#user_type').val() == "2")
        {   
            $('#extra_info_patient').slideDown(300);
            $('#extra_info_patient').css('display', 'block');
        }
        else
        {
            $('#extra_info_patient').slideUp(300);
            $('#extra_info_patient').css('display', 'none');
        }
    })
});