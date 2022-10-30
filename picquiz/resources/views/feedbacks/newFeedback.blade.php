@extends('template')

@section('title')
	<title>Új visszajelzés</title>
@endsection

@section('content')
	<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Új visszajelzés</h1>
				<p>Hagyja itt észrevételeit, problémáit.</p>
			</div>
		</div>

		<hr>

		<form method="POST" action="/feedback/new">
			@csrf

		
			<div class="row">


				<div class="col-0 col-md-4"></div>

				<div class="col-12 col-md-4">
					<label for="title" class="form-label">Visszajelzés címe:</label>
					<input class="form-control" type="text" name="title" id="title" placeholder="Hiba, észrevétel, javaslat stb." value="{{ old("title") }}" required>
					@error('title')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                      @enderror
				</div>
			</div>


			<div class="row">
				<div class="col-12 mt-2">
					<label for="message" class="form-label">Üzenete:</label>
					<textarea class="form-control" name="message" id="message" rows="10" placeholder="Ide írja az üzenetét" required>{{ old("message") }}</textarea>
					@error('message')
                        <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-4 d-flex justify-content-center">
					<button type="submit" class="btn btn-success">Beküldés</button>
				</div>
			</div>


		</form>

	</div>
@endsection