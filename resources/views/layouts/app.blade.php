<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>AGHIM Web</title>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    @yield('content')
    <footer>
        @include('layouts.footer')
    </footer>
    
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
</body>
</html>