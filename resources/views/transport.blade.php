
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h4 class="m-4">Bienvenue sur le site officiel d’information et de démarches administratives</h4>
            @foreach($transprots as $transprot)
            <div class="col-sm-6 col-md-4 col-lg-3 m-4">
            <div class="card text-center mb-4" style="width: 18rem; min-height: 169px;">
                <div class="card-body">
                  <h5 class="card-title details">{{$transprot->nom}}</h5>
                  <div class="card-text">
                    <h5>detailes de service</h5>
                    <p>{{$transprot->descrption}}</p>
                  </div>
                  {{-- @foreach ($categorie as $category) --}}

                  <a href="imprimer/{{$transprot->id}}" class="btn btn-primary">for more</a>
                  {{-- @endforeach --}}
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
