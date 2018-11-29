/* Setup blank page controller */
angular.module('MetronicApp').controller('HospitalController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
    $scope.go_create_hospital = function(){
        $scope.namevalidation = false;
        $scope.typevalidation = false;    
        $scope.phonevalidation = false;    
        $scope.emailvalidation = false;
        $scope.websitevalidation = false;
        $scope.address1validation = false;
        $scope.address2validation = false;
        $scope.countryvalidation = false;
        $scope.cityvalidation = false;
        $scope.statevalidation = false;
        $scope.equipmentvalidation = false;
        $scope.zipcodevalidation = false;
        
        
        if($rootScope.userRole == 2)
        {
            $state.go('hospital.create_facility_by_inst_admin');    
        }
        else
        {
            $state.go('hospital.create');    
        }
	    
    }
    $scope.close_create_hospital = function(){
        $state.go('hospital.list');
    }
    
    $scope.close_create_facility = function(){
        $state.go('hospital.list');
    }
    
    
    $scope.namevalidation = false;
    $scope.typevalidation = false;    
    $scope.phonevalidation = false;    
    $scope.emailvalidation = false;
    $scope.websitevalidation = false;
    $scope.equipmentvalidation = false;
    $scope.address1validation = false;
    $scope.address2validation = false;
    $scope.countryvalidation = false;
    $scope.cityvalidation = false;
    $scope.statevalidation = false;
    $scope.zipcodevalidation = false;
    
    
    
    
    
    
        
    $scope.validation = function(type){
        
        switch(type)
        {
            case 1:
                var institution_name = $('#institution_name').val();
                if(institution_name == '')
                {
                    $scope.namevalidation = true;
                }
                else
                {
                    $scope.namevalidation = false;
                }                
                break;
            case 2:
                var institution_type = $('#institution_type').val();
                if(institution_type == null)
                {
                    $scope.typevalidation = true;    
                }
                else
                {
                    $scope.typevalidation = false;
                }                
                break;
            case 3:
                var phone_number = $('#phone_number').val();
                if(phone_number == '')
                {
                    $scope.phonevalidation = true;
                }
                else
                {
                    $scope.phonevalidation = false;
                }                
                break;
            case 4:
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
            case 5:
                var website = $('#website').val();
                if(website == '')
                {
                    $scope.websitevalidation = true;
                }
                else
                {
                    $scope.websitevalidation = false;
                }                
                break;
            case 6:
                var equipment = $('#equipment').val();
                
                if(equipment == '')
                {
                    $scope.equipmentvalidation = true;
                }
                else
                {
                    $scope.equipmentvalidation = false;
                }                
                break;
            case 7:
                var address_1 = $('#address_1').val();
                
                if(address_1 == '')
                {
                    $scope.address1validation = true;
                }
                else
                {
                    $scope.address1validation = false;
                }                
                break;
            case 8:
                var address_2 = $('#address_2').val();
                if(address_2 == '')
                {
                    $scope.address2validation = true;
                }
                else
                {
                    $scope.address2validation = false;
                }                
                break;
            
            case 9:
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
            
            case 10:
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
   
    $scope.create_facility_save_by_inst_admin = function()
    {
        var institution_name = $('#institution_name').val();
        if(institution_name == '')
        {
            $scope.namevalidation = true;
        }
        else
        {
            $scope.namevalidation = false;
        }
        var phone_number = $('#phone_number').val();
        if(phone_number == '')
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
        var website = $('#website').val();
        if(website == '')
        {
            $scope.websitevalidation = true;
        }
        else
        {
            $scope.websitevalidation = false;
        }
        var address_1 = $('#address_1').val();
        
        if(address_1 == '')
        {
            $scope.address1validation = true;
        }
        else
        {
            $scope.address1validation = false;
        }
        var address_2 = $('#address_2').val();
        if(address_2 == '')
        {
            $scope.address2validation = true;
        }
        else
        {
            $scope.address2validation = false;
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
        
        
        var city = $('#city').val();
        if(city == '')
        {
            $scope.cityvalidation = true;
        }
        else
        {
            $scope.cityvalidation = false;
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
        
        
        var multiple = $('#multiple').val();
        if(multiple == null)
        {
            $scope.equipmentvalidation = true;
        }
        else
        {
            $scope.equipmentvalidation = false;
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
        
        
        if(!$scope.namevalidation && 
        !$scope.typevalidation && 
        !$scope.phonevalidation && 
        !$scope.emailvalidation && 
        !$scope.websitevalidation && 
        !$scope.address1validation &&
        !$scope.address2validation && 
        !$scope.countryvalidation &&
        !$scope.cityvalidation &&
        !$scope.statevalidation &&
        !$scope.equipmentvalidation &&
        !$scope.zipcodevalidation)
        {
            
            var data = {
                institution_name : institution_name,
                address_1 : address_1,
                address_2 : address_2,
                phone_1 : phone_number,
                email : email,
                website : website,
                country : country,
                city : city,
                state : state,
                equipment : multiple,
                zipcode : zipcode
                
            };
            $http.post(base_url + 'hospital/createFacilityByInstAdmin', data)
    		.success(function (responseData,status,headers,config) {
    			
                console.log(responseData);
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('hospital.list');                
                
    		})
    		.error(function(data){
    		});
            
            
            
            
        }
        else
        {
            
            return;
            
        }
    }
    
    
    
    
    $scope.create_hospital_save = function(){
        
        
        var institution_name = $('#institution_name').val();
        if(institution_name == '')
        {
            $scope.namevalidation = true;
        }
        else
        {
            $scope.namevalidation = false;
        }
        var institution_type = $('#institution_type').val();
        if(institution_type == null)
        {
            $scope.typevalidation = true;    
        }
        else
        {
            $scope.typevalidation = false;
        }
        var phone_number = $('#phone_number').val();
        if(phone_number == '')
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
        var website = $('#website').val();
        if(website == '')
        {
            $scope.websitevalidation = true;
        }
        else
        {
            $scope.websitevalidation = false;
        }
        var address_1 = $('#address_1').val();
        
        if(address_1 == '')
        {
            $scope.address1validation = true;
        }
        else
        {
            $scope.address1validation = false;
        }
        var address_2 = $('#address_2').val();
        if(address_2 == '')
        {
            $scope.address2validation = true;
        }
        else
        {
            $scope.address2validation = false;
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
        
        
        var city = $('#city').val();
        if(city == '')
        {
            $scope.cityvalidation = true;
        }
        else
        {
            $scope.cityvalidation = false;
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
        
        
        var multiple = $('#multiple').val();
        if(multiple == null)
        {
            $scope.equipmentvalidation = true;
        }
        else
        {
            $scope.equipmentvalidation = false;
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
        
        
        if(!$scope.namevalidation && 
        !$scope.typevalidation && 
        !$scope.phonevalidation && 
        !$scope.emailvalidation && 
        !$scope.websitevalidation && 
        !$scope.address1validation &&
        !$scope.address2validation && 
        !$scope.countryvalidation &&
        !$scope.cityvalidation &&
        !$scope.statevalidation &&
        !$scope.equipmentvalidation &&
        !$scope.zipcodevalidation)
        {
            
            var data = {
                institution_name : institution_name,
                institution_type : institution_type,
                address_1 : address_1,
                address_2 : address_2,
                phone_1 : phone_number,
                email : email,
                website : website,
                country : country,
                city : city,
                state : state,
                equipment : multiple,
                zipcode : zipcode
                
            };
            $http.post(base_url + 'hospital/createInstitution', data)
    		.success(function (responseData,status,headers,config) {
    			
                console.log(responseData);
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('hospital.list');                
                
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
