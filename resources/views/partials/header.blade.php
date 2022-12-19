<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img class="logo" src="https://png.pngitem.com/pimgs/s/8-81060_movie-lovers-movie-lovers-logo-hd-png-download.png" alt=""></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link {{Route::currentroutename() === 'collections' ? 'active' : '' }}" href="{{route('collections')}}">Collections</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>