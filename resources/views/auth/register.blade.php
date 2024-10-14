<x-layout>
<div class="magictrick">
  <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-md-6 col-lg-4">
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card cardCustomRegister">
        <div>
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-shop-window textColor" viewBox="0 0 16 16">
          <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5"/>
        </svg>
        <span><h1 class="textColor">{{__('ui.Register')}}</h1></span>
      </div>
    </div>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-3 col-md-12">
          <label  class="form-label textColor">Name</label>
          <input type="text" name="name" class="form-control">
          
        </div>

        <div class="mb-3 col-md-12">
            <label for="exampleInputEmail1" class="form-label textColor">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text textColor">We'll never share your email with anyone else.</div>
          </div>
        <div class="mb-3 col-md-12">
          <label for="exampleInputPassword1" class="form-label textColor">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3 col-md-12">
            <label for="exampleInputPassword1" class="form-label textColor">Conferma Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="my-4 d-flex justify-content-center">
        <button type="submit" class="bottoneinserisci">Registrati</button>
        </div>
      <div>
        <a class="my-4 d-flex justify-content-center linkstyle" href="{{route('login')}}">Sei già registrato? Accedi</a>
        </div>
      </form>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4  d-flex align-items-center justify-content-center">
      <img src="https://cdn3d.iconscout.com/3d/premium/thumb/add-user-3d-icon-download-in-png-blend-fbx-gltf-file-formats--profile-account-person-interface-pack-icons-4833297.png" width="400" alt="">
    </div>
    </div>
 </div>
 </div>         
</x-layout>