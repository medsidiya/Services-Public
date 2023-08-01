@extends('layouts.app')

@section("titel" , "Home page")

@section('content')
<div class="landing d-flex justify-content-center align-items-center">
    <div class="text-center text-black">
        <h3>Welcome to service public</h3>
        <p class="fs-6 text-black-50 mb-5">Bienvenue sur le site officiel d’information et de démarches administratives</p>
    </div>
</div>
<div class="about mt-2 text-center">
<div class="container">
    <div class="main-title mt-5 mb-5 position-relative">
        <h2>About</h2>
        <p class="text-black-50 text-uppercase">Some of Our Services</p>
    </div>
    <div class="text">
        <p class="fs-9 text-black-50 mb-5">
            Service Public vous informe et vous oriente vers les services qui permettent de connaître vos obligations, d’exercer vos droits et de faire vos démarches du quotidien.Il est édité par la DDI  et réalisé en partenariat avec les administrations nationales et locales.
        </p>
    </div>
</div>
</div>
<div class="question">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@include('footer')
@endsection
