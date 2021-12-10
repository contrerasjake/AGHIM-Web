<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   @yield('head')
   <title>Profile</title>
 </head>
 <body>
    <header>
        @include('layouts.header')
    </header>
    <div class="profile-container">
        <div class="sidebar">
            <div class="sidebar-profile-pic">
                <div class="profile-container">
                    <img 
                        src="{{ URL ('img/profile-pic.png') }}"
                        alt="profile"
                        class="profile-pic"
                    >
                </div>
            
                <div class="username-container">
                        <h3 class="username">{{auth()->user()->name}}</h3>
                        <p class="verified">Verified User</p>
                </div>
            </div>
           <div class="button-container">
                <a href="/profile" >
                    <div class="a-container {{request()->is('profile') ? 'active' : '' }}">
                        <div class="icon">
                            <img src="{{ asset('svg/user-3296.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            Personal Details
                        </div>
                    </div>
                </a>

                <a href="/profile/address">
                    <div class="a-container {{request()->is('profile/address') ? 'active' : '' }}">
                        <div class="icon">
                            <img src="{{ asset('svg/location-2055.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            Address
                        </div>
                    </div>
                </a>

                <a href="/profile/book" >
                    <div class="a-container {{request()->is('profile/book') ? 'active' : '' }}">
                        <div class="icon">
                            <img src="{{ asset('svg/delivery-9161.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            Book
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/credit-card-6379.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            Payment Method
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/check-4827.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            Notifications
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/settings-778.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            Settings
                        </div>
                    </div>
                </a>
           </div>   
        </div>
        @yield('content')
 </body>
</html>