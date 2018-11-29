
<!-- ############ LAYOUT START-->
<style>
#footer {
    background: #fff;
    position: relative;
}
ul.contact li {
    list-style: none;
    padding: 15px 0;
    border-bottom: 1px solid #f1f2f2;
    font-size: 13px;
    font-weight: 600;
    line-height: 15px;
}
#footer::before {
    content: "";
    background: linear-gradient(to right, #ffffff 0%,#53cbf1 50%,#ffffff 100%);
    height: 5px;
    width: 100%;
    position: absolute;
}
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
.profile-card {
    background: linear-gradient(to bottom, rgba(39,170,225,.8), rgba(28,117,188,.8)), url(assets/img/1.jpg) no-repeat;
    background-size: cover;
    width: 80%;
    border-radius: 4px;
    padding: 10px 20px;
    color: #fff;
    margin-bottom:60px;
}
.profile-card img.profile-photo {
    border: 7px solid #fff;
    float: left;
    margin-right: 20px;
    position: relative;
    top: -30px;
    height: 70px;
    width: 70px;
    border-radius: 50%;
}
.button_join{
    height: 24px;
    width: 60px;
    line-height: 24px;
    font-size: 12px;
    background-color: white;
    color: black;
    display: block;
    border: none;
    margin: 0px auto;
    cursor: pointer;
}
.chat-item{
    background: rgba(141,198,63, .1);
    margin-left: 50px;
    padding: 5px 10px;
    position: relative;
    border-radius: 10px;
}
.chat-item::before {
    border-bottom: 10px solid transparent;
    border-right: 8px solid rgba(141,198,63, .1);
    border-top: 10px solid transparent;
    content: "";
    height: 0;
    left: -8px;
    position: absolute;
    top: 10px;
    width: 0;
}
.chat-item-right{
    background: rgba(39,170,225, .1);
    margin-right: 50px;
    padding: 5px 10px;
    position: relative;
    border-radius: 10px;
}
.chat-item-right::after {
    border-bottom: 10px solid transparent;
    border-left: 8px solid rgba(39,170,225, .1);
    border-top: 10px solid transparent;
    content: "";
    height: 0;
    right: -8px;
    position: absolute;
    top: 10px;
    width: 0;
}
.form-control {
    background: #fff;
    border: 1px solid #f1f2f2;
    box-shadow: none;
    border-radius: 4px;
    color: #939598;
    width: 100% !important;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
/**************************************/
</style>

<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    	$('#loading_content').css('display', 'none');
    	$('#main_content').css('display', 'block');
  });
</script>
  <?php echo $menu?>
