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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Property</a></li>
            <li class="breadcrumb-item active">Edit Property</li>
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
                <p>Write something general information about your listing</p>
            </div>
            <form action="{{route('updateproperty',$property->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                    <div class="col-sm-6">
                        <label>Listing Type</label>
                        <select data-placeholder="Select" class="form-control chosen-select" required tabindex="2" name="listing_type">
                            <option disabled selected>Select Option</option>
                            <option value="listing" @if ($property->listing_type == "listing") selected @endif>Normal Listing </option>
                            <option value="hot_listing" @if ($property->listing_type == "hot_listing") selected @endif>Hot Listing </option>
                            <option value="super_hot_listing" @if ($property->listing_type == "super_hot_listing") selected @endif>Super Hot Listing</option>
                       </select>
                    </div>
                </div>
                <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                    <div class="col-sm-6">
                        <label>Purpose</label>
                        <select data-placeholder="Select" class="form-control chosen-select" required tabindex="2" name="purpose">
                            <option disabled selected>Select Option</option>
                            <option value="For Sale" @if($property->purpose == "For Sale") selected @endif>For Sale</option>
                            <option value="Rent" @if($property->purpose == "Rent") selected @endif>Rent</option>
                            <option value="Wanted" @if($property->purpose == "Wanted") selected @endif>Wanted</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Property Type</label>
                        <select data-placeholder="Select" class="form-control chosen-select propertytype" required tabindex="2" name="propertytype">
                            <option disabled selected>Select Option</option>
                            <option value="Home" @if($property->propertytype == "Home") selected @endif>Home</option>
                            <option value="Commercial" @if($property->propertytype == "Commercial") selected @endif>Commercial</option>
                            <option value="Plots" @if($property->propertytype == "Plots") selected @endif>Plots</option>

                        </select>
                    </div>

                </div>

        </div>
        <!-- End General Information -->

        <!-- Add Location -->
        <div class="add-listing-box add-location mrg-bot-25 padd-bot-30 padd-top-25">
            <div class="listing-box-header">
                <i class="ti-location-pin theme-cl"></i>
                <h3>Add Location</h3>
                <p>Write Address Information about your listing Location</p>
            </div>

            <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                <div class="col-sm-6">
                    <label>Location</label>
                <input type="text" name="location" value="{{$property->location}}" required id="location_lo" class="form-control" id="autocomplete" autocomplete="off">
                <input name="latitude" value="{{$property->latitude}}" type="hidden" class="form-control" id="lat" hidden>
                    <input name="longitude" value="{{$property->longitude}}" type="hidden" required class="form-control" id="lng" hidden>

                </div>
                <div class="col-sm-6">
                    <label>Country</label>
                    <input type="text" name="country" value="{{$property->country}}" required class="form-control" class="field" id="country">
                </div>
                <div class="col-sm-6">
                    <label>State</label>
                    <input type="text" name="state" value="{{$property->state}}" required class="form-control" class="field" id="administrative_area_level_1">
                </div>

                <div class="col-sm-6">
                    <label>City</label>
                    <input type="text" name="city" value="{{$property->city}}" required class="field form-control" id="locality">
                    <!-- <select data-placeholder="Choose City" class="form-control chosen-select" tabindex="2" name="city">
											<option>New York</option>
											<option>Los Angeles</option>
											<option>Chicago</option>
											<option>Phoenix</option>
										</select> -->
                </div>




            </div>

        </div>
        <!-- End Add Location -->

        <!-- Full Information -->
        <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
            <div class="listing-box-header">
                <i class="ti-write theme-cl"></i>
                <h3>Full Details</h3>
                <p>Write full detail information about listing Property</p>
            </div>

            <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                <div class="col-sm-6">
                    <label>Property Title</label>
                    <input type="text" required name="title" value="{{$property->title}}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label>Price in Pkr</label>
                    <input type="text" required name="price" value="{{$property->price}}" class="form-control">
                </div>
                <div class="col-sm-6 bedroom">
                    <label>Bedrooms</label>
                    <select data-placeholder="Choose Bedrooms"  required class="form-control chosen-select" tabindex="2" name="totalbedrooms">
                        <option value="0" @if($property->totalbedrooms == "0") selected @endif>0</option>
                        <option value="1" @if($property->totalbedrooms == "1") selected @endif>1</option>
                        <option value="2" @if($property->totalbedrooms == "2") selected @endif>2</option>
                        <option value="3" @if($property->totalbedrooms == "3") selected @endif>3</option>
                        <option value="4" @if($property->totalbedrooms == "4") selected @endif>4</option>
                        <option value="5" @if($property->totalbedrooms == "5") selected @endif>5</option>
                        <option value="6" @if($property->totalbedrooms == "6") selected @endif>6</option>
                        <option value="7" @if($property->totalbedrooms == "7") selected @endif>7</option>
                        <option value="8" @if($property->totalbedrooms == "8") selected @endif>8</option>
                        <option value="9" @if($property->totalbedrooms == "9") selected @endif>9</option>
                        <option value="10" @if($property->totalbedrooms == "10") selected @endif>10</option>
                        <option value="10+" @if($property->totalbedrooms == "10+") selected @endif>10+</option>
                    </select>
                </div>
                <div class="col-sm-6 bathroom">
                    <label>Bathrooms</label>
                    <select data-placeholder="Choose Bathrooms" required class="form-control chosen-select" tabindex="2" name="totalbathrooms">
                        <option value="0" @if($property->totalbathrooms == "0") selected @endif>0</option>
                        <option value="1" @if($property->totalbathrooms == "1") selected @endif>1</option>
                        <option value="2" @if($property->totalbathrooms == "2") selected @endif>2</option>
                        <option value="3" @if($property->totalbathrooms == "3") selected @endif>3</option>
                        <option value="4" @if($property->totalbathrooms == "4") selected @endif>4</option>
                        <option value="5" @if($property->totalbathrooms == "5") selected @endif>5</option>
                        <option value="6" @if($property->totalbathrooms == "6") selected @endif>6</option>
                        <option value="7" @if($property->totalbathrooms == "7") selected @endif>7</option>
                        <option value="8" @if($property->totalbathrooms == "8") selected @endif>8</option>
                        <option value="9" @if($property->totalbathrooms == "9") selected @endif>9</option>
                        <option value="10" @if($property->totalbathrooms == "10") selected @endif>10</option>
                        <option value="10+" @if($property->totalbathrooms == "10+") selected @endif>10+</option>
                    </select>
                </div>

                <div class="col-sm-6">
                    <label>Land Area</label>
                <input type="text" name="landarea" value="{{$property->landarea}}" required class="form-control">
                </div>

                <div class="col-sm-6">
                    <label>Unit</label>
                    <select data-placeholder="Choose Area Unit" required class="form-control chosen-select" tabindex="2" name="unit">
                        <option value="Square Feet" @if($property->unit == "10+") selected @endif>Square Feet</option>
                        <option value="Square Yards" @if($property->unit == "10+") selected @endif>Square Yards</option>
                        <option value="Square Meters" @if($property->unit == "10+") selected @endif>Square Meters</option>
                        <option value="Marla" @if($property->unit == "10+") selected @endif>Marla</option>
                        <option value="Kanal" @if($property->unit == "10+") selected @endif>Kanal</option>
                    </select>
                </div>
                <div class="col-sm-12">
                    <label>Description</label>
                <textarea name="description" required class="h-100 form-control">{{$property->description}}</textarea>
                </div>

            </div>

        </div>
        <!-- End Full Information -->

        <!-- Add Gallery Information -->
        <div class="add-listing-box full-detail mrg-bot-25 padd-bot-30 padd-top-25">
            <div class="listing-box-header">
                <i class="ti-gallery theme-cl"></i>
                <h3>Add Gallery</h3>
                <p>Write full detail information about Property</p>
            </div>


            <!--<div class="dropzone" id="dropzoneFileUpload">-->
            <!--  </div>-->
            <div class="dropzone dz-clickable primary-dropzone">



                <div class="dz-default dz-message" id='TextBoxesGroup'>



                    <!--<div id="TextBoxDiv1">-->
                    <input type="file" name="filename[]" class="form-control" multiple id='textbox1' />

                    <input type="file" name="filename[]" class="form-control" multiple id='textbox1' />
                    <input type="file" name="filename[]" class="form-control" multiple id='textbox1' />
                    <input type="file" name="filename[]" class="form-control" multiple id='textbox1' />
                    <input type="file" name="filename[]" class="form-control" multiple id='textbox1' />

                </div>
                <!--						<input type='button' class="btn btn-success" value='Add More' id='addButton'>-->
                <!--<input type='button' class="btn btn-danger" value='Remove ' id='removeButton'>-->
                <!--<input type='button' class="btn btn-warning" value='Get TextBox Value' id='getButtonValue'>-->

            </div>
        </div>
        <!-- End Add Gallery Information -->

        <!-- Amenities Information -->
        <div class="add-listing-box amenities mrg-bot-25 padd-bot-30 padd-top-25">
            <div class="listing-box-header">
                <i class="ti-gift theme-cl"></i>
                <h3>Amenities</h3>
                <p>Write something general information about your listing</p>
            </div>

            <div class="row" style="margin-left:0px!important;margin-right:0px!important;">
                <div class="col-sm-4">
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select1" value="Furnished">
                        <label class="select-1"class="select-1" for="select1" ></label>
                        Furnished
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select2" value="Parking" @if(in_array("Parking", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"class="select-1"for="select2"></label>
                        Parking
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select3" value="Internet" @if(in_array("Internet", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"class="select-1"for="select3"></label>
                        Internet
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select4" value="CableTV" @if(in_array("CableTV", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"class="select-1"for="select4"></label>
                        Cable TV
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select5" value="SwimmingPool" @if(in_array("SwimmingPool", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"class="select-1"for="select5"></label>
                        Swimming Pool
                    </span>
                </div>

                <div class="col-sm-4">
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select6" value="Garden" @if(in_array("Garden", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"class="select-1"for="select6"></label>
                        Garden
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select7" value="GYM" @if(in_array("GYM", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"class="select-1"for="select7"></label>
                        GYM
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select8" value="Electricity Backup" @if(in_array("Electricity Backup", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"for="select8"></label>
                        Electricity Backup
                    </span>

                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select10" value="Garage" @if(in_array("Garage", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"for="select10"></label>
                        Attached garage
                    </span>
                </div>

                <div class="col-sm-4">
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select11" value="Elevator" @if(in_array("Elevator", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"for="select11"></label>
                        Elevator
                    </span>

                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select13" value="Heating" @if(in_array("Heating", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"for="select13"></label>
                        Heating
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select14" value="Hot Water" @if(in_array("Hot Water", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"for="select14"></label>
                        Hot water
                    </span>
                    <span class="custom-checkbox d-block">
                        <input type="checkbox" name="amenities[]" id="select15" value="Electricity" @if(in_array("Electricity", json_decode($property->amenities))) checked @endif>
                        <label class="select-1"for="select15"></label>
                        Electricity
                    </span>
                </div>

            </div><br/><br/>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Update Listing">
            </div><br/><br/>
        </div>
        </div>
    </div>
</div>
</form>
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

@endpush
