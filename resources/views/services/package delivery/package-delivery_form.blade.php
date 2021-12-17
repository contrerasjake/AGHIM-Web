<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/package-delivery_form.css') }}" >

@extends('layouts.app-alt')
@section('content')

    <div class="content">
        <div class="form-container">
            <div class="head">Package Delivery</div>

            <div  class="type" class="flex-row">
                <div class="detail-head">TYPE</div>

                <div class="serviceType">
                    <img src="{{ URL ('svg\truck.png') }}" alt="" >
                    <div class="text">Scheduled Pickup</div>
                </div>
            </div>

            <div class="section-title">ADDRESS</div>

            <div class="address-container">

                <div class="group">
                    <div class="detail-name">
                        Pickup Location
                    </div>

                    <div class="input-container">
                        <input class="textField-location" type="search" name="pickup" id="pickup" placeholder="Pickup Location">
                    </div>
                </div>

                <div class="group">
                    <div class="detail-name">
                        Drop off
                    </div>

                    <div class="input-container">
                        <input class="textField-location" type="search" name="dropoff" id="dropoff" placeholder="Drop off">
                    </div>
                </div>

                <div class="contactText-container">
                        <div class="detail-name">
                            Contact Person
                        </div>
                        <div class="detail-name">
                            Contact Number
                        </div>
                        <div class="detail-name">
                            Email Address
                        </div>
                    </div>

                    <div class="contactInput-container">
                        
                            <input class="textField" type="text" name="name" id="name" placeholder="Contact Person">
                        
                            <input class="textField" type="text" name="number" id="number" placeholder="Contact Number">
                   
                            <input class="textField" type="text" name="email" id="email" placeholder="Email Address">
                     

                    </div>

            </div>

            <div class="section-title">TIME</div>

            <div class="address-container">

                  
                        <div class="timeText-container">
                            <div class="detail-name">
                                Pickup Date
                            </div>

                            <div class="detail-name">
                                Pickup Time
                            </div>
                        </div>

                        <div class="timeInput-container">
                        <input class="textField-time" type="date" name="date" id="date">
                        <input class="textField-time" type="time" name="time" id="time">
                        </div>

                 

                    <div class="instructions">
                        <div class="group">
                            <div class="instruction-title">
                                Instructions to the Driver
                            </div>

                            <div class="input-container">
                                <input class="textField-instruction" type="text" name="instruction" id="instruction" placeholder="Optional">
                            </div>

                            <div class="character-number">
                                0/255 Characters
                            </div>

                            <div class="payment">
                                <div class="proceed">
                                    <button><a href="{{ route('package_formReview.index') }}">Continue</a></button>
                                </div>
                            </div>
                        </div>
                    </div>    

            </div>
        </div>
        

    </div>

@endsection


                    