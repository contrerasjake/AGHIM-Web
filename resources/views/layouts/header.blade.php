<ul>
    <li>
        <a href="{{ route('home') }}">Home</a>
    </li>
    @auth
        <li>
            <a href="">Jake</a>
        </li>
        <li>
            <a href="">Logout</a>
        </li>
    @endauth

    @guest
        <li>
            <a href="{{ route('login') }}">Login</a>
        </li>
        <li>
            <a href="{{ route('register') }}">Register</a>
        </li>
    @endguest
</ul>