/* Setup blank page controller */
angular.module('MetronicApp').controller('DoctorChatController', ['$rootScope', '$scope', 'settings', '$state', '$http', function($rootScope, $scope, settings, $state, $http) {
    
    $scope.ownUserName = $rootScope.ownUserName;
    
    

    
    
    
    
    


    $scope.$on('$viewContentLoaded', function() {   
        // initialize core components
        App.initAjax();
        
        
            
    if($rootScope.userId == null)
    {
        $http.get(base_url + 'login/getUserInfo')
    	.success(function (responseData,status,headers,config) {
    	    
            socket.emit('login_user', responseData.userId);        
    	})
    	.error(function(data){
    	});
    }
    else
    {
        socket.emit('login_user', $rootScope.userId);        
    }
    
        
        
        
        
/*An array containing all the country names in the world:*/

        $scope.ownUserName = $rootScope.ownUserName;
        
        socket.on('send message', function(data){
            
            
            
            
            $scope.activeUserId = data.from;
            
            
            
            if($rootScope.userId == data.to)
            {
                
                var preview_html = '#preview_' + data.from;
                $(preview_html).text(data.message);
                $(preview_html).css('font-style', 'italic');
                
                
                var meta_name_html = '#meta_name_' + data.from;
                $(meta_name_html).css('font-weight', 'bold');
                
                
                
                
                // html+="<li class='sent'>";
                // html+="<img src='http://musicincline.com/assets/img/mikeross.png' alt='mikeross' />";
                // html+="<p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>";
                // html+="</li>";
                
                
                
                if($rootScope.senderId)
                {
                    html="<li class='replies'>";
                    html+="<img src='http://musicincline.com/assets/img/louislitt.png' alt='louislitt' />";
                    html+="<p>" + data.message + "</p>";
                    html+="</li>";
                            
                    
                    
                    //$('#messages').empty();
                    $('#messages_main').append(html);
                	$(".messages").animate({ scrollTop: $('#messages_main').height() }, "fast");    
                }
               
                
            }
            
        })
        
        
        
        
        
        // socket.on('own_all_user', function(data){
            
            
            
            
            
            
            
            
        //     console.log($rootScope.userId);
        //     for(var idx = 0;idx < data.length;idx++)
        //     {
        //         if($rootScope.userId != data[idx])
        //         {
        //             var html = '#user_status_' + data[idx];
                
        //             //$(html).removeClass();
                    
                    
        //           // $(html).addClass('contact-status online');  
        //         }
                
                
        //     }
            
        // })
        socket.on('all_user', function(data){
            
            for(var idx = 0;idx < $scope.doctors.length;idx++)
            {
                var html = '#user_status_' + $scope.doctors[idx].user_id;
                $(html).removeClass();
            }
            for(var idx = 0;idx < data.length;idx++)
            {
                if($rootScope.userId != data[idx])
                {
                    var html = '#user_status_' + data[idx];
                    $(html).removeClass();
                    $(html).addClass('contact-status online');  
                }
            }
            
        })
        
        
        
        
        
        // set default layout mode
        $rootScope.settings.layout.pageContentWhite = true;
        $rootScope.settings.layout.pageBodySolid = false;
        $rootScope.settings.layout.pageSidebarClosed = false;
    });
    
    
    
    
    $scope.userIdx = 1;
    $scope.userName = 'Louis Litt';
    $scope.userImg = 'http://musicincline.com/assets/img/louislitt.png';
    
    
    
   $http.get(base_url + 'doctor/getDoctorsForChat')
	.success(function (responseData,status,headers,config) {
		$scope.doctors = responseData;
	})
	.error(function(data){
	});	
    
    
    
    $scope.send_message = function()
    {
        // alert('send_message from = ' + $rootScope.userId + ' To ' + $scope.activeUserId);
        // newMessage();
    }
    
    
    $('#send_message_box').on('keydown', function(e){
        if(e.which == 13)
        {
            newMessage();
            return false;
        }
        
    });
    
    function newMessage() {
    	message = $(".message-input input").val();
    	if($.trim(message) == '') {
    		return false;
    	}
    	$('<li class="sent"><img src="https://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
    	$('.message-input input').val(null);
    	$('.contact.active .preview').html('<span>You: </span>' + message);
    	$(".messages").animate({ scrollTop: $('#messages_main').height() }, "fast");
    	
    	
    	var sendObj = {
            from : $rootScope.userId,
            to : $rootScope.senderId,
            message : message
        };
	    socket.emit('message', sendObj);
    	
    };
    
    
    
    
    
    
    
    
    
    $scope.selectUser = function(userId)
    {
        $scope.activeUserId = userId;
        $rootScope.senderId = userId;




        var preview_html = '#preview_' + userId;
        $(preview_html).html('&nbsp;');
        $(preview_html).css('font-style', 'normal');



        var meta_name_html = '#meta_name_' + userId;
        $(meta_name_html).css('font-weight', '100');

        $rootScope.messageHistory = [];
        $http.get(base_url + 'chat/getChatHistory?fromId=' + $rootScope.userId + '&toId=' + userId)
    	.success(function (responseData,status,headers,config) {
    	    
    	    $rootScope.messageHistory = responseData;
	        $('#messages_main').empty();
    	    for(var idx = 0;idx < $rootScope.messageHistory.length;idx++)
    	    {
    	        if($rootScope.messageHistory[idx].type == 'sent')
    	        {
    	            html="<li class='sent'>";
                    html+="<img src='http://musicincline.com/assets/img/mikeross.png' alt='mikeross' />";
                    html+="<p>" + $rootScope.messageHistory[idx].message + "</p>";
                    html+="</li>";
    	        }
    	        if($rootScope.messageHistory[idx].type == 'reply')
    	        {
    	            html="<li class='replies'>";
                    html+="<img src='http://musicincline.com/assets/img/louislitt.png' alt='louislitt' />";
                    html+="<p>" + $rootScope.messageHistory[idx].message + "</p>";
                    html+="</li>";
    	        }
                $('#messages_main').append(html);
    	    }
    	    
        	$(".messages").animate({ scrollTop: $('#messages_main').height() }, "fast");    
    	    
    	})
    	.error(function(data){
    	});	
        
        
        
        
        
        // html="<li class='sent'>";
        // html+="<img src='http://musicincline.com/assets/img/mikeross.png' alt='mikeross' />";
        // html+="<p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>";
        // html+="</li>";
        
        
        
        
        // for(var idx = 0;idx < $scope.doctors.length;idx++)
        // {
        //     if($scope.doctors[idx].user_id == userId)
        //     {
        //         $scope.userName = $scope.doctors[idx].first_name + " " + $scope.doctors[idx].last_name;
        //         html+="<li class='replies'>";
        //         html+="<img src='http://musicincline.com/assets/img/louislitt.png' alt='louislitt' />";
        //         html+="<p>When you're backed against the wall, break the god damn thing down.</p>";
        //         html+="</li>";
                
        //         $scope.userImg = 'http://musicincline.com/assets/img/louislitt.png';

        //     }
        // }
        

        
        
        // $('#messages_main').empty();
        // $('#messages_main').append(html);
        
    }
    
}]);
