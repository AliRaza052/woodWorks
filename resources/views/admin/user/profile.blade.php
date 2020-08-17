@extends('admin.layouts.app')
@section('content')
<!-- Inner container -->
<div class="d-md-flex align-items-md-start">

    <!-- Left sidebar component -->
    <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Navigation -->
            <div class="card">
                <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">

                <h6 class="font-weight-semibold mb-0">{{$user->name}}</h6>
                    {{-- <span class="d-block opacity-75">Head of UX</span> --}}

                    {{-- <div class="list-icons list-icons-extended mt-3">
                        <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Google Drive"><i class="icon-google-drive"></i></a>
                        <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Twitter"><i class="icon-twitter"></i></a>
                        <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Github"><i class="icon-github"></i></a>
                    </div> --}}
                </div>

                <div class="card-body p-0">
                    <ul class="nav nav-sidebar mb-2">
                        <li class="nav-item">
                            <a href="#profile" class="nav-link active" data-toggle="tab">
                                <i class="icon-user"></i>
                                 My profile
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /navigation -->
        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /left sidebar component -->


    <!-- Right content -->
    <div class="tab-content w-100 overflow-auto">
        <div class="tab-pane fade active show" id="profile">

            <!-- Profile info -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Profile information</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/updateuser',$user->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Full name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                <input type="text" name="email" readonly="readonly" value="{{$user->email}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control" name="type">
                                            <option>Select Type</option>
                                            <option value="admin" @if($user->type == "admin") selected @endif>Admin</option>
                                            <option value="user" @if($user->type == "user") selected @endif>User</option>
                                        </select>
                                        @if ($errors->has('type'))
                                <span class="help-block">
                                    <small style="color:red;">{{ $errors->first('type') }}</small>
                                </span>
                                @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /profile info -->
        </div>



        <div class="tab-pane fade" id="orders">

            <!-- Orders history -->
            <div class="card">

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Ad Title</th>
                                <th>Purpose</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($ads)
                            @foreach ($ads as $ad)
                            <tr>
                                <td class="pr-0" style="width: 45px;">
                                    <a href="#">
                                        @php
                                    $image=json_decode($ad->images,true);

                                    @endphp

                                    			<img src="{{url('/')}}/assets/property/media/images/{{$image[0]}}" height="60" width="60">

                                    </a>
                                </td>
                                <td>
                                <a>{{$ad->title}}</a>
                                    {{-- <div class="text-muted font-size-sm">
                                        <span class="badge badge-mark bg-grey border-grey mr-1"></span>
                                        Processing
                                    </div> --}}
                                </td>
                                <td>{{$ad->purpose}}</td>
                                <td>{{$ad->propertytype}}</td>
                                <td>{{$ad->price}}</td>
                                <td>{{$ad->country}}</td>
                                <td>{{$ad->city}}</td>
                            </tr>
                            @endforeach

                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /orders history -->

        </div>
    </div>
    <!-- /right content -->

</div>
<!-- /inner container -->
@endsection
