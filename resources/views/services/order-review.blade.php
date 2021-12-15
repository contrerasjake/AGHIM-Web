

@extends('layouts.app-alt')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/order-review.css') }}" >
@endsection


@section('content')

<div class = "body">
    <div class="container">
            <div class = logo-cart>
                LOGO | CART
            </div>
            <div class = "deliver-to">
                Deliver to
            </div>
            <div class="addressContainer">
                    <input class="addressBox" type= "search" name = "address" placeholder="Address Details">
            </div>
            
            <div class = "order-summary">
                Order Summary
            </div>
            <div class = "food-details">
                <div class = "food-item">
                    Food Item
                </div>
                <div class = "price">
                    Price
                </div>
            </div>
            <div class = "food-details">
                <div class = "food-item">
                    Food Item
                </div>
                <div class = "price">
                    Price
                </div>
            </div>
            <div class = "food-details">
                <div class = "food-item">
                    Food Item
                </div>
                <div class = "price">
                    Price
                </div>
            </div>
            <div class = "food-details">
                <div class = "food-item">
                    Food Item
                </div>
                <div class = "price">
                    Price
                </div>
            </div>

            <div class = "Total">
                Total
            </div>
            <div class = "subtotal">
                Subtotal
            </div>
            <div class = "delivery-fee">
                Delivery Fee
            </div>

            <div class="order-btn">
                    <a href="{{ route('order_checkout') }}"class = "button">Proceed to Payment</a>
            </div>
    </div>

</div>
