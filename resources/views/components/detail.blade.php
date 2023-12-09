{{-- <div class="row align-items-center justify-content-center"> --}}

    {{-- carosello label e semaforo --}}
    <div class="row justify-content-center mt-5">
        @if($announce->images->isNotEmpty())
        <div class="col-3">
            <div id="carouselExample" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    @foreach($announce->images as $image)
                    <div class="carousel-item @if ($loop->first) active @endif">

                        <img src="{{$image->getUrl(300,300)}}" class="d-block rounded" alt="...">

                    </div>
                    @endforeach
                </div>
                <div class="row p-0 justify-content-center align-items-center my-3">
                    <div class="col-10 d-flex justify-content-between my-2 mx-5">
                        <button class="carousel-control-prev position-static" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left t-c fs-5"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next position-static" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <i class="fa-solid fa-angles-right t-c fs-5"></i>
                            {{-- <span class="carousel-control-next-icon aria-hidden="true"></span> --}}
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 d-flex flex-column">
            <div class="1 my-4">
                <ul class="list-unstyled">
                    <li class="bg-p py-1"><h3 class="card-title">{{$announce->name}}</h3></li>
                    <li class="bg-p py-1"><a href="{{ route('announcement.filter', ['category'=>$announce->category]) }}" class=" text-decoration-none t-b"><h6 class="card-subtitle">{{$announce->category->name}}</h6></a></li>
                    <li class="bg-p py-0 mt-3"><p class="py-0 card-text">{{$announce->description}}</p></li>
                </ul>
            </div>
            <div class="3 mb-4">
                <ul class="list-unstyled">
                    <li class="bg-p fw-bold fs-5">$ {{$announce->price}}</li>
                </ul>
            </div>
        </div>
        @else
        {{-- se l'utente non ha inserito immagini, viene visualizzata un'immagine di default --}}
        <div class="col-3">
            <img src="/media/default.jpg" class="d-block w-100 rounded" alt="...">
        </div>
        <div class="col-3 d-flex justify-content-between flex-column">
            <div class="1 my-4">
                <ul class="list-unstyled">
                    <li class="bg-p py-1"><h3 class="card-title">{{$announce->name}}</h3></li>
                    <li class="bg-p py-1"><a href="{{ route('announcement.filter', ['category'=>$announce->category]) }}" class=" text-decoration-none t-b"><h6 class="card-subtitle">{{$announce->category->name}}</h6></a></li>
                    <li class="bg-p py-0 mt-3"><p class="py-0 card-text">{{$announce->description}}</p></li>
                </ul>
            </div>
            <div class="3 mb-4">
                <ul class="list-unstyled">
                    <li class="bg-p fw-bold fs-5">$ {{$announce->price}}</li>
                </ul>
            </div>
        </div>
        @endif
    </div>
