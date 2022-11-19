@extends('template')

@section('title')
<title>Előkészület</title>
@endsection


@section('content')
<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">

	<div class="row">
		<div class="col-12 text-center">
			<h1>Új játék beállításai</h1>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-12 col-lg-4 d-flex justify-content-center">
			<div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="true">
				<div class="carousel-indicators">
				  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="images/samplePictures/pacman.jpg" class="d-block w-100" alt="Pac-man">
				  </div>
				  <div class="carousel-item">
					<img src="images/samplePictures/tetris.jpg" class="d-block w-100" alt="Tetris">
				  </div>
				  <div class="carousel-item">
					<img src="images/samplePictures/cod.jpg" class="d-block w-100" alt="Call of Duty">
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Előző</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Következő</span>
				</button>
			  </div>
		</div>

		<hr class="mt-2 d-block d-lg-none">

		<div class="col-12 col-lg-8">
			<form
				action="/generateNewGame"
				method="post"
				onsubmit="return checkLimits()"
			>
				@csrf
				<h3>Hány kérdés szerepeljen:</h3>
				<input id=game_len
						name=game_len
						class="d-inline-block form-control w-25"
						type=number
						min=1 value=10
						placeholder=10
				></input>
				<span id=err class="text-danger"></span>
				<h6 mb-3>Sok sikert!</h6>
				<button class="btn btn-success" type=submit>Kezdés</button>
			</form>
		</div>
	</div>


	<div class="row mt-3" style="font-size: 12px;">
		Készítette: Karácsony Balázs, Györkis Tamás, Kovács Dávid
	</div>

</div>
<script>
	function checkLimits(){
		let hGL = document.getElementById('game_len');
		let hErr = document.getElementById('err');
		if(hGL.value > {{ $max }}){
			hErr.innerText = "*Túl magas számot adtál meg!";
			return false
		}else{
			return true;
		}
	}
</script>
@endsection
