/* Setup blank page controller */
angular.module('MetronicApp').controller('DepartmentEditController', ['$rootScope', '$scope', 'settings', '$state', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'toastr', '$stateParams', function($rootScope, $scope, settings, $state, DTOptionsBuilder, DTColumnDefBuilder, $http, toastr, $stateParams) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components

        App.initAjax();
        $('#real_department_id').val($stateParams.row_id);

        $http.get(base_url + 'department/getDepartmentByRowID?row_id=' + $stateParams.row_id)
    	.success(function (responseData,status,headers,config) {
    
    		$scope.row = responseData;
    		
    	
    		
    	})
    	.error(function(data){
    	});	
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
   
	
	
	$scope.edit_department = function()
	{
	    
	    
	    var department_name = $('#department_name').val();
	    var department_desc = $('#department_desc').val();
	    
	    var data = {
            department_id : $('#real_department_id').val(),
            department_name : department_name,
            department_desc : department_desc
        };
        
        
        $http.post(base_url + 'department/updateDepartment', data)
		.success(function (responseData,status,headers,config) {
			
            console.log(responseData);
            if(responseData.inserted)
            {
            }
            else
            {
            }
            $state.go('department.list');                
            
		})
		.error(function(data){
		});
	}
    
    
}]);
