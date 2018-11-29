/* Setup blank page controller */
angular.module('MetronicApp').controller('PredictionListController', ['$rootScope', '$scope', 'settings', '$state', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'toastr', function($rootScope, $scope, settings, $state, DTOptionsBuilder, DTColumnDefBuilder, $http, toastr) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components

        App.initAjax();
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    $scope.isAllRendered = 0;
	$scope.dtOptions = DTOptionsBuilder.newOptions()
		.withOption('aoColumnDefs', [{ "bSortable": false, "aTargets": [ 0 ] }])
		.withOption('aaSorting', [[0,'asc']])
		.withOption('aLengthMenu', [[5, 10, 15, 20], [5, 10, 15, 20, 'All']])
		.withPaginationType("full_numbers")
		.withOption('responsive', true)
		.withOption('bSort', true)
		.withOption('bAutoWidth', true)
		.withOption('bProcessing', true)
		.withOption('iDisplayLength', 5)
		.withBootstrap();
        
	$scope.records = [];
	
	
	
    $http.get(base_url + 'prediction/getPrediction')
	.success(function (responseData,status,headers,config) {
		
		
		$scope.records = responseData;
		setTimeout(function(){
		    $scope.isAllRendered = 1;
		}, 10);
		
        
        
	})
	.error(function(data){
	});	
	
	
	
	$scope.row_edit = function(row_id){
	    $state.go('prediction.edit', {row_id : row_id});
	}
	
	$scope.delete_confirm_prediction = function(row_id)
	{
	    
	    var html = '#myModal_autocomplete_' + row_id;
        $(html).modal('hide');
	    $http.get(base_url + 'prediction/deletePredictionById?row_id=' + row_id)
    	.success(function (responseData,status,headers,config) {
    	    toastr.success('Deleted Successfully');
            $state.transitionTo('prediction.list', {}, {reload:true});
    	})
    	.error(function(data){
    	});	
	}
	
    
    
}]);
