@extends('layouts.app')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
@endsection

@section('content')

<body>
        <div class="hero-container">
            <div class="titlePhoto">
                <img src="{{ URL ('img/title.png') }}" alt="" >
            </div>
            
            <div class="app-info">
                All-in-One Online Platform For Your Daily needs
                
                <div class="statement">
                Our goal is to provide the best service to Filipinos.
                </div>

                <div class="get-started-btn">
                    <a href="{{ route('register') }}">Get Started</a>
                </div>

            </div>  
        </div>

        <hr class="divider">


        <div class="offer-container">
            <div class="offer-title">
                    <p>WHAT DO WE OFFER?</p>
                
            </div>

            <div class="offer-info">
                <div class="foodDeliveries">
                    <div class="foodDelivery-info">
                        <h1>Food Deliveries</h1>
                        <div class="food_details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiam. Adipiscing vitae proin sagittis nisl. Elementum curabitur vitae nunc sed velit dignissim. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Est placerat in egestas erat imperdiet sed euismod. Nunc sed velit dignissim sodales ut eu sem integer vitae. Massa vitae tortor condimentum lacinia.
                        </div>
                    </div>

                    <div class="foodPhoto">
                        <img src="{{ URL ('img/food-delivery.png') }}" alt="" >
                    </div>

                </div>
                

                <div class="packageDeliveries">
                    <div class="packageDelivery-photo">
                        <img src="{{ URL ('img/package-delivery.png') }}" alt="">
                    </div>

                    <div class="packageDelivery-info">
                        <h1>Package Deliveries</h1>
                        <div class="package_details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiam. Adipiscing vitae proin sagittis nisl. Elementum curabitur vitae nunc sed velit dignissim. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Est placerat in egestas erat imperdiet sed euismod. Nunc sed velit dignissim sodales ut eu sem integer vitae. Massa vitae tortor condimentum lacinia.
                        </div>
                    </div>
                    

                </div>
            
                
                <div class="carRental">
                    <div class="carRental-info">
                        <h1>Car Rental</h1>
                        <div class="carRental_details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiam. Adipiscing vitae proin sagittis nisl. Elementum curabitur vitae nunc sed velit dignissim. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Est placerat in egestas erat imperdiet sed euismod. Nunc sed velit dignissim sodales ut eu sem integer vitae. Massa vitae tortor condimentum lacinia.
                        </div>
                    </div>
                    <div class="carPhoto">
                        <img src="{{ URL ('img/car-rental.png') }}" alt="" >
                    </div>
                    

                </div>

                <div class="maintenance">
                    <div class="maintenancePhoto">
                        <img src="{{ URL ('img/maintenance.png') }}" alt="">
                    </div>

                    <div class="maintenance-info">
                        <h1>Package Deliveries</h1>
                        <div class="maintenance-details">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiam. Adipiscing vitae proin sagittis nisl. Elementum curabitur vitae nunc sed velit dignissim. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Est placerat in egestas erat imperdiet sed euismod. Nunc sed velit dignissim sodales ut eu sem integer vitae. Massa vitae tortor condimentum lacinia.
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <hr class="divider">

            <div class="testimonial-container">
                <div class="testimonial-title">
                        <p>TESTIMONIALS</p>
                </div>
                
                <div class="testimonials">

                    <div class="box">
                        <div class="testimonials-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.
                        </div>

                        <div class="name">
                            Juan Dela Cruz
                        </div>
                    </div>

                    <div class="box">
                        <div class="testimonials-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.
                        </div>
                        <div class="name">
                            Juan Dela Cruz
                        </div>
                    </div>

                    <div class="box">
                        <div class="testimonials-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.
                        </div>
                        <div class="name">
                            Juan Dela Cruz
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
    

            <!-- <div class="bottomline"></div>


            <h5>TESTIMONIALS</h5>
            <div class="testimonials">

                <div class="box1">
                    <div class="testimonials1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.
                    </div>

                    <div class="name1">
                        Juan Dela Cruz
                    </div>
                </div>

                <div class="box2">
                    <div class="testimonials2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.
                    </div>
                    <div class="name2">
                        Juan Dela Cruz
                    </div>
                </div>

                <div class="box3">
                    <div class="testimonials3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fringilla est ullamcorper eget nulla facilisi etiamLorem ipsum dolor sit amet.
                    </div>
                    <div class="name3">
                        Juan Dela Cruz
                    </div>

                    
                </div>

               

            </div>
 
        </div>


        <div class="bottom">
            <div class="footer">
                FOOTER
            </div>

            <div class="mast">
                <div class="terms">Terms of Use</div>
                <div class="privacy">Privacy Policy</div>
                <div class="logo">© AGHIM</div>
            </div>

        </div>
        

    </div> -->
@endsection 
