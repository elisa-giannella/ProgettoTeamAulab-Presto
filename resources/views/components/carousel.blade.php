<div class="row align-items-center justify-content-center">

    {{-- se l'utente ha inserito delle immagini, vengono visualizzate in un carosello --}}
    @if(!$announce->images->isEmpty())
    <div class="col-3 my-5">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach($announce->images as $image)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img src="{{$image->getUrl(300,300)}}" class="d-block w-100 rounded" alt="...">
                </div>
                @endforeach
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>

    @else
    {{-- se l'utente non ha inserito immagini, viene visualizzata un'immagine di default --}}
    <div class="col-5 my-5">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/media/default.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
    @endif

    {{-- resto della card --}}
    <div class="col-4 h-100 ms-3 my-5">
        <div class="card border-0 bg-transparent">
            <div class="card-body">
                <h2 class="card-title">{{$announce->name}}</h2>
                <a href="{{ route('announcement.filter', ['category'=>$announce->category] ) }}" class=" text-decoration-none t-b"><h6 class="card-subtitle mb-2">{{$announce->category->name}}</h6></a>
                <p class="card-text mt-4">{{$announce->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item fs-3 bg-transparent">$ {{$announce->price}}</li>
            </ul>
        </div>
    </div>


</div>
