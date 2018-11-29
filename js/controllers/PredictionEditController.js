/* Setup blank page controller */
angular.module('MetronicApp').controller('PredictionEditController', ['$rootScope', '$scope', 'settings', '$state', '$http', '$stateParams', function($rootScope, $scope, settings, $state, $http, $stateParams) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        $('#real_prediction_id').val($stateParams.row_id);

        $http.get(base_url + 'prediction/getPredictionByRowID?row_id=' + $stateParams.row_id)
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
    
    $scope.go_create_prediction = function()
    {
        $state.go('prediction.create');
    }
    
    
    $scope.edit_prediction = function()
    {
        
        
        
        
        var prediction_name = $('#prediction_name').val();
        var prediction_desc = $('#prediction_desc').val();
        
        if(prediction_name == '')
        {
            
        }
        else
        {
            var data = {
                prediction_id : $('#real_prediction_id').val(),
                prediction_name : prediction_name,
                prediction_desc : prediction_desc
            };
            $http.post(base_url + 'prediction/updatePrediction', data)
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
