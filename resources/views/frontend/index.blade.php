@extends('frontend.layouts.app')
@section('content')

<section id="wrapper">
    <style>
        .iview-control{
            opacity:0;
        }
    </style>
      <div class="row">
        <div id="content-wrapper" class="col-lg-12 col-xs-12">
          <section id="main">
            <section id="content" class="page-home">
              <div class="row ApRow  " style="">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    
                  <div class="ApSlideShow">
                    <div class="bannercontainer banner-fullwidth" style="padding: 0px;margin: 0px;">
                      <div class="iview iview-group-5e8bbc9aa1464-4">
                        <div class="slide_config " data-leo_image="{{asset('/')}}/themes/csss/modules/leoslideshow/slideimage.jpg "data-leo_pausetime="5000" data-leo_thumbnail="{{asset('/')}}/themes/csss/modules/leoslideshow/slideimage.jpg" data-leo_background="image">
                          <div class="tp-caption " data-x="645" data-y="345">
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
              <div class="wrapper col-md-12" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg2_h6.jpg') repeat-x center top">
              <div class="container">
              <div class="row ApRow  has-bg bg-fullwidth-container" style="padding-top: 25px">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-6  ApColumn ">
                  <div id="image-form_12436769327409448" class="block effect-flash banner-st2-left ApImage">
                    <a href="menglasses" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner4_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto; " />
                    </a>
                    
                  </div>
                </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-sp-6  ApColumn ">
                  <div id="image-form_1612629365992643" class="block effect-flash banner-st2-right ApImage">
                    <a href="womenglasses" >
                      <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner3_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
            </div>


            
            
          <!--  <div class="wrapper">-->
          <!--    <div class="container">-->
          <!--      <div class="row grp-banner1 ApRow  has-bg bg-boxed" data-bg=" url(/demo/at_glasses_demo/themes/at_glasses/assets/img/modules/appagebuilder/images/bg_h1.jpg) no-repeat center top" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg_h1.jpg') no-repeat center top;">-->
          <!--        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12  ApColumn ">-->
          <!--          <div class="block text-absolute-2 ApRawHtml">-->
          <!--            <span class="title">Be Creative.</span>-->
          <!--            <p>MUNIC’s new collection’s highlights are fine, thin frames in noble gold hues. The filigree styles are made of titan and come with trend colors such as rosé gold and white gold which are classic but different.</p>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12  ApColumn ">-->
          <!--          <div id="image-form_5435136733717544" class="block image-absolute ApImage">-->
          <!--            <a href="#" >-->
          <!--              <img src="{{asset('/')}}/themes/csss/modules/appagebuilder/images/banner2_h6.jpg" class="img-fluid " title="" alt="banner" style=" width:auto; height:auto" />-->
          <!--            </a>-->
          <!--          <div class='image_description'>-->
          <!--            <p>-->
          <!--              <a class="btn btn-default" href="#">discover now</a>-->
          <!--            </p>-->
          <!--          </div>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          
        
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
                                  <div class="descript" style="position:relative; margin-top:40px;">“ Excellent quality in glasses that you will not regret ”</div>
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