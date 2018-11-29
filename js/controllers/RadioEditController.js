angular.module('MetronicApp').controller('RadioEditController', ['$rootScope', '$scope', 'settings', '$state', '$http', '$stateParams', function($rootScope, $scope, settings, $state, $http, $stateParams) {
    $scope.row = [];
    $scope.$on('$viewContentLoaded', function() {   
        App.initAjax();
        $http.get(base_url + 'department/getDepartmentSelects')
        	.success(function (responseData,status,headers,config) {
        	    
        	    
                $scope.departmentList = responseData;
        		
        	
        		
        		
                
        		
        	})
        	.error(function(data){
        	});
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                orientation: "left",
                autoclose: true
            });
            //$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
        }
        $http.get(base_url + 'radio/getRadiosByRowId?row_id=' + $stateParams.row_id)
    	.success(function (responseData,status,headers,config) {
    
    		$scope.row = responseData;
    		
    		
    		populateCountries("country", "state");
     		populateStates("country", "state", $scope.row.country, $scope.row.state);

    		$('#real_institution_id').val($scope.row.institution_id);
    		$("#physician_id").val($scope.row.physician_id);
    		$('#address_id').val($scope.row.address_id);
            var countries = [];
            
            var data = {
                institution_type : $scope.row.profile_type
            }
            
            $http.post(base_url + 'hospital/getInstitutionNameByType', data)
            .success(function (responseData,status,headers,config) {
                
                countries = responseData.data;
                autocomplete(document.getElementById("institution"), countries, responseData.data_id);
                
            })
            .error(function(data){
            });       
    		
    	})
    	.error(function(data){
    	});	
    	$('#profiletype').on('change', function(){
            
            
            var countries = [];
                
            var data = {
                institution_type : $('#profiletype').val()
            }
            
            $http.post(base_url + 'hospital/getInstitutionNameByType', data)
    		.success(function (responseData,status,headers,config) {
                
                countries = responseData.data;
                autocomplete(document.getElementById("institution"), countries, responseData.data_id);
                
    		})
    		.error(function(data){
    		});
            
        })
    	
    	
    	
    // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });

   
    $scope.fnamevalidation = false;
    $scope.lnamevalidation = false;    
    $scope.profiletypevalidation = false;
    $scope.institutionvalidation = false;
    $scope.dobvalidation = false;
    $scope.gendervalidation = false;
    $scope.specializationvalidation = false;
    $scope.phonevalidation = false;
    $scope.emailvalidation = false;
    $scope.departmentvalidation = false;
    
    
    
    $scope.address1validation = false;
    $scope.address2validation = false;
    $scope.cityvalidation = false;
    $scope.statevalidation = false;
    $scope.countryvalidation = false;
    $scope.zipcodevalidation = false;
   
   
   
   	$scope.update_radio_info = function(){
   	    var fname = $('#fname').val();
            if(fname == '')
            {
                $scope.fnamevalidation = true;
            }
            else
            {
                $scope.fnamevalidation = false;
            }
            var lname = $('#lname').val();
            if(lname == '')
            {
                $scope.lnamevalidation = true;    
            }
            else
            {
                $scope.lnamevalidation = false;    
            }
            var profiletype = $('#profiletype').val();
            if(profiletype == null)
            {
                $scope.profiletypevalidation = true;            
            }
            else
            {
                $scope.profiletypevalidation = false;
            }
            var institution = $('#real_institution_id').val();
            if(institution == '')
            {
                $scope.institutionvalidation = true;   
            }
            else
            {
                $scope.institutionvalidation = false;
            }
            
            var dob = $('#dob').val();
            if(dob == '')
            {
                $scope.dobvalidation = true;
            }
            else
            {
                $scope.dobvalidation = false;
            }
            
            
            var gender = $('#gender').val();
            if(gender == null)
            {
                $scope.gendervalidation = true;
            }
            else
            {
                $scope.gendervalidation = false;
            }
            var specialization = $('#specialization').val();
            if(specialization == null)
            {
                $scope.specializationvalidation = true;
            }
            else
            {
                $scope.specializationvalidation = false;
            }
            
            var phone = $('#phone').val();
            if(phone == '')
            {
                $scope.phonevalidation = true;
            }
            else
            {
                $scope.phonevalidation = false;
            }
            var email = $('#email').val();
            if(email == '')
            {
                $scope.emailvalidation = true;
            }
            else
            {
                $scope.emailvalidation = false;
            }
            var department = $('#department').val();
            if(department == '')
            {
                $scope.departmentvalidation = true;
            }
            else
            {
                $scope.departmentvalidation = false;
            }
            var address1 = $('#address1').val();
            if(address1 == '')
            {
                $scope.address1validation = true;
            }
            else
            {
                $scope.address1validation = false;
            }
            
            var address2 = $('#address2').val();
            if(address2 == '')
            {
                $scope.address2validation = true;
            }
            else
            {
                $scope.address2validation = false;
            }
            
            var city = $('#city').val();
            if(city == '')
            {
                $scope.cityvalidation = true;
            }
            else
            {
                $scope.cityvalidation = false;
            }
            
            var country = $('#country').val();
            
            if(country == '')
            {
                $scope.countryvalidation = true;
            }
            else
            {
                $scope.countryvalidation = false;
            }
            
            var state = $('#state').val();
            if(state == '')
            {
                $scope.statevalidation = true;
            }
            else
            {
                $scope.statevalidation = false;
            }
            
            
            var zipcode = $('#zipcode').val();
            if(zipcode == '')
            {
                $scope.zipcodevalidation = true;
            }
            else
            {
                $scope.zipcodevalidation = false;
            }
            
            if(
            !$scope.fnamevalidation &&
            !$scope.lnamevalidation &&    
            !$scope.profiletypevalidation &&
            !$scope.institutionvalidation &&
            !$scope.dobvalidation &&
            !$scope.gendervalidation &&
            !$scope.specializationvalidation &&
            !$scope.phonevalidation &&
            !$scope.emailvalidation &&
            !$scope.departmentvalidation &&
            !$scope.address1validation &&
            !$scope.address2validation &&
            !$scope.cityvalidation &&
            !$scope.statevalidation &&
            !$scope.countryvalidation &&
            !$scope.zipcodevalidation)
            {
                var data = {
                    physician_id : $('#physician_id').val(),
                    address_id : $('#address_id').val(),
                    fname : fname,
                    lname : lname,
                    profiletype : profiletype,
                    institution : institution,
                    dob : dob,
                    gender : gender,
                    specialization : specialization,
                    phone : phone,
                    email : email,
                    department : department,
                    address1 : address1,
                    address2 : address2,
                    city : city,
                    country : country,
                    state : state,
                    zipcode : zipcode
                };
                
                
                $http.post(base_url + 'radio/updateRadiologist', data)
        		.success(function (responseData,status,headers,config) {
        			
                    console.log(responseData);
                    if(responseData.inserted)
                    {
                    }
                    else
                    {
                    }
                    $state.go('radio.list');                
                    
        		})
        		.error(function(data){
        		});
            }
            else
            {
                return;
            }
    }
	
   
}]);