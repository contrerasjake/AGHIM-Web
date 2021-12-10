@extends('layouts.profile')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profileAddress.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
@endsection
@section('content')
    <div class="display-section">
        <div class="upper-container">
            <div class="icon-menu-container">
                <img src="{{ asset('svg/location-2055.svg')}}" alt="">    
            </div>
            <div class="title-menu-container">
                <h1>Address</h1>
            </div>
        </div>
        
        <div class="lower-container">
            <div class="info-container">
                <div class="address-info">
                    <div class="name-label">
                        <p>Full Name:</p>
                    </div>

                    <div class="name">
                        <span>John Doe</span>
                    </div>
                </div>

                <div class="address-info">
                    <div class="name-label">
                        <p>Contact Number:</p>
                    </div>

                    <div class="name">
                        <span>09123456789</span>
                    </div>
                </div>

                <div class="address-info">
                    <div class="name-label">
                        <p>Address:</p>
                    </div>

                    <div class="name">
                        <span>Manila Baywalk Dolomite Beach</span>
                    </div>
                </div>
            </div>

            <div class="edit-address">
                <div class="edit-button">
                    <a href="{{ route('address/edit') }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection