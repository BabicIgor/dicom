
<!-- ############ LAYOUT START-->
<style>
/**************************************/
/**************************************/
/**************************************/
#upload_frame {
	border:0px;
	height:40px;
	width:400px;
	display:none;
}

#progress_container {
	width: 300px; 
	height: 30px; 
	border: 1px solid #CCCCCC; 
	background-color:#EBEBEB;
	display: block; 
	margin:5px 0px -15px 0px;
}

#progress_bar {
	position: relative; 
	height: 30px; 
	background-color: #F3631C; 
	width: 0%; 
	z-index:10; 
}

#progress_completed {
	font-size:16px; 
	z-index:40; 
	line-height:30px; 
	padding-left:4px; 
	color:#FFFFFF;
	
}
/**************************************/
/**************************************/
/**************************************/
input#searchBox {
    height: inherit;
    width: 375px;
    padding: 0 5px;
    float: left;
    border-radius: 1px;
    border: solid #d4cac5;
    background: white;
    border-width: 1px 0 1px 1px;
    color: #ff712c;
    font-size: 15px;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
    font-family: "sans-serif";
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

<?php $up_id = uniqid();?>
  <!-- content -->
<div id="bigWrapper">
    


	<!-- ############ PAGE START-->
	<div id="mainPanel">
		<div id="studioMain" ng-controller="StudioController" ng-init="sessionType=<?php echo $sessionType;?>;version=<?php echo $version;?>;creator_id=<?php echo $creator_id;?>;initStudio();">
			<div id="recording" class="window" ng-show="(state==States.Recording) || (state==States.Welcome)">
				<div class="studioHeadlines">
					<span ng-show="state==States.Welcome">Welcome to Jampede's studio</span>
					<span ng-show="state==States.Recording && sessionType==SESSION_TYPE.Join && !readyToRecord">
						<span>Fetching media</span>
						<span ng-repeat="x in [1,2,3]" ng-style="{ 'animation-delay' : 150*$index + 'ms' }" class="waitingDot">.</span>
					</span>
					<span ng-show="state==States.Recording && readyToRecord && !recording">Get ready to record</span>
					<span ng-show="state==States.Recording && recording">Recording...</span>
				</div>
				<div class="statusBar">
					<span ng-show="state==States.Welcome">Choose an action</span>
					<span ng-show="state==States.Recording && sessionType==SESSION_TYPE.Join && !readyToRecord">Please wait</span>
					<span ng-show="state==States.Recording && sessionType==SESSION_TYPE.Start && readyToRecord && !recording && !usingMet">Set metronome if you like, then hit Rec to start recording</span>
					<span ng-show="state==States.Recording && sessionType==SESSION_TYPE.Join && readyToRecord">Please wear headphones before you hit the record button </span>
					<span ng-show="state==States.Recording && recording">Press stop to finish</span>
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
				<div ng-show="state==States.Recording" ng-style="{ 'opacity' : recording ? '0.5' : '1' }" class="lowerBar ng-hide" style="opacity: 1;">
					<div id="uploadFromRecording" ng-show="sessionType==SESSION_TYPE.Start">
					<div class="inputFileMask">Upload a file</div>
					<input type="file" ng-click="setRecording(false)" ng-disabled="disableButton('gotoUpload')" onchange="angular.element(this).scope().fileSelected(this)" accept="audio/*,video/*">
					</div>
					<div id="inputTypeHolder">
					<input type="radio" ng-model="mediaType" name="mediaType" value="0" ng-disabled="recording" ng-change="mediaTypeChanged()" class="ng-pristine ng-untouched ng-valid">
					<span>Video</span>
					<input type="radio" ng-model="mediaType" name="mediaType" value="1" ng-disabled="recording" ng-change="mediaTypeChanged()" class="ng-pristine ng-untouched ng-valid">
					<span>Audio</span>
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



<!-- ############ PAGE END-->

</div>
  <!-- / -->



<!-- ############ LAYOUT END-->