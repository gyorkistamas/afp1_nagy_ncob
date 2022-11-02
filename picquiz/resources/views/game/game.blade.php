@extends('template')

@php
	$debug = True;
@endphp

@section('title')
<title>Előkészület</title>
@endsection


@section('content')

<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">

	<div class="row">
		<div class="col-12 text-center">
			<h1>Melyik videójáték látható a képen?</h1>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-12 col-lg-4 d-flex justify-content-center">
			<img class="col-12" id=qimg src="images/undefined.jpg">
			</img>
		</div>

		<hr class="mt-2 d-block d-lg-none">

		<div class="col-12 col-lg-8">
			<div style="display: flex; justify-content: space-between;">
				<div class=mb-4>
					<h3>Tipp:</h3>
					<input></input>
				</div>
				<div style="float: right;">
					<h4>N/M</h4>
					<h4>K találat</h4>
				</div>
			</div>
			<a class="btn btn-success" href="/play">Beküldés</a>
			<a class="btn btn-danger" href="/play">Passz</a>
		</div>
	</div>


	<div class="row mt-3" style="font-size: 12px;">
		Készítette: Karácsony Balázs, Györkis Tamás, Kovács Dávid
	</div>

</div>

@endsection
