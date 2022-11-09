@extends('template')

@section('title')
<title>Regisztráció</title>
@endsection

@section('content')
<section class="vh-100">

  <script src="{{ asset('js/registration/displayProfilePicture.js') }}"></script>

  <div class="container h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">

      <div class="col-lg-12 col-xl-11">

        <div class="card bg-dark text-white" style="border-radius: 25px; --bs-bg-opacity: .98;">

          <div class="card-body p-md-5">

            <div class="row justify-content-center">

              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regisztráció</p>

                <form method="POST" action="/users" enctype="multipart/form-data" class="mx-1 mx-md-4">
                @csrf
                  <div class="d-flex flex-row align-items-center mb-4">

                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input
                        type="file"
                        name="profile_picture"
                        id="profilePictureInput"
                        accept="image/*"
                        class="form-control"
                      >

                    </div>

                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">

                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <label class="form-label" for="profilePictureInput">Profilkép:</label>
                      <img
                        id="displayProfilePicture"
                        src="{{ asset('images/samplePictures/Sample_User_Icon.png') }}"
                        style="width: 60%; height: 60%; display: block; margin-left: auto; margin-right: auto;"
                        alt="Nincs beállítva"
                        title="Profilkép"
                      >

                    </div>

                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">

                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="text" name="username" id="username" class="form-control" required/>

                      @error('username')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror

                      <label class="form-label" for="username">Felhasználónév:</label>

                    </div>

                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">

                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="email" name="email" id="email" class="form-control" required/>

                      @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror

                      <label class="form-label" for="email">Email Cím:</label>

                    </div>

                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">

                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="password" name="password" id="password" class="form-control" required/>

                      @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror

                      <label class="form-label" for="password">Jelszó:</label>

                    </div>

                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">

                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="password" name="password_confirmation" id="confirmPassword" class="form-control" required/>

                      @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                      @enderror

                      <label class="form-label" for="password_confirmation">Jelszó megerősítése:</label>

                    </div>

                  </div>

                  <!--<div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>-->

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" name="submitBtn" class="btn btn-success btn-lg" value="Regisztrálok">
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <p>
                      Már rendelkezel felhasználói fiókkal?
                      <a href="/login" class="text-success">Bejelentkezés</a>
                    </p>
                  </div>

                </form>

              </div>

                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src={{ asset('images/samplePictures/reg_pic.jpg') }}
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
