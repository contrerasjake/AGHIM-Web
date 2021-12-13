<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
   <title>Document</title>
 </head>
 <body>
   <nav class="navbar">
     <!-- LOGO -->
     <div class="logo">
         <a href="{{ route('home') }}">AGHIM</a>
    </div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li>
            <a href="{{ route('home') }}">Home</a>
         </li> 
         <li>
            <a href="">About Us</a>
         </li>

         <li>
            <a href="">Contact Us</a>
         </li>
         
        @auth
        
            
            <li class="navbar_dropdown">
                <a href="/">Services</a>
                <!-- DROPDOWN MENU -->
                <ul class="dropdown">
                    <li><a href="{{ route('food_delivery.index') }}">Food Delivery </a></li>
                    <li><a href="{{ route('package_delivery.index') }}">Package Delivery</a></li>
                    <li><a href="/">Car Rental</a></li>
                </ul>
            </li>

            

            <li class="navbar_dropdown">
                <a href="/"><img src="{{ URL ('img/profile-pic.png') }}" alt=""></a>
                <!-- DROPDOWN MENU -->
                <ul class="dropdown2">
                    <!-- profile dropdown -->
                    <li>
                        <a href="{{ route('profile')}}">Profile</a>
                    </li>
                    <li>
                        <a href="">Settings</a>
                    </li>
                    <li>
                        @csrf
                        <a href="{{ route('logout')}}" method="post">Logout</a>
                    </li>
                </ul>
            </li>
            
        @endauth


        @guest
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}">Register</a>
            </li>
        @endguest

         
       </div>
     </ul>
   </nav>
 </body>
</html>