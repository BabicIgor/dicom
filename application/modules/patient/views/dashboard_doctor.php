
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
<div class="table-toolbar">
	<div class="row">
		<div class="col-md-12" style="text-align:right;">
			<div class="btn-group">
				<button id="add_doctor" class="btn sbold green"> Add New Doctor
					<i class="fa fa-plus"></i>
				</button>
			</div>
		</div>
	</div>
</div>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
	<thead style="background:#807f7f;color:#ffffff;">
		<tr>
			
			<th width="15%" style="text-align:center;border-color:#807f7f;"> Doctor Name </th>
			<th width="15%" style="text-align:center;border-color:#807f7f;"> Profile </th>
			<th width="15%" style="text-align:center;border-color:#807f7f;"> Institution/Hospital </th>
			<th width="20%" style="text-align:center;border-color:#807f7f;"> Specialization </th>
			<th width="15%" style="text-align:center;border-color:#807f7f;"> Contact </th>
			<th width="15%" style="text-align:center;border-color:#807f7f;"> Email </th>
			<th width="5%" style="text-align:center;border-color:#807f7f;"> Type Action </th>
		</tr>
	</thead>
	<tbody>
		<tr class="odd gradeX" style="text-align:center;">
			<td style="vertical-align:middle;"> Venkate </td>
			<td style="vertical-align:middle;">
				Hospital
			</td>
			<td style="vertical-align:middle;">
				<span> Appolo </span>
			</td>
			<td style="vertical-align:middle;">
			    Cordiologist
			</td>
			<td style="vertical-align:middle;">
			    82393
			</td>
			<td class="center" style="vertical-align:middle;">
				<a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
			</td>
			<td style="vertical-align:middle;">
				<button type="button" class="btn btn-primary" style="border-radius:50% !important;margin-right:0px;font-size:15px;padding:2px 7px;"><i class="fa fa-edit" style="font-size:13px;"></i></button>
				<button type="button" class="btn btn-danger" style="border-radius:50% !important;margin-right:0px;font-size:15px;padding:2px 7px;"><i class="fa fa-remove" style="font-size:13px;"></i></button>
			</td>
		</tr>
		
		
	</tbody>
</table>
</div>
