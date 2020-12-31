<nav class="navbar navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="{{route('index')}}#index-top">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span>Menu</span><i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}#about">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}#contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
                @if(\Illuminate\Support\Facades\Auth::user() &&\Illuminate\Support\Facades\Auth::user()->grade == 2)
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mon compte
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color: black;" href="{{route('client.index')}}">Mes sites</a>
                        <a class="dropdown-item" style="color: black;" href="{{route('client.tickets')}}">Mes tickets</a>
                        <a class="dropdown-item" style="color: black;" href="{{route('logout')}}">Se déconnecter</a>
                    </div>
                @elseif(\Illuminate\Support\Facades\Auth::user() &&\Illuminate\Support\Facades\Auth::user()->grade == 3)
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mon compte
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="color: black;" href="{{route('admin.index')}}">Administration</a>
                        <a class="dropdown-item" style="color: black;" href="{{route('logout')}}">Se déconnecter</a>
                    </div>
                @elseif(\Illuminate\Support\Facades\Auth::user() && \Illuminate\Support\Facades\Auth::user()->grade == 1)
                    <a class="nav-link" href="{{route('logout')}}">Se déconnecter</a>
                @else
                    <a href="{{route('login')}}" class="nav-link">Se connecter</a>
                @endif
            </li>
        </ul>
    </div>
</nav>
