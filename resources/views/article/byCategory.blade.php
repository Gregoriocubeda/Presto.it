<x-layout>

<div class="container magictrick text-center">
    <div class="row">
        <div class="col-12">
<div class="d-flex justify-content-center">
<h1 class="titleindex m-5">Articoli della categoria <span>{{$category->name}}</span>
</h1>
</div>

<div class="row mt-2">
@forelse ($articles as $article )

        <x-card :article="$article"></x-card>

@empty
<div class="d-flex justify-content-center">
<div class="circle d-flex align-items-center justify-content-center container">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="">
    <h2 class="text-center mt-5">Nessun articolo al momento</h2>
</div>
<div class="d-flex justify-content-center">
    <img width="250" src="https://cdn3d.iconscout.com/3d/premium/thumb/shopping-bag-3d-icon-download-in-png-blend-fbx-gltf-file-formats--ecommerce-shop-user-interface-pack-icons-8988733.png?f=webp" alt="">
</div>
<div class="m-5 d-flex justify-content-center" >
    <a class="text-center linkstyle" href="{{route('article.create')}}">Crea Articolo</a>
    </div>
    </div>
    </div>
    </div>
    </div>
@endforelse


</div>

        </div>
    </div>
</div>






</x-layout>