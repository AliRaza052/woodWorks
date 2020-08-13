@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Properties</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Listings</li>
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
                                <h4 class="card-title">Data</h4>

                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                                <th>Purpose</th>
                                                <th>Type</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                            <th>Purpose</th>
                                                <th>Type</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @isset($lists)
                                        @php
                                        $count=1;
@endphp
                                        @foreach($lists as $list)
                                            <tr>
                                            <td>{{$count++}}</td>
                                                <td>{{$list->purpose}}</td>
                                                <td>{{$list->propertytype}}</td>
                                                <td>{{$list->title}}</td>
                                                <td>{{$list->price}}</td>
                                                <td>{{$list->country}}</td>
                                                <td>{{$list->city}}</td>
                                                <td>
                                                    {{-- <li class="list-inline-item">
                                                        <a href="" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-eye"></i></a>
                                                    </li> --}}
                                                    <li class="list-inline-item">
                                                    <a href="{{route('edit_property',$list->id)}}" class="btn btn-primary btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                    <a href="{{url('/admin/deleteproperty',$list->id)}}" class="btn btn-danger btn-sm rounded-0"  onclick="return confirm('Are You Sure to delete this property?')" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-trash"></i></a>
                                                    </li>
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
