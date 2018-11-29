<?php



?>
<div >
	
	<div id="header">
          <div id="headerContentHolder" ng-controller="HeaderController" ng-init="signupLoginShower=undefined; redirect = undefined; isLogged = false; headerInit()">
	          <a id="logo" href="/Jampede"><img src="<?php echo base_url();?>assets/img/logo.png" title="Jamly Homepage" alt="Jamly - Free Online Music Sharing &amp; Collaboration"></a>
				<span style="color:#ffffff;display:inline-block;margin-top:0px;margin-left:3px;font-size:20px;"><strong>Jampede</strong></span>
	          <div id="rightButtonsHolder">
		          <div id="studioButton"  ng-init="page = undefined;" class="j_tr_1">
		          
					<div ng-if="page=='studio'" class="webcamContainer">
						<img src="<?php echo base_url();?>assets/img/webcam-on.svg" alt="Webcam"/>
					</div>
	
					<div id="active" ng-if="page!=='studio'" class="webcamContainer">
						<div id="webcamBack">
							<img src="<?php echo base_url();?>assets/img/webcam-front.svg" alt="Webcam"/>
						</div>
						<div id="webcamFront">
							<img src="<?php echo base_url();?>assets/img/webcam-back.svg" alt="Webcam"/>
						</div>
					</div>
	
					<div id="active" class="webcamContainer ng-$scope">
					  <div id="webcamBack">
					      <img src="<?php echo base_url();?>assets/img/webcam-front.svg" alt="Webcam">
					  </div>
					  <div id="webcamFront">
					      <img src="<?php echo base_url();?>assets/img/webcam-back.svg" alt="Webcam">
					  </div>
					</div>
					
					<div id="studioText" ng-if="page!=='studio'" class="j_tr_1">
					  Jampede Studio →
					</div>
					
					<a ng-click="studioFromHeader('studio')" title="Signup to visit our online studio"></a>	  
	          	  </div>
	          	  
	          	  <div id="signupLoginButton" ng-click="showSignupLogin()">Login<point-to-login></point-to-login></div>
	          	  </div>		
	          	  		
		          	  
		          

				</div>


	</div>
</div>

<div>	
<!-- / -->