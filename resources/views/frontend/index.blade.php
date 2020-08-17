@extends('frontend.layouts.app')
@section('content')

<section id="wrapper">
      <div class="row">
        <div id="content-wrapper" class="col-lg-12 col-xs-12">
          <section id="main">
            <section id="content" class="page-home">
              <div class="row ApRow  " style="">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                  <div id="slideshow-form_8541892409585330" class="ApSlideShow">
                    <div class="bannercontainer banner-fullwidth" style="padding: 0px;margin: 0px;">
                      <div class="iview iview-group-5e8bbc9aa1464-4">
                        <div class="slide_config " data-leo_image="{{asset('/')}}/themes/csss/modules/leoslideshow/slide_7.jpg"data-leo_pausetime="5000" data-leo_thumbnail="{{asset('/')}}/themes/csss/modules/leoslideshow/slide_7.jpg" data-leo_background="image">
                          <div class="tp-caption " data-x="645" data-y="345" data-transition="fade">
                            <img src="{{asset('/')}}/themes/csss/modules/leoslideshow/glasses_gly.png" alt="" class="img_disable_drag"/>
                          </div>
                          <div class="tp-caption  text_1_pink" 
                           data-x="540"
                           data-y="550"
                           data-transition="fade">
                            
                          </div>
                          <div class="tp-caption  text_2" data-x="652" data-y="490" data-transition="fade">
                            <!-- LAYER TEXT BEGIN -->
                            Best glasses <br>in your Town
                            <!-- LAYER TEXT END -->
                          </div>
                        </div>
                        <div class="slide_config " data-leo_image="{{asset('/')}}/themes/csss/modules/leoslideshow/slide_8.jpg" data-leo_pausetime="5000" data-leo_thumbnail="{{asset('/')}}/themes/csss/modules/leoslideshow/slide_8.jpg" data-leo_background="image">
                          <div class="tp-caption " data-x="645" data-y="345" data-transition="fade">
                            <img src="{{asset('/')}}/themes/csss/modules/leoslideshow/glasses_gly.png" alt="" class="img_disable_drag"/>
                          </div>
                          
                          <div class="tp-caption  text_2" data-x="652" data-y="490" data-transition="fade">
                            <!-- LAYER TEXT BEGIN -->
                            Best glasses <br>in your Town
                            <!-- LAYER TEXT END -->
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      ap_list_functions.push(function(){
                      jQuery(".iview-group-5e8bbc9aa1464-4").iView({
                      pauseTime:9000, // delay
                      startSlide:0,
                      autoAdvance: 0,	// enable timer thá»�i gian auto next slide
                      pauseOnHover: 1,
                      randomStart: 0, // Ramdom slide when start
                      timer: "360Bar",
                      timerPosition: "top-right",
                      timerX: 10,
                      timerY: 10,
                      timerOpacity: 0.5,
                      timerBg: "#000",
                      timerColor: "#EEE",
                      timerDiameter: 30,
                      timerPadding: 4,
                      timerStroke: 3,
                      timerBarStroke: 1,
                      timerBarStrokeColor: "#EEE",
                      timerBarStrokeStyle: "solid",
                      playLabel: "Play",
                      pauseLabel: "Pause",
                      closeLabel: "Close", // Muli language
                      controlNav: 1, // true : enable navigate - default:'false'
                      keyboardNav: 1, // true : enable keybroad
                      controlNavThumbs: 0, // true show thumbnail, false show number ( bullet )
                      controlNavTooltip: 0, // true : hover to bullet show thumnail
                      tooltipX: 5,
                      tooltipY: -5,
                      controlNavHoverOpacity: 1, // opacity navigator
                      controlNavNextPrev: false, // false dont show direction at navigator
                      directionNav: 1, // true  show direction at image ( in this case : enable direction )
                      directionNavHoverOpacity: 1, // direction opacity at image
                      nextLabel: "Next",				// Muli language
                      previousLabel: "Previous", // Muli language
                      fx: 'random', // Animation
                      animationSpeed: 500, // time to change slide
                      strips: 1, // set value is 1 -> fix animation full background
                      blockCols: 10, // number of columns
                      blockRows: 5, // number of rows
                      captionSpeed: 500, // speed to show caption
                      captionOpacity: 1, // caption opacity
                      captionEasing: 'easeInOutSine', // caption transition easing effect, use JQuery Easings effect
                      customWidth: 1920,
                      customHtmlBullet: false,
                      rtl: false,
                      height:1080,
                      timer_show : 2,
                      onAfterLoad: function()
                      {
                        $('.iview-group-5e8bbc9aa1464-4 .iview-timer').hide();
                      },
                    });
                      $(".img_disable_drag").bind('dragstart', function() {
                        return false;
                      });
                      var link_event = 'click';
                      $(".iview-group-5e8bbc9aa1464-4 .slide_config").on("click",function(){
                        if(link_event !== 'click'){
                          link_event = 'click';
                          return;
                        }
                        if($(this).data('link') != undefined && $(this).data('link') != '') {
                          window.open($(this).data('link'),$(this).data('target'));
                        }
                      });
                      $(".iview-group-5e8bbc9aa1464-4 .slide_config").on('swipe',function(){
                        link_event = 'swiped';	// do not click event
                      });
                    });
                  </script>
                </div>
              </div>
            </div>


              <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="eyeglasses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 800px;position: relative;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sunglasses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
       <div class="wrapper" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg2_h6.jpg') repeat-x center top">
              <div class="container">
              <div class="row ApRow  has-bg bg-fullwidth-container" style="padding-top: 25px">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12  ApColumn ">
                  <div id="image-form_12436769327409448" class="block effect-flash banner-st2-left ApImage">
                    <a href="menglasses" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner4_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />
                    </a>
                    <div class='image_description'>
                      <h5>Shop Men</h5>
                    </div>
                  </div>
                </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12  ApColumn ">
                  <div id="image-form_1612629365992643" class="block effect-flash banner-st2-right ApImage">
                    <a href="womenglasses" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner3_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />
                    </a>
                    <div class='image_description'>
                      <h5>Shop Women</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="sunglasses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 800px;position: relative;">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sunglasses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
       <div class="wrapper" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg2_h6.jpg') repeat-x center top">
              <div class="container">
              <div class="row ApRow  has-bg bg-fullwidth-container" style="padding-top: 25px">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12  ApColumn ">
                  <div id="image-form_12436769327409448" class="block effect-flash banner-st2-left ApImage">
                    <a href="menglasses" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner4_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />
                    </a>
                    <div class='image_description'>
                      <h5>Shop Men</h5>
                    </div>
                  </div>
                </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-12  ApColumn ">
                  <div id="image-form_1612629365992643" class="block effect-flash banner-st2-right ApImage">
                    <a href="womenglasses" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner3_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />
                    </a>
                    <div class='image_description'>
                      <h5>Shop Women</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
      
    </div>
  </div>
