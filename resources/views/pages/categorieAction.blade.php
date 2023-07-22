{{-- @extends('layouts.auth')

@section('content')
<div class="container">
    Gestion de Categories
    <table class="table">
        <thead>
            <tr>
                <th colspan="5">Categorie</th>
                <th colspan="2"><a href="addcategorie" class="btn-primery">new categories</a></th>
            </tr>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">nom</th>
            <th scope="col">description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
            <tr>
                <td>{{$categorie->id}}</td>
                <td>{{$categorie->nom}}</td>
                <td>{{$categorie->description}}</td>
                <td class="d-flex">
                    <a href="{{route('editCategorie',$categorie->id)}}" class="btn btn-primary  ml-3">Edit</a>
                    <a href="{{route('delateCategorie',$categorie->id)}}" class="btn btn-danger">Delate</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection --}}


@extends('layouts.auth')

@section('content')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add service</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form action="{{route('addCategorie')}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">nom</label>
                    <input type="text" class="form-control" name="nom" id="" placeholder="nom">
                </div>
                <div class="form-group mb-3">
                    <label for="">description</label>
                    <input type="text" class="form-control" name="description" id=""  placeholder="description">
                </div>
            </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>
      </div>
    </div>
  </div>
{{-- model for edit --}}
{{-- @include('pages.updateCategorie') --}}
{{-- <div class="container"> --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Gestion de Services
                    <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop">add service</button>
                </h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">nom</th>
                        <th scope="col">description</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                        <tr>
                            <td>{{$categorie->id}}</td>
                            <td>{{$categorie->nom}}</td>
                            <td>{{$categorie->description}}</td>
                            <td class="d-flex justify-content-between">
                                {{-- {{route('editCategorie',$categorie->id)}} --}}
                                <a href="#edit{{$categorie->id}}" class="btn btn-primary  ml-3" data-bs-toggle="modal">Edit</a>
                                {{-- <button type="button" class="btn btn-primary float-end editbtn " data-bs-toggle="modal" data-bs-target="#edit">Edit</button> --}}
                                <a href="{{route('delateCategorie',$categorie->id)}}" class="btn btn-danger">Delate</a>
                                @include('pages.test')
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </div>

{{-- </div> --}}
@endsection

