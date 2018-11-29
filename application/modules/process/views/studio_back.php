
<!-- ############ LAYOUT START-->
<style>
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

  <!-- content -->
<div id="bigWrapper">
    


	<!-- ############ PAGE START-->
	<div id="mainPanel">
		<div id="studioMain" ng-controller="StudioController" ng-init="initStudio();">
			<div id="recording" class="window" ng-show="(state==States.Recording) || (state==States.Welcome)">
				<div class="studioHeadlines">
					<span ng-show="state==States.Welcome">Welcome to Jamly's studio</span>
				</div>
				<div class="statusBar">
					<span ng-show="state==States.Welcome">Choose an action</span>
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
					</div>
					<div id="recordControl">
						
					</div>
					<div id="recordIndicator">
					<div id="indicatorsWrapper">
					<div id="getReady"></div>
					<button id="record" ng-click="record()" ng-show="!recording &amp;&amp; !processingRecording" ng-disabled="disableButton('record')" disabled="disabled">Rec</button>
					<button id="stop" ng-click="stop()" ng-show="recording" ng-disabled="disableButton('stop')" class="ng-hide">Stop</button>
					<div ng-show="!processingRecording" class="timers"><span id="inputCurrentTimer" class="ng-binding">00:00</span>
					<strong ng-show="sessionType==SESSION_TYPE.Join" class="ng-hide">/</strong>
					<span id="versionTotalTimer" ng-show="sessionType==SESSION_TYPE.Join" class="ng-binding ng-hide">00:00</span>
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
					<span ng-show="uploadFinished" class="ng-hide">Upload Completed</span>
				</div>
				<div id="uploadProgressHolder">
				</div>
				<div id="sessionDetails">
					<div id="detailsHeadline">While we upload your track...</div>
					<div id="songName" ng-show="sessionType==SESSION_TYPE.Start">
						<div>What is your song's name?</div>
						<div class="searchBox ng-isolate-$scope" type="track" init="songName" enabled="true" placeholder="Song Name">
						<input autocomplete="off" id="trackInput" placeholder="Song Name" class="textbox ng-pristine ng-untouched ng-valid" type="text" ng-model="term" ng-change="searchiTunesWrapper()" ng-blur="blur()" ng-focus="focus()" ng-disabled="disabled">
						<div class="suggested ng-hide" ng-show="results.length">
						<ul>
						</ul>
						</div>
						</div>
					</div>
					<div id="artistName" ng-show="sessionType==SESSION_TYPE.Start" ng-model="artistName" class="ng-pristine ng-untouched ng-valid">
						<div>What is the original artist's name?</div>
						<div class="searchBox ng-isolate-$scope" type="artist" init="artistName" enabled="" placeholder="Artist Name">
						<input autocomplete="off" id="artistInput" placeholder="Artist Name" class="textbox ng-pristine ng-untouched ng-valid" type="text" ng-model="term" ng-change="searchiTunesWrapper()" ng-blur="blur()" ng-focus="focus()" ng-disabled="disabled">
						<div class="suggested ng-hide" ng-show="results.length">
						<ul>
						</ul>
						</div>
						</div>
					</div>
					<div id="chooseInstrument" selectedinstrument="selectedInstrument" initinstrument="initInstrument" instsinversion="instsInVersion" class="ng-isolate-$scope">
					    <div id="instrumentsContainer">
					        <div id="instrumentsWrapper">
					            <div>What did you record?</div>
					            <div class="instrumentHolder ng-$scope" ng-repeat="inst in instruments | limitTo: 6" ng-mouseover="overInst(inst)" ng-click="selectInst(inst)" ng-style="{ 'background-color' : inst.name == selectedInstrument.name ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <img ng-src="<?php echo base_url();?><?php echo base_url();?>assets/img/leadSinging.svg" ng-style="{ 'filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '', '-webkit-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '' , '-moz-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : ''}" src="<?php echo base_url();?><?php echo base_url();?>assets/img/leadSinging.svg">
					                <div class="instName ng-binding">Lead Singing</div>
					            </div>
					            <div class="instrumentHolder ng-$scope" ng-repeat="inst in instruments | limitTo: 6" ng-mouseover="overInst(inst)" ng-click="selectInst(inst)" ng-style="{ 'background-color' : inst.name == selectedInstrument.name ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <img ng-src="<?php echo base_url();?><?php echo base_url();?>assets/img/electricGuitar.svg" ng-style="{ 'filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '', '-webkit-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '' , '-moz-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : ''}" src="<?php echo base_url();?><?php echo base_url();?>assets/img/electricGuitar.svg">
					                <div class="instName ng-binding">Electric Guitar</div>
					            </div>
					            
					            <div class="instrumentHolder ng-$scope" ng-repeat="inst in instruments | limitTo: 6" ng-mouseover="overInst(inst)" ng-click="selectInst(inst)" ng-style="{ 'background-color' : inst.name == selectedInstrument.name ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <img ng-src="<?php echo base_url();?><?php echo base_url();?>assets/img/drums.svg" ng-style="{ 'filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '', '-webkit-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '' , '-moz-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : ''}" src="<?php echo base_url();?><?php echo base_url();?>assets/img/drums.svg">
					                <div class="instName ng-binding">Drums</div>
					            </div>
					            
					            <div class="instrumentHolder ng-$scope" ng-repeat="inst in instruments | limitTo: 6" ng-mouseover="overInst(inst)" ng-click="selectInst(inst)" ng-style="{ 'background-color' : inst.name == selectedInstrument.name ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <img ng-src="<?php echo base_url();?><?php echo base_url();?>assets/img/acousticGuitar.svg" ng-style="{ 'filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '', '-webkit-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '' , '-moz-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : ''}" src="<?php echo base_url();?><?php echo base_url();?>assets/img/acousticGuitar.svg">
					                <div class="instName ng-binding">Acoustic Guitar</div>
					            </div>
					            
					            <div class="instrumentHolder ng-$scope" ng-repeat="inst in instruments | limitTo: 6" ng-mouseover="overInst(inst)" ng-click="selectInst(inst)" ng-style="{ 'background-color' : inst.name == selectedInstrument.name ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <img ng-src="<?php echo base_url();?><?php echo base_url();?>assets/img/bassGuitar.svg" ng-style="{ 'filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '', '-webkit-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '' , '-moz-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : ''}" src="<?php echo base_url();?><?php echo base_url();?>assets/img/bassGuitar.svg">
					                <div class="instName ng-binding">Bass Guitar</div>
					            </div>
					            
					            <div class="instrumentHolder ng-$scope" ng-repeat="inst in instruments | limitTo: 6" ng-mouseover="overInst(inst)" ng-click="selectInst(inst)" ng-style="{ 'background-color' : inst.name == selectedInstrument.name ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <img ng-src="<?php echo base_url();?><?php echo base_url();?>assets/img/piano.svg" ng-style="{ 'filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '', '-webkit-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : '' , '-moz-filter' : (inst.name == selectedInstrument.name) ? 'invert(100%)' : ''}" src="<?php echo base_url();?><?php echo base_url();?>assets/img/piano.svg">
					                <div class="instName ng-binding">Piano</div>
					            </div>
					            
					            
					            <div class="instrumentHolder" ng-style="{ 'background-color' : otherInstSelected ? 'orange' : '#ccc' }" style="background-color: rgb(204, 204, 204);">
					                <button id="otherInst" ng-click="otherButtonClick()" ng-style="{ 'color' : otherInstSelected ? 'white' : 'black' }" style="color: black;">Other</button>
					            </div>
					            <div class="clearFix"></div>
					        </div>
					    </div>
					</div>
					<button id="publishUploadButton" ng-click="publish()" ng-disabled="disableButton('publish')" class="ng-binding">Publish</button>
					
				</div>
			</div>
			
			
			
		</div>
	</div>



<!-- ############ PAGE END-->

</div>
  <!-- / -->



<!-- ############ LAYOUT END-->