@extends('layouts.master')
@section('title', 'Checkout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/multirange.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cartpage.css') }}">
@endsection

@section('contents')
<div class="relative container-web">
    <div class="container">
        <div class="row relative">
            <div class=" relative content-track-order	">
                <h3 class="">You have been Ordered Successfully ! </h3>           
                    <div class="relative form-check-track">
                        <label>Your Order ID is</label>
                        <input class="border text-center" type="text" name="order_id" value="{{ $biller_id }}" disabled>
                    </div>
                    <a href="{{ route('home') }}">
                        <button type="submit" class="btn-check-track animate-default button-hover-red">Back to Home</button>
                    </a>               
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection