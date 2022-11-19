@extends('template')

@section('title')
	<title>Új feladvány hozzáadása</title>
@endsection

@section('content')
	<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
		<div class="row text-center">
			<div class="col-12">
				<h1>Új feladvány hozzáadása</h1>
			</div>
		</div>

		<hr>

		@if(session()->has('message'))

		<div class="row">
			<div class="col-0 col-md-4"></div>

				<div class="col-12 col-md-4 text-white text-center bg-success bg-gradient rounded-3">
					<h3>{{ session('message') }}</h3>
				</div>
		</div>

		@endif

		<form method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-12 col-md-6">
					<label class="form-label" for="picture">Feladvány képe:</label>
					<input type="file" name="picture" id="picture" class="form-control" value="{{ old('picture') }}" required>
					@error('picture')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
				</div>
				<div class="col-12 col-md-6">
					<label class="form-label" for="answer">Feladvány megoldása:</label>
					<input type="text" name="answer" id="answer" class="form-control" value="{{ old('picture') }}" required>
					@error('answer')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
				</div>
				<div class="col-12 text-center mt-4">
					<button type="submit" class="btn btn-success">Küldés</button>
				</div>
			</div>
		</form>
	</div>
@endsection