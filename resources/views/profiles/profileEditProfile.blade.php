@extends('layouts.profile')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
@endsection
@section('content')
    <div class="display-section">
        <div class="upper-container">
            <div class="icon-menu-container">
                <img src="{{ asset('svg/location-2055.svg')}}" alt="">    
            </div>

            <div class="title-menu-container">
                <h1>Edit Personal Information</h1>
                <a href="/profile" class="save-button">SAVE</a>
            </div>
        </div>
        <div class="content-container">
            <div class="form-group">
                <label for="profile_name">Full Name</label>
                <input type="text" id="profile-name" name="profile_name" class="form-control" placeholder="Enter your full name">
                <label for="profile_username">Username</label>
                <input type="text" id="profile-username" name="profile_username" class="form-control" placeholder="Enter your new username">
                <label for="profile_email">Email</label>
                <input type="email" id="profile-email" name="profile_email" class="form-control" placeholder="Enter your new email">
                <label for="profile_contact">Contact Number</label>
                <input type="tel" id="profile_contact" name="profile_contact" class="form-control" placeholder="Enter your new contact number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}">
                <label for="profile_birthday">Date of Birth</label>
                <input type="date" id="profile_birthday" name="profile_birthday" class="form-control">
                <label for="profile_gender">Gender</label>
                <select id="profile_gender" name="profile_gender" class="form-control">
                    <option value="N/A">Prefer not to say</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="LGBTQ+">LGBTQ+</option>
                </input>
            </div>
        </div>
    </div>
@endsection