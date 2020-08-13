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
        <h3 class="text-themecolor">Property</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
            <li class="breadcrumb-item active">Add Product</li>
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
            <div class="listing-box-header">
                <i class="ti-files theme-cl"></i>
                <h3>General Information</h3>
                <p>Write something general information about your Product</p>
            </div>
            <form action="{{route('save_product')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
                    <div class="listing-box-header">
                        <i class="ti-write theme-cl"></i>
                        <h3>Full Details</h3>
                        <p>Write full detail information about Product</p>
                    </div>
                    <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                        <div class="col-sm-6">
                            <label>Product Name</label>
                            <input type="text" required name="name" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Price</label>
                            <input type="text" required name="price" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>color</label>
                            <input type="text" required name="color" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Description</label>
                            <textarea type="text" required name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label>Style</label>
                            <input type="text" required name="style" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Type</label>
                            <input type="text" required name="type" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Product Images</label>
                            <div class="dropzone dz-clickable primary-dropzone">
                                <div class="dz-default dz-message" id='TextBoxesGroup'>
                                    <input type="file" name="image[]" class="form-control" multiple id='textbox1' required />
                                    <input type="file" name="image[]" class="form-control" multiple id='textbox1' required />
                                    <input type="file" name="image[]" class="form-control" multiple id='textbox1' />
                                    <input type="file" name="image[]" class="form-control" multiple id='textbox1' />
                                    <input type="file" name="image[]" class="form-control" multiple id='textbox1' />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Description Images</label>
                            <div class="dropzone dz-clickable primary-dropzone">
                                <div class="dz-default dz-message" id='TextBoxesGroup'>
                                    <input type="file" name="description_image[]" class="form-control" multiple id='textbox1' required />
                                    <input type="file" name="description_image[]" class="form-control" multiple id='textbox1' required />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Frame Metrial</label>
                            <input type="text" name="frame_metrial" required class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Lens Metrial</label>
                            <input type="text" name="lens_metrial" required class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Case Type</label>
                            <input type="text" name="case_type" required class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Category</label>
                            <input type="text" name="category" required class="form-control">
                        </div>
                        
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                            <button type="submit" class="btn bg-blue ml-10">Add Product<i class="icon-paperplane ml-2"></i></button>
                </div>
</form>
</div>
</div>
</div>
@endsection
@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZQTPhU5D_kiIXI2aoF6QYOPVocddWclE&libraries=places&callback=initAutocomplete" async defer></script>

<script type="text/javascript">
	function initAutocomplete() {
		var input = document.getElementById('location_lo');
		// var options = {
		//   types: ['(regions)'],
		//   componentRestrictions: {country: "IN"}
		// };
		var options = {}

		var autocomplete = new google.maps.places.Autocomplete(input, options);
		autocomplete.setComponentRestrictions({
			'country': ['us', 'pk', 'au']
		});
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var place = autocomplete.getPlace();
			var lat = place.geometry.location.lat();
			var lng = place.geometry.location.lng();
			var placeId = place.place_id;
			// to set city name, using the locality param
			var componentForm = {
				//   street_number: 'short_name',
				//   route: 'long_name',
				locality: 'long_name',
				administrative_area_level_1: 'short_name',
				country: 'long_name',
				//   postal_code: 'short_name'
			};
			for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					document.getElementById(addressType).value = val;
				}
			}
			document.getElementById("lat").value = lat;
			document.getElementById("lng").value = lng;

		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.propertytype').change(function() {
			if ($(this).val() == "Plots") {
				$('.bedroom').hide();
				$('.bathroom').hide();
			} else {
				$('.bedroom').show();
				$('.bathroom').show();
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {

		var counter = 2;

		$("#addButton").click(function() {

			if (counter > 7) {
				alert("Only 7 files allow");
				return false;
			}

			var newTextBoxDiv = $(document.createElement('div'))
				.attr("id", 'TextBoxDiv' + counter);

			newTextBoxDiv.after().html('<label>Image #' + counter + ' : </label>' +
				'<input type="file" class="form-control" name="filename[]" multiple id="textbox' + counter + '" value="" >');

			newTextBoxDiv.appendTo("#TextBoxesGroup");


			counter++;
		});

		$("#removeButton").click(function() {
			if (counter == 1) {
				alert("No more files to remove");
				return false;
			}

			counter--;

			$("#TextBoxDiv" + counter).remove();

		});

		$("#getButtonValue").click(function() {

			var msg = '';
			for (i = 1; i < counter; i++) {
				msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
			}
			alert(msg);
		});
	});
</script>


@endpush
