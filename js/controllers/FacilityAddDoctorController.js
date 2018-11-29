/* Setup blank page controller */
angular.module('MetronicApp').controller('FacilityAddDoctorController', ['$rootScope', '$scope', 'settings', '$state', '$http', '$stateParams', function($rootScope, $scope, settings, $state, $http, $stateParams) {
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
        

        
        
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    // $scope.go_create_doctor = function(){
    //     $scope.fnamevalidation = false;
    //     $scope.lnamevalidation = false;    
    //     $scope.profiletypevalidation = false;
    //     $scope.institutionvalidation = false;
    //     $scope.dobvalidation = false;
    //     $scope.gendervalidation = false;
    //     $scope.specializationvalidation = false;
    //     $scope.phonevalidation = false;
    //     $scope.emailvalidation = false;
    //     $scope.departmentvalidation = false;
    //     $scope.address1validation = false;
    //     $scope.address2validation = false;
    //     $scope.cityvalidation = false;
    //     $scope.statevalidation = false;
    //     $scope.countryvalidation = false;
    //     $scope.zipcodevalidation = false;
        
        
        
    //     if($rootScope.userRole == 2)
    //     {
    //         $state.go('doctor.create_by_inst_admin');
    //     }
    //     else
    //     {
    //         $state.go('doctor.create');    
    //     }
        
    // }
    $scope.close_create_doctor_by_facility = function(){
        $state.go('facility.list');
    }
    
    
    $scope.fnamevalidation = false;
    $scope.lnamevalidation = false;    
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
    
    
    
    $scope.create_doctor_save_by_facility = function()
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
                institution_id : $stateParams.row_id,
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
            $http.post(base_url + 'doctor/createDoctorByFacility', data)
    		.success(function (responseData,status,headers,config) {
    			
                
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('facility.list');                
                
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
