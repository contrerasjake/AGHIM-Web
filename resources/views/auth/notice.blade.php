<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo asset('css/notice.css')?>" type="text/css">



@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        @endif
        
        
            Before proceeding, please check your email for a verification link. If you did not receive the email,
        
        <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
            @csrf
            <button class = "button" type="submit" class="d-inline btn btn-link p-0">
                click here to request another
            </button>
        </form>
    </div>
@endsection