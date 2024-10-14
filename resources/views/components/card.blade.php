<div class="col-6 col-md-4">
<a class="nolink" href="{{route('article.show', $article)}}">    
<div class="card cardcustom rounded-5 p-3 mb-3">
<img class="rounded-5 " src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200'}}" alt="Immagine dell'articolo {{$article->title}}" class="card-img-top">
<div class="container my-4">
<div class="row">
<h3 class="card-title cardcustomtitle col-12 d-flex justify-content-center">
        {{$article->title}}
    </h3>
    <h3 class="cardcustomprice col-12 d-flex justify-content-center">
        {{$article->price}}$
    </h3>
    </div>
    </div>
    <div>
        <div>
            <h5 class="stilecat">
            {{__('ui.Category')}}
            </h5>
        </div>
        <div class="">
        <a href="{{route('byCategory', ['category' => $article->category])}}" class=" text-capitalize stilecat fs-4">{{$article->category->name}}</a>
        </div>
    </div>
</div>
</div>
</a>