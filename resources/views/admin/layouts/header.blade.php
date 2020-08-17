<div class="navbar navbar-expand-md navbar-dark">
			<div class="navbar-brand">
				<a href="{{url('admin/dashboard')}}" class="d-inline-block">
					<img src="{{url('img/logostillo.png')}}" style="height: 3rem;">
				</a>
			</div>

			<div class="d-md-none">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
					<i class="icon-tree5"></i>
				</button>
				<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
					<i class="icon-paragraph-justify3"></i>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar-mobile">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
							<i class="icon-paragraph-justify3"></i>
						</a>
                    </li>
				</ul>

                <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

				<ul class="navbar-nav">
					<li class="nav-item dropdown dropdown-user">
                        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                            @if(Auth::user()->type == 'admin' || Auth::user()->type == 'super_admin')

                        <span>{{Auth::user()->name}}</span>
                            @endif
						</a>

						<div class="dropdown-menu dropdown-menu-right">

                        <a href="{{route('edit_admin',Auth::user()->id)}}" class="dropdown-item"><i class="icon-cog5"></i> Update Profile</a>
                        <a href="{{route('logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
