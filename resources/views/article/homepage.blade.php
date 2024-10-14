<x-layout >
<div class="magictrick" >
@guest
  

  <div class=" text-center mt-5">
    <img class="d-block mx-auto mb-3" src="https://cdn3d.iconscout.com/3d/premium/thumb/e-commerce-website-3d-icon-download-in-png-blend-fbx-gltf-file-formats--store-site-shopping-online-shop-ecommerce-pack-icons-8102503.png" width="200" alt="">
    <h1 class="display-5 fw-bold text-body-emphasis titleindex"> {{__('ui.titleHome')}}</h1>
    <div class="col-lg-10 mx-auto">
      <p class="lead mb-4 loremstyle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, eos.</p>
    <div>
  <div class="mb-5">
    <form action="{{route('login')}}">
      <button class="bottoneinserisci" type="submit">{{__('ui.CreateArticle')}}</button>
    </form>
  </div>
  </div> 
@endguest
@auth
<div class=" text-center">
    <img class="d-block mx-auto mb-3" src="https://cdn3d.iconscout.com/3d/premium/thumb/e-commerce-website-3d-icon-download-in-png-blend-fbx-gltf-file-formats--store-site-shopping-online-shop-ecommerce-pack-icons-8102503.png" width="200" alt="">
    <h1 class="display-5 fw-bold text-body-emphasis titleindex">{{__('ui.titleHome')}}</h1>
    <div class="col-lg-10 mx-auto">
      <p class="lead mb-4 loremstyle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, eos.</p>
    <div>
  <div class="title.index mb-5">

    <form action="{{route('article.create')}}">
      <button class="bottoneinserisci" type="submit">{{__('ui.CreateArticle')}}</button>
    </form>
  </div>
  </div>
@endauth
  <div>
  <div class="container">
    <div class="row">
    @forelse($articles as $article)
      <x-card :article="$article"/>
    @empty
    <div>
      <p>{{__('ui.noarticle')}}</p>
    </div>
    @endforelse
    </div>
    </div>

    @if (session()->has('errorMessage'))
      <div class="alert alert-danger text-center shadow rounded w-50">
        {{session('errorMessage')}}
      </div>
    @endif

    @if (session()->has('Message'))
    <div class="alert alert-danger text-center shadow rounded w-50">
      {{session('message')}}
    </div>
  @endif

  </div>
  </div>
</x-layout>