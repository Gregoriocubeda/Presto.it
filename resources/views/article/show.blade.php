    <x-layout>
    <div class="container magictrick">
        <div class="row mt-5">
            <div class="col-md-12 card mt-4 p-2 cardcustom rounded-5 p-3 mb-3 ">
            @if($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner carosellostyle">
                        @foreach ($article->images as $key => $image)
                    <div class="carousel-item @if ($loop->first) active @endif  ">
                        <img src="{{ $image->getUrl(300, 300)}}" class="d-block margine rounded-5" alt="foto momentaneamente non disponibile">
                    </div>
                    @endforeach
                    </div>
                    @if ($article->images->count() > 1)
                    <button class="carousel-control-prev bottonecarosello" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon colorefreccia" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bottonecarosello" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon colorefreccia" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
                @else
                <img src="https://picsum.photos/300" alt="Nessuan foto inserita dall'utente">
                @endif
                <div class="card d-flex text-center dettagliocard2">
                <h1 class="titleindex">{{$article->title}}</h1>
                <h4 class="titleindex">{{$article->price}}$</h4>
                <h4 class="loremstyle">Descrizione</h4>
                <p class="fs-5">{{$article->description}}</p>
                </div>
            </div>
        </div>
    </div>





        
    </x-layout>