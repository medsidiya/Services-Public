
@extends('layouts.app')

@section('content')

    @foreach($transprots as $transprot)
    {{-- <p>{{$transprot->nom}}</p>
    <p>{{$transprot->document}}</p>
    <p>{{$transprot->descrption}}</p>
    <p>{{$transprot->prix}}</p>
    <p>{{$transprot->periode}}</p> --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 ml-4">
            <div class="card text-center mb-4" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$transprot->nom}}</h5>
                  <div class="card-text">
                    <h5>what is  this service</h5>
                    <p>{{$transprot->descrption}}</p>
                    <h5>what i need for this service</h5>
                    <p>{{$transprot->document}}</p>
                    <h5>does it free</h5>
                    <p>{{$transprot->prix}}</p>
                    <h5>what is the periode of this service</h5>
                    <p>{{$transprot->periode}}</p>
                  </div>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
