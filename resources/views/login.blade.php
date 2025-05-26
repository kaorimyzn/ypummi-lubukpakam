@extends('layout')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Login User</h1>
         </div>
        </div>
      </div>
    </section>

    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h1 class="mb-0">Login User</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <form method="post" action="{{ url('logincek') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="mb-2">Email</label>
                                <div class="form-group">
                                    <input type="email" for="c_email" class="form-control" id="name" name="email"
                                        required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" required
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="submit-button">
                                    <button class="btn btn-common" id="submit" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
