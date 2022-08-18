@extends('layouts.master')
@section('title', 'POS')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/multirange.css') }}">
@endsection

@section('contents')
<div class="relative full-width">
    <!-- Content Category -->
    <div class="relative container-web">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-12 relative clear-padding">                  
                    <div class="banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width">
                        <img src="" alt=""/>
                    </div>
                </div>
            </div> --}}
            <div class="row ">
                <!-- Sider Bar -->
                <div class="col-md-3 relative right-padding-default clear-padding" id="slide-bar-category">
                    <div class="col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
                        <p class="title-siderbar bold">CATEGORIES</p>
                        <ul class="clear-margin list-siderbar">
                            <li><a href="{{ route('categorySearch', ['category' => 'foods']) }}">Foods</a></li>
                            <li><a href="{{ route('categorySearch', ['category' => 'drinks']) }}">Drinks</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default">
                        <p class="title-siderbar bold">Types</p>
                        <ul class="clear-margin list-siderbar">
                            <li>Foods</li>
                            @php
                                $foodTypes = App\Models\Inventory::where('FOD', 'foods')->select('type')->distinct()->get();
                                $drinkTypes = App\Models\Inventory::where('FOD', 'drinks')->select('type')->distinct()->get();                               
                            @endphp
                            <ul style="padding-left: 10px">
                                @foreach ($foodTypes as $foodType)
                                    <li><a href="{{ route('typeSearch', ['type' => $foodType->type]) }}">{{ $foodType->type }}</a></li>
                                @endforeach                   
                            </ul>
                            <li>Drinks</li>
                            <ul style="padding-left: 10px">
                                @foreach ($drinkTypes as $drinkType)
                                <li><a href="{{ route('typeSearch', ['type' => $drinkType->type]) }}">{{ $drinkType->type }}</a></li>
                                @endforeach                   
                            </ul>
                        </ul>
                    </div>                  
                </div>
                <!-- End Sider Bar Box -->
                <!-- Content Category -->
                <div class="col-md-9 relative clear-padding">
                    <!-- Product Content Category -->
                    <div class="relative clearfix">
                        <div class="bar-category bottom-margin-default border no-border-r no-border-l no-border-t">
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-4">
                                    <h3 class="title-category-page clear-margin">Search Results</h3>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    @php
                                        $cart = App\Models\Cart::where('status', 'in')->first();
                                    @endphp
                                    @if ($cart != null)
                                        <a href="{{ route('checkout') }}">
                                            <button class="btn btn-warning">Checkout</button>
                                        </a>
                                    @else
                                        <a href="{{ route('checkout') }}">
                                            <button class="btn btn-warning" style="display: none;">Checkout</button>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @foreach ($datas as $data)
                            <div class="col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default">
                                <div class="image-product relative overfollow-hidden">
                                    @if ($data->FOD == 'foods')
                                        <div class="center-vertical-image">
                                            <img class="img-responsive" src="{{ env('ADMINSITE_URL').'img/food/'. $data->image }}" alt="Product"  />
                                        </div>
                                    @else
                                        <div class="center-vertical-image">
                                            <img class="img-responsive" src="{{ env('ADMINSITE_URL').'img/drink/'. $data->image }}" alt="Product"  />
                                        </div>
                                    @endif  
                                    <a href="#"></a>
                                    <ul class="option-product animate-default">
                                        <li class=""><a href="{{ route('addToCart', ['id' => $data->id]) }}">Order</a></li>
                                    </ul>
                                </div>
                                <h3 class="title-product clearfix full-width title-hover-black">{{ $data->name }}</h3>
                                <p class="clearfix price-product" style="color: rgb(75, 75, 112)">{{ $data->price }} MMK</p>
                                <div class="clearfix ranking-product-category ranking-color">
                                    <div>Stocks Left : {{ $data->quantity }}</div>
                                </div>
                            </div>
                        @endforeach   
                                                            
                    </div>
                    <!-- End Product Content Category -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sider Bar -->
</div>
    
@endsection