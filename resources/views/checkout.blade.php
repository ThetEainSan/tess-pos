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
                @foreach ($carts as $cart)
                    <div class="relative full-width product-in-cart border no-border-l no-border-r overfollow-hidden">
                        <div class="relative product-in-cart-col-1 center-vertical-image">
                            @php
                                $inventory = App\Models\Inventory::find($cart->inventory_id);
                            @endphp
                            @if ($inventory->FOD == 'foods')
                                <img src="{{ asset(env('ADMINSITE_URL') .'img/food/'. $inventory->image) }}" alt="">
                            @else
                                <img src="{{ asset(env('ADMINSITE_URL') .'img/drink/'. $inventory->image) }}" alt="">
                            @endif
                        </div>
                        <div class="relative product-in-cart-col-2" style="padding-left: 20px">
                            @if ($cart-> quantity <= 1)
                                <p class="title-hover-black"><a href="#" class="animate-default">{{ $inventory->name }}<span class="text-info"> ({{ $cart->quantity }} unit)</span></a></p>
                            @else
                                <p class="title-hover-black"><a href="#" class="animate-default">{{ $inventory->name }}<span class="text-info"> ({{ $cart->quantity }} units)</span></a></p>
                            @endif                           
                        </div>
                        <div class="relative product-in-cart-col-3">
                            <br>
                            <br>
                            <p class="text-red price-shoping-cart">
                                @php
                                    $price = ($cart->quantity) * ($inventory->price)
                                @endphp
                                {{ $price }} MMK
                            </p>
                        </div>
                    </div>
                @endforeach
                
                <aside class="btn-shoping-cart justify-content top-margin-default bottom-margin-default">
                    {{-- <a href="#" class="clear-margin animate-default">Continue Shopping</a> --}}
                    <a href="{{ route('deleteCart') }}" class="btn-proceed-checkout button-hover-red full-width top-margin-15-default">Delete Cart</a>
                </aside>
            </div>
            <!-- End Content Shoping Cart -->
            <!-- Content Right -->
            <div class="col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right">
                {{-- <p class="title-shoping-cart">Coupon</p>
                <div class="full-width relative coupon-code bg-gray  clearfix">
                    <input type="text" class="full-width" name="coupon_code" placeholder="Coupon Code">
                    <button class="full-width top-margin-15-default">APPLY COUPON</button>
                </div> --}}
                <p class="title-shoping-cart">Total</p>
                <div class="full-width relative cart-total bg-gray  clearfix">
                    <div class="relative justify-content bottom-padding-15-default border no-border-b no-border-r no-border-l">
                        <p>Subtotal</p>
                        <p class="text-red price-shoping-cart">{{ $sub_price }} MMK</p>
                    </div>
                    <div class="relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l">
                        <p>Tax</p>
                        <p class="text-red price-shoping-cart">{{ $tax }} %</p>
                    </div>
                    <div class="relative justify-content top-margin-15-default">
                        <p class="bold">Total</p>
                        <p class="text-red price-shoping-cart">{{ $total_price }} MMK</p>
                    </div>
                </div>
                <a href="{{ route('checkoutConfirm', ['total_price' => $total_price]) }}">
                    <button class="btn-proceed-checkout full-width top-margin-15-default" style="background-color: grey">Proceed to Checkout</button>
                </a>               
            </div>
            <!-- End Content Right -->
        </div>
    </div>
</div>
<!-- End Content Shoping Cart -->
@endsection

@section('scripts')
    
@endsection