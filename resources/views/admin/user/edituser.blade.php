@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Edit User</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
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
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Edit User</h6>
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
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Name">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('name') }}</small>
                                            </span>
                                            @endif
                                        </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Email">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('email') }}</small>
                                            </span>
                                            @endif
                                        </div>
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone</label>
											<input type="text" class="form-control" name="phone" value="{{$user->phone}}" placeholder="Phone">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('phone') }}</small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" name="country">
                                                <option>Select Country</option>
                                                <option value="Pakistan" @if($user->country == "Pakistan") selected @endif>Pakistan</option>
                                            </select>
                                            @if ($errors->has('country'))
                                            <span class="help-block">
                                                <small style="color:red;">{{ $errors->first('country') }}</small>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
								</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" name="city">
                                                <option>Select City</option>
                                                <option value="lahore" @if($user->city == "lahore") selected @endif>Lahore</option>
                                                <option value="islamabad" @if($user->city == "islamabad") selected @endif>Islamabad</option>
                                                <option value="sargodha" @if($user->city == "sargodha") selected @endif>Sargodha</option>
                                                <option value="faisalabad" @if($user->city == "faisalabad") selected @endif>Faisalabad</option>
                                                <option value="peshawar" @if($user->city == "peshawar") selected @endif>Peshawar</option>
                                                <option value="jahuarabad" @if($user->city == "jahuarabad") selected @endif>Jahuarabad</option>
                                                <option value="mianwali" @if($user->city == "mianwali") selected @endif>Mianwali</option>
                                                <option value="okara" @if($user->city == "okara") selected @endif>Okara</option>
                                            </select>
                                            @if ($errors->has('city'))
                                    <span class="help-block">
                                        <small style="color:red;">{{ $errors->first('city') }}</small>
                                    </span>
                                    @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Profile Image</label>
                                            <input type="file" class="form-control" name="image">
                                            @if ($errors->has('image'))
                                        <span class="help-block">
                                            <small style="color:red;">{{ $errors->first('image') }}</small>
                                        </span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subscription Plan</label>
                                            <select class="form-control" name="subscription_plan">
                                                <option>Select Plan</option>
                                                @foreach ($subs_plans as $subs_plan)
                                                <option value="{{$subs_plan->id}}" @if($user->subscription_plan == $subs_plan->id) selected @endif>{{$subs_plan->plan_name}} ({{$subs_plan->validity}})</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('subscription_plan'))
                                    <span class="help-block">
                                        <small style="color:red;">{{ $errors->first('subscription_plan') }}</small>
                                    </span>
                                    @endif
                                        </div>
                                    </div>
                                </div>
									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn bg-blue ml-3">Update User<i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
                    </div>
                </div>
            </div>
            @endsection