<?php $up_id = uniqid();?>

  <!-- content -->
  <div id="bigWrapper">
    


	<!-- ############ PAGE START-->
	<div id="mainPanel" ng-controller="ProfileController" style="padding:30px 0 50px;padding-left:70px;display:table;">

		
		<div id="sideContainer" style="width:200px;height:auto;margin:10px auto;float:left;">
			<div class="profile-card">
            	<img src="<?php echo base_url();?>assets/img/user-1.jpg" alt="user" style="width:40px;height:40px;" class="profile-photo">
            	<h5><a href="#" class="text-white" style="color:#ffffff;"><?php echo $userName;?></a></h5>
            </div>
			<div class="medium">
				<div class="sessionsTitle" ng-click="go('session')" style="font-size:14px;cursor:pointer;"><i class="fas fa-eye" style="width:12px;color:#662d91;"></i>&nbsp;&nbsp;&nbsp;All Sessions
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" ng-click="go('studio')" style="font-size:14px;cursor:pointer;"><i class="fas fa-microphone" style="width:12px;color:#8dc63f;"></i>&nbsp;&nbsp;&nbsp;My Studio
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" ng-click="go('profile')" style="font-size:14px;cursor:pointer;"><i class="far fa-address-book" style="width:12px;color:#662d91;"></i>&nbsp;&nbsp;&nbsp;My Profile
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle"  ng-click="go('chat')" style="font-size:14px;cursor:pointer;"><i class="fas fa-comments" style="width:12px;color:#8dc63f;"></i>&nbsp;&nbsp;&nbsp;Messages
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" ng-click="go('signout')" style="font-size:14px;cursor:pointer;"><i class="fas fa-sign-out-alt" style="width:12px;color:#9e1f63;"></i>&nbsp;&nbsp;&nbsp;Signout
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:155px;margin-left:14px;margin-top:23px;"></div>
				</div>
			</div>					
		</div>
		
		
		<div id="loading_content" style="display:block;">
			<div id="lowerMainPanel" style="width:750px;height:auto;margin:10px auto;float:left;margin;text-align:center;margin-top:210px;">
				<div id="spinner-wrapper" style="/* display: none; */">
			      <img src="<?php echo base_url();?>assets/img/init_loading.gif" style="width:55px;height:40px;" />
			    </div>
			</div>
		</div>
		<div id="main_content" style="display:none;width:750px;float:left;">
			<div style="width:720px;height:auto;margin:10px auto;float:left;border-bottom:1px solid #eeeeee;margin-bottom:0px;padding-left:10px;margin-left:20px;padding-bottom:13px;">
				<div style="margin:15px 0 10px 15px;">
					<div style="width:400px;float:left;">
						<div style="margin-bottom:0;display:inline-flex;">
			            	<img src="<?php echo base_url();?>assets/img/user-1.jpg" alt="user" style="width:50px;height:50px;border-radius:50%;margin-right:10px;" class="profile-photo">
							<textarea name="texts" id="exampleTextarea" cols="30" rows="1" style="border:1px solid #ccc;" placeholder="Write what you wish"></textarea>
						</div>
					</div>
					<div style="width:300px;float:left;">
						<div style="padding:8px 0px 10px;">
			            	<button style="font-size:14px;background:rgb(39,170,225);padding:7px 25px;font-weight:600;border-radius:30px;color:#ffffff;">Publish</button>
						</div>
					</div>
				</div>
				
			</div>

			<div id="lowerMainPanel" ng-controller="HottestSessionsController" ng-show="page=='session'" style="width:750px;height:auto;margin:10px auto;float:left;">
				<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;"> Popular Sessions</div>
				<single-hottest-session ng-repeat="session in staffSessions" is-logged="true" ng-show="staffSessions.length"></single-hottest-session>
				<div class="clearFix"></div>
				</div>
			</div>
			<div id="lowerMainPanel" ng-show="page=='profile'" style="width:750px;height:auto;margin:10px auto;float:left;margin-top:50px;">
				<div class="medium">
					<div style="width:30%;float:left;">
						&nbsp;
					</div>
					<div style="width:70%;float:left;">
						<table style="width:100%;float:left;">
							<tr style="">
								<td style="color:#3598c4;border-bottom:1px solid #ececec;padding-bottom:8px;">
									<strong>Name</strong>
								</td>
								<td style="border-bottom:1px solid #ececec;padding-bottom:8px;">
									<?php echo $userName;?>
								</td>
							</tr>
							<tr>
								<td style="color:#3598c4;border-bottom:1px solid #ececec;padding-bottom:8px;">
									<strong>Email</strong>
								</td>
								<td style="border-bottom:1px solid #ececec;padding-bottom:8px;">
									<?php echo $email;?>
								</td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
			
			<div id="lowerMainPanel" ng-controller="StudioController" ng-show="page=='studio'" ng-init="sessionType=<?php echo $sessionType;?>;version=<?php echo $version;?>;creator_id=<?php echo $creator_id;?>;initStudio();" style="float:left;width:750px;" >
				<div id="recording" class="window" ng-show="(state==States.Recording) || (state==States.Welcome)" style="margin-left:13px;">
					<div class="studioHeadlines">
						<span style="color:#3598c4;" ng-show="state==States.Welcome">Welcome to Jampede's studio</span>
						<span style="color:#3598c4;" ng-show="state==States.Recording && sessionType==SESSION_TYPE.Join && !readyToRecord">
							<span style="color:#3598c4;">Fetching media</span>
							<span ng-repeat="x in [1,2,3]" ng-style="{ 'animation-delay' : 150*$index + 'ms' }" class="waitingDot">.</span>
						</span>
						<span ng-show="state==States.Recording && readyToRecord && !recording" style="color:#3598c4;">Get ready to record</span>
						<span ng-show="state==States.Recording && recording" style="color:#3598c4;">Recording...</span>
					</div>
					<div class="statusBar">
						<span style="color:#3598c4;" ng-show="state==States.Welcome">Choose an action</span>
						<span style="color:#3598c4;" ng-show="state==States.Recording && sessionType==SESSION_TYPE.Join && !readyToRecord">Please wait</span>
						<span style="color:#3598c4;" ng-show="state==States.Recording && sessionType==SESSION_TYPE.Start && readyToRecord && !recording && !usingMet">Set metronome if you like, then hit Rec to start recording</span>
						<span style="color:#3598c4;" ng-show="state==States.Recording && sessionType==SESSION_TYPE.Join && readyToRecord">Please wear headphones before you hit the record button </span>
						<span style="color:#3598c4;" ng-show="state==States.Recording && recording">Press stop to finish</span>
					</div>
					<div id="chooseAction" ng-show="state==States.Welcome">
						<div id="question">Would you like to record or upload a file?</div>
						<button id="chooseRecord" ng-click="setRecording(true); next();" ng-disabled="disableButton('gotoRecord')">
						<img ng-src="<?php echo base_url();?>assets/img/microphone.svg" alt="Record microphone" src="<?php echo base_url();?>assets/img/microphone.svg">
						<span>Record</span>
						</button>

						<div id="chooseUpload" ng-show="sessionType==SESSION_TYPE.Start"><button class="inputFileMask">
						<img ng-src="<?php echo base_url();?>assets/img/upload.svg" alt="Upload file to Jamly" src="<?php echo base_url();?>assets/img/upload.svg">
						<span>Upload</span>
						</button>
						<input type="file" accept="audio/*,video/*">
						</div>

					</div>
					<div id="actionWrapper" ng-class="{faded : state==States.Welcome}" style="display:flex;">
						<div class="monitorContainer">
							<div id="videoPlayerHolder">
								<div ng-show="mediaType==MEDIA_TYPE.Video" class="videoPlayer">
									<div id="blinkingRedCircle" ng-show="recording" class="ng-hide">
									</div>
									<video id="liveVideo" autoplay="autoplay" muted="muted" oncontextmenu="javascript:return false;" width="400" height="300">
									</video>
								</div>
							</div>
							<div class="audioPlayer">
								<canvas id="inputAudioVisualizer" class="audioVisualizer"></canvas>
								
							</div>
							
							
						</div>
						<div id="recordControl">
							<div id="preRecordingChecksHolder">
							
								<div class="helpBoxHolder" position="left" width="300px" content="getUserMediaHelp" ng-show="showGetUserMediaHelp && !(mediaType == MEDIA_TYPE.Audio && checkMic)">
									<div class="helpBox ng-binding leftArrow" ng-style="{ 'width' : width, 'top' : top, 'left' : left, 'transform' : translate }" style="width: 300px; top: 50%; left: 0px; transform: translate(-100%, -50%);">
									The browser can't access your camera and microphone. Try the following: 
										<ul>
										<li>Make sure you have audio input connected to your computer</li>
										<li>If you have a camera icon on the address bar, click on it and share your media devices</li>
										<li>Reload the page and try recording again</li>
										</ul>
										<p>If it still doesn't work, you can record your song using any software and upload the file to Jamly.</p>
									</div>
								
								</div>
								<div id="preRecordingChecks">
								<div class="check">
								<div ng-class="{suc: checkMic, err: !checkMic}" class="lightbulb err">
								</div>
								<div ng-show="checkMic" class="indication ng-hide">Microphone on</div>
								
								<div ng-show="!checkMic && state!==States.Welcome" class="indication" style="">
								<a ng-click="showGetUserMediaHelp = !showGetUserMediaHelp">Microphone error</a>
								</div>
								</div>
								
								<div class="check">
								
								<div ng-class="{suc: checkCam, off: mediaType==MEDIA_TYPE.Audio , err: !checkCam}" class="lightbulb err">
								</div>
								<div ng-show="checkCam" class="indication ng-binding ng-hide">Camera on</div>
								<div ng-show="!checkCam && state!==States.Welcome" class="indication" style="">
								<a ng-click="showGetUserMediaHelp = !showGetUserMediaHelp">Camera error</a>
								</div></div><div class="check">
								<div ng-class="{suc: metRunning, off: !metRunning}" class="lightbulb off">
								</div>
								<div class="indication ng-binding">Metronome off</div>
								</div>
								</div>
							</div>
						</div>
						<div id="recordIndicator">
						<div id="indicatorsWrapper">
						<div id="getReady"></div>
						<button id="record" ng-click="record()" ng-show="!recording && !processingRecording" ng-disabled="disableButton('record')">Rec</button>
						<button id="stop" ng-click="stop()" ng-show="recording" ng-disabled="disableButton('stop')">Stop</button>
						<div ng-show="!processingRecording" class="timers">
						<span id="inputCurrentTimer" class="ng-binding">{{sec2time(inputCurrentTimer)}}</span>
						<strong ng-show="sessionType==SESSION_TYPE.Join" class="ng-hide">/</strong>
						<span id="versionTotalTimer" ng-show="sessionType==SESSION_TYPE.Join" class="ng-binding ng-hide">{{sec2time(versionTotalTimer)}}</span>
						</div>
						
						</div>
						</div>
						
						
					</div>
					
				</div>
				<div id="review" ng-show="state==States.Review" class="window ng-hide">
					<div id="reviewWrapper">
						<div class="studioHeadlines">Review your work</div>
						<div class="statusBar">
							<span ng-show="sessionType!==SESSION_TYPE.Join">Press the upload button to begin uploading</span>
							<span ng-show="sessionType==SESSION_TYPE.Join" class="ng-hide">Sync and balance your sound track before uploading</span>
						</div>
						<div id="reviewControl" style="width:400px;">
							<div id="reviewMonitorContainer">
								<div class="videoPlayer">
									<video id="reviewVideoElm" width="400px" height="300px"></video>
								</div>
								<div id="reviewButtons">
									<div id="videoPlayerButtons">
										<button id="playPauseButton" ng-click="playPauseReview()" ng-class="{ 'Play' : !reviewPlaying, 'Pause' : reviewPlaying }" class="Play"></button>	
										<div id="currentVideoTimeHolder">{{ sec2time(reviewCurrentTimer) + ' / ' + sec2time(reviewTotalTimer) }}</div>
										<div id="timelineHolder">
											<input id="timeline" type="range" min="0" max="{{reviewTotalTimer}}" step="0.001" ng-model="reviewCurrentTimer" disabled="true" ng-change="timelineMoved()"/>
											<div ng-style="{ 'width' : ((reviewCurrentTimer / reviewTotalTimer) * 100) + '%' }" class="inputRangePainter">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="reviewActions" style="width:400px;">
							<button id="reviewUploadButton" ng-click="upload()">
								Upload
							</button>
						</div>
					</div>
				</div>
				
				
				
				<div id="upload" ng-show="state==States.Upload" class="window ng-hide">
					<div class="studioHeadlines">
						<span ng-show="!uploadFinished">Upload started</span>
						<span ng-show="uploadFinished">Upload Completed</span>
					</div>
					<div id="uploadProgressHolder" style="text-align:center;display:block;">
						<img src="<?php echo base_url();?>assets/img/progress.gif" style="width:60px;height:60px;" />
					</div>
					<div id="sessionDetails">
						<div id="detailsHeadline">While we upload your track...</div>
						<div id="songName" ng-show="sessionType==SESSION_TYPE.Start">
							<div>What is your song's name?</div>
							<search-box type="track" init="songName" enabled="{{enableSongName}}" placeholder="Song Name"></search-box>
						</div>
						<div id="artistName" ng-show="sessionType==SESSION_TYPE.Start" ng-model="artistName" class="ng-pristine ng-untouched ng-valid">
							<div>What is the original artist's name?</div>
							<search-box type="artist" init="artistName" enabled="{{enableArtistName}}" placeholder="Artist Name"></search-box>
						</div>
						
						<choose-instrument selectedinstrument="selectedInstrument" initinstrument="initInstrument" instsinversion="instsInVersion">
						</choose-instrument>
						<button id="publishUploadButton" ng-click="publish()" ng-disabled="disableButton('publish')" class="ng-binding">{{publishing? 'Abort' : 'Publish'}}</button>
						<div id="publishMessage" class="ng-binding">{{publishMessage}}</div>
					</div>
				</div>
				
			</div> 
		</div>
		
		<div id="sideContainer" style="width:auto;height:auto;margin:10px auto;float:left;">
			<h4 style="color:#6d6e71;margin:0 auto 20px;margin-left:15px;">Who to Follow</h4>
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;cursor:pointer;"><img src="<?php echo base_url();?>assets/img/user-11.jpg" style="width:40px;height:40px;border-radius:50%;float:left;margin-bottom:10px;"/>
					<div style="float:left;margin-left:6px;">
						Diana Amber
						<br>
						<a href="#" style="color:#39b54a;">Add friend</a> 
					</div>
					
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:100px;margin-left:46px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;cursor:pointer;"><img src="<?php echo base_url();?>assets/img/user-12.jpg" style="width:40px;height:40px;border-radius:50%;float:left;margin-bottom:10px;"/>
				<div style="float:left;margin-left:6px;">
					Diana Amber
					<br>
					<a href="#" style="color:#39b54a;">Add friend</a> 
				</div>
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:100px;margin-left:46px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle" style="font-size:14px;cursor:pointer;"><img src="<?php echo base_url();?>assets/img/user-13.jpg" style="width:40px;height:40px;border-radius:50%;float:left;margin-bottom:10px;"/>
				<div style="float:left;margin-left:6px;">
					Diana Amber
					<br>
					<a href="#" style="color:#39b54a;">Add friend</a> 
				</div>
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:100px;margin-left:46px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
				<div class="sessionsTitle"  style="font-size:14px;cursor:pointer;"><img src="<?php echo base_url();?>assets/img/user-1.jpg" style="width:40px;height:40px;border-radius:50%;float:left;margin-bottom:10px;"/>
				<div style="float:left;margin-left:6px;">
					Diana Amber
					<br>
					<a href="#" style="color:#39b54a;">Add friend</a> 
				</div>
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:100px;margin-left:46px;margin-top:23px;"></div>
				</div>
			</div>
			<div class="medium">
			
				<div class="sessionsTitle" style="font-size:14px;cursor:pointer;"><img src="<?php echo base_url();?>assets/img/user-15.jpg" style="width:40px;height:40px;border-radius:50%;float:left;margin-bottom:10px;"/>
				<div style="float:left;margin-left:6px;">
					Diana Amber
					<br>
					<a href="#" style="color:#39b54a;">Add friend</a> 
				</div>
				
				
					<div class="clearFix" style="height:1px;border-top:1px solid #f1f2f2;bottom:-15px;left:0;width:100px;margin-left:46px;margin-top:23px;"></div>
				</div>
			</div>					
		</div> 
	</div>
	<footer id="footer">
		<div class="container" style="max-width:1000px;margin:0 auto;">
			<div style="margin-left:-10px;margin-right:-10px;">
				<div style="padding:50px 0;float:left;width:100%;">
					<div style="width:200px;">
						<h5 style="text-align:center;">Contact Us<h5>
						<ul class="contact">
			                <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
			                <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
			                <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
			              </ul>
					</div>
				</div>
			</div>
		</div>
	</footer>




<!-- ############ PAGE END-->

  </div>
  <!-- / -->



<!-- ############ LAYOUT END-->