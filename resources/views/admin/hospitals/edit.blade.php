<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form role="add-hospital" action="{{url(sprintf('admin/hospitals/%s',___encrypt($hospitalDetails['id'])))}}" method="POST" class="horizontal-form">
				<input type="hidden" name="_method" value="PUT" />
				<div class="form-body">

					<h3 class="form-section">Add Hospital</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Name</label>
								<input type="text" id="name" value="{{$hospitalDetails['name']}}" name="name" class="form-control" placeholder="Enter Name">
								
							</div>
						</div>
						<!--/span-->
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Profile Picture</label>
								<input type="file" value="{{$hospitalDetails['image']}}" class="form-control" name="profile_picture">
								
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
											<option value="+1">+1</option>
											<option value="+86">+86</option>
											<option value="+61">+61</option>
											<option value="+33">+33</option>
											<option value="+98">+98</option>
											<option value="+964">+964</option>
											<option value="+972">+972</option>
											<option value="+39">+39</option>
										</select>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label class="control-label">Mobile Number</label>
										<input type="text" value="{{$hospitalDetails['mobile_number']}}" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
										
									</div>
								</div>
							</div>
						</div>
						<!--/span-->
					</div>
					<h3 class="form-section">Address</h3>
					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label>Street</label>
								<input type="text" class="form-control" value="{{$hospitalDetails['street']}}" placeholder="Enter Street" name="street">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control" value="{{$hospitalDetails['city']}}" placeholder="Enter City" name="city">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" value="{{$hospitalDetails['state']}}" class="form-control" placeholder="Enter State" name="state">
							</div>
						</div>
						<!--/span-->
					</div>
					<!--/row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Post Code</label>
								<input type="text" class="form-control" value="{{$hospitalDetails['post_code']}}" placeholder="Enter Post Code" name="pin_code">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label>Country</label>
								<select class="form-control" name="country">
									<option value="">Select Country</option>
									<option value="India">India</option>
									<option value="United States">United States</option>
									<option value="Australia">Australia</option>
									<option value="China">China</option>
									<option value="France">France</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Malaysia">Malaysia</option>
								</select>
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label>Description</label>
								<textarea rows="4" class="form-control"  placeholder="Enter Description" name="description">{{$hospitalDetails['description']}}
								</textarea>
							</div>
						</div>
						<!--/span-->
					</div>
					
				</div>
				<div class="form-actions right">
					<a href="{{url('admin/hospitals')}}" class="btn default">Cancel</a>
					<button type="button" data-request="ajax-submit" data-target='[role="add-hospital"]' class="btn blue"><i class="fa fa-check"></i> Save</button>
				</div>
			</form>
			<!-- END FORM-->
		</div>		
	</div>
</div>
