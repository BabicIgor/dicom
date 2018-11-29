
<!-- ############ LAYOUT START-->
<style>

button {
    background-color: #e6e6e6;
    border: none;
    outline: 0;
    margin: 0;
    padding: 0;
    cursor: pointer;
    text-align: center;
}
button#searchButton {
    height: inherit;
    line-height: 25px;
    width: 50px;
    float: left;
    border-top-right-radius: 2px;
    border-bottom-right-radius: 2px;
    text-align: center;
    background-color: #ff712c;
}
button#searchButton img {
    height: 20px;
    width: 20px;
    margin: 5px auto;
    filter: invert(100%);
    -webkit-filter: invert(100%);
    -moz-filter: invert(100%);
}
/************************************/
.large .singleHottestSession {
    height: 280px;
    width: 300px;
    margin: 10px calc(100px / 6);
    float: left;
}
.singleHottestSession {
    position: relative;
}
.singleHottestSession a {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 100;
}
.large .sessionPostersHolder {
    height: 225px;
    width: inherit;
    cursor: pointer;
    position: relative;
    background-color: black;
    background: radial-gradient(#1a1a1a, #0d0d0d, black);
    background: -webkit-radial-gradient(#1a1a1a, #0d0d0d, black);
    background: -o-radial-gradient(#1a1a1a, #0d0d0d, black);
    background: -moz-radial-gradient(#1a1a1a, #0d0d0d, black);
}
.large .sessionPostersHolder .playButton {
    z-index: 1;
    position: absolute;
    top: calc(50% - 16px);
    left: calc(50% - 10px);
    border-style: solid;
    border-width: 16px 0 16px 32px;
    border-color: transparent transparent transparent white;
    opacity: 0.7;
    transition: 0.1s linear all;
}
.large .sessionInfoWrapper {
    height: 55px;
    width: inherit;
}
.large .sessionInfoWrapper .sessionHeadlineHolder {
    height: 30px;
    width: inherit;
    line-height: 30px;
    font-size: 18px;
    font-family: "Casual-Bold";
    color: #ff6600;
}
.large .sessionInfoWrapper .sessionInfo {
    height: 25px;
    width: inherit;
    font-size: 15px;
    color: #878787;
}
.large .sessionInfo img {
    height: 12px;
    width: 12px;
    margin-right: 2px;
    filter: invert(50%);
    -webkit-filter: invert(50%);
    -moz-filter: invert(50%);
}

/**************************************/
</style>

  <?php echo $menu?>

  <!-- content -->
  <div id="bigWrapper">
    


	<!-- ############ PAGE START-->
	<div id="mainPanel">

		<div id="searchContainer" ng-controller="SearchController" style="margin:20px auto;height:auto;margin-left:112px;">
			<div id="searchBoxHolder" style="width:465px;margin:0 auto;font-size:14px;">
				<input id="searchBox" type="text" name="term" ng-model="term" style="height:28px;" placeholder="Search Jampede..." ng-change="searched=false;quickSearch();">
				<button id="searchButton"  ng-disabled="term===''"><img alt="Search" src="<?php echo base_url();?>assets/img/search.svg"></button>
			</div>
		</div>
		<div id="sideContainer" style="width:200px;height:auto;margin:10px auto;float:left;">
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;"><i class="fas fa-microphone" style="width:12px;color:#8dc63f;"></i>&nbsp;&nbsp;&nbsp;My Studio
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;"><i class="far fa-address-book" style="width:12px;color:#662d91;"></i>&nbsp;&nbsp;&nbsp;My Profile
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;"><i class="fas fa-comments" style="width:12px;color:#8dc63f;"></i>&nbsp;&nbsp;&nbsp;Online Chat
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;"><i class="fas fa-sign-out-alt" style="width:12px;color:#9e1f63;"></i>&nbsp;&nbsp;&nbsp;Signout
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>					
		</div> 
		<div id="lowerMainPanel" ng-controller="HottestSessionsController" style="width:1000px;height:auto;margin:10px auto;float:left;">
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;"> Popular Sessions</div>
				<single-hottest-session ng-repeat="session in staffSessions" is-logged="true" ng-show="staffSessions.length"></single-hottest-session>
				<div class="clearFix"></div>
			</div>
		</div> 
		
	</div>



<!-- ############ PAGE END-->

  </div>
  <!-- / -->



<!-- ############ LAYOUT END-->