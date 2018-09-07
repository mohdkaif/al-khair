<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form role="add-doctor" action="{{url(sprintf('admin/doctors/%s',___encrypt($doctorDetails['id'])))}}" method="POST" class="horizontal-form">
				<input type="hidden" name="_method" value="PUT" />
				<div class="form-body">

					<h3 class="form-section">Edit Doctor</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">First Name</label>
								<input type="text" id="firstName" name="first_name" value="{{$doctorDetails['first_name']}}" class="form-control" placeholder="Enter First Name">
								
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Last Name</label>
								<input type="text" id="lastName" value="{{$doctorDetails['last_name']}}" name="last_name" class="form-control" placeholder="Enter Last Name">
								
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Email</label>
								<input type="text" id="email" value="{{$doctorDetails['email']}}" name="email" class="form-control" placeholder="Enter Email">
								
							</div>
						</div>
						<!--/span-->

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
										<input type="text" id="mobile_number" name="mobile_number" class="form-control" value="{{$doctorDetails['mobile_number']}}" placeholder="Enter Mobile Number">
										
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
								<input type="date" class="form-control" value="{{$doctorDetails['dob']}}" name="date_of_birth" placeholder="mm/dd/yyyy">
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label>Profile Picture</label>
								<input type="file" value="{{$doctorDetails['image']}}" class="form-control" name="profile_picture">
							</div>
						</div>
					</div>
					<h3 class="form-section">Address</h3>
					<div class="row">
						<div class="col-md-12 ">
							<div class="form-group">
								<label>Street</label>
								<input type="text" class="form-control" value="{{$doctorDetails['street']}}" placeholder="Enter Street" name="street">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" class="form-control" placeholder="Enter City" value="{{$doctorDetails['city']}}" name="city">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" class="form-control" placeholder="Enter State" value="{{$doctorDetails['state']}}" name="state">
							</div>
						</div>
						<!--/span-->
					</div>
					<!--/row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Post Code</label>
								<input type="text" class="form-control" placeholder="Enter Post Code" value="{{$doctorDetails['post_code']}}" name="pin_code">
							</div>
						</div>
						<!--/span-->
						<div class="col-md-6">
							<div class="form-group">
								<label>Country</label>
								<select class="form-control" name="country">
									<option value="">select Country</option>
									<option value="India">India</option>
								</select>
							</div>
						</div>
						<!--/span-->
					</div>
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label>Qualifications</label>
								<textarea rows="4" class="form-control" value="{{$doctorDetails['qualifications']}}" placeholder="Enter Qualifications" name="qualifications">
								</textarea>
							</div>
						</div>
						<!--/span-->
					</div>

					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label>Specifications</label>
								<textarea rows="4" class="form-control" value="{{$doctorDetails['specifications']}}" placeholder="Enter Specifications" name="specifications">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
      $(document).ready(function(){
            $('#country').select2({
                ajax : {
                    url : 'country',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            q : params.term,
                            page : params.page
                        };
                    },
                    processResults : function(data, params){
                        params.page = params.page || 1;
                        return {
                            results : data.data,
                            pagination: {
                                more : (params.page  * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength : 1,
                templateResult : function (repo){
                    if(repo.loading) return repo.name;
                    var markup = "<img src="+repo.photo+"></img> &nbsp; "+ repo.name;
                    return markup;
                },
                templateSelection : function(repo)
                {
                    return repo.name;
                },
                escapeMarkup : function(markup){ return markup; }
            });
        });
    </script>
</script>
@endsection