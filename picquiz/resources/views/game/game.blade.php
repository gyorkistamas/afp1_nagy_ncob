@extends('template')

@php
	$debug = True;
	//$debug = False;

	$answer = $puzzle->answer;
	$pic = $puzzle->picture;

	$validation_url = dirname($_SERVER["REQUEST_URI"]) . '/' . $nth . '/validate';

	if($debug){
		var_dump($puzzle);
	}
@endphp

@section('title')
<title>Játék</title>
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
			<img class="col-12" id=qimg
					src="{{ $pic }}"
					onerror="this.onerror=null; this.src='/images/undefined.jpg'"
			>
			</img>
		</div>

		<hr class="mt-2 d-block d-lg-none">

		<div class="col-12 col-lg-8">
			<form method=post
					action={{ $validation_url }} 
					id="tippForm"
					onsubmit="return preguess()"
			>
				@csrf
				<div style="display: flex; justify-content: space-between;">
					<div class=mb-4>
						<h3>Tipp:</h3>
						<input id="tipp" name="tipp" placeholder="játék név"></input>
						<span id=inputErrorPlaceholder class="text-danger"></span>
					</div>
					<div style="float: right;">
						<h4>{{ $nth }}/{{ $per }}</h4>
						<h4>{{ $hits }} találat</h4>
					</div>
				</div>
				<button class="btn btn-success mb-2">Beküldés</button>
			</form>
			<form method=post
					action={{ $validation_url }}
			>
				@csrf
				<input name="tipp" class="d-none" value=""></input>
				<button class="btn btn-danger">Passz</button>
			</form>
		</div>
	</div>


	@if ($debug)
		<span class="text-warning">answer: {{ $answer }}<span>
	@endif

<script>
	function preguess(){
		let p = document.getElementById('inputErrorPlaceholder');
		let t = document.getElementById('tipp');
		if(t.value == ""){
			p.innerText = "*Lemaradt a tipped!"
			return false;
		}else{
			return true;
		}
	}
</script>
</div>

@endsection
