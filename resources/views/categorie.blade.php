
@extends('layouts.app')

@section("titel" , "Our Services")

@section('content')
  {{-- Start Services  --}}
  <div class="services text-center pt-5 pb-5 ">
    <div class="container">
      <div class="main-title mt-5 mb-5 position-relative">
        <h2>Categorie</h2>
        <p class="text-black-50 text-uppercase">Some of Our Services</p>
      </div>
      <div class="row">

        @foreach ($categories as $category)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3   text-center">
            <div class="icon text-center">
                <img src="{{asset('imgs/icons/'. $category->image)}}" width="80" height="60" alt="" class="img img-responsive">
            </div>
            <a href="transport/{{$category->id}}">{{$category->nom}}</a>
            <p class="text-black-50">{{$category->description}}</p>
            <button class="btn rounded-pill main-btn width-5">Plus</button>
            {{-- <a href="{{url('transport/transport')}}">for more -></a> --}}
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
{{-- End Services  --}}
@endsection
