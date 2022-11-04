@extends('template')

@section('title')
	<title>Profil szerkesztése</title>
@endsection

@section('content')
	<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
		<form method="POST" action="/users/update" enctype="multipart/form-data">
			@csrf

			<div class="row">
				<div class="col-0 col-md-4"></div>
				<div class="col-12 col-md-4">
					<label for="profil_picture" class="form-label">Profilkép</label>
					<input type="file" accept="image/*" id="profil_picture" name="profil_picture" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-0 col-md-4"></div>
				<div class="col-12 col-md-4">
					<label for="username" class="form-label">Felhasználónév: </label>
					<input type="text" id="username" name="username" class="form-control" value={{ Auth::User()->username }} required>
				</div>
			</div>

			<div class="row">
				<div class="col-0 col-md-4"></div>
				<div class="col-12 col-md-4">
					<label for="email" class="form-label">E-mail cím: </label>
					<input type="email" id="email" name="email" class="form-control" value="{{ Auth::User()->email }}" required>
				</div>
			</div>

			<div class="row">
				<div class="col-0 col-md-4"></div>
				<div class="col-12 col-md-4">
					<label for="password" class="form-label">Jelszó: </label>
					<input type="password" id="password" name="password" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-0 col-md-4"></div>
				<div class="col-12 col-md-4">
					<label for="password_confirmation" class="form-label">Jelszó mégegyszer: </label>
					<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-3 d-flex justify-content-center">
					<button type="submit" class="btn btn-success">Profil frissítése</button>
				</div>
			</div>


		</form>
	</div>
@endsection