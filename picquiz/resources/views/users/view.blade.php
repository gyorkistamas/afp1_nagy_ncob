@extends('template')

@section('title')
{{-- {{ Str::title($User->username) }} --}}
<title>{{ Str::title($User->username) }} megtekintése</title>
@endsection

@section('content')

<section class="vh-100">
  <div class="container h-70">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card bg-dark text-white" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="{{ asset($User->profile_picture) }}"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">{{ $User->username }}</h4>
            <p class="text-white mb-4">{{ $User->isAdmin == 1 ? '@Adminisztrátor' : '@Felhasználó' }} <span class="mx-2">|</span>
                <a href="#!">{{ $User->email }}</a>
            </p>

            <div class="mb-4 pb-2">
                <p class="mb-2 h5">{{ $User->created_at }}</p>
                <p class="text-white mb-4">Csatlakozás ideje</p>
            </div>

            {!! $User->id == Auth::User()->id ? "<a class='btn btn-success btn-rounded btn-lg' href='/users/edit'>Profil szerkesztése</a>" : "" !!}
            {{-- @if ($User->id == Auth::User()->id)
            <a class="btn btn-success btn-rounded btn-lg" href="/users/edit">Profil szerkesztése</a>
            @endif --}}

            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">{{ $User->numberOfGames }}</p>
                <p class="text-white mb-0">Játszmák száma</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">{{ $User->numberOfHits }}</p>
                <p class="text-white mb-0">Eltalált feladványok</p>
              </div>
              <div>
                <p class="mb-2 h5">{{ $User->numberOfGames == 0 ? 0 : ($User->numberOfHits / $User->numberOfGames) * 100 }} %</p>
                <p class="text-white mb-0">Találati arány</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-12 col-xl-4">

        <div class="card bg-dark text-white" style="border-radius: 15px;">
          <div class="card-body text-center">
            <h3 class="mb-2">Korábbi játszmák:</h3>
                <div class="row gap-2">
                    @if ( count($GamesPlayedByUser) == 0 )
                        <h4 class="mb-2">Még nem játszott egy játékot sem!</h4>
                    @else
                        @foreach ($GamesPlayedByUser as $gpbu)
                            <div class="card bg-dark border border-5 border-info">
                                <div class="card-header">
                                    <h5 class="mb-2">Befejezés időpontja: {{ $gpbu->created_at }}</h5>
                                </div>
                                <div class="card-body">

                                    <h5 class="mb-2">Találatok száma: {{ $gpbu->hit }}</h5>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
@endsection

