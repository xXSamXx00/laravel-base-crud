<header id="site_header">
    <div class="little_header">
        <div class="container d-flex justify-content-end align-items-center">
            <p><a href="{{ route('home') }}">Sezione ospite</a></p>
            <p>Dc power&trade; visa&reg; </p>
            <p>Additional dc sites<span>&dtrif;</span></p>
        </div>
    </div>
    <nav class="nav_menu">
        <div class="container">
            <div class="logo">
                <a href="{{ route('admin.home') }}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
                </a>
            </div>
            <ul>
                <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route('admin.comics.index') }}">Comics</a></li>
                <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route('movies.index') }}">Movies</a></li>
            </ul>
            <div class="search">
                <input type="search" placeholder="Search">
                <img height="20" src="{{ asset('img/search-solid.svg') }}" alt>
            </div>
        </div>
    </nav>
</header>