@extends('template')

@section('title')
	<title>Visszajelzések</title>
@endsection

@section('content')

<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
	<div class="row">
		<div class="col-12 text-center">
			<h1>Visszajelzések listája</h1>
		</div>
	</div>


	@if(session()->has('message'))

		<div class="row">
			<div class="col-0 col-md-4"></div>

				<div class="col-12 col-md-4 text-white text-center bg-success bg-gradient rounded-3">
					<h3>{{ session('message') }}</h3>
				</div>
		</div>

		@endif

	<hr>

	@foreach ($feedbacks as $feedback)
		<div class="row">
			<div class="col-12 col-lg-2 text-center">
				<h3>{{ $feedback->title }}</h3>
			</div>

			<div class="col-12 col-lg-4 text-center">
				<p>{{ $feedback->message }}</p>
			</div>

			<div class="col-12 col-lg-2 text-center">
				<h4>Írta: {{ \App\Models\User::find($feedback->creator)->username }}</h4>
			</div>

			<div class="col-12 col-lg-2 text-center">
				<h5>Dátum: {{ $feedback->created_at }}</h5>
			</div>

			<div class="col-12 col-lg-2 text-center">
				<form method="POST" action="/feedback/all/{{ $feedback->id }}">
					@csrf
					@method('PUT')
					@if($feedback->read == False)
					<input type="number" name="read" value="1" hidden>
					<button type="submit" class="btn btn-success">Megjelölés olvasottként</button>
					@else
					<input type="number" name="read" value="0" hidden>
					<button type="submit" class="btn btn-warning">Megjelölés olvasatlanként</button>
					@endif
				</form>
			</div>

		</div>

		<hr>
	@endforeach

	<div class="row">
		<div class="col-12">
			{{ $feedbacks->links() }}
		</div>
	</div>

</div>

@endsection