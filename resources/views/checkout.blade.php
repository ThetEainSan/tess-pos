@extends('layouts.master')
@section('title', 'Checkout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/multirange.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cartpage.css') }}">
@endsection

@section('contents')
<!-- Content Shoping Cart -->
<div class="relative container-web">
    <div class="container">
        <div class="row relative">
            <!-- Content Shoping Cart -->
            <div class="col-md-8 col-sm-12 col-xs-12 relative left-content-shoping clear-padding-left">
                <p class="title-shoping-cart">Checkout</p>
                <div class="relative full-width product-in-cart border no-border-l no-border-r overfollow-hidden">
                    <div class="relative product-in-cart-col-1 center-vertical-image">
                        <img src="img/product_home_5-min.png" alt="">
                    </div>
                    <div class="relative product-in-cart-col-2">
                        <p class="title-hover-black"><a href="#" class="animate-default">Voyage Yoga Bag</a></p>
                    </div>
                    <div class="relative product-in-cart-col-3">
                        <span class="ti-close relative remove-product"></span>
                        <p class="text-red price-shoping-cart">$350.00</p>
                    </div>
                </div>
                <aside class="btn-shoping-cart justify-content top-margin-default bottom-margin-default">
                    <a href="#" class="clear-margin animate-default">Continue Shopping</a>
                    <a href="#" class="clear-margin animate-default">Update Cart</a>
                </aside>
            </div>
            <!-- End Content Shoping Cart -->
            <!-- Content Right -->
            <div class="col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right">
                <p class="title-shoping-cart">Coupon</p>
                <div class="full-width relative coupon-code bg-gray  clearfix">
                    <input type="text" class="full-width" name="coupon_code" placeholder="Coupon Code">
                    <button class="full-width top-margin-15-default">APPLY COUPON</button>
                </div>
                <p class="title-shoping-cart">Cart Total</p>
                <div class="full-width relative cart-total bg-gray  clearfix">
                    <div class="relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l">
                        <p>Subtotal</p>
                        <p class="text-red price-shoping-cart">$700.00</p>
                    </div>
                    <div class="relative border top-margin-15-default bottom-padding-15-default no-border-t no-border-r no-border-l">
                        <p class="bottom-margin-15-default">Shipping</p>
                        <div class="relative justify-content">
                            <ul class="check-box-custom title-check-box-black clear-margin clear-margin">
                                <li>
                                    <label>Free Shipping
                                        <input type="radio" name="shipping" checked="">
                                          <span class="checkmark"></span>
                                      </label>
                                </li>
                                <li>
                                    <label>Standard
                                        <input type="radio" name="shipping">
                                          <span class="checkmark"></span>
                                      </label>
                                </li>
                                <li>
                                    <label>Local Pickup
                                        <input type="radio" name="shipping">
                                          <span class="checkmark"></span>
                                      </label>
                                </li>
                            </ul>
                            <p class="price-gray-sidebar">$20.00</p>
                        </div>
                        <div onclick="optionShiping(this)" class="relative full-width select-ship-option justify-content top-margin-15-default">
                            <p class="border no-border-r no-border-l no-border-t">Calculate Shipping</p>
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <ul class="clear-margin absolute full-width">
                                <li onclick="selectOptionShoping(this)">Calculate Shipping 1</li>
                                <li onclick="selectOptionShoping(this)">Calculate Shipping 2</li>
                                <li onclick="selectOptionShoping(this)">Calculate Shipping 3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative justify-content top-margin-15-default">
                        <p class="bold">Total</p>
                        <p class="text-red price-shoping-cart">$700.00</p>
                    </div>
                </div>
                <button class="btn-proceed-checkout button-hover-red full-width top-margin-15-default">Proceed to Checkout</button>
            </div>
            <!-- End Content Right -->
        </div>
    </div>
</div>
<!-- End Content Shoping Cart -->
@endsection

@section('scripts')
    
@endsection