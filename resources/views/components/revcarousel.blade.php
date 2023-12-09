{{-- <div class="row align-items-center justify-content-center"> --}}

    {{-- carosello label e semaforo --}}
    <div class="row justify-content-center mt-3">
        @if($announce->images->isNotEmpty())
        <div class="col-12">
            <div id="carouselExample" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    @foreach($announce->images as $image)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="{{$image->getUrl(300,300)}}" class="d-block rounded" alt="...">
                            </div>
                            <div class="col-3 mx-3 d-flex flex-column justify-content-between">

                                <ul class="list-unstyled mt-3">
                                    <li class="bg-p py-1"><h3 class="card-title">{{$announce->name}}</h3></li>
                                    <li class="bg-p py-1"><a href="{{ route('announcement.filter', ['category'=>$announce->category]) }}" class=" text-decoration-none t-b"><h6 class="card-subtitle">{{$announce->category->name}}</h6></a></li>
                                    <li class="bg-p py-0"><p class="py-0 card-text">{{$announce->description}}</p></li>
                                    <li class="bg-p fw-bold">$ {{$announce->price}}</li>
                                </ul>

                                @if($image->labels)
                                <div>
                                    <div class="card-headerd my-1 mt-2">
                                        <span class="fw-bold">Tags</span>
                                    </div>
                                    <ul class="list-group list-group-flush rounded">
                                        <li class="list-group-item bg-yo">
                                            @foreach($image->labels as $label)
                                            <span>{{$label}}@if(!$loop->last),@endif</span>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                @endif

                            </div>

                            <div class="col-3 mx-3 d-flex flex-column justify-content-center">
                                <div class="card-headerd my-1 mt-2">
                                    <span class="fw-bold">Revisione Immagine {{$loop->index+1}}</span>
                                </div>
                                <ul class="list-group list-group-flush mt-3">
                                    <li class="list-group-item bg-p"><span class="{{$image->adult}} me-1"></span> <span>Adulti</span></li>
                                    <li class="list-group-item bg-p"><span class="{{$image->spoof}} me-1"></span> <span>Satira</span></li>
                                    <li class="list-group-item bg-p"><span class="{{$image->medical}} me-1"></span> <span>Medicina</span></li>
                                    <li class="list-group-item bg-p"><span class="{{$image->violence}} me-1"></span> <span>Violenza</span></li>
                                    <li class="list-group-item bg-p"><span class="{{$image->racy}} me-1"></span> <span>Contenuto Ammiccante</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row p-0 justify-content-center align-items-center my-4">
            <div class="col-10 d-flex justify-content-between my-3 mx-5 px-5">
                <button class="carousel-control-prev position-static py-2" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <i class="fa-solid fa-angles-left t-c fs-5"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <div>
                    <form action="{{route('revisor.accept_announcement', ['announce'=>$announce])}}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-outline-success mx-3">Accetta</button>
                    </form>

                    <form action="{{route('revisor.reject_announcement', ['announce'=>$announce])}}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-outline-danger mx-3">Rifiuta</button>
                    </form>
                </div>
                <button class="carousel-control-next position-static" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <i class="fa-solid fa-angles-right t-c fs-5"></i>
                    {{-- <span class="carousel-control-next-icon aria-hidden="true"></span> --}}
                    <span class="visually-hidden">Next</span>
                </button>
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
        <div class="col-12 d-flex justify-content-center my-5">
                <form action="{{route('revisor.accept_announcement', ['announce'=>$announce])}}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-outline-success mx-3">Accetta</button>
                </form>

                <form action="{{route('revisor.reject_announcement', ['announce'=>$announce])}}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-outline-danger mx-3">Rifiuta</button>
                </form>
        </div>
        @endif
    </div>
