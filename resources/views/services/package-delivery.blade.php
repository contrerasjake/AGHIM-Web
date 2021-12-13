@extends('layouts.app')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/package-delivery_home.css') }}" >
@endsection

@section('content')
    <div class="title-contatiner">
        <div class="title-photo">
            <img src="{{ URL ('svg\drawkit-transport-scene-6.png') }}" alt="" >       
        </div>

        <div class="title">
            <p>Your Easiest Way to Deliver</p>
        </div>

        <div class="title-description">
            <p>We provide on-demand  and scheduled delivery services through smartphone<br>
            applications and websites to connect you with our drivers.</p>
        </div>  
    </div>

    <div class="service-container">
        <div class="book">
            <div class="book-title">
                <p>Send goods more easily <br> and quickly</p>
            </div>

            <div class="book-description">
                <p>We’ll pick the package from your hands no matter where<br> you are and deliver it straight to the receiver’s hands!<p>
            </div>

            <div class="pickup-location">
                <img src="{{ URL ('svg\pickup.png') }}" alt="" >
                <input class="searchBoxLocation" type= "search" name = "search" placeholder="Pickup Location">
            </div>

            <div class="drop-off">
                <img src="{{ URL ('svg\dropoff.png') }}" alt="" >
                <input class="searchBoxLocation" type= "search" name = "search" placeholder="Drop off">
            </div>

            <div class="book-now">
                <div class="book">
                    <button>BOOK NOW!</button>
                </div>
            </div>
        </div>

        <div class="track">
            
            <div class="track-title">
                <p>Track you package</p>
            </div>

            <div class="track-description">
                <p>Enter your tracking number to track the package<p>
            </div>

            <div class="tracking-number">
                <input class="searchBox" type= "search" name = "search" placeholder="Tracking Number">
                <div class="tracking">
                    <div class="search">
                        <button><img src="{{ URL ('svg\search.png') }}" alt="" > </button>
                    </div>
                </div>
            </div>

            <div class="service-photo">
                <img src="{{ URL ('svg\DrawKit-daily-life-vector-illustration-10.png') }}" alt="" >  
            </div>
        </div>
    </div>

    <div class="body-title">
        <p>WHY CHOOSE US?</p>
    </div>

    <div class="body-container">

        <div class="reliable">
            <div class="reliable-details">
                <h1>100% Reliable</h1>
                <p><br>With our tracking system, you can<br>always know where your package is.</p>
            </div>
        </div>

        <div class="booking">
            <div class="booking-details">
                <h1>Fast and Easy Booking</h1>
                <p><br>Book your package using our user<br>friendly web & mobile app.</p>
            </div>
        </div>

        <div class="customer">
            <div class="customer-details">
                <h1>Satisfied Customers</h1>
                <p><br>We have xxx number of happy customers<br>and it’s increasing! Check our reviews<br>section to get their feedbacks.</p>
            </div>
        </div>
    </div>

    <hr class="divider">
    <div class="review-title">
        <p>REVIEWS</p>
    </div>

    <div class="review-container">
        
        <div class="review">
            <div class="review-details">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.</p>
            </div>
            <div class="review-name">
                <p>John Doe</p>
            </div>
        </div>

        <div class="review">
            <div class="review-details">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.</p>
            </div>
            <div class="review-name">
                <p>John Doe</p>
            </div>
        </div>

        <div class="review">
            <div class="review-details">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.</p>
            </div>
            <div class="review-name">
                <p>John Doe</p>
            </div>
        </div>
    </div>

@endsection