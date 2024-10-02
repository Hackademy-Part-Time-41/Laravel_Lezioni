<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">Articoli</a>
                </li>

                @auth


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            User section
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profilo</a></li>
                            <li><a class="dropdown-item" href="{{ route('articles.dashboard') }}">Dashboard articoli</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('authors.index') }}">Dashboard autori</a></li>
                            <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-submit">Logout</button>
                        </form>
                    </li>

                </ul>
                </li>
            @endauth
            {{-- @foreach ($categories as $category)
                <a href="{{ route('articles.byCategory', $category) }}"><button
                        class="btn btn-primary">{{ $category->name }}</button></a>
            @endforeach --}}
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrati qui!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Loggati</a>
                </li>

            @endguest
            </ul>
        </div>
    </div>
</nav>
