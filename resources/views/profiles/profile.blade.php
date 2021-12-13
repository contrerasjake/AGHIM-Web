@extends('layouts.profile')
@section('head')
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
                    <h3>{{auth()->user()->name}}</h3>
                </div>

                <div class="info">
                    <h4>Email</h4>
                    <h3>{{auth()->user()->email}}</h3>
                </div>

                <div class="info">
                    <h4>Contact Number</h4>
                    <h3>{{auth()->user()->contact_number == null ? 'N/A' : auth()->user()->contact_number}}</h3>
                </div>
            </div>            
            <div class="info-container-1">
                <div class="info">
                    <h4>Username</h4>
                    <h3>{{auth()->user()->username == null ? 'N/A' : auth()->user()->username}}</h3>
                </div>

                <div class="info">
                    <h4>Date of birth</h4>
                    <h3>{{auth()->user()->date_of_birth == null ? 'mm/dd/yyyy' : auth()->user()->date_of_birth}}</h3>
                </div>

                <div class="info">
                    <h4>Gender</h4>
                    <h3>{{auth()->user()->gender == null ? 'N/A' : auth()->user()->gender}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection