@extends('layouts.app')
@section('content')


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/food-delivery.css') }}" >


<div class = "serviceInfo-container">
    <div class = "serviceStatement">
        Hungry? You're in the right place
        
        <div class = "serviceInfo">
            Order your products any time and we will deliver it directly to your home
        </div>
        <div class="order-btn">
           <a href="{{ route('browse_restaurant') }}"class = "button">Order now</a>
        </div>

    </div>
    <div class = "servicePhoto">
        <img src="{{ URL ('img/picnic.png') }}" alt="" > 
    </div>

</div>

<div class = "three-steps">
        THREE EASY STEPS
</div>
<div class = "steps-container">
    <div class = "img-container">
        <div class = "chef-container">
            <img src="{{ URL ('img/chef.png') }}" alt="" > 
        </div>
        <div class = "steps-details">
            Browse the menu and fill your basket with your favorite food!
        </div>
    </div>
    <div class = "img-container">
        <div class = "order-container">
            <img src="{{ URL ('img/order.png') }}" alt="" > 
        </div>
        <div class = "steps-details">
            Your order will be immediately collected and sent by our courier,
        </div>
    </div>
    <div class = "img-container">
        <div class = "food-container">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "steps-details">
            Pick up the delivery at your door and enjoy.
        </div>
    </div>
</div>

<div class = "btn-container">
    <div class="order-btn">
            <a href="{{ route('browse_restaurant') }}"class = "button">Order now</a>
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
        

<div class="text">
    <p> to be followed</p>
</div>

<div class="link">
    <p> Links Links Links Links</p>
</div>


<div class="bottom">
    <div class="image">
        <i class="fa fa-image"></i>
        <div class="details">
            <p>Address<p>
            <p>Contact Number<p>
        </div>
    </div>
    <div class="footer">
        FOOTER
    </div>
    

    <div class="mast">
        <div class="terms">Terms of Use</div>
            <div class="privacy">Privacy Policy</div>
            <div class="aghim-footer">©AGHIM</div>
        </div>
</div




@endsection