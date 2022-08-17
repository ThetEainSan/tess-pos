@extends('layouts.master')
@section('title', 'POS')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/multirange.css') }}">
@endsection

@section('contents')
<div class="relative full-width">
    <!-- Breadcrumb -->
    <div class="container-web relative">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-web">
                    <ul class="clear-margin">
                        <li class="animate-default title-hover-red">Home</a></li>
                        <li class="animate-default title-hover-red">All Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Content Category -->
    <div class="relative container-web">
        <div class="container">
            <div class="row">
                <div class="col-md-12 relative clear-padding">                  
                    <div class="banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width">
                        <img src="img/slide_category_v2-min.png" alt=""/>
                    </div>
                </div>
            </div>
            <div class="row ">
                <!-- Sider Bar -->
                <div class="col-md-3 relative right-padding-default clear-padding" id="slide-bar-category">
                    <div class="col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
                        <p class="title-siderbar bold">CATEGORIES</p>
                        <ul class="clear-margin list-siderbar">
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Mobile & Tablet</a></li>
                            <li><a href="#">Electric Appliances</a></li>
                            <li><a href="#">Electronics & Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Health & Beauty</a></li>
                            <li><a href="#">Mother & Baby</a></li>
                            <li><a href="#">Books & Stationery</a></li>
                            <li><a href="#">Home & Life</a></li>
                            <li><a href="#">Sports & Outdoors</a></li>
                            <li><a href="#">Auto & Moto</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
                        <p class="title-siderbar bold">BRANDS</p>
                        <ul class="check-box-custom clear-margin clear-margin">
                            <li>
                                <label>Apple  (465)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>Asus  (344)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>Audio-Technica  (136)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>Belkin  (121)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>BlueStone  (258)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>Brother  (119)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>Canon  (205)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>China OEM  (113)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>Comet  (330)
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 relative border bottom-margin-default sider-bar-category">
                        <div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
                            <p class="title-siderbar bold">price</p>
                            <div class="range-slider">
                                <input value="50" min="0" max="1000" class="multi-range" type="range">						
                                <p class="text-range">Range: <span class="number-range"></span></p>
                            </div>
                        </div>
                        <div class="relative border no-border-t no-border-l no-border-r bottom-padding-default">
                            <p class="title-siderbar bold top-padding-default">color</p>
                            <ul class="check-box-custom list-color clearfix clear-margin">
                                <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                                  <li>
                                    <label>
                                        <input type="checkbox" >
                                          <span class="checkmark"></span>
                                      </label>
                                  </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <p class="title-siderbar bold top-padding-default">size</p>
                            <ul class="check-box-custom clear-margin">
                            <li>
                                <label>S
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>M
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>L
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>XL
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>XXL
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                            <li>
                                <label>XXXL
                                    <input type="checkbox" >
                                      <span class="checkmark"></span>
                                  </label>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix">
                        <div class="overfollow-hidden banners-effect5 relative center-vertical-image">
                            <img src="img/banner_siderbar-min.png" alt="Siderbar" />
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- End Sider Bar Box -->
                <!-- Content Category -->
                <div class="col-md-9 relative clear-padding">
                    <!-- Product Content Category -->
                    <div class="relative clearfix">
                        <div class="bar-category bottom-margin-default border no-border-r no-border-l no-border-t">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-4">
                                    <p class="title-category-page clear-margin">Electronic</p>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative">
                                    <p class=" float-left">Showing 1–20 of 75 results</p>
                                    <a href="#" class=" float-left active-view-bar"><span class="icon-bar-category border ti-layout-grid3"></span></a>
                                    <a href="#" class=" float-left"><span class="icon-bar-category border ti-layout-list-thumb"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_30-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Wayfarer Messenger Bag5</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_26-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Voyage Yoga Bag</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_8-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">MH02-Black09</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_27-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Impulse Duffle2</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_28-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Wayfarer Messenger Bag</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_29-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Rival Field Messenger</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_31-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">MH01-Black</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_32-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Impulse Duffle</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_33-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Endeavor Daytrip Backpack</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_4-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Emile Henry Braiserr21</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_5-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Diam Special1</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_14-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Diam Special08</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_22-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Mauris varius</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_23-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Maecenas justo ex</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_16-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Vel regione discere ut</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_24-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Beatvs Solo2 On-Ear</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_25-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Te eam iisque deseruisse</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                            <div class="image-product relative overfollow-hidden">
                                <div class="center-vertical-image">
                                    <img src="img/product_home_9-min.png" alt="Product">
                                </div>
                                <a href="#"></a>
                                <ul class="option-product animate-default">
                                    <li class="relative"><a href="#"><i class="data-icon data-icon-ecommerce icon-ecommerce-bag"></i></a></li>
                                    <li class="relative"><a href="#"><i class="data-icondata-icon-basic icon-basic-heart" aria-hidden="true"></i></a></li>
                                    <li class="relative"><a href="javascript:;" ><i class="data-icon data-icon-basic icon-basic-magnifier" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h3 class="title-product clearfix full-width title-hover-black"><a href="#">Vel regione discere ut</a></h3>
                            <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                            <div class="clearfix ranking-product-category ranking-color">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="pagging relative">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> First</a></li>
                                <li class="active-pagging"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="dots-pagging">. . .</li>
                                <li><a href="#">102</a></li>
                                <li><a href="#">Last <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Product Content Category -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sider Bar -->
</div>
    
@endsection