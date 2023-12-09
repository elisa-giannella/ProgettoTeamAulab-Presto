<x-layout>

    <main class="revisor-custrom container-fluid">
        <div class="row justify-content-center align-items-center">
            @if (session('message'))
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
            @endif

            <h1 class=" mt-5 text-center t-r font-Two fs-lg">Diventa Revisore</h1>
            <div class="col-12 d-flex justify-content-center">
                <div class=" bg-c rounded-5 m-5" style="width: 70rem;">
                    <div class="m-5 card-body">

                        <h5 class=" t-r font-Two card-title"><strong>Cosa fa un revisore </strong></h5>

                        <p class="font-Two card-text">Il Revisore di Annunci Online è responsabile della valutazione, moderazione e miglioramento della qualità degli annunci presenti su un sito web dedicato. Questa figura svolge un ruolo cruciale nel garantire un'esperienza positiva agli utenti e nel mantenere gli standard di qualità del sito.</p>

                        <h5 class="t-r font-Two"><strong>Compiti Specifici:</strong></h5>


                        <p class="font-Two">
                            <strong>Valutazione dell'Annuncio:</strong> <br> Esaminare attentamente gli annunci pubblicati per garantire la conformità con le linee guida del sito e verificare l'accuratezza delle informazioni <br>
                        </p>
                        <p class="font-Two">
                            <strong>Moderazione e Rimozione:</strong> <br> brIdentificare e rimuovere annunci che violano le politiche del sito, inclusi contenuti inappropriati, truffe o informazioni fuorvianti. Applicare sanzioni o avvertimenti agli utenti in caso di violazioni ripetute. <br>
                        </p>
                        <p class="font-Two" >
                            <strong> Comunicazione con gli Utenti:</strong> <br> Interagire con gli inserzionisti per fornire feedback costruttivo riguardo agli annunci respinti o moderati. Rispondere alle richieste degli utenti in merito alle decisioni prese. <br>
                        </p>
                        <p class="font-Two">
                            <strong>Miglioramento delle Linee Guida:</strong> <br> Collaborare con il team di sviluppo e altri revisori per sviluppare e aggiornare le linee guida del sito, assicurando che siano chiare e in linea con le aspettative degli utenti. <br>
                        </p>
                        <p class="font-Two">
                            <strong>Monitoraggio delle Tendenze:</strong> <br> Tenersi aggiornati sulle tendenze del settore degli annunci online e sugli sviluppi relativi alle truffe o alle pratiche fraudolente. <br>
                        </p>
                        <p class="font-Two">
                            <strong>Requisiti:</strong> <br>
                            Eccellenti competenze di comunicazione scritta e verbale.
                            Capacità di prendere decisioni rapide e basate su criteri definiti.
                            Attitudine a lavorare in un ambiente dinamico e ad affrontare sfide quotidiane.
                            Conoscenza approfondita delle politiche del sito e capacità di interpretarle correttamente.
                            Sensibilità agli aspetti legati alla privacy e alla sicurezza online.
                            Qualifiche Aggiuntive (opzionali):
                            Esperienza pregressa nel settore della moderazione online o della revisione di contenuti.
                            Conoscenza delle leggi e delle normative pertinenti relative agli annunci online.
                            Il Revisore di Annunci Online gioca un ruolo fondamentale nel mantenere la fiducia degli utenti nel sito, contribuendo alla creazione di una piattaforma sicura, affidabile e di alta qualità per la pubblicazione di annunci.
                        </p>

                        <div class="mt-5 d-flex justify-content-center align-items-center col-12">
                            <a href="{{route('become.revisor')}}">
                                <button class="btn btn-crea annuncio btn1 crea">Diventa Revisore</button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

</x-layout>