  <x-layout>
          <div class="magictrick">
            <div class="container">
            <div class="row d-flex justify-content-center my-5">
              <div class="col-12 col-md-6 col-lg-4">

              </div>
                <div  class="col-12 col-md-6 col-lg-4">
    
                  {{-- form --}}
                <div>
                  <div class="mt-3 card cardCustomLogin formWidth">
                    <span class="textColor"><h1 class="d-flex justify-content-start fs-1">{{__('ui.Access')}}</h1></span>
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="75" fill="currentColor" class="bi bi-box-arrow-in-right justify-content-center d-flex textColor ms-4" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                      <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                    </svg>
                  
              <form class="formWidth" action="{{route('login')}}" method="POST">
                  @csrf
                
          
                  <div class="mb-3 col-md-12">
                      <label for="exampleInputEmail1" class="form-label textColor">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text textColor">We'll never share your email with anyone else.</div>
                    </div>
                  <div class="mb-3 col-md-12">
                    <label for="exampleInputPassword1" class="form-label textColor">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
          
              <div class="my-4 d-flex justify-content-center">
                  <button type="submit" class="bottoneinserisci">Accedi</button>
              </div>

              <div class="justify-content-center d-flex">
              <a href="{{ route('google.redirect') }}" class="stilegoogle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                </svg>   Accedi con Google </a>
              </div>
              <div class="my-4 d-flex justify-content-center">
                  <a class="linkstyle" href="{{route('register')}}">Non sei registrato? Registrati</a>
                  </div> 
                </form>

                              {{-- form --}}
    



        </div>
        </div>       
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center">
    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/login-3d-icon-download-in-png-blend-fbx-gltf-file-formats--profile-password-security-account-lock-web-store-pack-e-commerce-shopping-icons-7908432.png" width="400"  alt="">
      </div>
      </div>
    </div> 
      </x-layout>