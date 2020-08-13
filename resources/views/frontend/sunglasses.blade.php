@extends('frontend.layouts.app')
@section('content')

<div class="wrapper" style="background: url('{{asset('/')}}/themes/csss/modules/appagebuilder/images/bg2_h6.jpg') repeat-x center top">
              <div class="container">
              <div class="row ApRow  has-bg bg-fullwidth-container" style="padding-top: 95px;"        >
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



@endsection