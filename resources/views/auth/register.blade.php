@extends('layouts.app')

@section('content')
    <div class="center-container">
        <div class="container">
            <h1 class="title">Register</h1>
            <form action="{{ route('register') }}" method="post">
            @csrf
                <div class="input-container">
                    <label for="name">Name</label>
                    <input class="input-field" type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"
                        @error('name')
                            style="border-color:red"        
                        @enderror 
                    >
                    @error('name')
                        <div class="error-message">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input  class="input-field" type="text" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"
                        @error('email')
                            style="border-color:red"        
                        @enderror 
                    >
                    @error('email')
                        <div class="error-message">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input class="input-field" type="password" name="password" id="password" placeholder="Choose a password" value=""
                        @error('password')
                            style="border-color:red"        
                        @enderror 
                    >
                    @error('password')
                        <div class="error-message">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input-container">
                    <label for="password_confirmation">Repeat Password</label>
                    <input class="input-field" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="">
                </div>
                <div>
                    <button class="main-button" type="submit">Register</button>
                </div>
            </form>
            <h5 style="text-align:center">Already have an account? <a href="{{ route('login') }}"><u>Login.</u></a></h5>
        </div>
        <div class="banner container">
        <img src="{{ asset('svg/Drawkit-daily-life-vector-illustration-01.svg') }}">
        </div>
    </div>
@endsection