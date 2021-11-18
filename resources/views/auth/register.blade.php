@extends('layouts.app')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"
                @error('name')
                    style="border-color:red"        
                @enderror 
            >
            @error('name')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"
                @error('email')
                    style="border-color:red"        
                @enderror 
            >
            @error('email')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Choose a password" value=""
                @error('password')
                    style="border-color:red"        
                @enderror 
            >
            @error('password')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Password again</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
@endsection