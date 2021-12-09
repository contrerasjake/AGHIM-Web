@extends('layouts.profile')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profileAddress.css') }}" >
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{ asset('js/mapInput.js') }}"></script>
@endsection
@section('content')
    <div class="display-section">
        <div class="upper-container">
            <div class="icon-menu-container">
                <img src="{{ asset('svg/location-2055.svg')}}" alt="">    
            </div>

            <div class="title-menu-container">
                <h1>Edit Address</h1>
                <a href="/profile/address" class="save-button">SAVE</a>
            </div>
        </div>
        <div class="form-group">
            <label for="address_name">Name</label>
            <input type="text" id="address-name" name="address_name" class="form-control" placeholder="Name this Address">
            <label for="address_name">Contact Number</label>
            <input type="tel" id="address-contact" name="address_contact" class="form-control" placeholder="Contact Number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}">
            <label for="address_address">Address</label>
            <input type="text" id="address-input" name="address_address" class="form-control map-input" placeholder="Enter your Address">
            <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
            <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
        </div>
        <div id="address-map-container" style="width:100%;height:400px; ">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>
    </div>
@endsection