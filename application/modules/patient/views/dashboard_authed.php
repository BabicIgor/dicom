	<div style="width:100%;height:612px;position:relative;color: white;display:inline-block;border-style:solid;border-color:black;"
         oncontextmenu="return false"
         class='disable-selection noIbar'
         unselectable='on'
         onselectstart='return false;'
         onmousedown='return false;'>
        <div id="dicomImage"
             style="width:80%;height:612px;top:0px;left:0px; position:absolute">
        </div>
    </div>
<div style="position:absolute;top:0;right:0;bottom:0;display:flex;width:300px;height:100%;background:#272735;color:#8993ae;">
	
	<style>
		
		.onoffswitch {
			position: relative; width: 50px;
			-webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
		}
		.onoffswitch-checkbox {
			display: none;
		}
		.onoffswitch-label {
			display: block; overflow: hidden; cursor: pointer;
			border: none; border-radius: 20px;
		}
		.onoffswitch-inner {
			display: block; width: 200%; margin-left: -100%;
			transition: margin 0.3s ease-in 0s;
		}
		.onoffswitch-inner:before, .onoffswitch-inner:after {
			display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
			font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
			box-sizing: border-box;
		}
		.onoffswitch-inner:before {
			content: "";
			padding-left: 10px;
			background-color: #34A7C1; color: #FFFFFF;
		}
		.onoffswitch-inner:after {
			content: "";
			padding-right: 10px;
			background-color: #000000; color: #999999;
			text-align: right;
		}
		.onoffswitch-switch {
			display: block; width: 14px; margin: 3px;
			background: #FFFFFF;
			position: absolute; top: 0; bottom: 0;
			right: 30px;
			border: none; border-radius: 20px;
			transition: all 0.3s ease-in 0s; 
		}
		.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
			margin-left: 0;
		}
		.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
			right: 0px; 
		}
	</style>
	
		<div style="padding:16px;width:100%;height:100%;">
				<div class="row">
					<div class="col-md-12">
					Control
						<input type="file" id="selectFile" class="form-control" style="background:none;border:none;display:none;" >
						<div class="form-control" style="background:none;border:none;color:#fff;">
							<div class="col-md-7 col-xs-12" style="top:0px;">
								<span style="font-size:15px;" class="fontsforweb_fontid_12950"><i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;Pan</span>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="onoffswitch" >
									<input type="checkbox" name="pan" class="onoffswitch-checkbox" id="pan" checked >
									<label class="onoffswitch-label" for="pan" style="border-radius:20px !important;height:20px;">
										<span class="onoffswitch-inner" style="border-radius:50% !important;"></span>
										<span class="onoffswitch-switch" style="border-radius:50% !important;"></span>
									</label>
								</div>
							</div>
						</div>	
						<div class="form-control" style="background:none;border:none;color:#fff;">
							<div class="col-md-7 col-xs-12" style="top:0px;">
								<span style="font-size:15px;" class="fontsforweb_fontid_12950"><i class="fa fa-adjust"></i>&nbsp;&nbsp;&nbsp;Adjust</span>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="onoffswitch" >
									<input type="checkbox" name="adjust" class="onoffswitch-checkbox" id="adjust" unchecked >
									<label class="onoffswitch-label" for="adjust" style="border-radius:20px !important;height:20px;">
										<span class="onoffswitch-inner" style="border-radius:50% !important;"></span>
										<span class="onoffswitch-switch" style="border-radius:50% !important;"></span>
									</label>
								</div>
							</div>
						</div>	
						<div class="form-control" style="background:none;border:none;color:#fff;">
							<div class="col-md-7 col-xs-12" style="top:0px;">
								<span style="font-size:15px;" class="fontsforweb_fontid_12950"><i class="fa fa-tint"></i>&nbsp;&nbsp;&nbsp;Invert</span>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="onoffswitch" >
									<input type="checkbox" name="invert" class="onoffswitch-checkbox" id="invert" unchecked >
									<label class="onoffswitch-label" for="invert" style="border-radius:20px !important;height:20px;">
										<span class="onoffswitch-inner" style="border-radius:50% !important;"></span>
										<span class="onoffswitch-switch" style="border-radius:50% !important;"></span>
									</label>
								</div>
							</div>
						</div>	
						<div class="form-control" style="background:none;border:none;color:#fff;">
							<div class="col-md-7 col-xs-12" style="top:0px;">
								<span style="font-size:15px;" class="fontsforweb_fontid_12950"><i class="fa fa-long-arrow-up fa-flip-horizontal"></i>&nbsp;&nbsp;&nbsp;Flip</span>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="onoffswitch" >
									<input type="checkbox" name="flip" class="onoffswitch-checkbox" id="flip" unchecked >
									<label class="onoffswitch-label" for="flip" style="border-radius:20px !important;height:20px;">
										<span class="onoffswitch-inner" style="border-radius:50% !important;"></span>
										<span class="onoffswitch-switch" style="border-radius:50% !important;"></span>
									</label>
								</div>
							</div>
						</div>
					    <div class="form-control" style="background:none;border:none;color:#fff;">
							<div class="col-md-7 col-xs-12" style="top:0px;">
								<span style="font-size:15px;" class="fontsforweb_fontid_12950"><i class="fa fa-search"></i>&nbsp;&nbsp;&nbsp;Magnify</span>
							</div>
							<div class="col-md-5 col-xs-12">
								<div class="onoffswitch" >
									<input type="checkbox" name="magnify" class="onoffswitch-checkbox" id="magnify" unchecked >
									<label class="onoffswitch-label" for="magnify" style="border-radius:20px !important;height:20px;">
										<span class="onoffswitch-inner" style="border-radius:50% !important;"></span>
										<span class="onoffswitch-switch" style="border-radius:50% !important;"></span>
									</label>
								</div>
							</div>
						</div>
						<div class="form-control" style="background:none;border:none;color:#fff;">
							<div class="col-md-7 col-xs-12" style="top:0px;">
								<span style="font-size:15px;cursor:pointer;" class="fontsforweb_fontid_12950" id="reset"><i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;Reset</span>
							</div>
							
						</div>
						<div class="form-control" style="background:none;border:none;color:#fff;">
							<button type="button" id="btn_file_open_dcm" class="btn" style="border-radius:5px !important;background:#00a4c8;width:80%;margin-left:15px;">Import DICOM file</button>
						</div>
					</div>
				</div>
				
		</div>		
		
</div>	