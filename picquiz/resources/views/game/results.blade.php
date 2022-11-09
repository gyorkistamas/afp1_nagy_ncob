@extends('template')

@section('title')
<title>Eredmények</title>
@endsection

@section('content')
<div class="container bg-dark text-white p-4 rounded-3 mb-4" style="--bs-bg-opacity: .98;">
	<h1>Eredmények:</h1>
	<div class="ps-3">
		<h4>Játékos: {{ $puzzles[0]->username }}</h4>
		<h4>Ekkor: {{ $puzzles[0]->created_at }}</h4>
		<h4>Találatok: {{ $hits . '/' . count($puzzles) }}</h4>
	</div>
	<hr class="p-2">
		<div class="container">
			<div class="row g-4">
				@php
					$i = 1;
					foreach($puzzles as $p):
				@endphp
					<div class="col-3">
						<div
							class="
									border border-6 rounded
									{{ $p->hit ? "border-success bg-success" : "border-danger bg-danger" }}
									p-2
								"
							style="height: 100%;"
						>
							<h5>{{ $i }}&#41; {{ ucwords($p->answer) }}</h5>
							<span class=mb-2>{{ $p->hit ? "Helyes válasz!" : "Nem talált!" }}</span>
							<img class="col-12 border border-2 border-dark"
									src="{{ $p->picture }}"
									onerror="this.onerror=null; this.src='/images/undefined.jpg'"
							>
							</img>
						</div>
					</div>
				@php
					$i++;
					endforeach;
				@endphp
			</div>
		</div>
</div>
<!--{{ var_dump($puzzles); }}-->
@endsection
