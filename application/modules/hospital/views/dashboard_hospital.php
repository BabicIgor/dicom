<style>
.dropdown-menu{
    min-width:95px;
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
       $('#loading_content').css('display', 'none');
    	$('#main_content').css('display', 'block');
    });
</script>
<div id="loading_content" style="display:block;">
	<div id="lowerMainPanel" style="width:100%;height:auto;margin:10px auto;float:left;margin;text-align:center;margin-top:271px;">
		<div id="spinner-wrapper" style="/* display: none; */">
	      <img src="<?php echo base_url();?>assets/img/init_loading.gif" style="width:55px;height:55px;" />
	    </div>
	</div>
</div>
<div id="main_content" style="display:none;width:100%;float:left;">
    <div class="modal fade" id="add_radio_dialog" tabindex="-1" role="dialog" aria-hidden="true">
    	<div class="modal-dialog ">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    				<h4 class="modal-title">New Radiologist</h4>
    			</div>
    			<div class="modal-body">
    			<form role="form">
    				<div class="form-body">
    					<div class="form-group">
    						<label class="col-md-3 control-label">First Name</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="First Name"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Last Name</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Last Name"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Profile Type</label>
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<select class="form-control">
    								<option>Institution</option>
    								<option>Hospital</option>
    								<option>Radiology</option>
    								<option>Individual</option>
    							</select>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Institution/Radiologist</label>
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Institution/Radiologist"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">DOB</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="DOB"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Sex</label>
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<select class="form-control">
    								<option>Man</option>
    								<option>Woman</option>
    							</select>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Specialization</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<select class="form-control">
    								<option>MRI</option>
    								<option>CT</option>
    							</select>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Address</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    						    <div class="col-md-9" style="padding-left:0px;">
    						        <input type="text" class="form-control" placeholder="Address">     
    						    </div>
    							
    							<div class="col-md-3" style="padding-left:0px;padding-top:3px;">
            					    <button type="button" id="expand_address_info_radiologist" class="btn btn-default" style="border-radius:50% !important;margin-right:0px;font-size:15px;padding:2px 7px;"><i class="fa fa-plus" style="font-size:13px;"></i></button>
            					</div>
    						</div>
    					</div>
    					<div id="extra_address_radiologist" style="display:none;">
    					    <div class="form-group">
        						<label class="col-md-3 control-label">Address1</label>
        						
        						<div class="col-md-9" style="margin-bottom:10px;">
        							<input type="text" class="form-control" placeholder="Address1"> 
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-md-3 control-label">Address2</label>
        						
        						<div class="col-md-9" style="margin-bottom:10px;">
        							<input type="text" class="form-control" placeholder="Address2"> 
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-md-3 control-label">City</label>
        						
        						<div class="col-md-9" style="margin-bottom:10px;">
        							<input type="text" class="form-control" placeholder="City"> 
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-md-3 control-label">State</label>
        						
        						<div class="col-md-9" style="margin-bottom:10px;">
        							<input type="text" class="form-control" placeholder="State"> 
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-md-3 control-label">Country</label>
        						
        						<div class="col-md-9" style="margin-bottom:10px;">
        							<input type="text" class="form-control" placeholder="Country"> 
        						</div>
        					</div>
        					<div class="form-group">
        						<label class="col-md-3 control-label">Pincode</label>
        						
        						<div class="col-md-9" style="margin-bottom:10px;">
        							<input type="text" class="form-control" placeholder="Pincode"> 
        						</div>
        					</div>
    					</div>
    					
    					<!--<div class="form-group">-->
    					<!--	<label class="col-md-3 control-label">Type</label>-->
    						
    					<!--	<div class="col-md-9" style="margin-bottom:10px;">-->
    					<!--		<select class="form-control">-->
    					<!--			<option>Doctor</option>-->
    					<!--			<option>Radiologist</option>-->
    					<!--			<option>Admin Branch</option>-->
    					<!--		</select>-->
    					<!--	</div>-->
    					<!--</div>-->
    					<div class="form-group">
    						<label class="col-md-3 control-label">Contact Phone</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Contact Phone"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Email</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Email"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Department</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Department"> 
    						</div>
    					</div>
    				</div>
    			</form>
    
    
    			</div>
    			<div class="modal-footer" style="border-top:none;padding-right:30px;">
    				<button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    				<button type="button" class="btn green">Save changes</button>
    			</div>
    		</div>
    		<!-- /.modal-content -->
    	</div>
    	<!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="add_doctor_dialog" tabindex="-1" role="dialog" aria-hidden="true">
    	<div class="modal-dialog ">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    				<h4 class="modal-title">New Doctor</h4>
    			</div>
    			<div class="modal-body">
    			<form role="form">
    				<div class="form-body">
    					<div class="form-group">
    						<label class="col-md-3 control-label">First Name</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="First Name"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Last Name</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Last Name"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Profile Type</label>
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<select class="form-control">
    								<option>Institution</option>
    								<option>Hospital</option>
    								<option>Radiology</option>
    								<option>Individual</option>
    							</select>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Hospital/Institution</label>
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Hospital/Institution"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">DOB</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="DOB"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Sex</label>
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<select class="form-control">
    								<option>Man</option>
    								<option>Woman</option>
    							</select>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Specialization</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<select class="form-control">
    								<option>MRI</option>
    								<option>CT</option>
    							</select>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Address</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    					        <input type="text" class="form-control" placeholder="Address">     
    						</div>
    					</div>
    					
    					<div class="form-group">
    						<label class="col-md-3 control-label">Contact Phone</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Contact Phone"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Email</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Email"> 
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="col-md-3 control-label">Department</label>
    						
    						<div class="col-md-9" style="margin-bottom:10px;">
    							<input type="text" class="form-control" placeholder="Department"> 
    						</div>
    					</div>
    				</div>
    			</form>
    
    
    			</div>
    			<div class="modal-footer" style="border-top:none;padding-right:30px;">
    				<button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    				<button type="button" class="btn green">Save changes</button>
    			</div>
    		</div>
    		<!-- /.modal-content -->
    	</div>
    	<!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="add_hospital_dialog" tabindex="-1" role="dialog" aria-hidden="true">
    	<div class="modal-dialog ">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    				<h4 class="modal-title">Modal Title</h4>
    			</div>
    			<div class="modal-body">
    			<form role="form">
                                                <div class="form-body">
                                                    <div class="form-group">
    													<label class="col-md-3 control-label">Name</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Name"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Address1</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Address1"> 
    													</div>
                                                    </div>
                                                    <div class="form-group">
    													<label class="col-md-3 control-label">Address2</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Address2"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Type</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<select class="form-control">
    															<option>Institution</option>
    															<option>Hospital</option>
    															<option>Radiology Center</option>
    														</select>
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">City</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="City"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">State</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="State"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Country</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Country"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Contact Phone</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Contact Phone"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Email</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Email"> 
    													</div>
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Website</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    														<input type="text" class="form-control" placeholder="Website"> 
    													</div>
    												</div>
                                                    <div class="form-group">
    													<label class="col-md-3 control-label"></label>
    													<div class="col-md-9">
    														<div class="mt-checkbox-list">
    															<label class="mt-checkbox"> is has branch
    																<input type="checkbox" value="1" name="test" />
    																<span></span>
    															</label>
    														</div>
    													</div>
                                                        
    												</div>
    												<div class="form-group">
    													<label class="col-md-3 control-label">Equipment</label>
    													
    													<div class="col-md-9" style="margin-bottom:10px;">
    													<select id="multiple" class="form-control select2-multiple" multiple>
    															<option value="1">X-ray</option>
    															<option value="2">CT scan</option>
    															<option value="2">Mamogram</option>
    													</select>
    													</div>
    												</div>
    
    
                                                </div>
                                            </form>
    
    
    			</div>
    			<div class="modal-footer" style="border-top:none;">
    				<button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    				<button type="button" class="btn green">Save changes</button>
    			</div>
    		</div>
    		<!-- /.modal-content -->
    	</div>
    	<!-- /.modal-dialog -->
    </div>
