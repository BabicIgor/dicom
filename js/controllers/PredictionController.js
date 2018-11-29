/* Setup blank page controller */
angular.module('MetronicApp').controller('PredictionController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    $scope.go_create_prediction = function()
    {
        $state.go('prediction.create');
    }
    
    
    $scope.create_prediction = function()
    {
        
        
        
        
        var prediction_name = $('#prediction_name').val();
        var prediction_desc = $('#prediction_desc').val();
        
        if(prediction_name == '')
        {
            
        }
        else
        {
            var data = {
                prediction_name : prediction_name,
                prediction_desc : prediction_desc
            };
            $http.post(base_url + 'prediction/createPrediction', data)
    		.success(function (responseData,status,headers,config) {
    			
                
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('prediction.list');                
                
    		})
    		.error(function(data){
    		});
        }
        
        
    }
    
    $scope.close_prediction = function()
    {
        $state.go('prediction.list');
    }
    
}]);
