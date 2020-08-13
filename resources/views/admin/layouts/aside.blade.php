<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="{{url('/admin/dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									{{-- <span class="d-block font-weight-normal opacity-50">No active orders</span> --}}
								</span>
							</a>
                        </li>


						<li class="nav-item nav-item-submenu">
							<a href="javascript::void()" class="nav-link {{ request()->is('admin/agents') ? 'active' : '' }} {{ request()->is('admin/users') ? 'active' : '' }}"><i class="icon-users"></i> <span>Users</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts" {{ request()->is('admin/users') ? 'style=display:block;' : '' }} {{ request()->is('admin/agents') ? 'style=display:block;' : '' }}>
								<li class="nav-item "><a href="{{url('admin/user')}}" class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}"><i class="icon-user"></i>Users</a></li>
							</ul>
                        </li>

                        <li class="nav-item">
							<a href="{{url('admin/product_listings')}}" class="nav-link {{ request()->is('admin/product_listings') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									Products
									{{-- <span class="d-block font-weight-normal opacity-50">No active orders</span> --}}
								</span>
							</a>
                        </li>


                    	<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
