@extends('layouts.app')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/restaurant-menu.css') }}" >
@endsection


@section('content')

<div class = "info-container">
    <div class = "restaurant-name">
        <div class = "name"> Restaurant Name</div>
        <p>Branch | Store Hours</p>
        <p>Distance | Time</p>
        <p>Ratings</p>
    </div>
    <div class =  "note">
        <p> Please keep in mind that the quality of some food items may not be the same as in-store quality for long-distance deliveries. </p>
    </div>
    <div class =  "note2">
        <p>Please be advised that higher delivery fees may apply for longer distance. </p>
    </div>
</div>



<div class = "recommended">
    <div class= "basket">
    <a href="{{ route('order_cart') }}" class="fa fa-shopping-basket"></a> 
    </div>
    <h2> Recommended for you</h2>
</div>
    
<div class = "menuGrid"> 
    <i class = "arrow left"></i>
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>  
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>  
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>  
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>   
    <i class = "arrow right"></i>
</div>

<div class = "popular">
    <h2> Popular </h2>
</div>
    
<div class = "menuGrid"> 
    <i class = "arrow left"></i>
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>  
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>  
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>  
    <div class = "foodMenu">
        <div class = "foodPhoto">
            <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
        </div>
        <div class = "menuDetails">
        <h3> Food Name </h3>
            <p>Food Description - Lorem, ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="order-btn">
                <a href="{{ route('browse_restaurant') }}"class = "button">Add to basket</a>
            </div>
            <div class = "price"> <h2> &#8369; 999.00 </h2> </div>
        </div>
    </div>   
    <i class = "arrow right"></i>
</div>


    


@endsection