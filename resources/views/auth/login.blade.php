@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
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
            <button type="submit">Login</button>
        </div>
    </form>
@endsection