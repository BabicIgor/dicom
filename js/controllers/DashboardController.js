angular.module('MetronicApp').controller('DashboardController', function($rootScope, $scope, $http, $timeout) {
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
        
        $http.get(base_url + 'dashboard/site_members')
        	.success(function (responseData,status,headers,config) {
        	    
    		
            $('#number_of_institutions').attr('data-value', responseData.inst);
            $('#number_of_doctors').attr('data-value', responseData.doctors);
            $('#number_of_radiologists').attr('data-value', responseData.radiologists);
            
            
            setTimeout(function(){
                if (!$().counterUp) {
                    return;
                }
                $("[data-counter='counterup']").counterUp({
                    delay: 90,
                    time: 300
                });    
            }, 3000);
            
    	})
    	.error(function(data){
    	});	
    	
    	
    	
        	
        	 // set sidebar closed and body solid layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    

    
    
    

   
});