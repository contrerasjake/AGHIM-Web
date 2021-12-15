<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/notice.css')?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>AGHIM Web</title>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
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
</body>
</html>