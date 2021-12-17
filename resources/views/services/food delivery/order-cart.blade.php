

@extends('layouts.app-alt')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/order-cart.css') }}" >
@endsection


@section('content')


<div class="container">
    <div class="cart-container">
        <div class = "manage">
            <p>Manage<p>
        </div>
        <div class = logo-cart>
            LOGO | CART
        </div>
        <a href="{{ route('order_review') }}">
        <div class = "restaurant-details">
           Restaurant Name 
            <div class = "no-items"> No. of Items </div>
            
        </div>
        </a>
        <a href="{{ route('order_review') }}">
        <div class = "restaurant-details">
           Restaurant Name 
            <div class = "no-items"> No. of Items </div>
            
        </div>
        </a>
        <a href="{{ route('order_review') }}">
        <div class = "restaurant-details">
           Restaurant Name 
            <div class = "no-items"> No. of Items </div>
            
        </div>
        </a>
    </div>
        
</div>



@endsection


