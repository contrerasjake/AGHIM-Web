@extends('layouts.app')

@section('content')
    <div class="center-container">
        <div class="banner container">
            <img src="{{ asset('svg/Drawkit-daily-life-vector-illustration-02.svg') }}">
        </div>
        <div class="container">
            <h1 class="title">Login</h1>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-container">
                    <label for="email">Email or Phone Number</label>
                    <input class="input-field" type="text" name="email" id="email" placeholder="Email or Phone Number" value="{{ old('email') }}"
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
                    <input class="input-field" type="password" name="password" id="password" placeholder="Enter your password" value=""
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
                @if (session('status'))
                    <div style="margin-top: 1rem; text-align:center; color:red">{{session('status')}}</div>
                @endif
                <div>
                    <button class="main-button" type="submit">LOGIN</button>
                </div>
            </form>
            <div class="strike">
                <span>or sign in with</span>
            </div>
            <div class="btn-wrapper">
                <a href="{{ route('facebook.login') }}" class="btn"><span class="fb logo fa fa-facebook"></span>Facebook</a>
                <a href="{{ route('google.login') }}" class="btn"><span class="google logo fa fa-google fa-fw"></span>Google</a>
            </div>
            <h5 style="text-align:center">Don't have an account yet? <a href="{{ route('register') }}"><u>Register Now.</u></a></h5>
        </div>
    </div>
@endsection

@section ('scripts')
    @parent
        <script> //hide error messages when input is clicked or focused
                            jQuery( document ).ready(function() {
                                // event for click on input (also you can use click)
                                //better to change form to .yourFormClass
                                $('form input').focus(function(){
                                // get selected input error container
                                $(this).siblings(".error-message").hide();
                                });
                            });
        </script>
@stop