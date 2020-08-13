@extends('frontend.layouts.app')
@section('content')
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
    <img class="img-fluid" src="{{asset('/')}}/themes/csss/men-glasses.jpg" alt="Men Glasses">
      <div class="category-name-cover">
        <h1 class="h1 category-name">Men Glasses</h1>
        <p class="products-counter">6 items</p>
      </div>
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
          <a itemprop="item" href="menglasses">
            <span itemprop="name">Men Glasses</span>
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

    <div id="content-wrapper" class="left-column col-xs-12 col-sm-12">
      <section id="main">
        <div class="block-category">  
          <div id="category-description" class="text-muted">
            <p>
             <center>
               <span style="font-size:10pt;font-family:Arial;font-style:normal;">Items and accessories for your desk, kitchen or living room. Make your house a home with our eye-catching designs. </span>
             </center> 
            </p>
          </div>
        </div>
        <section id="products">
          <div id="">
            <div id="js-product-list-top" class="products-selection">
              <div class="row">
                <div class="col-lg-8 col-md-3 hidden-sm-down total-products">     
                  <div class="display">
                    <div id="grid" class="leo_grid selected">
                      <a rel="nofollow" href="#" title="Grid">
                        <i class="icon-grid icons"></i>
                      </a>
                    </div>
                    <div id="list" class="leo_list ">
                      <a rel="nofollow" href="#" title="List">
                        <i class="icon-list icons"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-9">
                  <div class="row sort-by-row">
                    <div class="col-sm-12 col-xs-12 col-sp-12 col-md-12 products-sort-order dropdown">
                      <a class="btn-unstyle select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relevance
                        <i class="fa fa-angle-down float-xs-right"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a rel="nofollow" href="6-men-glassesf917.html?order=product.position.asc" class="select-list current js-search-link">
                          Relevance
                        </a>
                        <a rel="nofollow" href="6-men-glassesfe2d.html?order=product.name.asc" class="select-list js-search-link">Name, A to Z
                        </a>
                        <a rel="nofollow" href="6-men-glasses0279.html?order=product.name.desc" class="select-list js-search-link">Name, Z to A
                        </a>
                        <a rel="nofollow" href="6-men-glasses8eb3.html?order=product.price.asc" class="select-list js-search-link">Price, low to high
                        </a>
                        <a rel="nofollow" href="6-men-glasses04e6.html?order=product.price.desc" class="select-list js-search-link">Price, high to low
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-sm-12 hidden-lg-up text-xs-center showing">
                  Showing 1-6 of 6 item(s)
                </div>
              </div>
            </div>
          </div>
          <div id="">
            <div id="js-product-list">
              <div class="products">  
                <div  class="product_list grid  profile-default ">
                  <div class="row">
                    <div class="ajax_block_product col-sp-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 first-in-line first-item-of-tablet-line last-item-of-mobile-line">
                      <article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                        <div class="thumbnail-container">
                          <div class="product-image">
                            <a href="menglassesdetails" class="thumbnail product-thumbnail">
                              <img class="img-fluid" src = "{{asset('/')}}/header_assets/img/42-home_default/mug-the-adventure-begins.jpg" alt = "Ut bibendum" data-full-size-image-url = "{{asset('/')}}/header_assets/img/42-large_default/mug-the-adventure-begins.jpg">
                              <span class="product-additional" data-idproduct="7"></span>
                            </a> 
                            
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
                            <h3 class="h3 product-title" itemprop="name">
                              <a href="home-accessories/7-mug-the-adventure-begins.html">Ut bibendum</a>
                            </h3>
                            
                            
                            <div class="functional-buttons clearfix">
                              
                              
                              
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                    
                  </div>
                </div>
                <script>
                  if (window.jQuery) {
                    $(document).ready(function(){
                      if (prestashop.page.page_name == 'category'){
                        setDefaultListGrid();
                      }
                    });
                  }
                </script>   
              </div>
              <nav class="pagination">
                <div class="col-xs-12 col-md-12 col-lg-12">
                  
                </div>
              </nav>
              <div class="hidden-md-up text-xs-right up">
                <a href="#header" class="btn btn-secondary">
                  Back to top
                  <i class="material-icons">&#xE316;</i>
                </a>
              </div>
            </div>
          </div>
          <div id="js-product-list-bottom">
            <div id="js-product-list-bottom"></div>
          </div>
        </section>
      </section>
    </div>
  </div>
</div>
</section>


@endsection