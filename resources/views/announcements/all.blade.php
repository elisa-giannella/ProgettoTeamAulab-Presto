<x-layout>

    <div class="container-fluid">

        <h3 class="t-c text-center py-5 fs-lg"> Tutti gli annunci: </h3>

        <article class="row p-0 justify-content-center align-items-center">
            @forelse($announces as $announce)
            <x-card-lg :announce='$announce' />
            @empty
        </article>

        <div class="col-10">
            <div class="alert alert-warning py-3 shadow">
                <p class="lead">
                    Non ci sono annunci.
                </p>
                <a href="{{route('announcement.create')}}">Crea un nuovo annuncio</a>
            </div>
        </div>
        @endforelse
    </x-layout>