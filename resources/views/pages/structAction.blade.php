@extends('layouts.auth')

@section('content')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add structure</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('addStucture')}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="nom" id="" placeholder="nom">
                </div>
                <div class="form-group mb-3">
                    <label for="">id categorie</label>
                    <input type="text" class="form-control" name="categ_id" id=""  placeholder="description">
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
{{-- @include('pages.updatestructure') --}}
{{-- <div class="container"> --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Gestion de Structures
                    <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop">add structure</button>
                </h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">nom</th>
                        <th scope="col">id categorie</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($structures as $structure)
                        <tr>
                            <td>{{$structure->id}}</td>
                            <td>{{$structure->nom}}</td>
                            <td>{{$structure->cteg_id}}</td>
                            <td class="d-flex justify-content-between">
                                {{-- {{route('editstructure',$structure->id)}} --}}
                                <a href="#edit{{$structure->id}}" class="btn btn-primary  ml-3" data-bs-toggle="modal">Edit</a>
                                <a href="#delate{{$structure->id}}" class="btn btn-danger  ml-3" data-bs-toggle="modal">Delate</a>
                                {{-- <button type="button" class="btn btn-primary float-end editbtn " data-bs-toggle="modal" data-bs-target="#edit">Edit</button> --}}
                                {{-- <a href="{{route('delateStucture',$structure->id)}}" class="btn btn-danger">Delate</a> --}}
                                @include('pages.editStrut')
                                @include('pages.delateStruct')
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
