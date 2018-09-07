<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form role="add-doctor" action="{{url('admin/doctors')}}" method="POST" class="horizontal-form">
				<div class="form-body">
					<h3 class="form-section">Add Doctor</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">First Name</label>
								<input type="text" id="firstName" name="first_name" class="form-control" placeholder="Enter First Name">
								
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Last Name</label>
								<input type="text" id="lastName" name="last_name" class="form-control" placeholder="Enter Last Name">
								
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Email</label>
								<input type="text" id="firstName" name="email" class="form-control" placeholder="Enter Email">
								
							</div>
						</div>
						<!--/span-->
						    {{ csrf_field() }}

						<div class="col-md-6">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Country Code</label>
										<select class="form-control" name="country_code">
											<option value="+91">+91</option>
											<option value="+92">+92</option>
										</select>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label class="control-label">Mobile Number</label>
										<input type="text" id="lastName" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
										
									</div>
								</div>
							</div>
						</div>
						<!--/span-->
					</div>
					<!--/row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Gender</label>
								<select class="form-control" name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
								<span class="help-block">
								Select your gender </span>
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Date of Birth</label>
								<input type="date" class="form-control" name="date_of_birth" placeholder="mm/dd/yyyy">
							</div>
						</div>
						<!--/span-->
					</div>
					<!--/row-->
					<!-- <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Category</label>
								<select class="select2_category form-control" name="Category" data-placeholder="Choose a Category" tabindex="1">
									<option value="Category 1">Category 1</option>
									<option value="Category 2">Category 2</option>
									<option value="Category 3">Category 5</option>
									<option value="Category 4">Category 4</option>
								</select>
							</div>
						</div>
					
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Membership</label>
								<div class="radio-list">
									<label class="radio-inline">
									<input type="radio" name="membership" id="membership1" value="option1" checked> Option 1 </label>
									<label class="radio-inline">
									<input type="radio" name="membership" id="membership2" value="option2"> Option 2 </label>
								</div>
							</div>
						</div>
					</div> -->
					<!--/row-->
					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label>Profile Picture</label>
								<input type="file" class="form-control" name="profile_picture">
							</div>
						</div>
					</div>
					<h3 class="form-section">Address</h3>
					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label>Street</label>
								<input type="text" class="form-control" placeholder="Enter Street" name="street">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control" placeholder="Enter City" name="city">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" class="form-control" placeholder="Enter State" name="state">
							</div>
						</div>
						<!--/span-->
					</div>
					<!--/row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Post Code</label>
								<input type="text" class="form-control" placeholder="Enter Post Code" name="pin_code">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label>Country</label>
								<select class="form-control" name="country">
									<option value="">select Country</option>
									<option value="India">India</option>
									<option value="Singapore">Singapore</option>
								</select>
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label>Qualifications</label>
								<textarea rows="4" class="form-control" placeholder="Enter Qualifications" name="qualifications">
								</textarea>
							</div>
						</div>
						<!--/span-->
					</div>

					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label>Specifications</label>
								<textarea rows="4" class="form-control" placeholder="Enter Specifications" name="specifications">
								</textarea>
							</div>
						</div>
						<!--/span-->
					</div>
				</div>
				<div class="form-actions right">
					<a href="{{url('admin/doctors')}}" class="btn default">Cancel</a>
					<button type="button" data-request="ajax-submit" data-target='[role="add-doctor"]' class="btn blue"><i class="fa fa-check"></i> Save</button>
				</div>
			</form>
			<!-- END FORM-->
		</div>		
	</div>
</div>