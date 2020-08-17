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

                        <li class="nav-item">
							<a href="{{url('admin/user')}}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
								<i class="icon-users"></i>
								<span>
									Users
									{{-- <span class="d-block font-weight-normal opacity-50">No active orders</span> --}}
								</span>
							</a>
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

                        <li class="nav-item">
							<a href="{{url('admin/product_types')}}" class="nav-link {{ request()->is('admin/product_types') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									Product Types
<<<<<<< HEAD
								</span>
							</a>
                        </li>

                        

                        <li class="nav-item">
							<a href="{{url('admin/category')}}" class="nav-link {{ request()->is('admin/category') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									Product Category
									{{-- <span class="d-block font-weight-normal opacity-50">No active orders</span> --}}
=======
>>>>>>> master
								</span>
							</a>
                        </li>

<<<<<<< HEAD
                        <li class="nav-item">
							<a href="{{url('admin/lenses')}}" class="nav-link {{ request()->is('admin/lenses') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									 Lenses
								</span>
							</a>
                        </li>

                        <li class="nav-item">
							<a href="{{url('admin/lensesmetrial')}}" class="nav-link {{ request()->is('admin/lensesmetrial') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									 Lens Metrial
=======
                        

                        <li class="nav-item">
							<a href="{{url('admin/category')}}" class="nav-link {{ request()->is('admin/category') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									Product Category
									{{-- <span class="d-block font-weight-normal opacity-50">No active orders</span> --}}
>>>>>>> master
								</span>
							</a>
                        </li>

                        <li class="nav-item">
<<<<<<< HEAD
							<a href="{{url('admin/prescription')}}" class="nav-link {{ request()->is('admin/prescription') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									 Prescription Type
=======
							<a href="{{url('admin/lenses')}}" class="nav-link {{ request()->is('admin/lenses') ? 'active' : '' }}">
								<i class="icon-file-text3"></i>
								<span>
									 Lenses
>>>>>>> master
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
