@extends('template')

@section('title')
<title>Hiba az adatbázis kapcsolat létrehozásánál!</title>
@endsection


@section('content')

<div class="container bg-dark text-white p-4 rounded-3 text-center" style="--bs-bg-opacity: .98;">
	<h1>Hiba történt az adatbázissal való kommunikáció során!</h1>
	<button class="btn btn-danger" onClick="window.location.reload();">Oldal újratöltése</button>
</div>
@endsection