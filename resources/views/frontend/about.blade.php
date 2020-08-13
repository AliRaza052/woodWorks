@extends('frontend.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<aside id="notifications">
	<div class="container">
		
	</div>
</aside>
<nav data-depth="2" class="breadcrumb">
	<div class="category-cover">
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
          			<a itemprop="item" href="about">
            			<span itemprop="name">About us</span>
          			</a>
          			<meta itemprop="position" content="2">
        		</li>
        	</ol>
    	</div>
  	</div>
</nav>
<section id="wrapper">
	<div class="container">
		<div class="row">
			<div id="content-wrapper" class="col-lg-12 col-xs-12">
				<section id="main">
					<header class="page-header">
          				<h1>
  							About us
						</h1>
        			</header>
        			<section id="content" class="page-content page-cms page-cms-4">
        				<p><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
    						<div class="row ApRow" style="">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn ">
                                	<div id="image-form_5158862788323473" class="block ApImage">
                                		<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-1.jpg" class="img-fluid" title=""alt="banner" style=" width:100%; height:auto" />
                                	</div>
                                	<div id="image-form_5053032073569642" class="block cms-banner-des effect-flash ApImage">
                                		<a href="#" >
                                			<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-2.jpg" class="img-fluid" title="" alt="banner" style=" width:100%; height:auto" />
                                		</a>
                                		<div class='image_description'>
                                			<h5 class="cms-title">ABOUT US</h5>
                                			<p>Glasses was founded in 2005 with the belief that everyone has the right to better vision. Our vertically integrated business allows us to offer the highest quality products at the lowest possible price. Glasses has distributed millions of glasses to people just like you saving them hard-earned money. We do everything with the customer in mind! We offer the widest selection of great prescription eyeglasses at the most affordable prices in the world.</p>
                                		</div>
                                	</div>
                                </div>
                            </div>
                            <div class="row title-center ApRow  has-bg bg-boxed" data-bg=" no-repeat"  style="background: no-repeat;">
                            	<h4 class="title_block title-ap-group">Leadership Team</h4>
                            	<div class="sub-title-widget sub-title-ap-group">We are driven to give access, options and freedom to vision consumers worldwide.
                            	</div>
                            	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12  ApColumn">
                            		<div id="image-form_5684694517287090" class="block team-info effect-flash ApImage">
                            			<a href="#" >
                							<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-3.jpg" class="img-fluid" title="" alt="banner" style=" width:100%; height:auto" />
                						</a>
                						<div class='image_description'>
											<h4 class="name">Alexander</h4>
											<p class="position">CEO</p>
										</div>
        							</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12  ApColumn ">
									<div id="image-form_24591145976631685" class="block team-info effect-flash ApImage">
										<a href="#" >
											<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-4.jpg" class="img-fluid" title="" alt="banner" style=" width:100%; height:auto" />
										</a>
										<div class='image_description'>
											<h4 class="name">Olivia</h4>
											<p class="position">CFO</p>
										</div>
        							</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12  ApColumn ">
									<div id="image-form_5164471603660435" class="block team-info effect-flash ApImage">
										<a href="#" >
											<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-5.jpg" class="img-fluid" title="" alt="banner" style=" width:100%; height:auto" />
										</a>
										<div class='image_description'>
											<h4 class="name">Charlotte</h4>
											<p class="position">CMO</p>
										</div>
        							</div>
        						</div>
        					</div>
        					<div class="row grp-cms-video ApRow  has-bg bg-boxed" data-bg=" url(/demo/at_glasses_demo/themes/at_glasses/assets/img/modules/appagebuilder/images/bg-about-us.jpg) no-repeat center top" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg-about-us.jpg')no-repeat center top;">
        						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 popup-video ApColumn ">
        							<div id="image-form_5670057511479170" class="block video-banner ApImage">
        								<a href="#" >
        									<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-6.jpg" class="img-fluid" title="" alt="video" style=" width:100%; height:auto" />
        								</a>
        								<div class='image_description'>
        									<p>
        										<span class="text-video">Glasses Are Smarter!</span>
        									</p>
        								</div>
        							</div>
        							<div id="video-form_9507226965072650" class="video" style="clear:both;">
        								<div style="text-align:center">
        									<iframe width="1280" height="720" src="https://www.youtube.com/embed/lzY4lkT8ElU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        										
        									</iframe>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div class="row cms-grp-img ApRow  has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;">
        						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
        							<div id="image-form_7169190070793455" class="block effect-flash ApImage">
        								<a href="#" >
        									<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-7.jpg" class="img-fluid "title="" alt="banner" style=" width:100%;  height:auto" />
        								</a>
            	        			</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
									<div class="block visit-shop ApHtml">
										<div class="block_content">
											<h5 class="cms-title">Visit Our Shop</h5>
											<p>If you’re interested in taking a look behind the scenes or making an in-person purchase, send us a line at
											<a href="#" class="cms-mail">glasses@sale.com</a>
											to make an appointment. We look forward to seeing you!
										    </p>
										</div>
    								</div>
    								<div class="block ApRawHtml">
    									<div class="row">
    										<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-sp-12">
    											<div class="effect-flash">
    												<a href="#">
    													<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-8.jpg" class="img-fluid" title="" alt="" />
    												</a>
    											</div>
    										</div>
    										<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-sp-12">
    											<div class="effect-flash">
    												<a href="#">
    													<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner-cms-9.jpg" class="img-fluid" title="" alt="" />
    												</a>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</p>
    				</section>
    			</section>
    		</div>
    	</div>
    </div>
</section>


@endsection