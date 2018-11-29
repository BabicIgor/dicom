/***
Metronic AngularJS App Main Script
***/

/* Metronic App */
var MetronicApp = angular.module("MetronicApp", [
    "ui.router", 
    "ui.bootstrap", 
    "oc.lazyLoad",
    'toastr',
    "ngSanitize",
    "datatables",
    "datatables.bootstrap" ,
    "datatables.colreorder" ,
    "datatables.colvis" ,
    "datatables.tabletools" ,
    "datatables.scroller" ,
    "datatables.columnfilter" ,
    "chieffancypants.loadingBar",

]); 

/* Configure ocLazyLoader(refer: https://github.com/ocombe/ocLazyLoad) */
MetronicApp.config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
    $ocLazyLoadProvider.config({
        // global configs go here
    });
}]);

//AngularJS v1.3.x workaround for old style controller declarition in HTML
MetronicApp.config(['$controllerProvider', function($controllerProvider) {
  // this option might be handy for migrating old apps, but please don't use it
  // in new ones!
  $controllerProvider.allowGlobals();
}]);

/********************************************
 END: BREAKING CHANGE in AngularJS v1.3.x:
*********************************************/

/* Setup global settings */
MetronicApp.factory('settings', ['$rootScope', '$http', '$state',  function($rootScope, $http, $state) {
    // supported languages
    var settings = {
        layout: {
            pageSidebarClosed: false, // sidebar menu state
            pageContentWhite: true, // set page content layout
            pageBodySolid: false, // solid body color state
            pageAutoScrollOnLoad: 1000 // auto scroll to top on page load
        },
        assetsPath: '../assets',
        globalPath: '../assets/global',
        layoutPath: '../assets/layouts/layout',
    };

    $rootScope.settings = settings;
    
    $http.get(base_url + 'login/getUserInfo')
	.success(function (responseData,status,headers,config) {
	    
	    
	    if(responseData.success == 1)
	    {
	        $rootScope.userRole = responseData.role;
    		$rootScope.ownUserName = responseData.name;
    		$rootScope.userId = responseData.userId;    
	    }
	    else
	    {
	        
	    }
            
	    
	})
	.error(function(data){
	});
	
	
	
	
	
	
	
	socket = io.connect('http://musicincline.com:8000');
    		
    return settings;
}]);

/* Setup App Main Controller */
MetronicApp.controller('AppController', ['$scope', '$rootScope', '$http', function($scope, $rootScope, $http) {
    $scope.$on('$viewContentLoaded', function() {
        
        //App.initComponents(); // init core components
        //Layout.init(); //  Init entire layout(header, footer, sidebar, etc) on page load if the partials included in server side instead of loading with ng-include directive 
        
        $http.get(base_url + 'login/getUserInfo')
    	.success(function (responseData,status,headers,config) {
    	    
    	    
    	    if(responseData.success == 1)
    	    {
    	        $rootScope.userRole = responseData.role;
        		$rootScope.ownUserName = responseData.name;
        		$rootScope.userId = responseData.userId;    
    	    }
    	    else
    	    {
    	        location.href = 'http://musicincline.com';
    	    }
                
    	    
    	})
    	.error(function(data){
    	});
        
        
    });
    
    
    
    
    
    
    $rootScope.$on('$stateChangeSuccess', function(event) {
                    
                    
        Layout.setAngularJsSidebarMenuActiveLink('match', null, event.currentScope.$state); // activate selected link in the sidebar menu
   
    });
    
    
    
    
    
    
    
    
    
}]);

/***
Layout Partials.
By default the partials are loaded through AngularJS ng-include directive. In case they loaded in server side(e.g: PHP include function) then below partial 
initialization can be disabled and Layout.init() should be called on page load complete as explained above.
***/

/* Setup Layout Part - Header */
MetronicApp.controller('HeaderController', ['$scope', '$http', function($scope, $http) {
    $scope.$on('$includeContentLoaded', function() {
        Layout.initHeader(); // init header
    });
    
    $scope.logout = function(){
        
        $http.get('login/logout')
        .success(function (data) {
           window.location.href = "/";
        })
        .error(function (data) {
            console.log('Error: ' + data);
        });
        
    }
}]);

/* Setup Layout Part - Sidebar */
MetronicApp.controller('SidebarController', ['$state', '$scope', function($state, $scope) {
    $scope.$on('$includeContentLoaded', function() {
        Layout.initSidebar($state); // init sidebar
    });
}]);

