/* Setup blank page controller */
angular.module('MetronicApp').controller('PatientEditController', ['$rootScope', '$scope', 'settings', '$state', '$http', '$stateParams', function($rootScope, $scope, settings, $state, $http, $stateParams) {
    $scope.row = [];
    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
        
         
        
/*An array containing all the country names in the world:*/
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                orientation: "left",
                autoclose: true
            });
            //$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
        }
   
        
        $http.get(base_url + 'patient/getPatientByRowId?row_id=' + $stateParams.row_id)
    	.success(function (responseData,status,headers,config) {
    
    		$scope.row = responseData;
    		
    		
    		console.log($scope.row);
    		populateCountries("country", "state");
     		populateStates("country", "state", $scope.row.country, $scope.row.state);

    		
    		
    		
    		$('#real_institution_id').val($scope.row.institution_id);
    // 		$("#physician_id").val($scope.row.physician_id);
    		$('#address_id').val($scope.row.address_id);
    		
    		
    		
    		
            
    		
    	})
    	.error(function(data){
    	});	

         
            

        
        
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
  	$scope.fnamevalidation = false;
  	$scope.mnamevalidation = false;
    $scope.lnamevalidation = false;
    $scope.dobvalidation = false;
    $scope.gendervalidation = false;
    $scope.racevalidation = false;
    $scope.ethnicityvalidation = false;
    $scope.languagevalidation = false;
    $scope.maritialvalidation = false;
    $scope.address1validation = false;
    $scope.address2validation = false;
    $scope.cityvalidation = false;
    $scope.statevalidation = false;
    $scope.countryvalidation = false;
    $scope.zipcodevalidation = false;
    $scope.homephonevalidation = false;
    $scope.cellphonevalidation = false;
    $scope.emailvalidation = false;
    
    
    $scope.patient_close_by_institution = function()
    {
        $state.go('patient.list');
    }
    $scope.validation = function(type){
        
        switch(type)
        {
            case 1:
                var fname = $('#fname').val();
                if(fname == '')
                {
                    $scope.fnamevalidation = true;
                }
                else
                {
                    $scope.fnamevalidation = false;
                }
                break;
            case 2:
                var mname = $('#mname').val();
                if(mname == '')
                {
                    $scope.mnamevalidation = true;
                }
                else
                {
                    $scope.mnamevalidation = false;
                }
                break;
            case 3:
                var lname = $('#lname').val();
                if(lname == '')
                {
                    $scope.lnamevalidation = true;    
                }
                else
                {
                    $scope.lnamevalidation = false;    
                }
                break;
            case 4:
                var dob = $('#dob').val();
                if(dob == '')
                {
                    $scope.dobvalidation = true;
                }
                else
                {
                    $scope.dobvalidation = false;
                }
                break;
            case 5:
                var gender = $('#gender').val();
                if(gender == null)
                {
                    $scope.gendervalidation = true;
                }
                else
                {
                    $scope.gendervalidation = false;
                }
                break;
            case 6:
                var race = $('#race').val();
                if(race == '')
                {
                    $scope.racevalidation = true;
                }
                else
                {
                    $scope.racevalidation = false;
                }
                break;
            case 7:
                var ethnicity = $('#ethnicity').val();
                if(ethnicity == '')
                {
                    $scope.ethnicityvalidation = true;
                }
                else
                {
                    $scope.ethnicityvalidation = false;
                }
                break;
            case 8:
                var preferredlanguage = $('#preferredlanguage').val();
                if(preferredlanguage == '')
                {
                    $scope.languagevalidation = true;
                }
                else
                {
                    $scope.languagevalidation = false;
                }
                break;
            case 9:
                var maritialstatus = $('#maritialstatus').val();
                if(maritialstatus == null)
                {
                    $scope.maritialvalidation = true;
                }
                else
                {
                    $scope.maritialvalidation = false;
                }
                break;
            case 10:
                var address1 = $('#address1').val();
                if(address1 == '')
                {
                    $scope.address1validation = true;
                }
                else
                {
                    $scope.address1validation = false;
                }
                break;
            case 11:
                var address2 = $('#address2').val();
                if(address2 == '')
                {
                    $scope.address2validation = true;
                }
                else
                {
                    $scope.address2validation = false;
                }
                break;
            case 12:
                var city = $('#city').val();
                if(city == '')
                {
                    $scope.cityvalidation = true;
                }
                else
                {
                    $scope.cityvalidation = false;
                }
                break;
            case 13:
                var zipcode = $('#zipcode').val();
                if(zipcode == '')
                {
                    $scope.zipcodevalidation = true;
                }
                else
                {
                    $scope.zipcodevalidation = false;
                }
                break;
            case 14:
                var homephone = $('#homephone').val();
                if(homephone == '')
                {
                    $scope.homephonevalidation = true;
                }
                else
                {
                    $scope.homephonevalidation = false;
                }
                
                break;
            case 15:
                var cellphone = $('#cellphone').val();
                if(cellphone == '')
                {
                    $scope.cellphonevalidation = true;
                }
                else
                {
                    $scope.cellphonevalidation = false;
                }
                break;
            case 16:
                var email = $('#email').val();
                if(email == '')
                {
                    $scope.emailvalidation = true;
                }
                else
                {
                    $scope.emailvalidation = false;
                }
                break;
            
            
        }
        
    }
	
	$scope.patient_update_by_institution = function(){
	    
    	   var fname = $('#fname').val();
        if(fname == '')
        {
            $scope.fnamevalidation = true;
        }
        else
        {
            $scope.fnamevalidation = false;
        }
        var mname = $('#mname').val();
        if(mname == '')
        {
            $scope.mnamevalidation = true;
        }
        else
        {
            $scope.mnamevalidation = false;
        }
        var lname = $('#lname').val();
        if(lname == '')
        {
            $scope.lnamevalidation = true;    
        }
        else
        {
            $scope.lnamevalidation = false;    
        }
        var dob = $('#dob').val();
        if(dob == '')
        {
            $scope.dobvalidation = true;
        }
        else
        {
            $scope.dobvalidation = false;
        }
        var gender = $('#gender').val();
        if(gender == null)
        {
            $scope.gendervalidation = true;
        }
        else
        {
            $scope.gendervalidation = false;
        }
        var race = $('#race').val();
        if(race == '')
        {
            $scope.racevalidation = true;
        }
        else
        {
            $scope.racevalidation = false;
        }
        
        var ethnicity = $('#ethnicity').val();
        if(ethnicity == '')
        {
            $scope.ethnicityvalidation = true;
        }
        else
        {
            $scope.ethnicityvalidation = false;
        }
        var preferredlanguage = $('#preferredlanguage').val();
        if(preferredlanguage == '')
        {
            $scope.languagevalidation = true;
        }
        else
        {
            $scope.languagevalidation = false;
        }
        var maritialstatus = $('#maritialstatus').val();
        if(maritialstatus == null)
        {
            $scope.maritialvalidation = true;
        }
        else
        {
            $scope.maritialvalidation = false;
        }
        var address1 = $('#address1').val();
        if(address1 == '')
        {
            $scope.address1validation = true;
        }
        else
        {
            $scope.address1validation = false;
        }
        
        var address2 = $('#address2').val();
        if(address2 == '')
        {
            $scope.address2validation = true;
        }
        else
        {
            $scope.address2validation = false;
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
        
        var country = $('#country').val();
        
        if(country == null)
        {
            $scope.countryvalidation = true;
        }
        else
        {
            $scope.countryvalidation = false;
        }
        var state = $('#state').val();
        if(state == null)
        {
            $scope.statevalidation = true;
        }
        else
        {
            $scope.statevalidation = false;
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
        var email = $('#email').val();
        if(email == '')
        {
            $scope.emailvalidation = true;
        }
        else
        {
            $scope.emailvalidation = false;
        }
        var homephone = $('#homephone').val();
        if(homephone == '')
        {
            $scope.homephonevalidation = true;
        }
        else
        {
            $scope.homephonevalidation = false;
        }
        var cellphone = $('#cellphone').val();
        if(cellphone == '')
        {
            $scope.cellphonevalidation = true;
        }
        else
        {
            $scope.cellphonevalidation = false;
        }
        
        if(
        !$scope.fnamevalidation &&
      	!$scope.mnamevalidation &&
        !$scope.lnamevalidation &&
        !$scope.dobvalidation &&
        !$scope.gendervalidation &&
        !$scope.racevalidation &&
        !$scope.ethnicityvalidation &&
        !$scope.languagevalidation &&
        !$scope.maritialvalidation &&
        !$scope.address1validation &&
        !$scope.address2validation &&
        !$scope.cityvalidation &&
        !$scope.statevalidation &&
        !$scope.countryvalidation &&
        !$scope.zipcodevalidation &&
        !$scope.homephonevalidation &&
        !$scope.cellphonevalidation &&
        !$scope.emailvalidation)
        {
            var data = {
                fname : fname,
                mname : mname,
                lname : lname,
                institution : $('#real_institution_id').val(),
                patient_id : $stateParams.row_id,
                address_id : $('#address_id').val(),
                dob : dob,
                gender : gender,
                race : race,
                ethnicity : ethnicity,
                preferredlanguage : preferredlanguage,
                maritialstatus : maritialstatus,
                cellphone : cellphone,
                homephone : homephone,
                email : email,
                address1 : address1,
                address2 : address2,
                city : city,
                country : country,
                state : state,
                zipcode : zipcode
            };
            
            
            
            $http.post(base_url + 'patient/updatePatientByInstAdmin', data)
    		.success(function (responseData,status,headers,config) {
                
                if(responseData.inserted)
                {
                }
                else
                {
                }
                $state.go('patient.list');                
                
    		})
    		.error(function(data){
    		});
        }
        else
        {
            
            return;
        }
	}
	
   
}]);
