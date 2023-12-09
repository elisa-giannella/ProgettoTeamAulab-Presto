<x-layout>

    <div class="container-fluid">
        <div class="row">
            <h1 class="t-c text-center my-5 fs-lg"> {{ $category->name }} </h1>

            <article class="row p-0 justify-content-center align-items-center mb-5">
                @forelse($announces as $announce)
                <x-card-lg :announce='$announce' />
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
            </article>

        </x-layout>