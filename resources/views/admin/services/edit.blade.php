<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form role="add-service" action="{{url(sprintf('admin/services/%s',___encrypt($serviceDetails['id'])))}}" method="POST" class="horizontal-form">
				<input type="hidden" name="_method" value="PUT" />
				<div class="form-body">

					<h3 class="form-section">Edit service</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label required">Title</label>
								<input type="text" id="title" required  name="title" value="{{$serviceDetails['title']}}" class="form-control" placeholder="Enter First Name">
								
							</div>
						</div>
						<div class="col-md-12 ">
							<div class="form-group">
								<label class="required">Profile Picture</label>
								<input type="file" required value="{{$serviceDetails['image']}}" class="form-control" name="profile_picture">
								<img src="{{url('uploads/services/'.$serviceDetails['image'])}}" alt="">
							</div>
						</div>
					</div>
						<!--/span-->
						
						<!--/span-->
					
					<!--/row-->
			
			
				
					<!--/row-->
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label class="required">Description</label>
								<textarea required rows="4" class="form-control"  placeholder="Enter Description" name="description">{{$serviceDetails['description']}}
								</textarea>
							</div>
						</div>
						<!--/span-->
					</div>

				</div>
				<div class="form-actions right">
					<a href="{{url('admin/services')}}" class="btn default">Cancel</a>
					<button type="button" data-request="ajax-submit" data-target='[role="add-service"]' class="btn blue"><i class="fa fa-check"></i> Save</button>
				</div>
			</form>
			<!-- END FORM-->
		</div>		
	</div>
</div>
