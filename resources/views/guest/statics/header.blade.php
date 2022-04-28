<header>
    <div class="blu-header-bar flex">
        <span>DC POWER&#8480; VISA&#174;</span>
        <div class="flex">
            <span>ADDITIONAL DC SITES</span>
            <div class="multi"></div>
        </div>
    </div>
    <nav class="flex header-nav">
        <a href="#">
            <img src="{{ asset('images/dc-logo.png')}}" alt="dc-logo" height="70">
        </a>
        {{-- @dd(Route::current()->getName()) --}}
        <ul class="flex unstyled">
            <li class="{{ Request::is('characters') ? 'active' : '' }}"><a href="{{ route('characters') }}">CHARACTERS</a></li>
            <li class="{{ Request::is('/') || Route::current()->Uri() == '{id}' ? 'active' : '' }}"><a href="{{ route('comics') }}">COMICS</a></li>
            <li><a href="#">MOVIES</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">GAMES</a></li>
            <li><a href="#">COLLECTIBLES</a></li>
            <li><a href="#">VIDEOS</a></li>
            <li><a href="#">FANS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#" class="flex">SHOP<div class="multi multi-black"></div></a></li>
        </ul>
        <form class="search flex">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <button></button>
        </form>
    </nav>
</header>
