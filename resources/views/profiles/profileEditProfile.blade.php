@extends('layouts.profile')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
@endsection
@section('content')
    <div class="display-section">
        <div class="upper-container">
            <div class="icon-menu-container">
                <img src="{{ asset('svg/location-2055.svg')}}" alt="">    
            </div>

            <div class="title-menu-container">
                <h1>Edit Personal Information</h1>
                <a class="save-button" onclick="submit()" style="cursor: pointer">SAVE</a>
            </div>
        </div>
        <form id="profile-form" action="{{ route('save-profile') }}" method="post">
            @csrf
            <div class="content-container">
                <div class="form-group">
                    <label for="name">Full Name
                        @error('name')
                        <div class="error-message">
                            {{$message}}
                        </div>
                        @enderror
                    </label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" value="{{auth()->user()->name}}" 
                        @error('name')
                            style="border-color:red"        
                        @enderror
                    >
                    <label for="username">Username 
                    @error('username')
                        <div class="error-message">
                            {{$message}}
                        </div>
                    @enderror
                    </label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your new username" value="{{auth()->user()->username}}"
                        @error('username')
                            style="border-color:red"        
                        @enderror
                    >
                    <label for="email">Email
                        @error('email')
                        <div class="error-message">
                            {{$message}}
                        </div>
                        @enderror
                    </label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your new email" value="{{auth()->user()->email}}"
                        @error('email')
                            style="border-color:red"        
                        @enderror
                    >
                    <label for="contact_number">Contact Number
                        @error('contact_number')
                        <div class="error-message">
                            {{$message}}
                        </div>
                        @enderror
                    </label>
                    <input type="tel" id="contact_number" name="contact_number" class="form-control" placeholder="Enter your new contact number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" value="{{auth()->user()->contact_number}}"
                        @error('contact_number')
                            style="border-color:red"        
                        @enderror
                    >
                    <label for="date_of_birth">Date of Birth
                        @error('date_of_birth')
                        <div class="error-message">
                            {{$message}}
                        </div>
                        @enderror
                    </label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{auth()->user()->date_of_birth}}"
                        @error('date_of_birth')
                            style="border-color:red"        
                        @enderror
                    >                    
                    <label for="gender">Gender
                        @error('gender')
                        <div class="error-message">
                            {{$message}}
                        </div>
                        @enderror
                    </label>
                    <select id="gender" name="gender" class="form-control"
                        @error('gender')
                            style="border-color:red"        
                        @enderror
                    >
                        <option {{auth()->user()->gender == null ? 'selected' : ''}} value=>Prefer not to say</option>
                        <option {{auth()->user()->gender == "Male" ? 'selected' : ''}} value="Male">Male</option>
                        <option {{auth()->user()->gender == "Female" ? 'selected' : ''}} value="Female">Female</option>
                        <option {{auth()->user()->gender == "LGBTQ+" ? 'selected' : ''}} value="LGBTQ+">LGBTQ+</option>
                    </select>                    
                </div>
            </div>
        </form>
    </div>
    <script>
        function submit() {
            document.getElementById("profile-form").submit();
        }
    </script>
@endsection