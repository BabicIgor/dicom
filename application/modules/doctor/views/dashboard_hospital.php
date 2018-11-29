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
														<option value="3">Mamogram</option>
													</select>
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
				<button id="add_hospital" class="btn sbold green"> Add New
					<i class="fa fa-plus"></i>
				</button>
			</div>
		</div>
	</div>
</div>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
	<thead>
		<tr>
			
			<th> Institution Name </th>
			<th> Address </th>
			<th> Contact Phone </th>
			<th> Email </th>
			<th> Equipment </th>
		</tr>
	</thead>
	<tbody>
		<tr class="odd gradeX">
			<td> shuxer </td>
			<td>
				<a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
			</td>
			<td>
				<span> 52432526 </span>
			</td>
			<td class="center">
				<a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
			</td>
			<td>
				<div class="btn-group">
					<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
						<i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu pull-left" role="menu">
						<li>
							<a href="javascript:;">
								<i class="icon-docs"></i> New Post </a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-tag"></i> New Comment </a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-user"></i> New User </a>
						</li>
						<li class="divider"> </li>
						<li>
							<a href="javascript:;">
								<i class="icon-flag"></i> Comments
								<span class="badge badge-success">4</span>
							</a>
						</li>
					</ul>
				</div>
			</td>
		</tr>
		
		<tr class="even gradeX">
			<td> weep </td>
			<td>
				<a href="mailto:userwow@gmail.com"> good@gmail.com </a>
			</td>
			<td>
				<span> 52222526 </span>
			</td>
			<td class="center">
				<a href="mailto:shuxer@gmail.com"> good@gmail.com </a>
			</td>
			<td>
				<div class="btn-group">
					<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
						<i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="javascript:;">
								<i class="icon-docs"></i> New Post </a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-tag"></i> New Comment </a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-user"></i> New User </a>
						</li>
						<li class="divider"> </li>
						<li>
							<a href="javascript:;">
								<i class="icon-flag"></i> Comments
								<span class="badge badge-success">4</span>
							</a>
						</li>
					</ul>
				</div>
			</td>
		</tr>
	</tbody>
</table>