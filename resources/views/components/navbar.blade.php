  <div>
      <nav class=" navbar navbar-expand-lg  bg-body-tertiary navbarCustom fixed-top" id="navbar">
          <div class="container-fluid ">
            <a class="navbar-brand text-primary textColor" href="{{route('article.homepage')}}">
              <img src="https://cdn3d.iconscout.com/3d/premium/thumb/shopping-trolley-3d-icon-download-in-png-blend-fbx-gltf-file-formats--cart-shop-online-e-commerce-pack-icons-8001430.png" width="65"  alt="">
            </a>
            <a class="navbar-brand text-primary textColor ms-2 fs-2 navstyle" href="{{route('article.homepage')}}">Presto</a>
            <button class="navbar-toggler" data-bs-theme="dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active textColor ms-2 mt-1 fs-5" aria-current="page" href="{{route('article.index')}}">{{__('ui.Announces')}}</a>
                </li>
                  @auth
                  @if(Auth::user()->is_revisor)
                  <div class="d-flex justify-content-start">
                  <li class="nav-item">
                    <a class="nav-link textColor ms-2 mt-1  fs-5" href="{{route('revisor.index')}}">{{__('ui.revisionzone')}}</a>
                  </li>
                  <span class="revisioncount">
                    {{ App\Models\Article::toBeRevisedCount()}}
                  </span>
                  </div>
                  @endif
                      <li class="nav-item"><a class="nav-link active textColor ms-2 mt-1  fs-5" href="{{route('article.create')}}">{{__('ui.Create')}}</a></li>
                  
                <form action="{{route('logout')}}" method="POST">
                  @csrf
          <button type="submit" class="btn btn-nav textColor ms-2 mt-1  fs-5">Logout</button>

              </form>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle textColor ms-2 mt-1  fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.Category')}}</a>
                <ul class="dropdown-menu ms-2ms-2 categorystyle">
                  @foreach ($categories as $category )
                  <li>
                    <a class="dropdown-item text-capitalize categorystyle" href="{{route('byCategory', ['category' => $category])}}"> {{__("ui.$category->name")}}</a>
                  </li>
                    @if (!$loop->last)
                      <hr class="dropdown-divider categorystyle">
                    @endif
                  @endforeach
                </ul>
              </li>
              @if(Auth::user()->is_revisor)
              @else
              <li class="nav-item">
                <a class="nav-link active textColor ms-2 mt-1  fs-5" aria-current="page" href="{{route('article.lavora-con-noi')}}">{{__('ui.joinUs')}}  </a>
              </li>
              @endif
                @endauth

                @guest
                <li class="nav-item">
                  <a class="nav-link textColor ms-2 mt-1  fs-5" href="{{route('login')}}">{{__('ui.Access')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link textColor ms-2 mt-1  fs-5" href="{{route('register')}}">{{__('ui.Register')}}</a>
                </li> 
                @endguest
            
                <div class="d-flex justify-content-end">
                <div class="btn-group">
                  <button class="btn dropdown-toggle textColor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                  </button>
                  <ul class="dropdown-menu categorystyle">
                    <form class="ms-2 mt-2" action="{{route('article.search')}}" method="GET">
                      <div class="m-2">
                        <input type="search" name="query" placeholder="Search" class="searchCustom mt-2 searchForm">
                        <button class="bottonecstm" type="submit">Search</button>
                      </div>
                    </form>
                  </ul>
                </div>
              

                <li class="nav-item dropdown d-flex justify-content-end">
                <a class="nav-link dropdown-toggle textColor fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe-europe-africa" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M3.668 2.501l-.288.646a.847.847 0 0 0 1.479.815l.245-.368a.81.81 0 0 1 1.034-.275.81.81 0 0 0 .724 0l.261-.13a1 1 0 0 1 .775-.05l.984.34q.118.04.243.054c.784.093.855.377.694.801-.155.41-.616.617-1.035.487l-.01-.003C8.274 4.663 7.748 4.5 6 4.5 4.8 4.5 3.5 5.62 3.5 7c0 1.96.826 2.166 1.696 2.382.46.115.935.233 1.304.618.449.467.393 1.181.339 1.877C6.755 12.96 6.674 14 8.5 14c1.75 0 3-3.5 3-4.5 0-.262.208-.468.444-.7.396-.392.87-.86.556-1.8-.097-.291-.396-.568-.641-.756-.174-.133-.207-.396-.052-.551a.33.33 0 0 1 .42-.042l1.085.724c.11.072.255.058.348-.035.15-.15.415-.083.489.117.16.43.445 1.05.849 1.357L15 8A7 7 0 1 1 3.668 2.501"/>
                </svg></a>
                <ul class="dropdown-menu ms-2ms-2 categorystyle">
                  <li class="dropdown-item"><x-_locale lang="it"><img src="https://www.google.it/url?sa=i&url=https%3A%2F%2Fdepositphotos.com%2Fit%2Fphoto%2Fthe-italian-flag-98832650.html&psig=AOvVaw2Vqlqy385W-Yx1Z_3bz5Xa&ust=1727806383434000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLCxxv6i64gDFQAAAAAdAAAAABAE" alt=""></x-_locale>Italiano</li>
                  <li class="dropdown-item"><x-_locale lang="en"> <img src="https://www.google.it/url?sa=i&url=https%3A%2F%2Fdepositphotos.com%2Fit%2Fvectors%2Fbandiera-inglese.html&psig=AOvVaw3mM-n30XHRe7uWsTbWG0gJ&ust=1727806416129000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiowI6j64gDFQAAAAAdAAAAABAE" alt=""></x-_locale>Inglese</li>
                  <li class="dropdown-item"><x-_locale lang="fr"> <img src="https://www.google.it/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fit%2Fvettoriale%2Fbandiera-della-francia-icona-luminosa-rotonda-su-sfondo-bianco-gm1019807992-274031821&psig=AOvVaw01by4ryoVS8JpUXriHtz-h&ust=1727806464604000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLjSzaaj64gDFQAAAAAdAAAAABAE" alt=""></x-_locale>Francese</li>
                  </ul>
                </li>
              </ul> 
            </div>
          </div>
        </nav>
  </div>