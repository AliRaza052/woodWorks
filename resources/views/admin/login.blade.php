<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" type="image/png" sizes="50x50" href="{{asset('frontend/img/rig.png')}}"> --}}
    <title>Stillo.store || Admin Login </title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('admin/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    <script src="{{asset('admin/js/demo_pages/login.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Page content -->
    <div class="page-content" style="background:asset('{{asset('img/BG.jpg')}}') no-repeat;background-size: cover;">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
                @if(Session::has('login_feedback'))
                <div class="alert alert-danger">
                    {{Session::get('login_feedback')}}
                </div>
                @endif
                <!-- Login form -->
                <form class="login-form wmin-sm-400" action="{{url('/admin/postlogin')}}" method="post">
                    {{csrf_field()}}
                    <div class="card mb-0">
                        <ul class="nav nav-tabs nav-justified alpha-grey mb-0">
                            <li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active" data-toggle="tab">
                                    <h6 class="my-1">Sign in</h6>
                                </a></li>
                        </ul>

                        <div class="tab-content card-body">
                            <div class="tab-pane fade show active" id="login-tab1">
                                <div class="text-center mb-3">
                                    <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                    <h5 class="mb-0">Admin</h5>
                                    <span class="d-block text-muted">Login to your Account</span>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
