
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
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
								<label class="control-label required">First Name</label>
								<input type="text" required id="firstName" name="first_name" class="form-control" placeholder="Enter First Name">
								
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
								<input type="text" id="email" name="email" class="form-control" placeholder="Enter Email">
								
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
										<input data-request="isnumeric" maxlength="10" type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
										
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
								<label class="control-label required">Gender</label>
								<select required class="form-control" name="gender">
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
					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label>Profile Picture</label>
								<input type="file" class="form-control" id="imgInp" name="profile_picture">
								<img id="previewImage" width="200px" height="200px" src="#" alt="Choose image" />
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
								<label class="required">Country</label>
								<select required class="select2 form-control" name="country">
									<option value="">Select Country</option>
								</select>
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label class="required">Qualifications</label>
								<textarea required rows="4" class="form-control" placeholder="Enter Qualifications" name="qualifications">
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
@section('requirejs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="{{url('css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{url('js/select2.full.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
	//dynamicSelect2('.associate','{{url("admin/ajax/associate")}}','Select Associate');
	function readURL(input) {

	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
	  $('#previewImage').attr('src', e.target.result);
	}

	reader.readAsDataURL(input.files[0]);
	}
	}

	$("#imgInp").change(function() {
	readURL(this);
	});

	$('[name="country"]').select2({
           formatLoadMore   : function() {return 'Loading more...'},
           placeholder : "Select Country",
           allowClear : true,
           ajax: {
               url: "{{ url('country') }}",
               dataType: 'json',
               data: function (params) {
                   var query = {
                       search: params.term,
                       type: 'public'
                   }
                   return query;
               }
           }
       }).parent('.customSelect').addClass('select2Init');


</script>
@endsection