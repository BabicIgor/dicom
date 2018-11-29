/* Setup blank page controller */
angular.module('MetronicApp').controller('DoctorController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
/*An array containing all the country names in the world:*/



        
        
        $http.get(base_url + 'department/getDepartmentSelects')
    	.success(function (responseData,status,headers,config) {
    	    
            $scope.departmentList = responseData;
    		
    	})
    	.error(function(data){
    	});	
        


        







        
        $('#profiletype').on('change', function(){
            
            $('.autocomplete').css('display', 'inline-block');
            if($('#profiletype').val() == 'Hospital')
            {
                
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
                
                
            }
            else if($('#profiletype').val() == 'Institution')
            {
                
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
                
            }
            else
            {
                var countries = [];

            }
            
        })

        
        
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    $scope.go_create_doctor = function(){
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
        
        
        
        if($rootScope.userRole == 2)
        {
            $state.go('doctor.create_by_inst_admin');
        }
        else if($rootScope.userRole == 3)
        {
            $state.go('doctor.create_by_facility_admin');
        }
        else
        {
            $state.go('doctor.create');    
        }
        
    }
    $scope.close_create_doctor = function(){
        $state.go('doctor.list');
    }
    
    
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
    
    $scope.validation = function(type){
        
        switch(type)
        {
            case 1:
                var fname = $('#fname').val();
                if(fname == '')
                {
                    $scope.fnamevalidation = true;
                }
                else
                {
                    $scope.fnamevalidation = false;
                }
                break;
            case 2:
                var lname = $('#lname').val();
                if(lname == '')
                {
                    $scope.lnamevalidation = true;    
                }
                else
                {
                    $scope.lnamevalidation = false;    
                }
                break;
            case 3:
                var profiletype = $('#profiletype').val();
                if(profiletype == null)
                {
                    $scope.profiletypevalidation = true;            
                }
                else
                {
                    $scope.profiletypevalidation = false;
                }
                break;
            case 4:
                var institution = $('#real_institution_id').val();
                if(institution == '')
                {
                    $scope.institutionvalidation = true;   
                }
                else
                {
                    $scope.institutionvalidation = false;
                }
                break;
            case 5:
                var dob = $('#dob').val();
                if(dob == '')
                {
                    $scope.dobvalidation = true;
                }
                else
                {
                    $scope.dobvalidation = false;
                }
                break;
            case 6:
                var gender = $('#gender').val();
                if(gender == null)
                {
                    $scope.gendervalidation = true;
                }
                else
                {
                    $scope.gendervalidation = false;
                }
                break;
            case 7:
                var specialization = $('#specialization').val();
                if(specialization == null)
                {
                    $scope.specializationvalidation = true;
                }
                else
                {
                    $scope.specializationvalidation = false;
                }
                break;
            case 8:
                var phone = $('#phone').val();
                if(phone == '')
                {
                    $scope.phonevalidation = true;
                }
                else
                {
                    $scope.phonevalidation = false;
                }
                break;
            case 9:
                var email = $('#email').val();
                if(email == '')
                {
                    $scope.emailvalidation = true;
                }
                else
                {
                    $scope.emailvalidation = false;
                }
                break;
            case 10:
                var department = $('#department').val();
                if(department == null)
                {
                    $scope.departmentvalidation = true;
                }
                else
                {
                    $scope.departmentvalidation = false;
                }
                break;
            case 11:
                var address1 = $('#address1').val();
                if(address1 == '')
                {
                    $scope.address1validation = true;
                }
                else
                {
                    $scope.address1validation = false;
                }
                break;
            case 12:
                var address2 = $('#address2').val();
                if(address2 == '')
                {
                    $scope.address2validation = true;
                }
                else
                {
                    $scope.address2validation = false;
                }
                break;
            case 13:
                var city = $('#city').val();
                if(city == '')
                {
                    $scope.cityvalidation = true;
                }
                else
                {
                    $scope.cityvalidation = false;
                }
                break;
            
            case 14:
                var country = $('#country').val();
                alert(country);
                if(country == '')
                {
                    $scope.countryvalidation = true;
                }
                else
                {
                    $scope.countryvalidation = false;
                }
                break;
            case 15:
                var state = $('#state').val();
                if(state == '')
                {
                    $scope.statevalidation = true;
                }
                else
                {
                    $scope.statevalidation = false;
                }
                break;
            case 16:
                var zipcode = $('#zipcode').val();
                if(zipcode == '')
                {
                    $scope.zipcodevalidation = true;
                }
                else
                {
                    $scope.zipcodevalidation = false;
                }
                break;
            
                
        }
        
        
        
        // var zipcode = $('#zipcode').val();
        
        
        
    }
    
    
    $scope.create_doctor_save_inst_admin = function()
    {
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
                fname : fname,
                lname : lname,
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
            $http.post(base_url + 'doctor/createDoctorByInstAdmin', data)
    		.success(function (responseData,status,headers,config) {
    			
                
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('doctor.list');                
                
    		})
    		.error(function(data){
    		});
        }
        else
        {
            return;
        }
    }
    
    
    
    $scope.create_doctor_save_facility_admin = function()
    {
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
                fname : fname,
                lname : lname,
                profiletype : profiletype,
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
            $http.post(base_url + 'doctor/createDoctorByFacilityAdmin', data)
    		.success(function (responseData,status,headers,config) {
    			
                
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('doctor.list');                
                
    		})
    		.error(function(data){
    		});
        }
        else
        {
            return;
        }
    }
    
    
    $scope.create_doctor_save = function(){
        
        
        

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
            $http.post(base_url + 'doctor/createDoctor', data)
    		.success(function (responseData,status,headers,config) {
    			
                
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('doctor.list');                
                
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
