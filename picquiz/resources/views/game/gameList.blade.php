@extends('template')

@section('title')
<title>Feladványok megtekintése</title>
@endsection

@section('content')

@if ( count($Games) == 0 )
    <h1>Hoppá! Még nem játszottál egy feladvánnyal sem!</h1>
@else
    @foreach($Games as $game)
        <p>$game->created_at</p>
        <p>$game->created_at</p>
        <p>$game->created_at</p>
        <p>$game->created_at</p>
    @endforeach
@endif

@endsection