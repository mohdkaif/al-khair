<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						 Widget settings form goes here
					</div>
					<div class="modal-footer">
						<button type="button" class="btn blue">Save changes</button>
						<button type="button" class="btn default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<!-- BEGIN PAGE HEADER-->
		<!-- BEGIN PAGE HEAD -->
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Ajax Datatables <small>basic datatable samples</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<!-- BEGIN THEME PANEL -->
				<div class="btn-group btn-theme-panel">
					<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
					<i class="icon-settings"></i>
					</a>
					<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<h3>THEME</h3>
								<ul class="theme-colors">
									<li class="theme-color theme-color-default active" data-theme="default">
										<span class="theme-color-view"></span>
										<span class="theme-color-name">Dark Header</span>
									</li>
									<li class="theme-color theme-color-light" data-theme="light">
										<span class="theme-color-view"></span>
										<span class="theme-color-name">Light Header</span>
									</li>
								</ul>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12 seperator">
								<h3>LAYOUT</h3>
								<ul class="theme-settings">
									<li>
										 Theme Style
										<select class="layout-style-option form-control input-small input-sm">
											<option value="square" selected="selected">Square corners</option>
											<option value="rounded">Rounded corners</option>
										</select>
									</li>
									<li>
										 Layout
										<select class="layout-option form-control input-small input-sm">
											<option value="fluid" selected="selected">Fluid</option>
											<option value="boxed">Boxed</option>
										</select>
									</li>
									<li>
										 Header
										<select class="page-header-option form-control input-small input-sm">
											<option value="fixed" selected="selected">Fixed</option>
											<option value="default">Default</option>
										</select>
									</li>
									<li>
										 Top Dropdowns
										<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
											<option value="light">Light</option>
											<option value="dark" selected="selected">Dark</option>
										</select>
									</li>
									<li>
										 Sidebar Mode
										<select class="sidebar-option form-control input-small input-sm">
											<option value="fixed">Fixed</option>
											<option value="default" selected="selected">Default</option>
										</select>
									</li>
									<li>
										 Sidebar Menu
										<select class="sidebar-menu-option form-control input-small input-sm">
											<option value="accordion" selected="selected">Accordion</option>
											<option value="hover">Hover</option>
										</select>
									</li>
									<li>
										 Sidebar Position
										<select class="sidebar-pos-option form-control input-small input-sm">
											<option value="left" selected="selected">Left</option>
											<option value="right">Right</option>
										</select>
									</li>
									<li>
										 Footer
										<select class="page-footer-option form-control input-small input-sm">
											<option value="fixed">Fixed</option>
											<option value="default" selected="selected">Default</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
		<!-- END PAGE HEAD -->
		<!-- BEGIN PAGE BREADCRUMB -->
		{!!$breadcrumb!!}
		<!-- END PAGE BREADCRUMB -->
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				<!-- <div class="note note-danger note-shadow">
					<p>
						 NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
					</p>
				</div> -->
				<!-- Begin: life time stats -->
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-gift font-green-sharp"></i>
							<span class="caption-subject font-green-sharp bold uppercase">{{$page_title}}</span>
							<!-- <span class="caption-helper">manage records...</span> -->
						</div>
						<div class="actions">
							<a href="{{url('admin/associate/create')}}" class="btn btn-default btn-circle">
							<i class="fa fa-plus"></i>
							<span class="hidden-480">
							Add Associate </span>
							</a>
							<div class="btn-group">
								<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
								<i class="fa fa-share"></i>
								<span class="hidden-480">
								Tools </span>
								<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="javascript:;">
										Export to Excel </a>
									</li>
									<li>
										<a href="javascript:;">
										Export to CSV </a>
									</li>
									<!-- <li>
										<a href="javascript:;">
										Export to XML </a>
									</li>
									<li class="divider">
									</li>
									<li>
										<a href="javascript:;">
										Print Invoices </a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-container">
							<div class="table-actions-wrapper">
								<span>
								</span>
								<select class="table-group-action-input form-control input-inline input-small input-sm">
									<option value="">Select...</option>
									<option value="Cancel">Cancel</option>
									<option value="Cancel">Hold</option>
									<option value="Cancel">On Hold</option>
									<option value="Close">Close</option>
								</select>
								<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
							</div>
							<table class="table table-striped table-bordered table-hover" id="datatable_ajax">
								{!! $html->table() !!}
								
							</table>
						</div>
					</div>
				</div>
				<!-- End: life time stats -->
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
</div>

@section('requirejs')
{!! $html->scripts()!!}
@endsection