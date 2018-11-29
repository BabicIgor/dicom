/* Setup blank page controller */
angular.module('MetronicApp').controller('CasesController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        /*An array containing all the country names in the world:*/
        
        
		
		
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
    
    
    
    
    $scope.go_create_cases = function()
    {
        $state.go('cases.create');
    }
    
    
}]);
