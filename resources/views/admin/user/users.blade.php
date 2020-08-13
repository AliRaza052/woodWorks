@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Users List</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{url('/admin/adduser')}}" class="btn btn-primary btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-plus-circle"> Add User</i></a>
                                @if(Session::has('delete_user'))
                                <div class="alert alert-warning">
                                    {{Session::get('delete_user')}}
                                </div>
                                @endif
                                @if(Session::has('added_user'))
                                <div class="alert alert-success">
                                    {{Session::get('added_user')}}
                                </div>
                                @endif
                                @if(Session::has('updated_user'))
                                <div class="alert alert-success">
                                    {{Session::get('updated_user')}}
                                </div>
                                @endif
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Coutry</th>
                                                <th>City</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Coutry</th>
                                                <th>City</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @isset($users)
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->country}}</td>
                                                <td>{{$user->city}}</td>
                                                <td>
                                                    <ul class="list-inline m-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{url('/admin/profile',$user->id)}}" class="btn btn-primary btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-eye"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="{{url('/admin/edituser',$user->id)}}" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="{{url('/admin/deleteuser',$user->id)}}" class="btn btn-danger btn-sm rounded-0"  onclick="return confirm('Are You Sure to delete this user?')" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endisset

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
@push('scripts')
<script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
<script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });
    </script>
@endpush
