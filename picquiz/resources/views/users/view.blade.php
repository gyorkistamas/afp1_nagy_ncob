@extends('template')

@section('title')
<title>{{Str::title(Auth::User()->username)}} megtekintése</title>
@endsection

@section('content')

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card bg-dark text-white" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="{{Auth::User()->profile_picture}}"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{Auth::User()->username}}</h4>
            <p class="text-white mb-4">{{Auth::User()->isAdmin == 1 ? '@Adminisztrátor' : '@Felhasználó'}} <span class="mx-2">|</span> 
                <a href="#!">{{Auth::User()->email}}</a>
            </p>

            <div class="mb-4 pb-2">
                <p class="mb-2 h5">{{Auth::User()->created_at}}</p>
                <p class="text-white mb-4">Csatlakozás ideje</p>
            </div>

            
            <a class="btn btn-primary btn-rounded btn-lg" href="/users/edit">Profil szerkesztése</a>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">{{Auth::User()->numberOfGames}}</p>
                <p class="text-white mb-0">Játszmák száma</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">{{Auth::User()->numberOfHits}}</p>
                <p class="text-white mb-0">Eltalált feladványok</p>
              </div>
              <div>
                <p class="mb-2 h5">{{ Auth::User()->numberOfGames == 0 ? 0 : (Auth::User()->numberOfHits / Auth::User()->numberOfGames) * 100 }} %</p>
                <p class="text-white mb-0">Találati arány</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection

