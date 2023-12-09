<div class="container">
    <div class="row justify-content-center mb-5">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <h1 class="t-c text-center my-5 fs-lg"> Aggiungi un annuncio </h1>

        <div class="col-8">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input wire:model="name" type="text" class="form-control" id="name">
                    @error('name')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                    <div class="mb-3">
                        <label for="number" class="form-label">Prezzo</label>
                        <input wire:model="price" type="number" class="form-control" id="number" step="0.01">
                        @error('price')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input wire:model="description" type="description" class="form-control" id="description">
                        @error('description')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <select wire:model="category" class="form-select" aria-label="Default select example">

                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <input name="images" wire:model="temporary_images" type="file" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" id="images">
                        @error('temporary_images.*')
                            <p class="text-danger mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    @if(!empty($images))
                        <div class="col-12">
                            <p>Anteprima immagine</p>
                            <div class="row">
                                @foreach ($images as $key => $image)
                                    <div class="col">
                                        <div class="img-preview" style="background-image:url({{($image->temporaryUrl())}})"></div>
                                        <button class="btn" type="button" wire:click="removeImage({{$key}})">Cancella</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <button type="submit" class="crea btn btn1 btn-crea annuncio"></i>Invia</button>
                </form>
            </div>
        </div>
    </div>
</div>