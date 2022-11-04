@extends('template')

@php
	$users = DB::table('users')->get();
@endphp

@section('title')
<title>Felhasználó lista</title>
@endsection

@section('content')

<div class="container bg-dark text-white p-4 rounded-3" style="--bs-bg-opacity: .98;">

	<div class="row">
		<div class="col-12 text-center">
			<h1>Felhasználók listája:</h1>
		</div>
	</div>

	@foreach ($users as $user)
		<hr class="mt-2 d-block">

		<div class="row" style="justify-content: space-between;">
			<div class="col-8">
				<div class="col-2">
					<img class="col-12"
						src="{{ $user->profile_picture }}"
						onerror="this.onerror=null; this.src='images/undefined.jpg'"
					>
					</img>
				</div>
				<div class="col-2">
					<h1>{{ $user->username }}</h1>
					<h4><nobr>Csatlakozott:&nbsp;&nbsp;{{ $user->created_at }}</nobr></h4>
				</div>
			</div>
			<div class="col-4">
				<div class="col-12 float-right">
					<a href="" class="btn btn-success col-12 mb-4">Profil</a>
					<div class="col-12">
						<h4 class="d-inline">admin?</h4>
						@if ($user->isAdmin)
							<span class="text-success">Igen</span>
						@else
							<span class="text-danger">Nem</span>
						@endif
					</div>
					<div class="col-12">
						<h4 class="d-inline">Bannolva?</h4>
						@if ($user->isBanned)
							<span class="text-danger">Igen</span>
						@else
							<span class="text-success">Nem</span>
						@endif
					</div>
				</div>
			</div>
		</div>
	@endforeach
	<hr class="mt-2 d-block">
</div>

@endsection
