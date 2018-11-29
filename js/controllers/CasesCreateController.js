/* Setup blank page controller */
angular.module('MetronicApp').controller('CasesCreateController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        /*An array containing all the country names in the world:*/
        
        
        
        
        
        $http.post(base_url + 'patient/getPatientByKeyAndValue')
		.success(function (responseData,status,headers,config) {
            
            console.log(responseData);
            countries = responseData.name_data;
            autocomplete(document.getElementById("patient"), countries, responseData.id_data);
            
		})
		.error(function(data){
		});   
		$scope.getPatientInfoByName = function(id)
        {
            $http.get(base_url + 'patient/getPatientByRowId?row_id=' + id)
        	.success(function (responseData,status,headers,config) {
        
        		$scope.row = responseData;
        		$('#fname').val(responseData.first_name);
        		$('#lname').val(responseData.last_name);
        		
        		var formatted_date = responseData.dob.replace("\\", "");
        		$('#dob').val(formatted_date);
        		
        		
        		$('#gender').val(responseData.gender);
        		$('#phone').val(responseData.phone_number);
        		$('#email').val(responseData.email);
        		$('#address1').val(responseData.address_one);
        		$('#address2').val(responseData.address_two);
        		
        		
        		
        		
        		$('#state').val(responseData.state);
        		$('#city').val(responseData.city);
        		$('#zipcode').val(responseData.zipcode);
        		
        		
        		
        		populateCountries("country", "state");
         		populateStates("country", "state", $scope.row.country, $scope.row.state);
    
        		
                $('#country').val(responseData.country );        	    
        		

        		
        		
        		
        		
                
        		
        	})
        	.error(function(data){
        	});	

            
            
            
            
            
            
            $('#input_field_box').slideDown();
            
            
        }
		
		
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
    
    $scope.row = [];
    


    
    
    
    $scope.go_create_cases = function()
    {
        $state.go('cases.create');
    }
    
    
    $scope.create_case_save = function()
    {
        
    }
    
    
    
    
    
    
    
    
    $scope.close_create_case = function()
    {
        $state.go('cases.list');
    }
}]);
