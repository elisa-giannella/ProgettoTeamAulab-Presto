<x-layout>

    <header>
        <div>
            <div class="container-fluid ">
                <div class=" justify-content-between align-items-centers row">
                    <div class=" pb-5 d-flex flex-column justify-content-between align-content-center ms-5 ps-5 col-6 bg-c">
                        <div class="altezza"></div>
                        <h4 class="ms-5 ps-5 font-Two fw-bolder">Registrati</h4>
                        <form action={{route('register')}} method="POST" class="ms-5 ps-5 font-Two fw-bold" >
                                @csrf
                            <div class="mb-5">
                                <label for="name" class="form-label">Il tuo nome</label>
                                <input name="name" type="name" class="form-control form-controlRegister" id="name">
                                @error('name')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">La tua mail</label>
                                <input name="email" type="email" class="form-control form-controlRegister" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('email')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control form-controlRegister " id="exampleInputPassword1">
                                @error('password')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="password_confirmation" class="form-label">Conferma la Password</label>
                                <input name="password_confirmation" type="password" class="form-control form-controlRegister " id="password_confirmation">
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="date" class="form-label">Data di nascita</label>
                                <input type="date" class="form-control form-controlRegister" id="date">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Maschio</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Femmina</label>
                            </div>
                            <div class="mb-5 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Preferisco non specificarlo</label>
                            </div>
                            <button type="submit" class="btn px-5 annuncio btn1 btn-crea crea">Registrati</button>
                        </form>

                    </div>
                    <div class="div-register-custom altezza bg-y flex-column justify-content-between align-content-center col-5 py-5 ">
                        <h4 class="t-w ms-5 ps-5 font-Two py-3">I vantaggi di <strong>Presto</strong> </h4>

                        <div class="ps-4 ms-5 d-flex align-items-center col-10">
                            <img src="media/icons8-thunder-100 (1).png" alt="">
                            <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                                <h5 class="mt-5 pt-3 fw-bolder t-w">Semplice</h5>
                                <p class="t-w">Rispondi ad un annuncio con un click o chiama direttamente il venditore</p>
                            </div>
                        </div>

                        <div class="ps-4 ms-5 d-flex align-items-center col-10">
                            <img src="media/icons8-key-100 (2).png" alt="">
                            <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                                <h5 class="mt-5 pt-3 fw-bolder t-w">Sicuro</h5>
                                <p class="t-w">Consulti solo annunci che sono stati controllati prima della pubblicazione</p>
                            </div>
                        </div>

                        <div class="ps-4 ms-5 d-flex align-items-center col-10">
                            <img src="media/icons8-home-100.png" alt="">
                            <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                                <h5 class="mt-5 pt-3 fw-bolder t-w">Comodo</h5>
                                <p class="t-w">Salvi gli annunci o le ricerche che ti interessano e li rivedi quando vuoi tu</p>
                            </div>
                        </div>

                        <div class="ps-4 ms-5 mt-3 d-flex align-items-center col-10 pb-5">
                            <img src="media/icons8-heart-100.png" alt="">
                            <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                                <h5 class="mt-5 fw-bolder t-w">Affidabile</h5>
                                <p class="t-w  pb-5">Puoi vedere le recensioni e lasciare i tuoi feedback</p>
                            </div>
                        </div>

                </div>
            </div>
        </div>

    </header>

    {{-- <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="t-c"> Registrati </h1>
            </div>
            <div class="col-5">
                <form action={{route('register')}} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                        @error('name')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
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

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <button type="submit" class="crea btn btn1 btn-crea annuncio"></i>Registrati</button>
                </form>
            </div>
        </div>
    </div> --}}




</x-layout>