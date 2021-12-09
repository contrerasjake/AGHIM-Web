@extends('layouts.profile')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
@endsection
@section('content')
<div class="display-section">
    <div class="upper-container">

        <div class="icon-menu-container">
            <img src="{{ asset('svg/user-3296.svg')}}" alt="">    
        </div>

        <div class="title-menu-container">
            <h1>Personal Information</h1>
            
            <div class="edit-address">
                <div class="edit-button">
                    <a href="{{ route('profile/edit') }}">Edit</a>
                </div>
            </div>
        </div>
    </div>  
    <div class="lower-container">
        <div class="info-container">
            <div class="info-container-1">
                <div class="info">
                    <h4>Name</h4>
                    <h3>John Doe</h3>
                </div>

                <div class="info">
                    <h4>Email</h4>
                    <h3>john_doe@gmail.com</h3>
                </div>

                <div class="info">
                    <h4>Contact Number</h4>
                    <h3>09123456789</h3>
                </div>
            </div>            
            <div class="info-container-1">
                <div class="info">
                    <h4>Username</h4>
                    <h3>johndoe69</h3>
                </div>

                <div class="info">
                    <h4>Date of birth</h4>
                    <h3>mm/dd/yyyy</h3>
                </div>

                <div class="info">
                    <h4>Gender</h4>
                    <h3>N/A</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection