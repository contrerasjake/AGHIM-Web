

@extends('layouts.app-alt')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/order-checkout.css') }}" >
@endsection


@section('content')

<div class = "body">
    <div class="container">
            <div class = logo-cart>
                LOGO | CART
            </div>
            <div class = "payment-method">
                Payment Method
            </div>
            <div class = "payment-note">
                Please choose your payment method on the list below
            </div>
            <div class = "holder-container">
                <label class="holder">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <div class = "payment-details">
                        <img src="{{ URL ('img/cod.png') }}" alt="" > 
                        Cash on Delivery
                </div>
            </div>
            <div class = "holder-container">
                <label class="holder">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <div class = "payment-details">
                    <img src="{{ URL ('img/gcash.png') }}" alt="" > 
                    Gcash
                </div>
            </div>
            <div class = "holder-container">
                <label class="holder">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <div class = "payment-details">
                    <img src="{{ URL ('img/card.png') }}" alt="" > 
                    Credit Card
                </div>
            </div>
            <div class = "holder-container">
                <label class="holder">
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <div class = "payment-details">
                    <div class = "paypal">
                    <img src="{{ URL ('img/paypal.png') }}" alt="" > 
                    </div>
                    PayPal

                </div>
            </div>
    </div>

</div>
