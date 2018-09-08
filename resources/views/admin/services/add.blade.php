<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form role="add-service" action="{{url('admin/services')}}" method="POST" class="horizontal-form">
				<div class="form-body">

					<h3 class="form-section">Add services</h3>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Title</label>
								<input type="text" required="required" id="title" name="title" class="form-control" placeholder="Enter Title">
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Profile Picture</label>
								<input type="file" class="form-control" name="profile_picture">
								
							</div>
						</div>
						<!--/span-->
						<!--/span-->
					</div>
					 {{ csrf_field() }}
					
					<div class="row">
						<div class="col-md-12 col-xs-12 col-lg-12">
							<div class="form-group">
								<label>Description</label>
								<textarea rows="4" class="form-control" placeholder="Enter Description" name="description">
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
@section('requirejs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
	//dynamicSelect2('.associate','{{url("admin/ajax/associate")}}','Select Associate');
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
@endsection