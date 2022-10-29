<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/navbar.js" defer></script>
    @yield('title')
</head>
<body>

    <div id="navtop"></div>
	<nav class="navbar navbar-dark navbar-expand-xl bg-dark sticky-top" id="nav">
		<div class="container-fluid">
			<a class="navbar-brand" href="/"><img src="favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="" style="filter: invert(100%);">PicQuiz</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item mt-2 mt-lg-0">
						<a href="/" class="nav-link navitem active mt-3 mt-xl-0"><img src="images/icons/mainPageIcon.png">Főoldal</a>
					</li>
					<li class="nav-item mt-2 mt-lg-0">
						<a href="#" class="nav-link navitem mt-3 mt-xl-0"><img
								src="images/icons/newGameIcon.png">Új játék</a>
					</li>


					<li class="nav-item mt-2 mt-lg-0">
						<a href="kapcsolat.html" class="nav-link navitem mt-3 mt-xl-0 mb-5 mb-xl-0"><img src="images/icons/feedbackIcon.png">Visszajelzés</a>
					</li>

				</ul>


				<ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
					<li class="nav-item mt-2 mt-lg-0">
						<a href="#" class="nav-link navitem mt-3 mt-xl-0 mb-2 mb-xl-0"><img
								src="images/icons/viewProfileIcon.png">Profil megtekintése</a>
					</li>
					<li class="nav-item mt-2 mt-lg-0">
						<a href="/register" class="nav-link navitem mb-2 mb-xl-0"><img src="images/icons/registerIcon.png">Regisztráció</a>
					</li>
					<li class="nav-item mt-2 mt-lg-0">
						<a href="" class="nav-link navitem"><img src="images/icons/loginIcon.png">Bejelentkezés</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>

    @yield('content')

</body>
</html>