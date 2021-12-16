@extends('layouts.app')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/car-rental.css') }}" >
@endsection

@section('content')

    <div class = "serviceInfo-container">
        <div class = "serviceStatement">
            Where will your next road trip take you?
            
            <div class = "serviceInfo">
                Fast and easy way to rent a car. Choose from over a hundred models and experience the thrill at a lower price. See what we can offer you!
            </div>
        </div>
        <div class = "servicePhoto">
            <img src="{{ URL ('img/car.png') }}" alt="" > 
        </div>

    </div>

    <div class = "booking-container">
        <div class="searchContainer">
            <i class='fa fa-map-marker alt' style='font-size:30px;color:red'></i>
            <input class="searchBox" type= "search" name = "search" placeholder="Pick Up Location">
        </div>
        <div class="searchContainer">
            <i class='fa fa-map-marker' style='font-size:30px'></i>
            <input class="searchBox" type= "search" name = "search" placeholder="Drop Off Location">
        </div>
        <div class="input-container">
            <label for="date">Pick Up Date</label>
            <input class = "date-container" type="date" id="date" name="date">
        </div>
        <div class="input-container">
            <label for="date">Return Date</label>
            <input class = "date-container" type="date" id="date" name="date">
        </div>
        <div class = "search-icon">
        <i class="fa fa-search searchIcon"></i>
        </div>
    </div>


    <div class="body-title">
        <p>THREE EASY STEPS TO RENT</p>
    </div>

    <div class="body-container">

        <div class="pickup">
            <div class="pickup-details">
                <p><br>Select the pick up location and the date of the car rental.</p>
            </div>
        </div>

        <div class="choosing">
            <div class="choosing-details">
                <p><br> Choose the perfect car for your needs.</p>
            </div>
        </div>

        <div class="booking">
            <div class="booking-details">
                <p><br> Book the Vehicle of your choice. Now you can go on an adventure!</p>
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