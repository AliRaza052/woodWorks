@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Properties</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Logs</li>
                    </ol>
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
                                    <table id="logs_table" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>Task Performed</th>
                                            <th>Date/Time</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>Task Performed</th>
                                                <th>Date/Time</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @isset($logs)
                                        @php
                                        $count=1;
@endphp
                                        @foreach($logs as $log)
                                            <tr>
                                            <td>{{$count++}}</td>
                                                <td>{{$log->user_id}}</td>
                                                <td>{{$log->user_name}}</td>
                                                <td>{{$log->task_performed}}</td>
                                                <td>{{$log->created_at}}</td>
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
@push('scripts')
    <script>
    $(document).ready(function() {
        $('#logs_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    });
    </script>
@endpush
