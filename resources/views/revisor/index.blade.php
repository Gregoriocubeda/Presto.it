<x-layout>
<div class="magictrick">
    <div class="revisorbackground d-flex justify-content-center mt-5">
        <h1 class="revisortitle m-5">
            <i class="fa-solid fa-check"></i>
            Revisor dashboard</h1>
        
    </div>
@if($article_to_check)
<div class="justify-content-center">
<div class="container">
<div class="row">
    @if($article_to_check->images->count())
    @foreach($article_to_check->images as $key => $image)
    <div class="d-flex justify-content-center">
    <div class="col-8">
        <div class="card cardstile mb-3 p-4">
            <div class="row g-0">
                <div class="col-12 col-ml-4 col-lg-4">
                    <img src="{{ $image->getUrl(300, 300)}}" class="img-fluid rounded-5 bordercolor" alt="Immagine {{$key +1}} dell'articolo {{$article_to_check->title}}">
                </div>
                <div class="col-12 col-ml-4 col-lg-4 ps-3 d-flex align-items-center">
                    <div class="card-body">
                        <h5 class="text-center titleindex">Labels</h5>
                        <div class="loremstyle">
                        @if ($image->labels)
                        @foreach ($image->labels as $label)
                            #{{ $label }},
                        @endforeach
                        @else
                            <p class="fst-italic text-center">No Labels</p>
                        @endif
                        </div>
                    </div>
                </div>
                    <div class="justify-content-center d-flex align-items-center loremstyle col-12 col-ml-4 col-lg-4">
                    <div class="container justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->adult}}"></div>
                                </div>
                                <div class="col-10">adult</div> 
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->violence}}"></div>
                                </div>
                                <div class="col-10">violence</div> 
                            </div> 
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->spoof}}"></div>
                                    </div>
                                    <div class="col-10">spoof</div> 
                            </div> 
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->racy}}"></div>
                                </div>
                                <div class="col-10">racy</div> 
                            </div> 
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <div class="text-center mx-auto {{$image->medical}}"></div>
                                </div>
                                <div class="col-10">medical</div> 
                        </div>
                        </div> 
                        </div>  
            </div>
        </div>
    </div>
    </div>
    </div>
    @endforeach
    @else
    @for($i = 0; $i < 6; $i++)

    
    @endfor
    @endif
</div>
</div>
<div class="d-flex justify-content-center">
<div class="col-md-8 m-5 card cardborder mt-5">
    <div class="d-flex justify-content-center mt-5 ">
    <h1>{{ $article_to_check->title }}</h1>
    </div>
    <div class="d-flex justify-content-center">
    <h3>Autore: {{ $article_to_check->user->name }}</h3>
    </div>
    <div class="d-flex justify-content-center">
    <h4>{{ $article_to_check->price }}$</h4>
    </div>
    <div class="d-flex justify-content-center">
    <p class="descriptionsize">{{ $article_to_check->description }}<p>
    </div>
    <div class="d-flex justify-content-center mb-3 px-5">
    <div class="mx-3">
    <form action="{{ route('reject', ['article' => $article_to_check])}}" method="POST">
        @csrf
        @method('PATCH')
    <button class="bottonecustom">Rifiuta</button>
    </form>
    </div>
    <div class="mx-3">
        <form action="{{ route('accept', ['article' => $article_to_check])}}" method="POST">
        @csrf
        @method('PATCH')
        <button class="bottonecustom">Accetta</button>
        </form>
        @if (session()->has('message'))
        {{ session('message')}}
        @endif
    </div>
    </div>
</div>
</div>
@else
<div class="d-flex justify-content-center">
<div class="circle d-flex align-items-center justify-content-center container">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="">
    <h2 class="text-center mt-5">Nessun articolo al momento</h2>
</div>
<div class="d-flex justify-content-center">
    <img width="150" height="" src="https://cdn3d.iconscout.com/3d/premium/thumb/delivery-person-riding-scooter-3d-illustration-download-in-png-blend-fbx-gltf-file-formats--guy-service-vehicle-going-to-package-deliveryman-pack-people-illustrations-4466370.png?f=webp" alt="immagine moto">
</div>
<div class="m-5 d-flex justify-content-center" >
    <a class="text-center linkstyle" href="{{route('article.homepage')}}">Torna all'homepage</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endif
</x-layout>