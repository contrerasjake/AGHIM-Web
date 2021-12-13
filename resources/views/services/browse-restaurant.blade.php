@extends('layouts.app')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/browse-restaurant.css') }}" >
@endsection


@section('content')



<div class = "storePromos">
    <i class = "arrow left"></i>

    <div class = "promosPhoto">
        <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
    </div>


    <div class = "promoTitle">
        <h2>CAROUSEL FOOD DISPLAY</h2>
        <h2>(STORE PROMOS HERE)</h2>
        
            <div class =  "promoInfo">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque erat quam, venenatis eu metus et, lacinia efficitur elit. Vestibulum sit amet ligula molestie, suscipit leo eget, ultricies ex. Nullam gravida pretium pretium. Donec iaculis et tellus facilisis vulputate. Morbi scelerisque, sapien sit amet posuere feugiat, sapien nunc cursus nibh, sit amet venenatis erat elit eget turpis. Donec ut lectus eleifend, aliquet diam ut, finibus diam. Sed libero nunc, congue cursus enim id, sodales pharetra ante. Nunc sed iaculis quam. Morbi vehicula sit amet sapien quis posuere.
            </div>
            
    </div>
    
    <i class = "arrow right"></i>

</div>



<div class = "greetings">

    <div class="searchContainer">
        <i class="fa fa-search searchIcon"></i>
        <input class="searchBox" type= "search" name = "search" placeholder="What are you craving?">
    </div>
    <div class= "basket">
        <a href="{{ route('browse_restaurant') }}" class="fa fa-shopping-basket"></a> 
    </div>
    <h2> Good Morning, Juan Dela Cruz!</h2>
    <p>Find the best food for you<p>

</div>
<div class = "restaurantGrid">
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div>
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div> 
        <div class = "restaurant">
            <div class = "restaurantPhoto">
                <img src="{{ URL ('img/restaurants.png') }}" alt="" > 
            </div>
            <div class = "restaurantDetails">
            <a href="{{ route('restaurant_menu') }}"><h3> Restaurant Name </h3></a>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
            </div>
        </div>    
</div>


    


@endsection