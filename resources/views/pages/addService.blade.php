@extends('layouts.auth')

@section('content')
<div class="container">
    Gestion de Services
    <table class="table">
        <thead>
            <tr>
                <th colspan="5">services</th>
                <th colspan="2"><a href="" class="btn-primery">new service</a></th>
            </tr>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">nom</th>
            <th scope="col">Document</th>
            <th scope="col">description</th>
            <th scope="col">Prix</th>
            <th scope="col">Periode</th>
            <th scope="col">Categorie Id</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->nom}}</td>
                <td>{{$service->document}}</td>
                <td>{{$service->descrption}}</td>
                <td>{{$service->prix}}</td>
                <td>{{$service->periode}}</td>
                <td>{{$service->cteg_id}}</td>
                <td class="d-flex">
                    <a href="" class="btn btn-primary m-r-2">Edit</a>
                    <a href="" class="btn btn-danger">Delate</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
