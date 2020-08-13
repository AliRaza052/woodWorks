@extends('frontend.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<aside id="notifications">
	<div class="container"></div>
</aside>
<nav data-depth="2" class="breadcrumb">
	<div class="category-cover">
		<img class="img-fluid" src="{{asset('/')}}/themes/csss/bg-breadcrumb.jpg" alt="Breadcrumb image">
		<div class="category-name-cover"></div>
	</div>
	<div class="breadcrumb-heading">
		<div class="container">
			<ol itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="{{url('/')}}">
						<span itemprop="name">Home</span>
					</a>
					<meta itemprop="position" content="1">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="contact">
						<span itemprop="name">Contact us</span>
					</a>
					<meta itemprop="position" content="2">
				</li>
			</ol>
		</div>
	</div>
</nav>
<section id="wrapper">
	<div class="container">
		<div class="row" style="">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pColumn ">
				<div id="google-maps-form_6176343428335254" class="block widget-gmap">
					<div class="gmap-cover not-display-list-store" style="width: 100%; height:450px; clear:both;">
						<div class="gmap-content">
							<div id="map-canvas-form_6176343428335254" class="gmap" style="min-width:100px; min-height:100px; width:100%; height:450px;">
								
							</div>
						</div>
					</div>
				</div>
				<div class="block contact-text ApHtml">
					<div class="block_content">
						<p>We're here to help you find exactly what you're looking for - from products and services to stores and policies. So if at any time you can't find what you need, don't hesitate to contact us.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="left-column" class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
				<div class="contact-rich">
					<h4>Store information</h4>
					<div class="block">
						<div class="icon">
							<i class="icon-location-pin"></i>
						</div>
						<div class="data">At Glasses<br />United States</div>
					</div>
					<div class="block">
						<div class="icon"><i class="icon-envelope"></i></div>
						<div class="data email">Email us:<br/>
							<a href="mailto:leotheme@gmail.com">leotheme@gmail.com</a>
						</div>
					</div>
				</div>
			</div>
			<div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-8 col-lg-9">
				<section id="main">
					<section id="content" class="page-content card card-block">
						<section class="contact-form">
							<form action="{{url('/savepost')}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								<section class="form-fields">
									<div class="row">
										<div class="form-group col-md-12">
											<h3>Contact us</h3>
										</div>
										<div class="contact-form-left col-lg-6">
											<div class="form-group row">
												<label class="col-md-3 form-control-label">Subject</label>
												<div class="col-md-12">
													<select name="id_contact" class="form-control form-control-select">
														<option value="2">Customer service</option>
														<option value="1">Webmaster</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 form-control-label">Email address</label>
												<div class="col-md-12">
													<input class="form-control" name="email" type="text" value="" placeholder="your@email.com">
												</div>
											</div>
											<!-- <div class="form-group row">
												<label class="col-md-3 form-control-label">Attachment</label>
												<div class="col-md-12">
													<input type="file" name="fileUpload" class="filestyle" data-buttonText="Choose file">
												</div>
												<span class="col-md-12 form-control-comment">
													optional
												</span>
											</div> -->
										</div>
										<div class="contact-form-right col-lg-6">
											<div class="form-group row">
												<label class="col-md-3 form-control-label">Message</label>
												<div class="col-md-12">
													<textarea class="form-control" name="message" placeholder="How can we help?" rows="3">
														
													</textarea>
												</div>
											</div>
											<div class="contact-form-button">
												<style>
													input[name=url] {
														display: none !important;
													}
												</style>
												<input type="text" name="url" value=""/>
												<input type="hidden" name="token" value="ac5ec5e9321dd630adf02279880cdf73" />
												<input class="btn btn-black" type="submit" name="submitMessage" value="Send">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-md-3">
											
										</div>
									</div>
								</section>
							</form>
						</section>
					</section>
				</section>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
ap_list_functions.push(function(){
    $('<script>')
    .attr('type', 'text/javascript')
    .attr('src', 'https://maps.googleapis.com/maps/api/js?key=&amp;callback=initLeoMap')
    .appendTo('head');
});
</script>
    
    <script type="text/javascript">
        
        var apGMap = {"translation_5":"Click to larger Map","logo_store":"logo_stores.png","img_store_dir":"\/demo\/at_glasses_demo\/img\/st\/","img_ps_dir":"\/demo\/at_glasses_demo\/img\/"};
		var marker_list_form_6176343428335254 = [{"id":"1","id_store":"1","id_country":"21","id_state":"12","city":"Miami","postcode":" 33135","latitude":"25.76500500","longitude":"-80.24379700","phone":null,"fax":null,"email":null,"active":"1","date_add":"2018-08-20 16:39:07","date_upd":"2018-08-20 16:39:07","id_lang":"1","name":"Dade County","address1":"3030 SW 8th St Miami","address2":null,"hours":" [[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"10:00AM - 04:00PM\"],[\"10:00AM - 04:00PM\"]]","note":null,"other":"<p><strong class=\"dark\" style=\"clear:both;\">Monday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Tuesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Wednesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Thursday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Friday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Saturday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Sunday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p>","address":"3030 SW 8th St Miami<br \/>Miami, FL  33135","has_store_picture":true},{"id":"2","id_store":"2","id_country":"21","id_state":"12","city":"Miami","postcode":" 33304","latitude":"26.13793600","longitude":"-80.13943500","phone":null,"fax":null,"email":null,"active":"1","date_add":"2018-08-20 16:39:07","date_upd":"2018-08-20 16:39:07","id_lang":"1","name":"E Fort Lauderdale","address1":"1000 Northeast 4th Ave Fort Lauderdale","address2":null,"hours":" [[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"10:00AM - 04:00PM\"],[\"10:00AM - 04:00PM\"]]","note":null,"other":"<p><strong class=\"dark\" style=\"clear:both;\">Monday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Tuesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Wednesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Thursday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Friday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Saturday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Sunday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p>","address":"1000 Northeast 4th Ave Fort Lauderdale<br \/>Miami, FL  33304","has_store_picture":true},{"id":"3","id_store":"3","id_country":"21","id_state":"12","city":"Miami","postcode":"33026","latitude":"26.00998700","longitude":"-80.29447200","phone":null,"fax":null,"email":null,"active":"1","date_add":"2018-08-20 16:39:07","date_upd":"2018-08-20 16:39:07","id_lang":"1","name":"Pembroke Pines","address1":"11001 Pines Blvd Pembroke Pines","address2":null,"hours":" [[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"10:00AM - 04:00PM\"],[\"10:00AM - 04:00PM\"]]","note":null,"other":"<p><strong class=\"dark\" style=\"clear:both;\">Monday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Tuesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Wednesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Thursday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Friday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Saturday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Sunday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p>","address":"11001 Pines Blvd Pembroke Pines<br \/>Miami, FL 33026","has_store_picture":true},{"id":"4","id_store":"4","id_country":"21","id_state":"12","city":"Miami","postcode":" 33133","latitude":"25.73629600","longitude":"-80.24479700","phone":null,"fax":null,"email":null,"active":"1","date_add":"2018-08-20 16:39:07","date_upd":"2018-08-20 16:39:07","id_lang":"1","name":"Coconut Grove","address1":"2999 SW 32nd Avenue","address2":null,"hours":" [[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"10:00AM - 04:00PM\"],[\"10:00AM - 04:00PM\"]]","note":null,"other":"<p><strong class=\"dark\" style=\"clear:both;\">Monday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Tuesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Wednesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Thursday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Friday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Saturday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Sunday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p>","address":"2999 SW 32nd Avenue<br \/>Miami, FL  33133","has_store_picture":true},{"id":"5","id_store":"5","id_country":"21","id_state":"12","city":"Miami","postcode":"33181","latitude":"25.88674000","longitude":"-80.16329200","phone":null,"fax":null,"email":null,"active":"1","date_add":"2018-08-20 16:39:07","date_upd":"2018-08-20 16:39:07","id_lang":"1","name":"N Miami\/Biscayne","address1":"12055 Biscayne Blvd","address2":null,"hours":" [[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"10:00AM - 04:00PM\"],[\"10:00AM - 04:00PM\"]]","note":null,"other":"<p><strong class=\"dark\" style=\"clear:both;\">Monday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Tuesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Wednesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Thursday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Friday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Saturday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Sunday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p>","address":"12055 Biscayne Blvd<br \/>Miami, FL 33181","has_store_picture":true}];
		var marker_center = {"id":"1","id_store":"1","id_country":"21","id_state":"12","city":"Miami","postcode":" 33135","latitude":"25.76500500","longitude":"-80.24379700","phone":null,"fax":null,"email":null,"active":"1","date_add":"2018-08-20 16:39:07","date_upd":"2018-08-20 16:39:07","id_lang":"1","name":"Dade County","address1":"3030 SW 8th St Miami","address2":null,"hours":" [[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"09:00AM - 07:00PM\"],[\"10:00AM - 04:00PM\"],[\"10:00AM - 04:00PM\"]]","note":null,"other":"<p><strong class=\"dark\" style=\"clear:both;\">Monday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Tuesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Wednesday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Thursday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Friday:<\/strong>&nbsp<span>09:00AM - 07:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Saturday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p><p><strong class=\"dark\" style=\"clear:both;\">Sunday:<\/strong>&nbsp<span>10:00AM - 04:00PM<\/span><\/p>","address":"3030 SW 8th St Miami<br \/>Miami, FL  33135","has_store_picture":true}
    	var markers_form_6176343428335254 = [];

    	function displayAMarker(data, obj, id) {
    		var m = markers_form_6176343428335254[id];
    		google.maps.event.trigger(m, 'click');
    	}
    	function initializeListStore(data, name) {
    		var obj = $("#" + name + " ul");
    		synSize(name);
    		for(var i = 0; i < data.length; i++) {
    			var s = data[i];
    			obj.append("<li class='item-gmap-store' marker-id='" + i + "'" 
    					+ "onclick='return displayAMarker(marker_list_form_6176343428335254, this, " + i + ");'>"
    					+ "<strong><b><span class='icon-map-marker'></span> "
    					+ s.name + "</b></strong><br/><text>" + s.address + "</text>");
    		}
    	}
        function initLeoMap(){
            initializeGmap('',
                    marker_list_form_6176343428335254, 
                    markers_form_6176343428335254, 
                    "map-canvas-form_6176343428335254", 
                    11);

            if("".length > 0) {
                initializeListStore(
                        marker_list_form_6176343428335254, 
                        "gmap-stores-list-form_6176343428335254");
            }

        }

    // CODE HERE not write in *.js, compatility with Chrome
    function initializeGmap(map, data, markers, nameGmap, zoom)
    {
        map = new google.maps.Map(document.getElementById(nameGmap), {
            center: new google.maps.LatLng(marker_center.latitude, marker_center.longitude),
            zoom: zoom,
            mapTypeId: 'roadmap'
        });

        if(data.length>0)
        {
            setTimeout(createMarkers(map, markers, data), 1500);
        }
        else
        {
            markers[0] = new google.maps.Marker({
                position: new google.maps.LatLng(marker_center.latitude, marker_center.longitude),
                animation: google.maps.Animation.DROP,
                map: map,
            });
        }
    };

    function createMarkers(map, markers, data) {
        // dataMarkers
        for (var i = 0; i < data.length; i++) {
            var obj = data[i];
            var lg = parseFloat(obj.longitude);
            var lt = parseFloat(obj.latitude);
            var name = obj.name;
            var address = obj.address;
            var other = obj.other;
            var id_store = obj.id_store;
            var has_store_picture = obj.has_store_picture;

            var latlng = new google.maps.LatLng(lt, lg);
            var html = "<div style='min-width:200px;'><b>" + name + "</b><br/>" + address;
            html += (has_store_picture ? "<br /><br /><p><img src='" + apGMap.img_store_dir + parseInt(id_store) + ".jpg' alt='' /></p>" : "");
            html += other + "<a href='http://maps.google.com/maps?saddr=&daddr=" + latlng + "' target='_blank'>" + apGMap.translation_5 +"<\/a>";
            html += "</div>";

            var infowindow = new google.maps.InfoWindow({
                content: "loading..."
            });

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lt, lg),
                animation: google.maps.Animation.DROP,
                map: map,
                icon: apGMap.img_ps_dir + apGMap.logo_store,
                title: obj.name,
                html: html
            });

            google.maps.event.addListener(marker, "click", function () {
                infowindow.setContent(this.html);
                infowindow.open(map, this);
            });
            markers[i] = marker;
        }
    }
	</script>








@endsection