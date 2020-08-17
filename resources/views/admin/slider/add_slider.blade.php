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
        <h3 class="text-themecolor">Product</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
            <li class="breadcrumb-item active">Add Product Type</li>
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
            <form action="{{route('postslider')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
                    <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                        <div class="col-sm-6">
                            <label>Slider Name</label>
                            <input type="text" required name="name" class="form-control">
                        </div>

                        <div class="col-sm-6">
                            <label>Description</label>
                            <textarea type="text" required name="description" class="form-control"></textarea>
                        </div>

                        <div class="col-sm-6">
                            <label>Product Images</label>
                            <div class="dropzone dz-clickable primary-dropzone">
                                <div class="dz-default dz-message" id='TextBoxesGroup'>
                                    <input type="file" name="image[]" class="form-control" id='textbox1' required />
                                </div>
                        	</div>
                        </div>
                        <div class="col-sm-6">
                            <label>Product ID</label>    
                            <select class="form-control" name="product_id" id="product_id">
                                <option>Select Product ID</option>
                                @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>                       
                          
                        </div>
                        <div class="col-sm-6">
                            <label>Category</label>
                            <input type="text" name="category" id="category_id" class="form-control" readonly />
                        </div>
                        <div class="col-sm-6">
                            <label>Type</label>
                            <input type="text" name="type" id="type_id" class="form-control" readonly />
                        </div>
                </div></br>
                <div class="d-flex justify-content-start align-items-center">
                            <button type="submit" class="btn bg-blue ml-10">Add Slider<i class="icon-paperplane ml-2"></i></button>
                </div>
</form>
</div>
</div>
</div>
@endsection
@push('scripts')

<script type="text/javascript">
	$('#product_id').change(function(){
		var product_id = $(this).val();
		if(product_id)
		{
			 $.ajax({

		           type:'POST',

		           url:'{{route('get_product')}}',

		           data:{productid:product_id,_token: '{{csrf_token()}}'},

		           success:function(data){

		              $('#category_id').val(data.product_category);
		              $('#type_id').val(data.type);
		           }

        });
		}
	});
	
</script>


@endpush
