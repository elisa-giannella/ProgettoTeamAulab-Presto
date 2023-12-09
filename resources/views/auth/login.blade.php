<x-layout>
    <header>
        <div class="">
            <div class="container-fluid form-background">
                <div class=" justify-content-between align-items-centers row">

                    <div class="col-6">

                    </div>


                    <div
                    class="margin-bot d-flex flex-column justify-content-between align-content-center ms-5 mb-0 pb-5 col-5 bg-c">
                    <div class="altezza"></div>
                    <h4 class="mt-5 text-center font-Two fw-bolder">Accedi subito</h4>
                    <form action={{route('login')}} method="POST" class="mt-5 ms-5 ps-5 font-Two fw-bold">
                        @csrf

                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">La tua mail</label>
                            <input name="email" type="email" class="form-control form-controlRegister" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                            @error('email')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control form-controlRegister "
                            id="exampleInputPassword1">
                            @error('password')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn px-5 annuncio btn1 btn-crea crea">Accedi</button>

                        <p class="my-5 fs-4">Prima volta su Presto?
                            <a class="text-decoration-none" href="{{route('register')}}">
                                <span class="t-y fw-bold">Registrati</span>
                            </a>
                        </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>




    </header>




{{--
    <div class="container">
        <div class="col-12 my-4">
            <h1 class="t-c">Accedi</h1>
        </div>
        <div class="col-5">
            <form action={{route('login')}} method="POST">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    @error('email')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                    @error('password')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input name="remember" type="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Ricordami</label>
                </div>

                <button type="submit" class="crea btn btn1 btn-crea annuncio"></i>Accedi</button>
            </form>
        </div>
    </div> --}}
</div>




</x-layout>