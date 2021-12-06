<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/profileAddress.css') }}" >
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{ asset('js/mapInput.js') }}"></script>
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
                <a href="/profile">
                    <div class="a-container">
                        <div class="icon">
                            <img src="{{ asset('svg/user-3296.svg')}}" alt="">
                        </div>

                        <div class="icon-text">
                            <span>Personal Details</span>
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
                    <img src="{{ asset('svg/location-2055.svg')}}" alt="">    
                </div>

                <div class="title-menu-container">
                    <h1>Edit Address</h1>
                    <a href="#" class="save-button">SAVE</a>
                </div>
            </div>
            <div class="form-group">
                <label for="address_name">Name</label>
                <input type="text" id="address-name" name="address_name" class="form-control" placeholder="Name this Address">
                <label for="address_name">Contact Number</label>
                <input type="tel" id="address-contact" name="address_contact" class="form-control" placeholder="Contact Number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}">
                <label for="address_address">Address</label>
                <input type="text" id="address-input" name="address_address" class="form-control map-input" placeholder="Enter your Address">
                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
            </div>
            <div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>
        </div>
    </div>
            
 </body>
</html>



