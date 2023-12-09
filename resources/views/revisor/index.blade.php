<x-layout>

    <header>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h3 class="t-c text-center mt-5">
                        @if($announcement_to_check)
                        Annuncio da revisionare (1 di {{App\Models\Announce::toBeRevisionedCount()}})
                        @else
                        Non ci sono annunci da revisionare
                        @endif
                    </h3>
                </div>
            </div>
            {{-- annuncio da revisionare --}}
            @if($announcement_to_check)

            <x-revcarousel :announce='$announcement_to_check'></x-carousel>

                @endif

            </div>
            <div class="container-fluid">
                <div class="row mt-5 p-0 justify-content-center align-items-center">

                    <div class="col-12">
                        <h2 class="t-c text-center m-5">
                            Annunci revisionati
                        </h2>
                    </div>
                    {{-- annunci revisionati --}}
                    @foreach($announces as $announce)
                    @if($announce->is_accepted === 1)
                    <x-card-lg :announce='$announce' />
                    <div class="text-center">
                        <form action="{{route('revisor.reject_announcement', $announce)}}" method="POST" class="d-inline ">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="btn btn-outline-danger mb-5">Rifiuta</button>
                        </form>
                    </div>
                    @elseif($announce->is_accepted === 0 )
                    <x-card-lg :announce='$announce' />

                    <div class="text-center">
                        <form action="{{route('revisor.accept_announcement', $announce)}}" method="POST">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="btn btn-outline-success mb-5">Accetta</button>
                        </form>
                    </div>
                    @endif
                    @endforeach

                </div>

            </div>
        </header>
    </x-layout>