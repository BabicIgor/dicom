var Hospital = function () {
	var handle = function () {
	    $('#hospital-create-form').validate({
        	errorElement: 'span', //default input error message container
        	errorClass: 'help-block', // default input error message class
        	focusInvalid: false, // do not focus the last invalid input
        	ignore: "",
        	rules: {
        		name: {
        			required: true,
        		}
        	},
        
        	messages: {
        		name: {
        			required: "Name is required."
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
	}
    
    return {
		//main function to initiate the module
		init: function () {

			handle();
			
		}
		
	};
}();
jQuery(document).ready(function () {
    Hospital.init();
});