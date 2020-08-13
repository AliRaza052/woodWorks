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
          			<a itemprop="item" href="blog">
            			<span itemprop="name">Blog</span>
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
			<div id="left-column" class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <div class="block-categories block block-highlighted hidden-sm-down">
                	<h4 class="title_block">
                		<a href="2-categories.html">Categories
                		</a>
                	</h4>
                	<div class="block_content">
                		<ul class="category-top-menu">
                			<li>
                				<ul class="category-sub-menu">
                					<li data-depth="0">
                						<a href="3-women-glasses.html">Women Glasses
                						</a>
                						<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar3">
                							<i class="fa fa-caret-right add"></i>
                							<i class="fa fa-caret-down remove"></i>
                						</div>
                						<div class="collapse" id="exCollapsingNavbar3">
                							<ul class="category-sub-menu">
                								<li data-depth="1">
                									<a class="category-sub-link" href="4-men.html">Men
                									</a>
                								</li>
                								<li data-depth="1">
                									<a class="category-sub-link" href="5-women.html">Women
                									</a>
                								</li>
                							</ul>
                						</div>
                					</li>
                					<li data-depth="0">
                						<a href="6-men-glasses.html">Men Glasses
                						</a>
                						<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar6">
                							<i class="fa fa-caret-right add"></i>
                							<i class="fa fa-caret-down remove"></i>
                						</div>
                						<div class="collapse" id="exCollapsingNavbar6">
                							<ul class="category-sub-menu">
                								<li data-depth="1">
                									<a class="category-sub-link" href="7-stationery.html">Stationery
                									</a>
                								</li>
                								<li data-depth="1">
                									<a class="category-sub-link" href="8-home-accessories.html">Home Accessories
                									</a>
                								</li>
                							</ul>
                						</div>
                					</li>
                					<li data-depth="0">
                						<a href="9-shop-eyeglasses.html">Shop  Eyeglasses
                						</a>
                					</li>
                				</ul>
                			</li>
                		</ul>
                	</div>
                </div>
                <div id="categories_blog_menu" class="block blog-menu">
                	<h4 class="title_block">Blog Categories</h4>
                	<div class="block_content">
                		<ul class="level1 tree dhtml ">
                			<li id="list_3" class=" ">
                				<a href="blog/category-1-c3.html" title="Category 1">
                					<span>Category 1</span>
                				</a>
                				<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#sub_3">
                					<i class="material-icons add">add</i>
                					<i class="material-icons remove">remove</i>
                				</div>
                				<ul id="sub_3" class="level2 collapse ">
                					<li id="list_4" class=" ">
                						<a href="blog/sub-category-1-c4.html" title="Sub Category 1">
                							<span>Sub Category 1</span>
                						</a>
                					</li>
                					<li id="list_5" class=" ">
                						<a href="blog/sub-category-2-c5.html" title="Sub Category 2">
                							<span>Sub Category 2</span>
                						</a>
                					</li>
                				</ul>
                			</li>
                		</ul>
                	</div>
                </div>
                <section id="blogPopularBlog" class="block leo-block-sidebar hidden-sm-down">
                	<h4 class='title_block'><a href="#">Popular Articles</a></h4>
                	<div class="block_content products-block">
                		<ul class="lists">
                            <li class="list-item clearfix first_item">
                            	<div class="blog-image">
                            		<a class="products-block-image" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html">
                            			<img alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" src="{{asset('/')}}/img/leoblog/b/1/6/870_729/b-blog-4.jpg" class="img-fluid">
                                	</a>
                            	</div>
                            	<div class="blog-content">
                            		<h3 class="post-name">
                            			<a title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum
                            			</a>
                            		</h3>
                            		<span class="info">Dec 18, 2013</span>
                            	</div>
                        	</li> 
                            <li class="list-item clearfix">
                            	<div class="blog-image">
                                	<a class="products-block-image" title="At risus pretium urna tortor metus fringilla" href="blog/at-risus-pretium-urna-tortor-metus-fringilla-b3.html">
                                    	<img alt="At risus pretium urna tortor metus fringilla" src="{{asset('/')}}/img/leoblog/b/1/3/870_729/b-blog-1.jpg" class="img-fluid">
                                	</a>
                            	</div>
                            	<div class="blog-content">
                            		<h3 class="post-name">
                            			<a title="At risus pretium urna tortor metus fringilla" href="blog/at-risus-pretium-urna-tortor-metus-fringilla-b3.html">At risus pretium urna tortor metus fringill
                            			</a>
                            		</h3>
                            		<span class="info">Nov 28, 2013</span>
                            	</div>
                        	</li> 
                            <li class="list-item clearfix last_item">
                            	<div class="blog-image">
                                	<a class="products-block-image" title="Ipsum cursus vestibulum at interdum Vivamus" href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html">
                                    	<img alt="Ipsum cursus vestibulum at interdum Vivamus" src="{{asset('/')}}/img/leoblog/b/1/4/870_729/b-blog-2.jpg" class="img-fluid">
                                	</a>
                            	</div>
                            	<div class="blog-content">
                            		<h3 class="post-name">
                            			<a title="Ipsum cursus vestibulum at interdum Vivamus" href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b4.html">Ipsum cursus vestibulum at interdum Vivamus
                            			</a>
                            		</h3>
                            		<span class="info">Dec 04, 2013</span>
                            	</div>
                        	</li> 
                        </ul>
                    </div>
                </section>
                <section id="blogRecentBlog" class="block leo-block-sidebar hidden-sm-down">
                	<h4 class='title_block'>
                		<a href="#">Recent Articles
                		</a>
                	</h4>
            		<div class="block_content products-block">
                		<ul class="lists">
                			<li class="list-item clearfix first_item">
                            	<div class="blog-image">
                                	<a class="products-block-image" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html">
                                    	<img alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" src="{{asset('/')}}/img/leoblog/b/1/6/870_729/b-blog-4.jpg" class="img-fluid">
                                	</a>
                            	</div>
                            	<div class="blog-content">
                            		<h3 class="post-name">
                            			<a title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b6.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum
                            			</a>
                            		</h3>
                            		<span class="info">Dec 18, 2013</span>
                            	</div>
                        	</li> 
                            <li class="list-item clearfix">
                            	<div class="blog-image">
                                	<a class="products-block-image" title="Morbi condimentum molestie Nam enim odio sodales" href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b7.html">
                                    	<img alt="Morbi condimentum molestie Nam enim odio sodales" src="{{asset('/')}}/img/leoblog/b/1/7/870_729/b-blog-5.jpg" class="img-fluid">
                                	</a>
                            	</div>
                            	<div class="blog-content">
                            		<h3 class="post-name">
                            			<a title="Morbi condimentum molestie Nam enim odio sodales" href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b7.html">Morbi condimentum molestie Nam enim odio sodales
                            			</a>
                            		</h3>
                            		<span class="info">Dec 18, 2013</span>
                            	</div>
                        	</li> 
                            <li class="list-item clearfix last_item">
                            	<div class="blog-image">
                                	<a class="products-block-image" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html">
                                    	<img alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" src="{{asset('/')}}/img/leoblog/b/1/8/870_729/b-blog-6.jpg" class="img-fluid">
                                	</a>
                            	</div>
                            	<div class="blog-content">
                            		<h3 class="post-name">
                            			<a title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus
                            			</a>
                            		</h3>
                            		<span class="info">Dec 18, 2013</span>
                            	</div>
                        	</li> 
                        </ul>
            		</div>
    			</section>
    			<section id="tags_blog_block_left" class="block leo-blog-tags hidden-sm-down">
    				<h4 class='title_block'>
    					<a href="#">Tags Post
    					</a>
    				</h4>
        			<div class="block_content clearfix">
                        <a href="blog166d.html?tag=leotheme">leotheme</a>
                        <a href="blog5cce.html?tag=prestashop">prestashop</a>
                        <a href="blogb063.html?tag=theme">theme</a>
                        <a href="blogdba8.html?tag=magento">magento</a>
                        <a href="blog4a11.html?tag=opencart">opencart</a>
                        <a href="blogfa1b.html?tag=template">template</a>
                        <a href="blog77cd.html?tag=Joomla">Joomla</a>
                        <a href="blog8e74.html?tag=joomla">joomla</a>
                        <a href="blog8137.html?tag=wordpress">wordpress</a>
                    </div>
    			</section>
    			<div class="row ApRow  has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;margin-top: 30px;margin-bottom: 30px;">
    				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
    					<div id="image-form_30289943078670395" class="block effect-flash ApImage">
    						<a href="#" >
                				<img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner_category.jpg" class="img-fluid "title="" alt="banner" style=" width:100%; height:auto" />
                			</a>
            	        </div>
            	    </div>
            	</div>
            </div>
            <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-8 col-lg-9">
            	<section id="main">
					<div id="blog-listing" class="blogs-container box">
						<h1 class="blog-lastest-title">Lastest Blogs</h1>
						<div class="inner">
							<div class="leading-blog">  
								<div class="nocol-lg-12">
									<article class="blog-item">
										<div class="blog-image-container">
											<div class="left-block">
												<div class="blog-image effect-julia">
													<a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" title="Nullam ullamcorper nisl quis ornare molestie">
														<img src="{{asset('/')}}/img/leoblog/b/1/9/870_729/b-blog-7.jpg" title="Nullam ullamcorper nisl quis ornare molestie" alt="" class="img-fluid" />
													</a>
												</div>
												<span class="created">
													<time class="date" datetime="2013">
														<span class="blog_month">Dec</span>
														<span class="blog_day">18</span>	
													</time>
												</span>
											</div>
											<div class="right-block blog-info">
												<h4 class="title">
													<a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b9.html" title="Nullam ullamcorper nisl quis ornare molestie">Nullam ullamcorper nisl quis ornare molestie
													</a>
												</h4>
												<div class="blog-meta">
													<span class="blog-author">
														<i class="icon-note"></i>
														<a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo
														</a> 
													</span>
													<span class="blog-ctncomment">
														<span>0 - Comment</span> 
													</span>
												</div>
												<div class="blog-shortinfo">
												Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet...</div>
											</div>
										</div>
										<div class="hidden-xl-down hidden-xl-up datetime-translate">
											sunday
											Monday
											Tuesday
											Wednesday
											Thursday
											Friday
											Saturday
											January
											February
											March
											April
											May
											June
											July
											August
											September
											October
											November
											December
										</div>
									</article>
								</div>	
								<div class="nocol-lg-12">
									<article class="blog-item">
										<div class="blog-image-container">
											<div class="left-block">
												<div class="blog-image effect-julia">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">
														<img src="{{asset('/')}}/img/leoblog/b/1/8/870_729/b-blog-6.jpg" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" alt="" class="img-fluid" />
													</a>
												</div>
												<span class="created">
													<time class="date" datetime="2013">						<span class="blog_month">Dec</span>
														<span class="blog_day">18</span>
													</time>
												</span>
											</div>
											<div class="right-block blog-info">
												<h4 class="title">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a>
												</h4>
												<div class="blog-meta">
													<span class="blog-author">
														<i class="icon-note"></i>
														<a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a> 
													</span>
													<span class="blog-ctncomment">
														<span>0 - Comment</span> 
													</span>
												</div>
												<div class="blog-shortinfo">
													Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla...
											 	</div>
											</div>
										</div>
										<div class="hidden-xl-down hidden-xl-up datetime-translate">
											Sunday
											Monday
											Tuesday
											Wednesday
											Thursday
											Friday
											Saturday
											January
											February
											March
											April
											May
											June
											July
											August
											September
											October
											November
											December
										</div>
									</article>
								</div>
								<div class="nocol-lg-12">
									<article class="blog-item">
										<div class="blog-image-container">
											<div class="left-block">
												<div class="blog-image effect-julia">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">
														<img src="{{asset('/')}}/img/leoblog/b/1/8/870_729/b-blog-6.jpg" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" alt="" class="img-fluid" />
													</a>
												</div>
												<span class="created">
													<time class="date" datetime="2013">						<span class="blog_month">Dec</span>
														<span class="blog_day">18</span>
													</time>
												</span>
											</div>
											<div class="right-block blog-info">
												<h4 class="title">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a>
												</h4>
												<div class="blog-meta">
													<span class="blog-author">
														<i class="icon-note"></i>
														<a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a> 
													</span>
													<span class="blog-ctncomment">
														<span>0 - Comment</span> 
													</span>
												</div>
												<div class="blog-shortinfo">
													Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla...
											 	</div>
											</div>
										</div>
										<div class="hidden-xl-down hidden-xl-up datetime-translate">
											Sunday
											Monday
											Tuesday
											Wednesday
											Thursday
											Friday
											Saturday
											January
											February
											March
											April
											May
											June
											July
											August
											September
											October
											November
											December
										</div>
									</article>
								</div>
								<div class="nocol-lg-12">
									<article class="blog-item">
										<div class="blog-image-container">
											<div class="left-block">
												<div class="blog-image effect-julia">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">
														<img src="{{asset('/')}}/img/leoblog/b/1/8/870_729/b-blog-6.jpg" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" alt="" class="img-fluid" />
													</a>
												</div>
												<span class="created">
													<time class="date" datetime="2013">						<span class="blog_month">Dec</span>
														<span class="blog_day">18</span>
													</time>
												</span>
											</div>
											<div class="right-block blog-info">
												<h4 class="title">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a>
												</h4>
												<div class="blog-meta">
													<span class="blog-author">
														<i class="icon-note"></i>
														<a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a> 
													</span>
													<span class="blog-ctncomment">
														<span>0 - Comment</span> 
													</span>
												</div>
												<div class="blog-shortinfo">
													Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla...
											 	</div>
											</div>
										</div>
										<div class="hidden-xl-down hidden-xl-up datetime-translate">
											Sunday
											Monday
											Tuesday
											Wednesday
											Thursday
											Friday
											Saturday
											January
											February
											March
											April
											May
											June
											July
											August
											September
											October
											November
											December
										</div>
									</article>
								</div>
								<div class="nocol-lg-12">
									<article class="blog-item">
										<div class="blog-image-container">
											<div class="left-block">
												<div class="blog-image effect-julia">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">
														<img src="{{asset('/')}}/img/leoblog/b/1/8/870_729/b-blog-6.jpg" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" alt="" class="img-fluid" />
													</a>
												</div>
												<span class="created">
													<time class="date" datetime="2013">						<span class="blog_month">Dec</span>
														<span class="blog_day">18</span>
													</time>
												</span>
											</div>
											<div class="right-block blog-info">
												<h4 class="title">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a>
												</h4>
												<div class="blog-meta">
													<span class="blog-author">
														<i class="icon-note"></i>
														<a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a> 
													</span>
													<span class="blog-ctncomment">
														<span>0 - Comment</span> 
													</span>
												</div>
												<div class="blog-shortinfo">
													Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla...
											 	</div>
											</div>
										</div>
										<div class="hidden-xl-down hidden-xl-up datetime-translate">
											Sunday
											Monday
											Tuesday
											Wednesday
											Thursday
											Friday
											Saturday
											January
											February
											March
											April
											May
											June
											July
											August
											September
											October
											November
											December
										</div>
									</article>
								</div>
								<div class="nocol-lg-12">
									<article class="blog-item">
										<div class="blog-image-container">
											<div class="left-block">
												<div class="blog-image effect-julia">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">
														<img src="{{asset('/')}}/img/leoblog/b/1/8/870_729/b-blog-6.jpg" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" alt="" class="img-fluid" />
													</a>
												</div>
												<span class="created">
													<time class="date" datetime="2013">						<span class="blog_month">Dec</span>
														<span class="blog_day">18</span>
													</time>
												</span>
											</div>
											<div class="right-block blog-info">
												<h4 class="title">
													<a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b8.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a>
												</h4>
												<div class="blog-meta">
													<span class="blog-author">
														<i class="icon-note"></i>
														<a href="blogcd64.html?author=1" title="Demo Demo">Demo Demo</a> 
													</span>
													<span class="blog-ctncomment">
														<span>0 - Comment</span> 
													</span>
												</div>
												<div class="blog-shortinfo">
													Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla...
											 	</div>
											</div>
										</div>
										<div class="hidden-xl-down hidden-xl-up datetime-translate">
											Sunday
											Monday
											Tuesday
											Wednesday
											Thursday
											Friday
											Saturday
											January
											February
											March
											April
											May
											June
											July
											August
											September
											October
											November
											December
										</div>
									</article>
								</div>	
							</div>
							<div class="top-pagination-content clearfix bottom-line">
								<nav class="pagination">
									<div id="pagination" class="col-xs-12 col-md-6 col-lg-6">
										<ul class="page-list clearfix text-sm-right text-xs-center">
											<li id="pagination_previous">
												<a class="previous disabled" rel="prev" href="#">
													<i class="fa fa-long-arrow-left"></i>
												</a>
											</li>
											<a  href="blog.html" class="disabled"></a>
											<li>
									    		<a  href="blog905b.html?p=1">
									    			1
									    		</a>
									    	</li>
											<li>
									    		<a  href="blog905b.html?p=2">
									    			2
									    		</a>
									    	</li>
									    	<li id="pagination_next">
									    		<a  class="next" rel="next" href="blog905b.html?p=2">
									    			<i class="fa fa-long-arrow-right"></i>
									    		</a>
									    	</li>
									    </ul>			
									</div>
								</nav>	
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
    </div>
</section>
@endsection