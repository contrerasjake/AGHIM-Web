<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" >
   <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
   <title>Profile</title>
   <title>Profile</title>
 </head>
 <body>
    <header>
        @include('layouts.header')
    </header>

    <div class="profile-container">
        <!--side bar menu-->
        <div class="sidebar">
            <div class="sidebar-profile-pic">
                <div class="profile-container">
                    <img 
                        src="https://s3-alpha-sig.figma.com/img/1d81/2a7e/a4df439f517e7da59fdbd075681d9ded?Expires=1638748800&Signature=JRRnmYlMTcVb68aVOOi0kvmVwncuV0DSPzzUMtYJh9tWquqHKkkBS5wmgLRq7STi3badnGA-Wd-EqlJKf85AAACWvAdD-uXBsQ-2Kpfll3Qt1aPPizeZQgcu7Y~U-Z57o7R19dGxvMWxKTsf8sdzTXiKY2q4yO0khImDOHe6FEPW0oTGL-qUen1SzuKziGCvTwqmzdv7BfEfO9xfvw3xbPPqhppmYInzI5WZQKD8JKIzze~ZuvU~XHprEUkRkGagwbhwyOrwKtB5W-bnHdDPDws8rwQJBwZ2yLoTWplvOE7fxUms2JHPXAmJEvrzTFLoOaD1gFGXH4EfmPFPtBcQog__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA" 
                        alt="profile"
                        class="profile-pic"
                    >
                </div>
            
                <div class="username-container">
                        <h3 class="username">John Doe</h3>
                        <p class="verified">Verified User</p>
                </div>
            </div>
           
            
           <div class="button-container">
                <a href="/profile/address">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/location-2055.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            <span>Address</span>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/delivery-9161.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            <span>Book</span>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/credit-card-6379.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            <span>Payment Method</span>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/check-4827.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            <span>Notifications</span>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/settings-778.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            <span>Settings</span>
                        </div>
                    </div>
                </a>
   
           </div>
            
            
        </div>


        <!--display container-->
        <div class="display-section">
            <div class="upper-container">

                <div class="icon-menu-container">
                    <img src="{{ asset('svg/user-3296.svg')}}" alt="">    
                </div>

                <div class="title-menu-container">
                    <h1>Personal Details</h1>
                </div>

            </div>
            
            <div class="lower-container">
                <div class="info-container">
                    <div class="info-container-1">
                        <div class="info">
                            <h4>Name</h4>
                            <h3>John Doe</h3>
                        </div>

                        <div class="info">
                            <h4>Email</h4>
                            <h3>john_doe@gmail.com</h3>
                        </div>

                        <div class="info">
                            <h4>Contact Number</h4>
                            <h3>09123456789</h3>
                        </div>
                    </div>
                    
                    <div class="info-container-1">
                        <div class="info">
                            <h4>Username</h4>
                            <h3>johndoe69</h3>
                        </div>

                        <div class="info">
                            <h4>Date of birth</h4>
                            <h3>mm/dd/yyyy</h3>
                        </div>

                        <div class="info">
                            <h4>Gender</h4>
                            <h3>N/A</h3>
                        </div>
                    </div>

                    
                </div>
            </div>
            
        </div>
    </div>




 </body>
</html>