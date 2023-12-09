<x-layout>

    <div class="home-background">
        <header >
            <div class="container-fluid">

                {{-- carosello header --}}
                <div class="row">

                    @if (session('access.denied'))
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{ session('access.denied') }}
                        </div>
                    </div>
                    @endif

                    @if (session('message'))
                    <div class="col-12">
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    </div>
                    @endif

                    <div class="col-12">
                        <p class="text-center t-y font-One pt-5">
                            {{ __('ui.carousel2-1') }}<br>{{ __('ui.carousel2-2') }}<br>{{ __('ui.carousel2-3') }}
                        </p>
                    </div>

                    <div class="col-12 d-flex justify-content-center mt-5">
                        <div id="#carouselExampleAutoplaying" class="d-none d-md-block carousel slide"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <x-categcard :category='$categories[0]' />
                                <x-categcard :category='$categories[1]' />
                                <x-categcard :category='$categories[2]' />
                                <x-categcard :category='$categories[3]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <x-categcard :category='$categories[3]' />
                                <x-categcard :category='$categories[4]' />
                                <x-categcard :category='$categories[5]' />
                                <x-categcard :category='$categories[6]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <x-categcard :category='$categories[6]' />
                                <x-categcard :category='$categories[7]' />
                                <x-categcard :category='$categories[8]' />
                                <x-categcard :category='$categories[0]' />
                            </div>
                        </div>
                    </div>

                    {{-- carosello categorie mobile --}}
                    <div id="#carouselExampleAutoplaying" class=" d-md-none carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <x-categcard :category='$categories[0]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[1]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[2]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[3]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[4]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[5]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[6]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[7]' />
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <x-categcard :category='$categories[8]' />
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            {{-- sezione --}}

            <div class="container-fluid my-5">
                <div class="row align-items-center justify-content-center my-5">

                    <div class="col-12 d-flex flex-column align-items-center mb-5">

                        <h4 class=" Presto-custom font-One fs-1 fw-bold t-b">Presto!</h4>

                        <p class="t-r ">
                            {{__('ui.headerText1')}}
                            <strong>{{__('ui.headerText2')}}</strong>
                            {{__('ui.headerText3')}}
                            <strong>{{__('ui.headerText4')}}</strong>
                        </p>

                        <a href="{{route('announcements.index')}}">
                            <button type="button" class="crea btn btn1 btn-crea annuncio mb-5">{{__('ui.seeAll')}}</button>
                        </a>

                    </div>
                </div>

            </header>
            <main class="pb-3">

                <div class="container-fluid my-2">
                    <div class="row justify-content-center">
                        <div class="col-2 d-flex flex-column align-items-center mt-2">
                            <img src="media/illustration_pay2.png" alt="" class="img-fluid px-5 ">
                            <button type="button" class="fw-medium my-4 btn pay">{{__('ui.buttonPayment')}}</button>
                        </div>
                        <div class="col-2 d-flex flex-column align-items-center justify-content-end mt-auto">
                            <img src="media/piccione2 ill.png" alt="" class="img-fluid px-5 py-3">
                            <button type="button" class="fw-medium my-4 btn travel">{{__('ui.buttonShipping')}}</button>
                        </div>
                    </div>
                </div>

                {{-- card --}}
                <div class="container-fluid section-custom pt-4">
                    <div class="row mt-4 justify-content-center gx-3 my-4">
                        <div class="col-12 pb-2">
                            <h2 class="font-One t-b text-center py-2">{{ __('ui.recentlistings') }}</h2>
                        </div>

                        {{-- schermi grandi --}}
                        @foreach ($announces as $announce)
                        <x-card-lg :announce='$announce' />
                        @endforeach

                        {{-- da mobile --}}
                        <div class="col-12 d-md-none ">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-inner">

                                    @foreach ($announces as $announce)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <x-card :announce='$announce' />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>

    </x-layout>
