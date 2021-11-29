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
                    <li><a href="/">Package Delivery</a></li>
                    <li><a href="/">Car Rental</a></li>
                </ul>
            </li>

            

            <li class="navbar_dropdown">
                <a href="/"><img src="https://s3-alpha-sig.figma.com/img/1d81/2a7e/a4df439f517e7da59fdbd075681d9ded?Expires=1638748800&Signature=JRRnmYlMTcVb68aVOOi0kvmVwncuV0DSPzzUMtYJh9tWquqHKkkBS5wmgLRq7STi3badnGA-Wd-EqlJKf85AAACWvAdD-uXBsQ-2Kpfll3Qt1aPPizeZQgcu7Y~U-Z57o7R19dGxvMWxKTsf8sdzTXiKY2q4yO0khImDOHe6FEPW0oTGL-qUen1SzuKziGCvTwqmzdv7BfEfO9xfvw3xbPPqhppmYInzI5WZQKD8JKIzze~ZuvU~XHprEUkRkGagwbhwyOrwKtB5W-bnHdDPDws8rwQJBwZ2yLoTWplvOE7fxUms2JHPXAmJEvrzTFLoOaD1gFGXH4EfmPFPtBcQog__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA" alt=""></a>
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