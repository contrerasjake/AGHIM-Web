<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</body>
</html>