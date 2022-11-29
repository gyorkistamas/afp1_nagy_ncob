@extends('template')

@section('title')
<title>Feladványok megtekintése</title>
@endsection

@section('content')

<div class="container bg-dark text-white p-4 rounded-3 mb-4">
    <div class="row justify-content-center gap-3">
        @if ( count($Puzzles) == 0 )
            <h1 class="text-center">Hoppá! Még nincsenek feladványaink! <a class="btn btn-success ms-5" href="/games/new">Új feladvány</a></h1>
        @else
            <h1 class="text-center">Feladványok: <a class="btn btn-success ms-5" href="/games/new">Új feladvány</a></h1>
            @foreach($Puzzles as $puzzle)
                <div class="card text-bg-dark mb-4 border border-5 border-success" style="max-width: 20rem;">
                    <div class="card-header">
                        <span class="badge bg-success">Létrehozva: {{ $puzzle->created_at }}</span>
                    </div>
                    <img src={{ asset($puzzle->picture) }} class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">Megfejtés: {{ Str::upper($puzzle->answer) }}</h5>
                    <p class="card-text font-weight-bold">Feltöltötte: {{ $puzzle->username }}</p>
                    <p class="card-text font-weight-bold">Találatok száma: {{ $puzzle->numberOfHits == 0 ? 0 : $puzzle->numberOfHits }}</p>
                    <p class="card-text font-weight-bold">Játszmák száma: {{ $puzzle->numberOfGames == 0 ? 0 : $puzzle->numberOfGames }}</p>
                    <p class="card-text font-weight-bold">Találati arány: {{ $puzzle->hitRatio == 0 ? 0 : $puzzle->hitRatio }} %</p>
                </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col-12">
                    {{ $Puzzles->links() }}
                </div>
            </div>
        @endif
    </div>
</div>




@endsection
