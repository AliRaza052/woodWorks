@extends('admin.layouts.app')
<style>
    /*---------- Add listing ---------*/

    .add-listing-box {
        background: #ffffff;
        border: 1px solid #eaeff5;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6;
    }

    .listing-box-header {
        text-align: center;
        margin: 25px 0 35px 0;
    }

    .listing-box-header i {
        font-size: 2.5em;
    }

    .listing-box-header p {
        font-size: 14px;
    }

    .opening-day label.control-label {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .select-1{
        margin-bottom: -7px;
    }
</style>

@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Lenses</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Lens Metrial</a></li>
            <li class="breadcrumb-item active">Add Lens Metrial</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>

</div>
<div class="container-fluid">

    <div class="col-md-12 col-sm-12 col-md-offset-1 mob-padd-0">
        @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
        <!-- General Information -->
        <div class="add-listing-box general-info mrg-bot-25 padd-bot-30 padd-top-25">
            <form action="{{route('postlensemetrial')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
                    <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                        <div class="col-sm-6">
                            <label>Name</label>
                            <input type="text" required name="name" class="form-control">
                        </div>
                         <div class="col-sm-6">
                            <label>Price</label>
                            <input type="text" required name="price" class="form-control">
                        </div>

                        <div class="col-sm-6">
                            <label>Description</label>
                            <textarea type="text" required name="description" class="form-control"></textarea>
                        </div>

                        <div class="col-sm-6">
                            <label>Lens ID</label>    
                            <select class="form-control" name="lens_id">
                                <option>Select Lens</option>
                                @foreach($lenses as $lense)
                                <option value="{{$lense->id}}">{{$lense->name}}</option>
                                @endforeach
                            </select>                       
                          
                        </div>
                    </div>
                </div></br>
                <div class="d-flex justify-content-start align-items-center">
                            <button type="submit" class="btn bg-blue ml-10">Add Lense<i class="icon-paperplane ml-2"></i></button>
                </div>
</form>
</div>
</div>
</div>
@endsection
