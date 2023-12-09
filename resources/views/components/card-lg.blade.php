<div class="col-4 mx-1 my-3 d-flex justify-content-center">
  <div class="row justify-content-center card1">
    <div class="col-5 px-0">
      <img src="{{!$announce->images()->get()->isEmpty() ? $announce->images()->first()->getUrl(300,300) : '/media/default.jpg'}}" class="rounded-start-5 img-fluid" alt="immagine annuncio">
    </div>

    <div class="col-6 pt-3 pb-2 ps-4 bg-white rounded-end-5">
      <a href="{{route('announcement.show', compact('announce'))}}" class="text-decoration-none t-b">
        <h5 class="card-title mb-2">{{$announce->name}}</h5>
      </a>
      <a href="{{ route('announcement.filter', ['category'=>$announce->category] ) }}"  class="text-decoration-none t-b card-subtitle">
        <h6 class="card-title mb-4">{{$announce->category->name}}</h6>
      </a>
      <h6 class="card-title mb-4 fs-5">$ {{$announce->price}}</h6>
      <p class="card-text mb-0 pt-2"><small class="text-body-secondary">Pubblicato: {{$announce->created_at}}</small></p>
      <p class="card-text"><small class="text-body-secondary">Dall'utente: {{$announce->user->name}}</small></p>
    </div>


  </div>

</div>
