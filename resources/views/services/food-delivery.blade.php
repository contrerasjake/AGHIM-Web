@extends('layouts.app')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('css/food-delivery.css') }}" >

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
        <i class="fa fa-shopping-basket"></i>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
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
            <h3> Restaurant Name </h3>
                <p>Distance</p>
                <p>Time</p>
                <p>Ratings</p>
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
</div>

    


@endsection