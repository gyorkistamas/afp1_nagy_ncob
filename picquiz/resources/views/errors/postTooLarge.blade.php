@extends('template')

@section('title')
	<title>Hiba!</title>
@endsection


@section('content')
<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
	<div class="row">
		<div class="col-12">
			<h1>A feltöltött fájl mérete nagyobb a megengedettnél, kérjük próbálja újra!</h1>
		</div>

		<div class="col-12 text-center">
			<a class="btn btn-danger" href="{{ url()->previous() }}">Vissza az előző oldalra</a>
		</div>
	</div>
</div>
@endsection