</div>




            
            <div class="wrapper">
              <div class="container">
                <div class="row grp-service ApRow  has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;margin-top: 50px;margin-bottom: 35px;">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                    <div class="block ApRawHtml">
                      <div class="service-content">
                        <i class="icon icon-paper-plane"></i>
                        <div>
                          <span>Free Shipping</span>
                          <p>Guarantee shipment within stated periodor discount.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                    <div class="block ApRawHtml">
                      <div class="service-content">
                        <i class="icon icon-pie-chart"></i>
                        <div>
                          <span>Online Service</span>
                          <p>Friendly customer care to be at your service.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                    <div class="block ApRawHtml">
                      <div class="service-content">
                        <i class="icon icon-layers"></i>
                        <div>
                          <span>High Quality</span>
                          <p>Best value for what you pay at the lowest price.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wrapper">
              <div class="container">
                <div class="row grp-banner1 ApRow  has-bg bg-boxed" data-bg=" url(/demo/at_glasses_demo/themes/at_glasses/assets/img/modules/appagebuilder/images/bg_h1.jpg) no-repeat center top" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg_h1.jpg') no-repeat center top;">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12  ApColumn ">
                    <div class="block text-absolute-2 ApRawHtml">
                      <span class="title">Be Creative.</span>
                      <p>MUNIC’s new collection’s highlights are fine, thin frames in noble gold hues. The filigree styles are made of titan and come with trend colors such as rosé gold and white gold which are classic but different.</p>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12  ApColumn ">
                    <div id="image-form_5435136733717544" class="block image-absolute ApImage">
                      <a href="#" >
                        <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner2_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />
                      </a>
                    <div class='image_description'>
                      <p>
                        <a class="btn btn-default" href="#">discover now</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper">
            <div class="container">
              <div class="row ApRow  has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;margin-top: 30px;">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                  <div class="block products_block exclusive appagebuilder title-center ApProductCarousel">
                    <h4 class="title_block">
                      Best Seller
                    </h4>
                    <div class="block_content">
                      <div class="owl-row">
                        <div class="timeline-wrapper clearfix prepare" data-item="3" data-xl="3" data-lg="3" data-md="3" data-sm="2" data-m="1">
                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">					
                                <div class="background-masker content-top"></div>							
                                <div class="background-masker content-second-line"></div>							
                                <div class="background-masker content-third-line"></div>							
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">					
                                <div class="background-masker content-top"></div>							
                                <div class="background-masker content-second-line"></div>							
                                <div class="background-masker content-third-line"></div>							
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">					
                                <div class="background-masker content-top"></div>							
                                <div class="background-masker content-second-line"></div>							
                                <div class="background-masker content-third-line"></div>							
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="carousel-1708497639" class="owl-carousel owl-theme owl-loading profile-default">
                          <div class="item first">
                            <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="45" itemscope itemtype="http://schema.org/Product">
                              <div class="thumbnail-container">
                                <div class="product-image">
                                  <a href="men/1-45-hummingbird-printed-t-shirt.html#/18-color-pink" class="thumbnail product-thumbnail">
                                    <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/24-home_default/hummingbird-printed-t-shirt.jpg" alt = "Quisque rhoncus" data-full-size-image-url = "../24-large_default/hummingbird-printed-t-shirt.jpg">
                                    <span class="product-additional" data-idproduct="1"></span>
                                  </a> 
                                  <ul class="product-flags">
                                    <li class="product-flag on-sale">On sale!</li>
                                    <li class="product-flag new">New</li>
                                  </ul>
                                  <div class="quickview hidden-md-down">
                                    <a href="#" class="quick-view btn-product btn" data-link-action="quickview"> 
                                      <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-quickview-bt-content">
                                        <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                        <span class="name-btn-product">Quick view</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                                <div class="product-meta">
                                  <h3 class="h3 product-title" itemprop="name">
                                    <a href="men/1-45-hummingbird-printed-t-shirt.html#/18-color-pink">Quisque rhoncus</a>
                                  </h3>
                                  <div class="product-price-and-shipping ">
                                    <span class="sr-only">Price</span>
                                    <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                      <span itemprop="priceCurrency" content="USD"></span>
                                      <span itemprop="price" content="23.9">$23.90</span>
                                    </span>
                                  </div>
                                  <div class="product-description-short" itemprop="description">Donec fringilla sapien sed elit luctus, eget mattis dolor efficitur. Ut id libero nulla. Morbi aliquam tortor massa, in aliquet eros molestie in....
                                  </div>
                                  <div class="functional-buttons clearfix">
                                    <div class="compare">
                                      <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="1" title="Add to Compare">
                                        <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                        <span class="leo-compare-bt-content">
                                          <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                          <span class="name-btn-product">Add to Compare</span>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="button-container cart">
                                      <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                        <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                        <input type="hidden" value="300" class="quantity_product quantity_product_1" name="quantity_product">
                                        <input type="hidden" value="1" class="minimal_quantity minimal_quantity_1" name="minimal_quantity">
                                        <input type="hidden" value="45" class="id_product_attribute id_product_attribute_1" name="id_product_attribute">
                                        <input type="hidden" value="1" class="id_product" name="id_product">
                                        <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                        <input type="hidden" class="input-group form-control qty qty_product qty_product_1" name="qty" value="1" data-min="1">
                                        <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_1" data-button-action="add-to-cart" type="submit">
                                          <span class="leo-loading cssload-speeding-wheel"></span>
                                          <span class="leo-bt-cart-content">
                                            <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                            <span class="name-btn-product">Add to cart</span>
                                          </span>
                                        </button>
                                      </form>
                                    </div>
                                    <div class="wishlist">
                                      <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="1" data-id-product-attribute="45" title="Add to Wishlist">
                                        <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                        <span class="leo-wishlist-bt-content">
                                          <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                          <span class="name-btn-product">Add to Wishlist</span>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </article>
                          </div>
                          <div class="item">
                            <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
                              <div class="thumbnail-container">
                                <div class="product-image">
                                  <a href="categories/2-9-brown-bear-printed-sweater.html#/1-size-s" class="thumbnail product-thumbnail">
                                    <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/32-home_default/brown-bear-printed-sweater.jpg" alt = "Fusce eu metus" data-full-size-image-url = "../32-large_default/brown-bear-printed-sweater.jpg">
                                    <span class="product-additional" data-idproduct="2"></span>
                                  </a> 
                                  <ul class="product-flags">
                                    <li class="product-flag on-sale">On sale!</li>
                                    <li class="product-flag new">New</li>
                                  </ul>
                                  <div class="quickview no-variants hidden-md-down">
                                    <a href="#" class="quick-view btn-product btn" data-link-action="quickview"> <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span> <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name"><a href="categories/2-9-brown-bear-printed-sweater.html#/1-size-s">Fusce eu metus</a></h3>
                                <div class="product-price-and-shipping ">
                                  <span class="sr-only">Price</span>
                                  <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="35.9">$35.90</span>
                                  </span>
                                </div>
                                <div class="product-description-short" itemprop="description">Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort. </div>
                                <div class="functional-buttons clearfix">
                                  <div class="compare">
                                    <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="2" title="Add to Compare">
                                      <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-compare-bt-content">
                                        <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                        <span class="name-btn-product">Add to Compare</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="button-container cart">
                                    <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                      <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                      <input type="hidden" value="1200" class="quantity_product quantity_product_2" name="quantity_product">
                                      <input type="hidden" value="1" class="minimal_quantity minimal_quantity_2" name="minimal_quantity">
                                      <input type="hidden" value="9" class="id_product_attribute id_product_attribute_2" name="id_product_attribute">
                                      <input type="hidden" value="2" class="id_product" name="id_product">
                                      <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                      <input type="hidden" class="input-group form-control qty qty_product qty_product_2" name="qty" value="1" data-min="1">
                                      <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_2" data-button-action="add-to-cart" type="submit">
                                        <span class="leo-loading cssload-speeding-wheel"></span>
                                        <span class="leo-bt-cart-content">
                                          <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                          <span class="name-btn-product">Add to cart</span>
                                        </span>
                                      </button>
                                    </form>
                                  </div>
                                  <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="2" data-id-product-attribute="9" title="Add to Wishlist">
                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-wishlist-bt-content">
                                        <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                        <span class="name-btn-product">Add to Wishlist</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </div>
                        <div class="item">
    		                  <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                              <div class="product-image">
                                <a href="shop-eyeglasses/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
                                  <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt = "Etiam aliquet felis" data-full-size-image-url = "../35-large_default/the-best-is-yet-to-come-framed-poster.jpg">
                                  <span class="product-additional" data-idproduct="3"></span>
                                </a>
                                <ul class="product-flags">
                                  <li class="product-flag new">New</li>
                                </ul>
                                <div class="quickview no-variants hidden-md-down">
                                  <a href="#" class="quick-view btn-product btn" data-link-action="quickview">
                                    <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                    <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name"><a href="shop-eyeglasses/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm">Etiam aliquet felis</a></h3>
                                <div class="product-price-and-shipping ">
                                  <span class="sr-only">Price</span>
                                  <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                  </span>
                                </div>
                                <div class="product-description-short" itemprop="description">Printed on rigid matt paper and smooth surface.</div>
                                <div class="functional-buttons clearfix">
                                  <div class="compare">
                                    <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="3" title="Add to Compare">
                                      <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-compare-bt-content">
                                        <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                        <span class="name-btn-product">Add to Compare</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="button-container cart">
                                    <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                      <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                      <input type="hidden" value="900" class="quantity_product quantity_product_3" name="quantity_product">
                                      <input type="hidden" value="1" class="minimal_quantity minimal_quantity_3" name="minimal_quantity">
                                      <input type="hidden" value="13" class="id_product_attribute id_product_attribute_3" name="id_product_attribute">
                                      <input type="hidden" value="3" class="id_product" name="id_product">
                                      <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                      <input type="hidden" class="input-group form-control qty qty_product qty_product_3" name="qty" value="1" data-min="1">
                                      <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_3" data-button-action="add-to-cart" type="submit">
                                        <span class="leo-loading cssload-speeding-wheel"></span>
                                        <span class="leo-bt-cart-content">
                                          <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                          <span class="name-btn-product">Add to cart</span>
                                        </span>
                                      </button>
                                    </form>
                                  </div>
                                  <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="3" data-id-product-attribute="13" title="Add to Wishlist">
                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-wishlist-bt-content">
                                        <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                        <span class="name-btn-product">Add to Wishlist</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </div>
                        <div class="item">
                          <article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                              <div class="product-image">
                                <a href="home-accessories/6-mug-the-best-is-yet-to-come.html" class="thumbnail product-thumbnail">
                                  <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/41-home_default/mug-the-best-is-yet-to-come.jpg" alt = "Sed pellentesque" data-full-size-image-url = "../41-large_default/mug-the-best-is-yet-to-come.jpg">
                                  <span class="product-additional" data-idproduct="6"></span>
                                </a>
                                <ul class="product-flags">
                                  <li class="product-flag discount">Reduced price</li>
                                  <li class="product-flag new">New</li>
                                </ul>
                                <div class="quickview no-variants hidden-md-down">
                                  <a href="#" class="quick-view btn-product btn" data-link-action="quickview">
                                    <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                    <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name"><a href="home-accessories/6-mug-the-best-is-yet-to-come.html">Sed pellentesque</a></h3>
                                <div class="product-price-and-shipping has_discount">
                                  <span class="sr-only">Regular price</span>
                                  <span class="regular-price">$11.90</span>
                                  <span class="discount-percentage">-7%</span>
                                  <span class="sr-only">Price</span>
                                  <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.07">$11.07</span>
                                  </span>
                                </div>
                                <div class="product-description-short" itemprop="description">White Ceramic Mug, 325ml.</div>
                                <div class="functional-buttons clearfix">
                                  <div class="compare">
                                    <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="6" title="Add to Compare">
                                      <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-compare-bt-content">
                                        <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                        <span class="name-btn-product">Add to Compare</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="button-container cart">
                                    <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                      <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                      <input type="hidden" value="300" class="quantity_product quantity_product_6" name="quantity_product">
                                      <input type="hidden" value="1" class="minimal_quantity minimal_quantity_6" name="minimal_quantity">
                                      <input type="hidden" value="0" class="id_product_attribute id_product_attribute_6" name="id_product_attribute">
                                      <input type="hidden" value="6" class="id_product" name="id_product">
                                      <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                      <input type="hidden" class="input-group form-control qty qty_product qty_product_6" name="qty" value="1" data-min="1">
                                      <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_6" data-button-action="add-to-cart" type="submit">
                                        <span class="leo-loading cssload-speeding-wheel"></span>
                                        <span class="leo-bt-cart-content">
                                          <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                          <span class="name-btn-product">Add to cart</span>
                                        </span>
                                      </button>
                                    </form>
                                  </div>
                                  <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="6" data-id-product-attribute="0" title="Add to Wishlist">
                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-wishlist-bt-content">
                                        <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                        <span class="name-btn-product">Add to Wishlist</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      ap_list_functions.push(function(){
                        if($('#carousel-1708497639').parents('.tab-pane').length)
                        {		
                          if(!$('#carousel-1708497639').parents('.tab-pane').hasClass('active'))
                          {
                            var width_owl_active_tab = $('#carousel-1708497639').parents('.tab-pane').siblings('.active').find('.owl-carousel').width(); $('#carousel-1708497639').width(width_owl_active_tab);
                          }
                        }
                        $('#carousel-1708497639').imagesLoaded( function() {
                          $('#carousel-1708497639').owlCarousel({
                            items :             3,
                            itemsDesktop :      [1200,3],
                            itemsDesktopSmall : [992,3],
                            itemsTablet :       [768,2],
                            itemsMobile :       [576,1],
                            itemsCustom :       false,
                            singleItem :        false,       // true : show only 1 item
                            itemsScaleUp :      false,
                            slideSpeed :        200,        //  change speed when drag and drop a item
                            paginationSpeed :   800,       // change speed when go next page
                            autoPlay :          false,       // time to show each item
			                      stopOnHover :       false,
			                      navigation :        true,
			                      navigationText :    ["&lsaquo;", "&rsaquo;"],
                            scrollPerPage :     false,
                            pagination :        true,       // show bullist
                            paginationNumbers : false,       // show number
                            responsive :        true,
                            responsiveRefreshRate : 0,
                            lazyLoad :          false,
                            lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                            lazyEffect :        "fade",
                            autoHeight :        false,
                            mouseDrag :         true,
                            touchDrag :         true,
                            addClassActive :    true,
                            direction:          false,
                            afterInit: OwlLoaded,
                            afterAction : SetOwlCarouselFirstLast,
                          });
                        });
                      });
                      function OwlLoaded(el){
                        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                        if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
                          el.width('100%');
                      };
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper"      >
          <div class="container">
            <div class="row no-margin ApRow  has-bg bg-boxed" data-bg=" no-repeat" style="background: no-repeat;margin-bottom: 30px;">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12 border-20-st1 no-padding ApColumn ">
                <div class="block products_block exclusive appagebuilder title-center product-boxshadow-off ApProductCarousel">
                  <h4 class="title_block">
                    For womens
                  </h4>
                  <div class="block_content">
                    <div class="owl-row">
                      <div class="timeline-wrapper clearfix prepare" data-item="1" data-xl="1" data-lg="1" data-md="1" data-sm="1" data-m="1">
                        <div class="timeline-parent">
                          <div class="timeline-item">
                            <div class="animated-background">					
                              <div class="background-masker content-top"></div>							
                              <div class="background-masker content-second-line"></div>							
                              <div class="background-masker content-third-line"></div>							
                              <div class="background-masker content-fourth-line"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="carousel-2856905916" class="owl-carousel owl-theme owl-loading profile-default">
                        <div class="item first">
                          <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="45" itemscope itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                              <div class="product-image">
                                <a href="men/1-45-hummingbird-printed-t-shirt.html#/18-color-pink" class="thumbnail product-thumbnail">
                                  <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/24-home_default/hummingbird-printed-t-shirt.jpg" alt = "Quisque rhoncus" data-full-size-image-url = "{{asset('/')}}/header_assets/img/24-large_default/hummingbird-printed-t-shirt.jpg">
                                  <span class="product-additional" data-idproduct="1"></span>
                                </a>
                                <ul class="product-flags">
                                  <li class="product-flag on-sale">On sale!</li>
                                  <li class="product-flag new">New</li>
                                </ul>
                                <div class="quickview hidden-md-down">
                                  <a href="" class="quick-view btn-product btn" data-link-action="quickview">
                                    <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                    <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name"><a href="men/1-45-hummingbird-printed-t-shirt.html#/18-color-pink">Quisque rhoncus</a></h3>
                                <div class="product-price-and-shipping ">
                                  <span class="sr-only">Price</span>
                                  <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="23.9">$23.90</span>
                                  </span>
                                </div>
                                <div class="product-description-short" itemprop="description">Donec fringilla sapien sed elit luctus, eget mattis dolor efficitur. Ut id libero nulla. Morbi aliquam tortor massa, in aliquet eros molestie in....</div>
                                <div class="functional-buttons clearfix">
                                  <div class="compare">
                                    <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="1" title="Add to Compare">
                                      <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-compare-bt-content">
                                        <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                        <span class="name-btn-product">Add to Compare</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="button-container cart">
                                    <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                      <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                      <input type="hidden" value="300" class="quantity_product quantity_product_1" name="quantity_product">
                                      <input type="hidden" value="1" class="minimal_quantity minimal_quantity_1" name="minimal_quantity">
                                      <input type="hidden" value="45" class="id_product_attribute id_product_attribute_1" name="id_product_attribute">
                                      <input type="hidden" value="1" class="id_product" name="id_product">
                                      <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                      <input type="hidden" class="input-group form-control qty qty_product qty_product_1" name="qty" value="1" data-min="1">
                                      <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_1" data-button-action="add-to-cart" type="submit">
                                        <span class="leo-loading cssload-speeding-wheel"></span>
                                        <span class="leo-bt-cart-content">
                                          <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                          <span class="name-btn-product">Add to cart</span>
                                        </span>
                                      </button>
                                    </form>
                                  </div>
                                  <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="1" data-id-product-attribute="45" title="Add to Wishlist">
                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-wishlist-bt-content">
                                        <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                        <span class="name-btn-product">Add to Wishlist</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </div>
                        <div class="item">
                          <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="45" itemscope itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                              <div class="product-image">
                                <a href="men/1-45-hummingbird-printed-t-shirt.html#/18-color-pink" class="thumbnail product-thumbnail">
                                  <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/24-home_default/hummingbird-printed-t-shirt.jpg" alt = "Quisque rhoncus" data-full-size-image-url = "{{asset('/')}}/header_assets/img/24-large_default/hummingbird-printed-t-shirt.jpg">
                                  <span class="product-additional" data-idproduct="1"></span>
                                </a>
                                <ul class="product-flags">
                                  <li class="product-flag on-sale">On sale!</li>
                                  <li class="product-flag new">New</li>
                                </ul>
                                <div class="quickview hidden-md-down">
                                  <a href="" class="quick-view btn-product btn" data-link-action="quickview">
                                    <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                    <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name"><a href="men/1-45-hummingbird-printed-t-shirt.html#/18-color-pink">Quisque rhoncus</a></h3>
                                <div class="product-price-and-shipping ">
                                  <span class="sr-only">Price</span>
                                  <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="23.9">$23.90</span>
                                  </span>
                                </div>
                                <div class="product-description-short" itemprop="description">Donec fringilla sapien sed elit luctus, eget mattis dolor efficitur. Ut id libero nulla. Morbi aliquam tortor massa, in aliquet eros molestie in....</div>
                                <div class="functional-buttons clearfix">
                                  <div class="compare">
                                    <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="1" title="Add to Compare">
                                      <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-compare-bt-content">
                                        <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                        <span class="name-btn-product">Add to Compare</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="button-container cart">
                                    <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                      <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                      <input type="hidden" value="300" class="quantity_product quantity_product_1" name="quantity_product">
                                      <input type="hidden" value="1" class="minimal_quantity minimal_quantity_1" name="minimal_quantity">
                                      <input type="hidden" value="45" class="id_product_attribute id_product_attribute_1" name="id_product_attribute">
                                      <input type="hidden" value="1" class="id_product" name="id_product">
                                      <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                      <input type="hidden" class="input-group form-control qty qty_product qty_product_1" name="qty" value="1" data-min="1">
                                      <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_1" data-button-action="add-to-cart" type="submit">
                                        <span class="leo-loading cssload-speeding-wheel"></span>
                                        <span class="leo-bt-cart-content">
                                          <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                          <span class="name-btn-product">Add to cart</span>
                                        </span>
                                      </button>
                                    </form>
                                  </div>
                                  <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="1" data-id-product-attribute="45" title="Add to Wishlist">
                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-wishlist-bt-content">
                                        <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                        <span class="name-btn-product">Add to Wishlist</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </div>
                        <div class="item">
                          <article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                              <div class="product-image">
                                <a href="home-accessories/7-mug-the-adventure-begins.html" class="thumbnail product-thumbnail">
                                  <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/42-home_default/mug-the-adventure-begins.jpg" alt = "Ut bibendum" data-full-size-image-url = "{{asset('/')}}/header_assets/img/42-large_default/mug-the-adventure-begins.jpg">
                                  <span class="product-additional" data-idproduct="7"></span>
                                </a> 
                                <ul class="product-flags">
                                  <li class="product-flag discount">Reduced price</li>
                                  <li class="product-flag new">New</li>
                                </ul>
                                <div class="quickview no-variants hidden-md-down">
                                  <a href="#" class="quick-view btn-product btn" data-link-action="quickview">
                                    <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                    <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name"><a href="home-accessories/7-mug-the-adventure-begins.html">Ut bibendum</a></h3>
                                <div class="product-price-and-shipping has_discount"><span class="sr-only">Regular price</span>
                                  <span class="regular-price">$11.90</span>
                                  <span class="discount-percentage">-5%</span>
                                  <span class="sr-only">Price</span>
                                  <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.31">$11.31</span>
                                  </span>
                                </div>
                                <div class="product-description-short" itemprop="description">White Ceramic Mug. 325ml</div>
                                <div class="functional-buttons clearfix">
                                  <div class="compare">
                                    <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="7" title="Add to Compare">
                                      <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-compare-bt-content">
                                        <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                        <span class="name-btn-product">Add to Compare</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="button-container cart">
                                    <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                      <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                      <input type="hidden" value="300" class="quantity_product quantity_product_7" name="quantity_product">
                                      <input type="hidden" value="1" class="minimal_quantity minimal_quantity_7" name="minimal_quantity">
                                      <input type="hidden" value="0" class="id_product_attribute id_product_attribute_7" name="id_product_attribute">
                                      <input type="hidden" value="7" class="id_product" name="id_product">
                                      <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                      <input type="hidden" class="input-group form-control qty qty_product qty_product_7" name="qty" value="1" data-min="1">
                                      <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_7" data-button-action="add-to-cart" type="submit">
                                        <span class="leo-loading cssload-speeding-wheel"></span>
                                        <span class="leo-bt-cart-content">
                                          <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                          <span class="name-btn-product">Add to cart</span>
                                        </span>
                                      </button>
                                    </form>
                                  </div>
                                  <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="7" data-id-product-attribute="0" title="Add to Wishlist">
                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                      <span class="leo-wishlist-bt-content">
                                        <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                        <span class="name-btn-product">Add to Wishlist</span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      ap_list_functions.push(function(){
                        if($('#carousel-2856905916').parents('.tab-pane').length)
                        {		
                          if(!$('#carousel-2856905916').parents('.tab-pane').hasClass('active'))
                          {
                            var width_owl_active_tab = $('#carousel-2856905916').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();		
                            $('#carousel-2856905916').width(width_owl_active_tab);
                          }
                        }
                        $('#carousel-2856905916').imagesLoaded( function() {
                          $('#carousel-2856905916').owlCarousel({
                            items :             1,
			                      itemsDesktop :      [1200,1],
			                      itemsDesktopSmall : [992,1],
			                      itemsTablet :       [768,1],
		                      	itemsMobile :       [576,1],
		                      	itemsCustom :       false,
		                      	singleItem :        false,       // true : show only 1 item
		                      	itemsScaleUp :      false,
			                      slideSpeed :        200,        //  change speed when drag and drop a item
		                      	paginationSpeed :   800,       // change speed when go next page
		                      	autoPlay :          false,       // time to show each item
		                      	stopOnHover :       false,
		                      	navigation :        true,
			                      navigationText :    ["&lsaquo;", "&rsaquo;"],
		                      	scrollPerPage :     false,
		                      	pagination :        false,       // show bullist
		                      	paginationNumbers : false,       // show number
		                      	responsive :        true,
			                      responsiveRefreshRate : 0,
		                      	lazyLoad :          false,
		                      	lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
		                      	lazyEffect :        "fade",
		                      	autoHeight :        false,
		                      	mouseDrag :         true,
		                      	touchDrag :         true,
		                      	addClassActive :    true,
		                      	direction:          false,
		                      	afterInit: OwlLoaded,
		                      	afterAction : SetOwlCarouselFirstLast,
                          });
                        });
                      });
                      function OwlLoaded(el){
                        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                        if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
                          el.width('100%');
                      };
                    </script>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12 border-20-st2 no-padding ApColumn ">
                <div class="block products_block exclusive appagebuilder title-center product-boxshadow-off ApProductCarousel">
                  <h4 class="title_block">
                    For Mens
                  </h4>
                  <div class="block_content">	
                    <div class="owl-row">
                      <div class="timeline-wrapper clearfix prepare" data-item="1"  data-xl="1" data-lg="1" data-md="1" data-sm="1" data-m="1">
                        <div class="timeline-parent">
                          <div class="timeline-item">
                            <div class="animated-background">					
                              <div class="background-masker content-top"></div>							
                              <div class="background-masker content-second-line"></div>							
                              <div class="background-masker content-third-line"></div>							
                              <div class="background-masker content-fourth-line"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="carousel-3291173367" class="owl-carousel owl-theme owl-loading profile-default">
                        <div class="item first">
                          <article class="product-miniature js-product-miniature" data-id-product="12"data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                              <div class="product-image">
                                <a href="shop-eyeglasses/12-mountain-fox-vector-graphics.html" class="thumbnail product-thumbnail">
                                  <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/53-home_default/mountain-fox-vector-graphics.jpg" alt = "Donec egestas ex" data-full-size-image-url = "https://apollotran.com/demo/at_glasses_demo/53-large_default/mountain-fox-vector-graphics.jpg">
                                  <span class="product-additional" data-idproduct="12"></span>
                                </a>
                                <ul class="product-flags">
                                  <li class="product-flag new">New</li>
                                </ul>
                                <div class="quickview no-variants hidden-md-down">
                                  <a href="#" class="quick-view btn-product btn" data-link-action="quickview"><span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                    <span class="leo-quickview-bt-content">
                                      <i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
                                      <span class="name-btn-product">Quick view</span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="product-meta">
                                <h3 class="h3 product-title" itemprop="name">
                                  <a href="shop-eyeglasses/12-mountain-fox-vector-graphics.html">Donec egestas ex</a></h>
                                  <div class="product-price-and-shipping ">
                                    <span class="sr-only">Price</span>
                                    <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                      <span itemprop="priceCurrency" content="USD"></span>
                                      <span itemprop="price" content="9">$9.00
                                      </span>
                                    </span>
                                  </div>
                                  <div class="product-description-short" itemprop="description">Vector graphic, format: svg. Download for personal, private and non-commercial use.</div>
                                  <div class="functional-buttons clearfix">
                                    <div class="compare">
                                      <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="12" title="Add to Compare">
                                        <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                        <span class="leo-compare-bt-content">
                                          <i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
                                          <span class="name-btn-product">Add to Compare</span>
                                        </span>
                                      </a>
                                    </div>
                                    <div class="button-container cart">
                                      <form action="https://apollotran.com/demo/at_glasses_demo/en/cart" method="post">
                                        <input type="hidden" name="token" value="c14b795a713c734520330e8dfc58fcb8">
                                        <input type="hidden" value="300" class="quantity_product quantity_product_12" name="quantity_product">
                                        <input type="hidden" value="1" class="minimal_quantity minimal_quantity_12" name="minimal_quantity">
                                        <input type="hidden" value="0" class="id_product_attribute id_product_attribute_12" name="id_product_attribute">
                                        <input type="hidden" value="12" class="id_product" name="id_product">
                                        <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                        <input type="hidden" class="input-group form-control qty qty_product qty_product_12" name="qty" value="1" data-min="1">
                                        <button class="btn btn-product add-to-cart leo-bt-cart leo-bt-cart_12" data-button-action="add-to-cart" type="submit">
                                          <span class="leo-loading cssload-speeding-wheel"></span>
                                          <span class="leo-bt-cart-content">
                                            <i class="icon-btn-product icon-cart material-icons shopping-cart">&#xE547;</i>
                                            <span class="name-btn-product">Add to cart</span>
                                          </span>
                                        </button>
                                      </form>
                                    </div>
                                    <div class="wishlist">
                                      <a class="leo-wishlist-button btn-product btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="12" data-id-product-attribute="0" title="Add to Wishlist">
                                        <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                        <span class="leo-wishlist-bt-content">
                                          <i class="icon-btn-product icon-wishlist material-icons">&#xE87D;</i>
                                          <span class="name-btn-product">Add to Wishlist</span>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
                        ap_list_functions.push(function(){
                          if($('#carousel-3291173367').parents('.tab-pane').length)
                          {		
                            if(!$('#carousel-3291173367').parents('.tab-pane').hasClass('active'))
                            {
                              var width_owl_active_tab = $('#carousel-3291173367').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();		
                              $('#carousel-3291173367').width(width_owl_active_tab);
                            }
                          }
                          $('#carousel-3291173367').imagesLoaded( function() {
                            $('#carousel-3291173367').owlCarousel({
                              items :             1,
                              itemsDesktop :      [1200,1],
                              itemsDesktopSmall : [992,1],
                              itemsTablet :       [768,1],
                              itemsMobile :       [576,1],
                              itemsCustom :       false,
                              singleItem :        false,       // true : show only 1 item
                              itemsScaleUp :      false,
                              slideSpeed :        200,        //  change speed when drag and drop a item
                              paginationSpeed :   800,       // change speed when go next page
                              autoPlay :          false,       // time to show each item
                              stopOnHover :       false,
                              navigation :        true,
                              navigationText :    ["&lsaquo;", "&rsaquo;"],
                              scrollPerPage :     false,
                              pagination :        false,       // show bullist
                              paginationNumbers : false,       // show number
                              responsive :        true,
                              responsiveRefreshRate : 0,
                              lazyLoad :          false,
                              lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                              lazyEffect :        "fade",
                              autoHeight :        false,
                              mouseDrag :         true,
                              touchDrag :         true,
                              addClassActive :    true,
                              direction:          false,
                              afterInit: OwlLoaded,
                              afterAction : SetOwlCarouselFirstLast,
                            });
                          });
                        });
                        function OwlLoaded(el){
                          el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                          if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
                            el.width('100%');
                        };
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper" style="background: #f3f7fc no-repeat"     >
            <div class="container grp-testi-banner">
              <div class="row no-margin ApRow  has-bg bg-fullwidth-container"style="">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12 no-padding ApColumn ">
                  <div class="block block_carousel exclusive appagebuilder block-testimonial type-2 ApBlockCarousel">
                    <div class="block_content">
                      <div class="owl-row">
                        <!-- <div class="timeline-wrapper clearfix prepare" data-item="1" data-xl="1" data-lg="1" data-md="1" data-sm="1" data-m="1">
                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">					
                                <div class="background-masker content-top"></div>							
                                <div class="background-masker content-second-line"></div>							
                                <div class="background-masker content-third-line"></div>							
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        <div class="container">
                          <div class="item">
                            <!-- <div class="block-carousel-container"> -->
                              <div class="left-block">
                                <!-- <div class="block-carousel-image-container image"> -->
                                  <div class="ap-more-info" data-id="1"></div>
                                  <!-- <img class="img-fluid" src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/ava_1.png" alt="&lt;span class=&quot;name&quot;&gt;Ls. Luna&lt;/span&gt;  Photographer"/> -->
                                  <div class="descript">“ Excellent service – Jyotsna has provided quality content and articles for my business website.  Her work has always been ”</div>
                                <!-- </div> -->
                              </div>
                            <!-- </div> -->
                          </div>
                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <!-- <div class="block-carousel-image-container image"> -->
                                  <div class="ap-more-info" data-id="2"></div>
                                  <!-- <img class="img-fluid" src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/ava_2.png" alt="&lt;span class=&quot;name&quot;&gt;C. Katty&lt;/span&gt;  Designer"/> -->
                                <!-- </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
                        ap_list_functions.push(function(){
                          $('#carousel-2357000497').imagesLoaded( function() {
                            $('#carousel-2357000497').owlCarousel({
                              items :             1,
                              itemsDesktop :      [1200,1],
                              itemsDesktopSmall : [992,1],
                              itemsTablet :       [768,1],
                              itemsMobile :       [576,1],
                              itemsCustom :       false,
                              singleItem :        false,       // true : show only 1 item
                              itemsScaleUp :      false,
                              slideSpeed :        200,        //  change speed when drag and drop a item
                              paginationSpeed :   800,       // change speed when go next page
                              autoPlay :          false,       // time to show each item
                              stopOnHover :       false,
                              navigation :        false,
                              navigationText :    ["&lsaquo;", "&rsaquo;"],
                              scrollPerPage :     false,
                              pagination :        true,       // show bullist
                              paginationNumbers : false,       // show number
                              responsive :        true,
                              lazyLoad :          false,
                              lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                              lazyEffect :        "fade",
                              autoHeight :        false,
                              mouseDrag :         true,
                              touchDrag :         true,
                              addClassActive :    true,
                              direction:          false,
                              afterInit: OwlLoaded,
                              afterAction : SetOwlCarouselFirstLast,
                            });
                          });
                        });
                        function OwlLoaded(el){
                          el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                        };
                      </script>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12 no-padding ApColumn ">
                  <div id="image-form_8759504788968302" class="block effect-flash no-margin text-xs-center ApImage">
                    <a href="#" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner1_h6.jpg" class="img-fluid "title=""alt="banner" style=" width:auto; height:auto" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



@endsection