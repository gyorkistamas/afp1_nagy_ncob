@extends('template')

@section('title')
<title>Eredmények</title>
@endsection

@section('content')
<!--{{ var_dump($puzzles); }}-->
<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">
	<h1>Eredmények:</h1>
		@php
			$i = 1;
			foreach($puzzles as $p):
		@endphp
			<div class="col-3 d-inline-block
						border border-6 rounded
						{{ $p->hit ? "border-success bg-success" : "border-danger bg-danger" }}
						p-2
						"
			>
				<h6>{{ $i }}&#41; {{ $p->answer }}</h6>
				<img class="col-12 border border-2 border-dark"
						src="{{ $p->picture }}"
						onerror="this.onerror=null; this.src='/images/undefined.jpg'"
				>
				</img>
			</div>
		@php
			$i++;
			endforeach;
		@endphp
</div>
@endsection
