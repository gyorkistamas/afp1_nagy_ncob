@extends('template')

@section('title')
<title>Főoldal</title>
@endsection


@section('content')

<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">

	<div class="row">
		<div class="col-12 text-center">
			<h1>Üdv a PicQuiz oldalon!</h1>
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
			<h3>A játék lényege:</h3>
			<p>A játék során képeket fogsz látni játékokból kiemelve. A feladatod, hogy meghatározd a játék címét. Kisbetűkkel-nagybetűkkel nem kell törődnöd, sőt speciális karaktereket is kihagyhatod (pl. kettőspont) csak az számít tudod-e a játék teljes nevét. A végén kiderül, hogy mennyit találtál el.</p>
			<p>Ha szeretnéd elmenteni az eredményed, akkor regisztrálj az oldalon!</p>
			<h6>Jó szórakozást kívánunk!</h6>
			<a class="btn btn-success" href="/new">Új játék indítása</a>
		</div>
	</div>


	<div class="row mt-3" style="font-size: 12px;">
		Készítette: Karácsony Balázs, Györkis Tamás, Kovács Dávid
	</div>

</div>

@endsection
