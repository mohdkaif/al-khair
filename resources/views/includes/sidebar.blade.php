<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="start active ">
				<a href="{{url('admin/home')}}">
				<i class="icon-home"></i>
				<span class="title">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/doctors')}}">
					<i class="fa fa-user-md"></i>
					<span class="title">Doctors</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/hospitals')}}">
					<i class="fa fa-building"></i>
					<span class="title">Hospitals</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/services')}}">
					<i class="fa fa-tasks"></i>
					<span class="title">Services</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/appointments')}}">
					<i class="icon-envelope-open"></i>
					<span class="title">Appointments</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/gallery')}}">
					<i class="icon-frame"></i>
					<span class="title">Gallery</span>
				</a>
			</li>
			<!-- <li class="last ">
				<a href="javascript:;">
				<i class="icon-pointer"></i>
				<span class="title">Maps</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="maps_google.html">
						Google Maps</a>
					</li>
					<li>
						<a href="maps_vector.html">
						Vector Maps</a>
					</li>
				</ul>
			</li> -->
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>