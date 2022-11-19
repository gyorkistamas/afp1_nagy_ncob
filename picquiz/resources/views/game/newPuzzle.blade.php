@extends('template')

@section('title')
	<title>Új feladvány hozzáadása</title>
@endsection

@section('content')
	<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
		<div class="row text-center">
			<div class="col-12">
				<h1>Új feladvány hozzáadása</h1>
				<hr>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-12">
					<label class="form-label" for="picture">Feladvány képe:</label>
					<input type="file" name="picture" id="picture" class="form-control" value="{{ old('picture') }}"required>
				</div>
			</div>
		</form>
	</div>
@endsection