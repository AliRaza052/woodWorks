@extends('admin.layouts.app')


@section('content')
<div class="row">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
    <div class="col-xl-12">
        <!-- Traffic sources -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Traffic sources</h6>
            </div>

            <div class="card-body py-0">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="d-flex align-items-center justify-content-center mb-2" style="margin-right:10px">
                            <a href="javascript::void()" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                <i class="icon-earth"></i>
                            </a>
                            <!-- <div>
                                <div class="font-weight-semibold">Total Properties</div>
                                @if(isset($total_properties) && !empty($total_properties))
                                <span class="text-muted">{{$total_properties}}</span>
                                @else
                                <span class="text-muted">0</span>
                                @endif
                            </div> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="d-flex align-items-center justify-content-center mb-2" style="margin-left:10px">
                            <a href="javascript::void()" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                                <i class="icon-notification2"></i>
                            </a>
                            <!-- <div>
                                <div class="font-weight-semibold">Pending Properties</div>
                                @if(isset($pending_properties) && !empty($pending_properties))
                                <span class="text-muted">{{$pending_properties}}</span>
                                @else
                                <span class="text-muted">0</span>
                                @endif
                            </div> -->
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="d-flex align-items-center justify-content-center mb-2" style="margin-left:20px">
                            <a href="javascript::void()" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                <i class="icon-checkmark"></i>
                            </a>
                            <!-- <div>
                                <div class="font-weight-semibold">Approved Properties</div>
                                @if(isset($approved_properties) && !empty($approved_properties))
                                <span class="text-muted">{{$approved_properties}}</span>
                                @else
                                <span class="text-muted">0</span>
                                @endif
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="d-flex align-items-center justify-content-center mb-2" style="margin-right:30px">
                            <a href="javascript::void()" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                <i class="icon-people"></i>
                            </a>
                            <div>
                                <div class="font-weight-semibold">Total Users</div>
                                @if(isset($total_users) && !empty($total_users))
                                <span class="text-muted">{{$total_users}}</span>
                                @else
                                <span class="text-muted">0</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /traffic sources -->

    </div>

</div>
@endsection
