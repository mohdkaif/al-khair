
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form role="add-appointment" action="{{url('add-appointment')}}" method="POST" class="horizontal-form">
				<div class="form-body">
					<div class="container">
						<h3 class="form-section">Add Appointment for {{ucfirst($name)}} ( {{ucfirst($type)}})</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label required">Name</label>
									<input type="text" required id="name" name="name" class="form-control" placeholder="Enter Name">
									
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
											<label class="control-label">Mobile Number</label>
											<input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
											
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

									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Appointment Date</label>
											<input type="date" class="form-control" name="appointment_date" placeholder="mm/dd/yyyy">
										</div>
								    </div>
								   
							</div>
							<!--/span-->
							
						</div>
						<!--/row-->
					
						
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="required">Description</label>
									<textarea required rows="4" class="form-control" placeholder="Enter Description" name="description">
									</textarea>
								</div>
							</div>
							
							<!--/span-->
						</div>
						<input type="hidden" name="type" value="{{$type}}">
						<input type="hidden" name="requirement" value="{{$name}}">
						<div class="form-actions right">
							<a href="{{url('/')}}" class="btn default">Cancel</a>
							<button type="button" data-request="ajax-submit" data-target='[role="add-appointment"]' class="btn medica-btn btn-3 mt-3"><i class="fa fa-check"></i> Save</button>
					
				</div>
				    </div>
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
</script>
@endsection