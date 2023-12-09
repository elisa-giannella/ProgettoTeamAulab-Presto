<x-layout>

    <div class="container-fluid">

        <h3 class="t-c text-center py-5"> Annunci corrispondenti alla tua ricerca: </h3>

        <div class="row p-0 justify-content-center align-items-center">
            @forelse($announces as $announce)
            <x-card-lg :announce='$announce'></x-card>
            @empty

            <div class="col-10">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">
                        Non ci sono annunci per questa ricerca. Prova a cambiare.
                    </p>
                    <a href="{{route('announcement.create')}}">Oppure crea un nuovo annuncio</a>
                </div>
            </div>


            @endforelse
        </div>
    </div>
</x-layout>