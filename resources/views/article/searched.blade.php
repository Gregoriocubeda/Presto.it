<x-layout>
<div class="magictrick text-center">
<div class="d-flex mt-5 justify-content-center">
    <h1 class="mt-4 mb-1 titleindex">Risultati per la ricerca "{{ $query }}"</h1>
</div>
<div class="container">
<div class="row">
    @forelse($articles as $article)
        <x-card :article="$article" />
    @empty
    <div class="container">
        <div class="row">
            <div class="col-12">

            <div class="container card cardBag">
                            <h2 class="text-center mt-5 fs-3 revisorh2">Nessun articolo</h2>
                        
                        <div class="d-flex justify-content-center mt-5">
                            <img width="200" src="https://cdn3d.iconscout.com/3d/premium/thumb/shopping-bag-3d-icon-download-in-png-blend-fbx-gltf-file-formats--ecommerce-shop-user-interface-pack-icons-8988733.png?f=webp" alt="">
                        </div>
                        
                            <a class="text-center linkstyle" href="{{route('article.create')}}">Crea Articolo</a>


                        </div>
                            
                                </div>
        </div>
    </div>
    @endforelse
<div>
    {{ $articles->links() }}
</div>
</div>
</div>

</x-layout>