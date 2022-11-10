@extends('template')

@section('title')
<title>Feladványok megtekintése</title>
@endsection

@section('content')

@if ( count($Puzzles) == 0 )
    <h1>Hoppá! Még nincsenek feladványaink!</h1>
@else
    @foreach($Puzzles as $puzzle)
        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Létrehozva: {{ $puzzle->created_at }}</div>
            <img src={{ asset($puzzle->picture) }} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Megfejtés: {{ $puzzle->answer }}</h5>
              <p class="card-text">Feltöltötte: {{ $puzzle->username }}</p>
              <p class="card-text">Találatok száma: {{ $puzzle->numberOfHits }}</p>
              <p class="card-text">Játszmák száma: {{ $puzzle->numberOfGames }}</p>
              <p class="card-text">Találati arány: {{ $puzzle->numberOfGames == 0 ? 0 : ($puzzle->numberOfHits / $puzzle->numberOfGames) * 100 }} %</p>
            </div>
          </div>
    @endforeach

    <div class="row">
		<div class="col-12">
			{{ $Puzzles->links() }}
		</div>
	</div>
@endif




@endsection
