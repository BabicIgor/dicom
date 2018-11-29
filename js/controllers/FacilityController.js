angular.module('MetronicApp').controller('FacilityController', ['$rootScope', '$scope', 'settings', '$state', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'toastr', function($rootScope, $scope, settings, $state, DTOptionsBuilder, DTColumnDefBuilder, $http, toastr) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
    $scope.go_create_facility = function()
    {
        $state.go('facility.create');
    }
    
    $scope.create_facility_save = function()
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
    
    
    $scope.close_create_facility = function()
    {
        $state.go('facility.list');
    }
    
    
    
}]);