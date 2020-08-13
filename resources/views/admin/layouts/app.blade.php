<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="50x50" href="{{asset('frontend/img/rig.png')}}">
    <title>Admin Panel || stillo.store</title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap_limitless.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('admin/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('admin/js/plugins/forms/styling/uniform.min.js')}}"></script>

    {{-- <script src="{{asset('admin/assets/js/app.js')}}"></script> --}}
    <script src="{{asset('admin/js/demo_pages/login.js')}}"></script>

    <!-- Theme JS files -->
    <script src="{{asset('admin/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/ui/prism.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    <script src="{{asset('admin/js/demo_pages/form_actions.js')}}"></script>
    <script src="{{asset('admin/js/demo_pages/navbar_multiple.js')}}"></script>
    <script src="{{asset('admin/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/js/demo_pages/user_pages_profile_tabbed.js')}}"></script>
    <script src="{{asset('admin/js/plugins/ui/moment/moment.min.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-md-md-top" style="padding-top: 5rem;">

    <!-- Multiple fixed navbars wrapper -->
    <div class="fixed-top">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('admin.layouts.header')
    </div>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="page-content">
        @include('admin.layouts.aside')


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="content-wrapper">
            <div class="content">
                @yield('content')
            </div>
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2020 Admin Dashboard of stillo.store by <a href="http://tescoit.com/" target="_blank">Tesco IT Solutions </a>
                    </span>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

    @stack('scripts')
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 07:51:44 GMT -->

</html>
