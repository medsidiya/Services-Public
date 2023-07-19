
@extends('layouts.app')

@section("titel" , "Our Services")

@section('content')
  {{-- Start Services  --}}
  <a href="{{url('addserve/create')}}">add service</a>
  <div class="services text-center pt-5 pb-5 ">
    <div class="container">
      <div class="main-title mt-5 mb-5 position-relative">
        <h2>Categorie</h2>
        <p class="text-black-50 text-uppercase">Some of Our Services</p>
      </div>
      <div class="row">

        @foreach ($categorie as $category)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <i class="fa-solid fa-notes-medical fa-4x"></i>
            </div>
            <a href="">{{$category->nom}}</a>
            <p class="text-black-50">{{$category->description}}</p>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <i class="fa-solid fa-school fa-4x"></i>
            </div>
            <a href="">Education</a>
            <p class="text-black-50">for more information about the specefic subject</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <!-- <i class="fa-solid fa-business-time fa-4x"></i> -->
              <i class="fa-solid fa-truck-fast fa-4x"></i>
            </div>
            <a href="">Transport</a>
            <p class="text-black-50">for more information about the specefic subject</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <i class="fa-solid fa-handshake fa-4x"></i>
            </div>
            <a href="">Transport</a>
            <p class="text-black-50">for more information about the specefic subject</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <i class="fa-solid fa-building-shield fa-4x"></i>
            </div>
            <a href="">Security</a>
            <p class="text-black-50">for more information about the specefic subject</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <i class="fa-solid fa-sim-card fa-4x"></i>
            </div>
            <a href="">Reseaux&Communication</a>
            <p class="text-black-50">for more information about the specefic subject</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
              <i class="fa-solid fa-bolt-lightning fa-4x"></i>
            </div>
            <a href="">Electricite</a>
            <p class="text-black-50">for more information about the specefic subject</p>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
{{-- End Services  --}}
@endsection