/* Setup Layout Part - Quick Sidebar */
MetronicApp.controller('QuickSidebarController', ['$scope', function($scope) {    
    $scope.$on('$includeContentLoaded', function() {
       setTimeout(function(){
            QuickSidebar.init(); // init quick sidebar        
        }, 2000)
    });
}]);

/* Setup Layout Part - Theme Panel */
MetronicApp.controller('ThemePanelController', ['$scope', function($scope) {    
    $scope.$on('$includeContentLoaded', function() {
        Demo.init(); // init theme panel
    });
}]);

/* Setup Layout Part - Footer */
MetronicApp.controller('FooterController', ['$scope', function($scope) {
    $scope.$on('$includeContentLoaded', function() {
        Layout.initFooter(); // init footer
    });
}]);

/* Setup Rounting For All Pages */
MetronicApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/dashboard");  

    $stateProvider

        // Dashboard
        .state('dashboard', {
            url: "/dashboard",
            templateUrl: "views/dashboard.html",            
            data: {pageTitle: 'Admin Dashboard Template'},
            controller: "DashboardController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            '../assets/global/plugins/morris/morris.css',                            
                            '../assets/global/plugins/morris/morris.min.js',
                            '../assets/global/plugins/morris/raphael-min.js',                            
                            '../assets/global/plugins/jquery.sparkline.min.js',

                            '../assets/pages/scripts/dashboard.min.js',
                            'js/controllers/DashboardController.js',
                        ] 
                    });
                }]
            }
        })
        // Facility Page
        .state('facility', {
            url: "/facility",
            templateUrl: "views/facility.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "FacilityController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/FacilityController.js'
                        ] 
                    });
                }]
            }
        })
        .state('facility.addDoctor', {
            url: "/addDoctor/:row_id",
            templateUrl: "views/facility_add_doctor.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "FacilityAddDoctorController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/FacilityAddDoctorController.js'
                        ] 
                    });
                }]
            }
        })
        .state('facility.addRadio', {
            url: "/addRadio/:row_id",
            templateUrl: "views/facility_add_radio.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "FacilityAddRadioController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/FacilityAddRadioController.js'
                        ] 
                    });
                }]
            }
        })
        .state('facility.addPatient', {
            url: "/addPatient/:row_id",
            templateUrl: "views/facility_add_patient.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "FacilityAddPatientController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/FacilityAddPatientController.js'
                        ] 
                    });
                }]
            }
        })
        .state('facility.create', {
            url: "/create",
            templateUrl: "views/facility_create.html",            
            data: {pageTitle: 'Blank Page Template'}
        })
        .state('facility.update', {
            url: "/update/:row_id",
            templateUrl: "views/facility_update.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "FacilityUpdateController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/FacilityUpdateController.js',
                        ] 
                    });
                }]
            }
        })
        .state('facility.list', {
            url: "/list",
            templateUrl: "views/facility_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "FacilityListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/FacilityListController.js',
                            

                            
                        ] 
                    });
                }]
            }
        })
        // Hospital Page
        .state('cases', {
            url: "/cases",
            templateUrl: "views/cases.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "CasesController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/CasesController.js'
                        ] 
                    });
                }]
            }
        })
        .state('cases.create', {
            url: "/create",
            templateUrl: "views/cases_create.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "CasesCreateController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/CasesCreateController.js'
                        ] 
                    });
                }]
            }
        })
        .state('cases.list', {
            url: "/list",
            templateUrl: "views/cases_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "CasesListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/CasesListController.js',
                            

                            
                        ] 
                    });
                }]
            }
        })
        // Hospital Page
        .state('hospital', {
            url: "/hospital",
            templateUrl: "views/hospital.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [

                            'js/controllers/HospitalController.js'
                        ] 
                    });
                }]
            }
        })
        .state('hospital.create', {
            url: "/create",
            templateUrl: "views/hospital_create.html",            
            data: {pageTitle: 'Blank Page Template'}
        })
        .state('hospital.create_facility_by_inst_admin', {
            url: "/createfb25",
            templateUrl: "views/hospital_create_facility_by_inst_admin.html",            
            data: {pageTitle: 'Blank Page Template'}
        })
        .state('hospital.update', {
            url: "/update/:row_id",
            templateUrl: "views/hospital_update.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalUpdateController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalUpdateController.js',
                        ] 
                    });
                }]
            }
        })
        .state('hospital.addDoctor', {
            url: "/addDoctor/:row_id", 
            templateUrl: "views/hospital_add_doctor.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalAddDoctorController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalAddDoctorController.js',
                        ] 
                    });
                }]
            }
        })
        .state('hospital.addRadiology', {
            url: "/addRadiology/:row_id",
            templateUrl: "views/hospital_add_radiology.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalAddRadiologyController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalAddRadiologyController.js',
                        ] 
                    });
                }]
            }
        })
        .state('hospital.addPatient', {
            url: "/addPatient/:row_id",
            templateUrl: "views/hospital_add_patient.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalAddPatientController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalAddPatientController.js',
                        ] 
                    });
                }]
            }
        })
        .state('hospital.addFacility', {
            url: "/addFacility/:row_id",
            templateUrl: "views/hospital_add_facility.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalAddFacilityController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalAddFacilityController.js',
                        ] 
                    });
                }]
            }
        })
        .state('hospital.addRadio', {
            url: "/addRadiologist/:row_id",
            templateUrl: "views/hospital_add_radio.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalAddRadioController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalAddRadioController.js',
                        ] 
                    });
                }]
            }
        })
        .state('hospital.list', {
            url: "/list",
            templateUrl: "views/hospital_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "HospitalListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/HospitalListController.js',
                            

                            
                        ] 
                    });
                }]
            }
        })
        // Doctor Page
        .state('patient', {
            url: "/patient",
            templateUrl: "views/patient.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "PatientController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/PatientController.js'
                        ] 
                    });
                }]
            }
        })
        .state('patient.create', {
            url: "/create",
            templateUrl: "views/patient_create.html"        
        })
        .state('patient.edit', {
            url: "/edit/:row_id",
            templateUrl: "views/patient_edit.html",
            controller: "PatientEditController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/PatientEditController.js'
                        ] 
                    });
                }]
            }
        })
        .state('patient.list', {
            url: "/list",
            templateUrl: "views/patient_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "PatientListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                           'js/controllers/PatientListController.js',

                        ] 
                    });
                }]
            }
        })
        // Doctor Page
        .state('doctor', {
            url: "/doctor",
            templateUrl: "views/doctor.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "DoctorController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/DoctorController.js'
                        ] 
                    });
                }]
            }
        })
        .state('doctorChat', {
            url: "/chat",
            templateUrl: "views/doctor_chat.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "DoctorChatController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/DoctorChatController.js'
                        ] 
                    });
                }]
            }
        })
        .state('doctor.create', {
            url: "/create",
            templateUrl: "views/doctor_create.html",            
        })
        .state('doctor.create_by_inst_admin', {
            url: "/create_by_institution_admin",
            templateUrl: "views/doctor_create_by_inst_admin.html",            
        })
        .state('doctor.create_by_facility_admin', {
            url: "/create_by_facility_admin",
            templateUrl: "views/doctor_create_by_facility_admin.html",            
        })
        .state('doctor.edit', {
            url: "/edit/:row_id",
            templateUrl: "views/doctor_edit.html",
            controller: "DoctorEditController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/DoctorEditController.js'
                        ] 
                    });
                }]
            }
        })
        .state('doctor.list', {
            url: "/list",
            templateUrl: "views/doctor_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "DoctorListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                           'js/controllers/DoctorListController.js',

                        ] 
                    });
                }]
            }
        })
        // Radiologist Page
        .state('radio', {
            url: "/radio",
            templateUrl: "views/radio.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "RadioController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/RadioController.js'
                        ] 
                    });
                }]
            }
        })
        .state('radio.create', {
            url: "/create",
            templateUrl: "views/radio_create.html",            
        })
        .state('radio.create_by_inst_admin', {
            url: "/create_by_institution_admin",
            templateUrl: "views/radio_create_by_inst_admin.html",            
        })
        .state('radio.edit', {
            url: "/edit/:row_id",
            templateUrl: "views/radio_edit.html",
            controller: "RadioEditController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/RadioEditController.js'
                        ] 
                    });
                }]
            }
        })
        .state('radio.list', {
            url: "/list",
            templateUrl: "views/radio_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "RadioListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                           'js/controllers/RadioListController.js',
                        ] 
                    });
                }]
            }
        })
        // Blank Page
        .state('blank', {
            url: "/blank",
            templateUrl: "views/blank.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "BlankController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/BlankController.js'
                        ] 
                    });
                }]
            }
        })
        // Blank Page
        .state('department', {
            url: "/department",
            templateUrl: "views/department.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "DepartmentController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/DepartmentController.js'
                        ] 
                    });
                }]
            }
        })
        .state('department.edit', {
            url: "/edit/:row_id",
            templateUrl: "views/department_edit.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "DepartmentEditController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/DepartmentEditController.js'
                        ] 
                    });
                }]
            }
        })
        .state('department.create', {
            url: "/create",
            templateUrl: "views/department_create.html",            
        })
        .state('department.list', {
            url: "/list",
            templateUrl: "views/department_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "DepartmentListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/DepartmentListController.js'
                        ] 
                    });
                }]
            }
        })
        // Blank Page
        .state('prediction', {
            url: "/prediction",
            templateUrl: "views/prediction.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "PredictionController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/PredictionController.js'
                        ] 
                    });
                }]
            }
        })
        .state('prediction.edit', {
            url: "/edit/:row_id",
            templateUrl: "views/prediction_edit.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "PredictionEditController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/PredictionEditController.js'
                        ] 
                    });
                }]
            }
        })
        .state('prediction.create', {
            url: "/create",
            templateUrl: "views/prediction_create.html",            
        })
        .state('prediction.list', {
            url: "/list",
            templateUrl: "views/prediction_list.html",            
            data: {pageTitle: 'Blank Page Template'},
            controller: "PredictionListController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            'js/controllers/PredictionListController.js'
                        ] 
                    });
                }]
            }
        })
        // AngularJS plugins
        .state('fileupload', {
            url: "/file_upload.html",
            templateUrl: "views/file_upload.html",
            data: {pageTitle: 'AngularJS File Upload'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'angularFileUpload',
                        files: [
                            '../assets/global/plugins/angularjs/plugins/angular-file-upload/angular-file-upload.min.js',
                        ] 
                    }, {
                        name: 'MetronicApp',
                        files: [
                            'js/controllers/GeneralPageController.js'
                        ]
                    }]);
                }]
            }
        })

        // UI Select
        .state('uiselect', {
            url: "/ui_select.html",
            templateUrl: "views/ui_select.html",
            data: {pageTitle: 'AngularJS Ui Select'},
            controller: "UISelectController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'ui.select',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/angularjs/plugins/ui-select/select.min.css',
                            '../assets/global/plugins/angularjs/plugins/ui-select/select.min.js'
                        ] 
                    }, {
                        name: 'MetronicApp',
                        files: [
                            'js/controllers/UISelectController.js'
                        ] 
                    }]);
                }]
            }
        })

        // UI Bootstrap
        .state('uibootstrap', {
            url: "/ui_bootstrap.html",
            templateUrl: "views/ui_bootstrap.html",
            data: {pageTitle: 'AngularJS UI Bootstrap'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'MetronicApp',
                        files: [
                            'js/controllers/GeneralPageController.js'
                        ] 
                    }]);
                }] 
            }
        })

        // Tree View
        .state('tree', {
            url: "/tree",
            templateUrl: "views/tree.html",
            data: {pageTitle: 'jQuery Tree View'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/jstree/dist/themes/default/style.min.css',

                            '../assets/global/plugins/jstree/dist/jstree.min.js',
                            '../assets/pages/scripts/ui-tree.min.js',
                            'js/controllers/GeneralPageController.js'
                        ] 
                    }]);
                }] 
            }
        })     

        // Form Tools
        .state('formtools', {
            url: "/form-tools",
            templateUrl: "views/form_tools.html",
            data: {pageTitle: 'Form Tools'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
                            '../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
                            '../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css',
                            '../assets/global/plugins/typeahead/typeahead.css',

                            '../assets/global/plugins/fuelux/js/spinner.min.js',
                            '../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
                            '../assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js',
                            '../assets/global/plugins/jquery.input-ip-address-control-1.0.min.js',
                            '../assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js',
                            '../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
                            '../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js',
                            '../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js',
                            '../assets/global/plugins/typeahead/handlebars.min.js',
                            '../assets/global/plugins/typeahead/typeahead.bundle.min.js',
                            '../assets/pages/scripts/components-form-tools-2.min.js',

                            'js/controllers/GeneralPageController.js'
                        ] 
                    }]);
                }] 
            }
        })        

        // Date & Time Pickers
        .state('pickers', {
            url: "/pickers",
            templateUrl: "views/pickers.html",
            data: {pageTitle: 'Date & Time Pickers'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/clockface/css/clockface.css',
                            '../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
                            '../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
                            '../assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css',
                            '../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',

                            '../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
                            '../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
                            '../assets/global/plugins/clockface/js/clockface.js',
                            '../assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js',
                            '../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',

                            '../assets/pages/scripts/components-date-time-pickers.min.js',

                            'js/controllers/GeneralPageController.js'
                        ] 
                    }]);
                }] 
            }
        })

        // Custom Dropdowns
        .state('dropdowns', {
            url: "/dropdowns",
            templateUrl: "views/dropdowns.html",
            data: {pageTitle: 'Custom Dropdowns'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load([{
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css',
                            '../assets/global/plugins/select2/css/select2.min.css',
                            '../assets/global/plugins/select2/css/select2-bootstrap.min.css',

                            '../assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js',
                            '../assets/global/plugins/select2/js/select2.full.min.js',

                            '../assets/pages/scripts/components-bootstrap-select.min.js',
                            '../assets/pages/scripts/components-select2.min.js',

                            'js/controllers/GeneralPageController.js'
                        ] 
                    }]);
                }] 
            }
        }) 

        // Advanced Datatables
        .state('datatablesmanaged', {
            url: "/datatables/managed.html",
            templateUrl: "views/datatables/managed.html",
            data: {pageTitle: 'Advanced Datatables'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [                             
                            '../assets/global/plugins/datatables/datatables.min.css', 
                            '../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',

                            '../assets/global/plugins/datatables/datatables.all.min.js',

                            '../assets/pages/scripts/table-datatables-managed.min.js',

                            'js/controllers/GeneralPageController.js'
                        ]
                    });
                }]
            }
        })

        // Ajax Datetables
        .state('datatablesajax', {
            url: "/datatables/ajax.html",
            templateUrl: "views/datatables/ajax.html",
            data: {pageTitle: 'Ajax Datatables'},
            controller: "GeneralPageController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/datatables/datatables.min.css', 
                            '../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
                            '../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',

                            '../assets/global/plugins/datatables/datatables.all.min.js',
                            '../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
                            '../assets/global/scripts/datatable.js',

                            'js/scripts/table-ajax.js',
                            'js/controllers/GeneralPageController.js'
                        ]
                    });
                }]
            }
        })

        // User Profile
        .state("profile", {
            url: "/profile",
            templateUrl: "views/profile/main.html",
            data: {pageTitle: 'User Profile'},
            controller: "UserProfileController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'MetronicApp',  
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
                            '../assets/pages/css/profile.css',
                            
                            '../assets/global/plugins/jquery.sparkline.min.js',
                            '../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',

                            '../assets/pages/scripts/profile.min.js',

                            'js/controllers/UserProfileController.js'
                        ]                    
                    });
                }]
            }
        })

        // User Profile Dashboard
        .state("profile.dashboard", {
            url: "/dashboard",
            templateUrl: "views/profile/dashboard.html",
            data: {pageTitle: 'User Profile'}
        })

        // User Profile Account
        .state("profile.account", {
            url: "/account",
            templateUrl: "views/profile/account.html",
            data: {pageTitle: 'User Account'}
        })

        // User Profile Help
        .state("profile.help", {
            url: "/help",
            templateUrl: "views/profile/help.html",
            data: {pageTitle: 'User Help'}      
        })

        // Todo
        .state('todo', {
            url: "/todo",
            templateUrl: "views/todo.html",
            data: {pageTitle: 'Todo'},
            controller: "TodoController",
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({ 
                        name: 'MetronicApp',  
                        insertBefore: '#ng_load_plugins_before', // load the above css files before '#ng_load_plugins_before'
                        files: [
                            '../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
                            '../assets/apps/css/todo-2.css',
                            '../assets/global/plugins/select2/css/select2.min.css',
                            '../assets/global/plugins/select2/css/select2-bootstrap.min.css',

                            '../assets/global/plugins/select2/js/select2.full.min.js',
                            
                            '../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',

                            '../assets/apps/scripts/todo-2.min.js',

                            'js/controllers/TodoController.js'  
                        ]                    
                    });
                }]
            }
        })

}]);

/* Init global settings and run the app */
MetronicApp.run(["$rootScope", "settings", "$state", function($rootScope, settings, $state) {
    $rootScope.$state = $state; // state to be accessed from view
    $rootScope.$settings = settings; // state to be accessed from view
    
    
}]);