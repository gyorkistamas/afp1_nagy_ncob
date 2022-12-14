@extends('template')

@section('title')
<title>Bejelentkezés</title>
@endsection

@section('content')

<section class="vh-100">

    <div class="container h-70">

        <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-lg-12 col-xl-11">

                <div class="card bg-dark text-white" style="border-radius: 25px; --bs-bg-opacity: .98;">

                    <div class="card-body p-md-5">

                        <div class="row justify-content-center">

                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Bejelentkezés</p>

                                <form method="POST" action="/users/authenticate" enctype="multipart/form-data" class="mx-1 mx-md-4">
                                @csrf

                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">

                                            <input type="email" name="email" id="email" class="form-control" required/>

                                            @error('email')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror

                                            <label class="form-label" for="email">Email Cím</label>

                                        </div>

                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">

                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">

                                            <input type="password" name="password" id="password" class="form-control" required/>

                                            @error('password')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror

                                            <label class="form-label" for="password">Jelszó</label>

                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" name="submitBtn" class="btn btn-success btn-lg" value="Belépek">
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <p>
                                        Még nem rendelkezel felhasználói fiókkal?
                                        <a href="/register" class="text-success">Regisztráció</a>
                                        </p>
                                    </div>

                                </form>

                            </div>

                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src= {{ asset('images/samplePictures/login_pic.jpg') }}
                                class="img-fluid" alt="Sample image">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




@endsection
