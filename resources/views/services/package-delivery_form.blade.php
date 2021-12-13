<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/package-delivery_form.css') }}" >

@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="head">Package Delivery</div>

        <div  class="type" class="flex-row">
            <div class="detail-head">TYPE</div>

            <div class="serviceType">
            <img src="{{ URL ('svg\truck.png') }}" alt="" >
                <div class="text">Scheduled Pickup</div>
            </div>
        </div>

        <div class="detail-head">ADDRESS</div>

        <div  class="address-container" class="flex-column">
            
            <div class="flex-column" class="pickup">
                <div class="bold">
                    Pickup Location
                </div>

                <div class="location">
                <img src="{{ URL ('svg\pickup.png') }}" alt="" >
                <div class="location-text">Pickup location</div>
                </div>

            </div>

            <div class="flex-column">
                <div class="bold">
                    Drop off Location
                </div>

                <div class="location">
                <img src="{{ URL ('svg\dropoff.png') }}" alt="" >
                <div class="location-text">Drop off Location</div>
                </div>
            </div>


            <div class="flex-row">
                <div class="flex-column">
                    <div class="bold">
                        Contact Person
                    </div>

                    <div class="contact">
                        Contact Person
                    </div>
                </div>

                <div class="flex-column">
                    <div class="bold">
                        Contact Number
                    </div>

                    <div class="contact">
                        Contact Number
                    </div>
                </div>

                <div class="flex-column">
                    <div class="bold">
                        Email Address
                    </div>

                    <div class="contact">
                        Email Address
                    </div>
                </div>

            </div>

        </div>

        <div class="detail-head">TIME</div>
            <div class="time-details">
                
                <div class="flex-column">
                    <div class="bold">
                        Pickup Date
                    </div>

                    <div class="time-date">
                        <div class="time-date_text">
                            01/01/2021
                        </div>  
                        <div class="calendar">
                            <img src="{{ URL ('svg\calendar.png') }}" alt="" >
                        </div> 
                        
                    </div>
                </div>

                <div class="flex-column">
                    <div class="bold">
                        Pickup Time
                    </div>

                    <div class="time-date">
                        <div class="time-date_text">
                            9:00 AM
                        </div>
                        <div class="clock">
                            <img src="{{ URL ('svg\clock.png') }}" alt="" >
                        </div>
                        
                    </div>
                </div>

            </div>

            <div class="instructions">
                <div class="flex-column">
                    <div class="bold">
                        Instructions to the Driver
                    </div>

                    <div class="instruction-details">
                        Optional
                    </div>

                    <div class="post">
                        0 / 255 Characters
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

@endsection