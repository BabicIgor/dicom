/* Setup blank page controller */
angular.module('MetronicApp').controller('DepartmentController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
    $scope.go_create_department = function()
    {
        $state.go('department.create');
    }
    
    
    
    $scope.create_department = function()
    {
        var department_name = $('#department_name').val();
        var department_desc = $('#department_desc').val();
        var data = {
            department_name : department_name,
            department_desc : department_desc
        };
        $http.post(base_url + 'department/createDepartment', data)
		.success(function (responseData,status,headers,config) {
			
            
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
    
    $scope.close_department = function()
    {
        $state.go('department.list');
    }
    
}]);
