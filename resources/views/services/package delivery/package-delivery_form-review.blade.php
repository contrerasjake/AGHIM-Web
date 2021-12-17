<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/package-delivery_form-review.css') }}" >

@extends('layouts.app-alt')
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

                <div class="address-details">
                    Pickup location
                </div>

            </div>

            <div class="flex-column">
                <div class="bold">
                    Drop off Location
                </div>

                <div class="address-details">
                    Drop off Location
                </div>
            </div>


            <div class="flex-row">
                <div class="flex-column">
                    <div class="bold">
                        Contact Person
                    </div>

                    <div class="address-details">
                        JOHN DOE
                    </div>
                </div>

                <div class="flex-column">
                    <div class="bold">
                        Contact Number
                    </div>

                    <div class="address-details">
                        09XXXXXXXXX
                    </div>
                </div>

                <div class="flex-column">
                    <div class="bold">
                        Email Address
                    </div>

                    <div class="address-details">
                        johndoe@example.com
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

                    <div class="address-details">
                        01/01/2021
                    </div>
                </div>

                <div class="flex-column">
                    <div class="bold">
                        Pickup Time
                    </div>

                    <div class="address-details">
                        9:00 AM
                    </div>
                </div>

            </div>

            <div class="instructions">
                <div class="flex-column">
                    <div class="bold">
                        Instructions to the Driver
                    </div>

                    <div class="address-details">
                        Lorem ipsum dolor sit amet. Non fugit aliquam non officiis architecto aut nisi internos in repellendus internos nam voluptate blanditiis non nobis iure aliquid ducimus. At placeat soluta eum saepe voluptatem qui totam qui mollitia perspiciatis sed excepturi quia est voluptate quisquam! Ut dolorum labore et ipsam sint et autem molestias.
                    </div>

                    <div class="payment">
                        <div class="proceed">
                            <button><a href="{{ route('order_checkout') }}">Proceed to payment</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>

@endsection