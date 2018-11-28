<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">IS601</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <li class="active nav-item "><a class="nav-link" href="{{route('index')}}">Home</a></li>
            </li>
            <li class="nav-item">
            <li class="active nav-item "><a class="nav-link" <a href="{{route('about')}}">About </a></li>
            <li class="active nav-item "><a class="nav-link" <a href="{{route('contact')}}">Contact</a></li>

            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"></a>
            </li>

                </div>
            </li>
        </ul>



<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">

        </div>


    </div>
</div>
</body>
</html>
