<nav class="navbar bg-body-tertiary fixed-top d-none d-md-block py-0">

    <div class="container-fluid">
        <div class="row justify-content-between mx-0 w-100 ">

            {{-- div sinistra --}}
            <div class="col-4 d-flex align-items-center">

                {{-- logo --}}
                <a href="{{route('home')}}">
                    <img class="mx-3 logo-custom mb-4" src="/media/presto_intero.png" alt="">
                </a>

                {{-- lavora con noi --}}
                <a class="nav-link" href="{{route('workwithus')}}">
                    <button type="button" class="btn lavora btn-lavora mx-2 text-decoration-none">
                        {{__('ui.buttonWork')}}
                    </button>
                </a>


            </div>

            {{-- div centrale --}}
            <div class="col-3 d-flex align-items-center justify-content-center">

                {{-- ricerca --}}
                <form action="{{ route('announcements.search') }}" method="GET" class="d-flex" role="search">
                    @csrf
                    <input name="searched" class="form-controlSearch" type="search" placeholder="" aria-label="Search">
                    <button type="submit" class="search-btn">
                        <i class="fs-5 mt-2 cerca bi1 bi bi-search"></i>
                    </button>
                </form>

            </div>

            {{-- div destra --}}
            <div class="col-4 d-flex align-items-center justify-content-end">

                {{-- lingue --}}

                <div class="dropdown">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('vendor/blade-flags/language-' .  __('ui.lang')  . '.svg')}} " width="32" height="32" alt="">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><x-_locale lang="it"/></a></li>
                        <li><a class="dropdown-item" href="#"><x-_locale lang="en"/></a></li>
                        <li><a class="dropdown-item" href="#"><x-_locale lang="es"/></a></li>
                    </ul>
                </div>


                {{-- utente autenticato --}}
                @auth
                {{-- crea annuncio --}}
                <a class="nav-link" href="{{ route('announcement.create')}}">
                    <button type="button" class="crea ms-3 py-1 btn d-flex align-items-center btn1 btn-crea annuncio"><i class="fa-solid fa-plus me-2"></i>{{__('ui.buttonCreate')}}</button>
                </a>
                @else
                {{-- utente non autenticato --}}
                <a href="{{ route('register')}}"><button type="button" class="btn btn-registrati registrati">Registrati</button></a>
                @endauth

                <a class="nav-link btn" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                    <i class="user-animation fa-solid fa-user fa-2x mx-4"></i>
                </a>


            </div>

        </div>
    </div>


</nav>

<div class="spacing"></div>

<div class="offcanvas offcanvas-end bg-b" data-bs-scroll="true" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">

        <button type="button" class="btn-close btn-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-b">

        <i class="ms-5 fa-solid fa-user fa-2x t-y d-inline"></i>
        @auth
        <span class="my-2 ms-3 d-inline nav-link t-w fw-medium text-decoration-none">{{Auth::user()->name}}</span>
        @endauth
        <ul class=" list-unstyled mt-4">

            @auth
            @if(Auth::user()->is_revisor)
            {{-- revisore --}}
            <li class="my-2 ms-5  nav-link t-w fw-medium text-decoration-none">
                <a class="nav-link" href="{{route('revisor.index')}}">{{__('ui.revisor')}} (<span class="text-danger fw-bold">{{App\Models\Announce::toBeRevisionedCount()}}</span>)</a>
            </li>
            @endif
            <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="my-2 ms-5  nav-link t-w fw-medium text-decoration-none ">Logout</button>
                </form>
            </li>
            @endauth

            @guest
            <li><a class="my-2 ms-5 nav-link t-w fw-medium text-decoration-none " href="{{ route('login')}}">Login</a></li>
            @endguest
        </ul>
    </div>
</div>
