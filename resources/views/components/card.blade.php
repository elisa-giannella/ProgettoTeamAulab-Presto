<div class="card border-0 bg-white t-r shadow-sm m-3 rounded-5" style="max-width: 500px">
  <div class="row">
    <div class="col-12 col-md-6 ">

      <img src="{{!$announce->images()->get()->isEmpty() ? $announce->images()->first()->getUrl(300,300) : '/media/default.jpg'}}" class="rounded-start-5 w-100" alt="immagine annuncio">
    </div>
    <div class="col-6 p-0 d-flex justify-content-between align-items-center">
      <div class="card-body px-5">
        <a href="{{route('announcement.show', compact('announce'))}}" class="text-decoration-none t-b">
          <h5 class="card-title">{{$announce->name}}</h5>
        </a>
        <a href="{{ route('announcement.filter', ['category'=>$announce->category] ) }}"  class="text-decoration-none t-b">
          <h6 class="card-title mb-4">{{$announce->category->name}}</h6>
        </a>
        <h6 class="card-title mb-4">$ {{$announce->price}}</h6>
        <p class="card-text mb-0"><small class="text-body-secondary">Pubblicato: {{$announce->created_at}}</small></p>
        <p class="card-text"><small class="text-body-secondary">Dall'utente: {{$announce->user->name}}</small></p>
      </div>
    </div>
  </div>
</div>

{{-- <p class="card-text">{{$announce->description}}</p> --}}

{{-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$announce->name}}</h5>
    <p class="card-text">{{$announce->price}}</p>
    <a href="{{ route('announcement.filter', ['category'=>$announce->category] ) }}" class="card-text">{{$announce->category->name}}</a>
    <a href="{{route('announcement.show', compact('announce'))}}" class="btn btn-primary">Scopri di piu'</a>
  </div>
</div> --}}