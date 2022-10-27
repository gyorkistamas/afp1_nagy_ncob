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
	<nav class="navbar navbar-dark navbar-expand-md bg-dark sticky-top" id="nav">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">PicQuiz</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item mt-2 mt-lg-0">
						<a href="/" class="nav-link navitem active"><img src="images/mainPageIcon.png">Főoldal</a>
					</li>
					<li class="nav-item mt-2 mt-lg-0">
						<a href="#" class="nav-link navitem"><img
								src="images/newGameIcon.png">Új játék</a>
					</li>

					<li class="nav-item mt-2 mt-lg-0">
						<a href="#" class="nav-link navitem"><img
								src="images/viewProfileIcon.png">Profil megtekintése</a>
					</li>

					<li class="nav-item mt-2 mt-lg-0">
						<a href="kapcsolat.html" class="nav-link navitem"><img src="images/feedbackIcon.png">Visszajelzés</a>
					</li>

				</ul>


				<ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
					<li class="nav-item mt-2 mt-lg-0">
						<a href="" class="nav-link navitem"><img src="images/registerIcon.png">Regisztráció</a>
					</li>
					<li class="nav-item mt-2 mt-lg-0">
						<a href="" class="nav-link navitem"><img src="images/loginIcon.png">Bejelentkezés</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>

    @yield('content')

</body>
</html>