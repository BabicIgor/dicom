/* Setup blank page controller */
angular.module('MetronicApp').controller('HospitalUpdateController', ['$rootScope', '$scope', 'settings', '$state', '$http', '$stateParams', function($rootScope, $scope, settings, $state, $http, $stateParams) {
    $scope.row = [];
    
    


    
    // $http.get(base_url + 'hospital/getHospitalInfo?row_id=' + $stateParams.row_id)
    // 	.success(function (responseData,status,headers,config) {
    // 		$scope.row = responseData;
    //         $scope.booleanArr = [{id : 1, val : "false", equipment_desc : "X-ray"}, {id : 2, val : "false", equipment_desc : "CT scan"}, {id : 3, val : "false", equipment_desc : "Mamogram"}];
    		
    // 		for(var idx = 0;idx < $scope.row.equipment.length;idx++)
    // 		{
    		    
    // 		    for(var id = 0;id < $scope.booleanArr.length;id++)
    // 		    {
    // 		        if($scope.booleanArr[id].id == $scope.row.equipment[idx])
    // 		        {
    // 		            $scope.booleanArr[id].val = "true";
    // 		        }
    // 		    }
    // 		}
    		
    		
            
    		
    // 	})
    // 	.error(function(data){
    // 	});	
    
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
        $http.get(base_url + 'hospital/getHospitalInfo?row_id=' + $stateParams.row_id)
    	.success(function (responseData,status,headers,config) {
    
    		$scope.row = responseData;
    		
    		$('#institution_id').val($stateParams.row_id);
    		$('#address_id').val($scope.row.address_id);

    		
     		populateCountries("country", "state");
     		populateStates("country", "state", $scope.row.country, $scope.row.state);
    		$('#real_institution_id').val($scope.row.institution_id);
            
            $scope.booleanArr = [{id : 1, val : "false", equipment_desc : "X-ray"}, {id : 2, val : "false", equipment_desc : "CT scan"}, {id : 3, val : "false", equipment_desc : "Mamogram"}];
    		
    		for(var idx = 0;idx < $scope.row.equipment.length;idx++)
    		{
    		    
    		    for(var id = 0;id < $scope.booleanArr.length;id++)
    		    {
    		        if($scope.booleanArr[id].id == $scope.row.equipment[idx])
    		        {
    		            $scope.booleanArr[id].val = "true";
    		        }
    		    }
    		}
    	})
    	.error(function(data){
    	});	
    	
    	
    	

        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
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
    
    $scope.hospital_update = function()
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
                institution_id : $("#institution_id").val(),
                address_id : $('#address_id').val(),
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
            $http.post(base_url + 'hospital/updateInstitution', data)
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
    
    
    $scope.close_update_hospital = function()
    {
        $state.go('hospital.list');
    }
    
}]);