<div class="table-toolbar">
	<div class="row">
		<div class="col-md-12" style="text-align:right;">
			<div class="btn-group">
				<button id="add_hospital" class="btn sbold green"> Create
					<i class="fa fa-plus"></i>
				</button>
			</div>
		</div>
	</div>
</div>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
	<thead style="background:#807f7f;color:#ffffff;">
		<tr>
			<th width="20%" style="text-align:center;border-color:#807f7f;"> Institution Name </th>
			<th width="20%" style="text-align:center;border-color:#807f7f;"> Type </th>
			<th width="10%" style="text-align:center;border-color:#807f7f;"> Phone </th>
			<th width="15%" style="text-align:center;border-color:#807f7f;"> Email </th>
			<th width="10%" style="text-align:center;border-color:#807f7f;"> City </th>
			<th width="10%" style="text-align:center;border-color:#807f7f;"> State </th>
			<th width="10%" style="text-align:center;border-color:#807f7f;"> Country </th>
			<th width="5%" style="text-align:center;border-color:#807f7f;"> Type Action </th>
		</tr>
	</thead>
	<tbody>
		<tr class="odd gradeX" style="text-align:center;">
			<td style="vertical-align:middle;"> Appollo </td>
			<td style="vertical-align:middle;">
				Hospital
			</td>
			<td style="vertical-align:middle;">
				<span> 22222 </span>
			</td>
			<td style="vertical-align:middle;">
				<a href="mailto:shuxer@gmail.com"> xy@gmail </a>
			</td>
			<td style="vertical-align:middle;">
			    <span>chomei</span>
			</td>
			<td style="vertical-align:middle;">
			    <span>TN</span>
			</td>
			<td style="vertical-align:middle;">
			    <span>India</span>
			</td>
			<td style="vertical-align:middle;">
				<!--<button onclick="myFunction()" type="button" class="btn btn-primary dropbtn" style="border-radius:50% !important;margin-right:0px;font-size:15px;padding:2px 7px;z-index:101;"><i class="fa fa-plus" id="button_action_hospital" style="font-size:13px;z-index:100;"></i></button>-->

                <div class="btn-group" style="position:relative;">
                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:;" style="border-radius:50% !important;padding:2px 8px;"> 
                        <i class="fa fa-plus" style="font-size:10px;"></i>
                    </a>
                    <ul class="dropdown-menu" style="position:inherit;">
                        <li>
                            <a href="javascript:;"> Create branch
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" id="add_doctor" > Doctor </a>
                        </li>
                        <li>
                            <a href="javascript:;" id="add_radio"> Radiologist </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Patient </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Update </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Delete </a>
                        </li>
                        
                    </ul>
                </div>
			</td>
		</tr>
		
	
	</tbody>
</table>
</div>
