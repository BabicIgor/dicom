
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
		<div id="profilePageWrapper">
			<div id="uploadCtrl" ng-controller="UploadPicController">
			
			
			
				<div id="uploadImg" ng-show="uploadNewPicDialog" style="">
					<div id="headline">Select an image file</div>
					<div id="cropContainer">
						<div class="cropArea">
							<img-crop image="myImage" result-image="myCroppedImage" area-type="square" area-min-size="100" result-image-size="200" result-image-quality="1" class="ng-isolate-$scope">
							<canvas width="0" height="0" style="margin-top: 0px;">
							</canvas>
							</img-crop>
						</div>
						<div id="progressBar" ng-show="uploading" class="ng-hide">
							<div id="text" class="ng-binding">Uploading 0%</div>
							<div id="progress" ng-style="{'width': progress}" style="width: 0%;">
							</div>
						</div>
					</div>
					<div id="buttons">
						<input id="fileInput" type="file" accept="image/*">
						<button id="close" ng-click="uploadNewPicDialog=!uploadNewPicDialog">Close</button>
						<button id="upload" ng-click="uploadPic()">Upload</button>
					</div>
				</div>
				<div id="userInfoContainer">
					<div id="userInfo">
						<div id="userImage">
							<img ng-src="https://s3.amazonaws.com/jamly-userdata/5b2d427f212faf15045bcff0/profile_1529902286469.png?showPic&amp;width=140&amp;height=140" class="userImg" src="https://s3.amazonaws.com/jamly-userdata/5b2d427f212faf15045bcff0/profile_1529902286469.png?showPic&amp;width=140&amp;height=140">
								
							<div id="editPicture">
								<img id="camera" ng-click="uploadNewPicDialog=!uploadNewPicDialog" alt="Edit" src="<?php echo base_url();?>assets/img/camera.svg">
							</div>
						</div>
						<div id="userDetails">
							<div id="userName" class="ng-binding">sonxaikhotpanya</div>
							<div id="userTools"></div>
							<div ng-class="{active: section == 0}" ng-click="section=0" class="profileButton active">My Activity</div>
							<div ng-class="{active: section == 1}" ng-click="section=1" class="profileButton">Profile Setting</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<!-- ############ PAGE END-->

</div>
  <!-- / -->



<!-- ############ LAYOUT END-->