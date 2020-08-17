@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Edit Profile</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>

                                @endif
                                <h4 class="card-title">Edit Profile</h4>
                                <form class="m-t-40" novalidate action="{{route('update_admin',$admin->id)}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <input type="text" name="name" class="form-control" value="{{$admin->name}}" required data-validation-required-message="This field is required"> </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="email" class="form-control" value="{{$admin->email}}" required data-validation-required-message="This field is required">
                                             </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="password" class="form-control" required data-validation-required-message="This field is required">
                                             </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Update</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>@endsection
