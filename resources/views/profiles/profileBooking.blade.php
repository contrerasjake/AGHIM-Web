@extends('layouts.profile')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profileBooking.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
@endsection
@section('content')
    <div class="display-section">
        <div class="upper-container">
            <div class="icon-menu-container">
                <img src="{{ asset('svg/delivery-9161.svg')}}" alt="">    
            </div>
            <div class="title-menu-container">
                <h1>Booking</h1>
            </div>
        </div>  
        <div class="lower-container">
            <div class="service-type"> 
                <div class="service-logo">
                    <img src="{{ asset('img/package-delivery.png')}}" alt=""> 
                </div>       
                <div class="service-name">
                    <span>Package Delivery</span>
                </div>
            </div>
            <div class="status">
                <p>Status</p>
            </div>
            <div class="book-details">
                <div class="book-date">
                    <p>DATE</p> 
                </div>
                
                <div class="details">
                    <div class="details-button">
                        <button>View Details</button>
                    </div>
                </div>   
            </div>
        </div>
    </div>
@endsection