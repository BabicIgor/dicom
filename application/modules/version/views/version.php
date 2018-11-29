
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
.profile-card {
    background: linear-gradient(to bottom, rgba(39,170,225,.8), rgba(28,117,188,.8)), url(assets/img/1.jpg) no-repeat;
    background-size: cover;
    width: 80%;
    border-radius: 4px;
    padding: 10px 20px;
    color: #fff;
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

/**************************************/
</style>

  <?php echo $menu?>

  <!-- content -->
<div id="bigWrapper">
    


	<!-- ############ PAGE START-->
	<div id="mainPanel" ng-controller="MainController">
		
		
		<div id="lowerMainPanel" style="width:750px;height:auto;margin:10px auto;float:left;margin-top:50px;margin-left:12px;">
			<div ng-controller="VersionController" id="versionPageWrapper" ng-init="user_id=<?php echo $user_id;?>;version=<?php echo $version;?>;duration=<?php echo $max_duration;?>;track_cnt=<?php echo $track_count;?>;audioSrc1=<?php echo $audioSrc1;?>;audioSrc2=<?php echo $audioSrc2;?>;audioSrc3=<?php echo $audioSrc3;?>;audioSrc4=<?php echo $audioSrc4;?>;initVersion();">
			<div id="sessionPageWrapper">
				<div id="roomForSessionBox">
				</div>
				<div id="sessionBoxWrapper">
					<div id="sessionVideoWrapper">
						<video-player version="version" trackcount="track_cnt" audio1="audioSrc1" audio2="audioSrc2" audio3="audioSrc3" audio4="audioSrc4" duration="duration" autoplay="autoplay">
						</video-player>
					</div>
				</div>
				<div id="socialSection">
					<div id="socialSectionTop">
						<div id="sessionHeadline" ng-cloak="ng-cloak" title="{{version.sessionId.songName + (version.sessionId.artistName ? (' (' + version.sessionId.artistName + ')') : '')}}">
							<div id="headlineText">
								
								<span itemprop="name"><?php echo $song_name;?></span>
						           
								<span ng-if="version.sessionId.artistName"> (<span itemprop="byArtist">Maroon 5</span> cover)</span>
							</div>
						</div>
					</div>
					<div id="sessionCommentsWrapper">
						<div id="commentForm">
							<div id="userCommentImgHolder">
								<img src="https://s3.amazonaws.com/jamly-userdata/5b2d427f212faf15045bcff0/profile_1529902286469.png?showPic" alt="User image" ng-style="{ 'background' : user.hasProfilePicture ? '' : 'black' }"/>
							</div>
							<form name="commentForm" novalidate="novalidate" style="width:calc(100% - 63px);">
								<textarea type="text" placeholder="What's on your mind?" ng-model="formData.text" required="required" style="height:initial;"></textarea>
								<button id="postButton" type="submit" ng-click="createComment()" class="j_btn_2">Post</button>
							</form>
						</div>
						<version-comments ></version-comments>
					</div>
				</div>
				<div class="clearFix"></div>
			</div>
		</div>
		</div>
		
		
		
	</div>



<!-- ############ PAGE END-->

</div>
  <!-- / -->



<!-- ############ LAYOUT END-->