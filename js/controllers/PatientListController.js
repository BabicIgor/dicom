/* Setup blank page controller */
angular.module('MetronicApp').controller('PatientListController', ['$rootScope', '$scope', 'settings', '$state', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'toastr', function($rootScope, $scope, settings, $state, DTOptionsBuilder, DTColumnDefBuilder, $http, toastr) {
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
		.withOption('sDom', 'tp')
		.withOption('bAutoWidth', true)
		.withOption('bProcessing', true)
		.withOption('iDisplayLength', 6)
		.withBootstrap();
		
		
		
    $scope.column1 = 1;
	$scope.column2 = 1;
	$scope.column3 = 1;
	$scope.column4 = 1;
	$scope.column5 = 1;
	$scope.column6 = 1;
	$scope.column7 = 1;
	$scope.column8 = 1;
	
	$scope.select_col = function(){
	    $scope.column1 = 0;
	    $scope.column2 = 0;
	    $scope.column3 = 0;
	    $scope.column4 = 0;
	    $scope.column5 = 0;
	    $scope.column6 = 0;
	    $scope.column7 = 0;
	    $scope.column8 = 0;
		var valArr = $('#selectColumns').val();
		if(valArr!=null && valArr.length > 0)
		{
    		for(var idx = 0;idx < valArr.length;idx++)
    		{
	      		setColumnActive(valArr[idx]);
    		}    
		}
		
		console.log($('#selectColumns').val());
		
	}
	setColumnActive = function(idx)
	{
	    
	    switch(idx)
	    {
	        case '1':
	            $scope.column1 = 1;
	            break;
	        case '2':
	            $scope.column2 = 1;
	            break;
            case '3':
	            $scope.column3 = 1;
	            break;
            case '4':
	            $scope.column4 = 1;
	            break;
            case '5':
	            $scope.column5 = 1;
	            break;
            case '6':
	            $scope.column6 = 1;
	            break;
            case '7':
	            $scope.column7 = 1;
	            break;	 
            case '8':
	            $scope.column8 = 1;
	            break;	            
	    }
	}		
		
	$scope.records = [];
    $http.get(base_url + 'patient/getPatients')
	.success(function (responseData,status,headers,config) {
		
		$scope.records = responseData;
		setTimeout(function(){
		    $scope.isAllRendered = 1;
		}, 10);
		
	})
	.error(function(data){
	});	
	
    $scope.dynamicPopover = {
        content: "Hello, World!",
        templateUrl: "myPopoverTemplate.html",
        title: "Are you sure?"
    };
    $scope.placement = {
        options: ["top", "top-left", "top-right", "bottom", "bottom-left", "bottom-right", "left", "left-top", "left-bottom", "right", "right-top", "right-bottom"],
        selected: "top"
    };
	
	
	$scope.row_edit = function(row_id){
	    $state.go('patient.edit', {row_id : row_id});
	}
	
	
	$scope.delete_confirm = function(row_id)
	{
	    var html = '#myModal_autocomplete_' + row_id;
        $(html).modal('hide');
	    $http.get(base_url + 'patient/deletePatientById?row_id=' + row_id)
    	.success(function (responseData,status,headers,config) {
    	    toastr.success('Deleted Successfully');
            $state.transitionTo('patient.list', {}, {reload:true});
    	})
    	.error(function(data){
    	});	
	}
	
    
    
}]);
