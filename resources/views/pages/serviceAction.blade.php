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


        <form action="{{route('addServe')}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">nom</label>
                    <input type="text" class="form-control" name="nom" id="" placeholder="nom">
                </div>
                <div class="form-group mb-2">
                    <label for="">document</label>
                    <input type="text" class="form-control" name="document" id=""  placeholder="document">
                </div>
                <div class="form-group mb-2">
                    <label for="">description</label>
                    <input type="text" class="form-control" name="description" id=""  placeholder="description">
                </div>
                <div class="form-group mb-2">
                    <label for="">prix</label>
                    <input type="text" class="form-control" name="prix" id=""  placeholder="prix">
                </div>
                <div class="form-group mb-2">
                    <label for="">periode</label>
                    <input type="text"class="form-control" name="periode" id=""  placeholder="periode">
                </div>
                <div class="form-group mb-2">
                    <label for="">catgorie id</label>
                    <input type="text" class="form-control" name="cteg_id" id=""  placeholder="cteg_id">
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

{{-- @include('pages.updateServe') --}}
<div class="container">
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
                <th scope="col">Document</th>
                <th scope="col">description</th>
                <th scope="col">Prix</th>
                <th scope="col">Periode</th>
                <th scope="col">CategorieId</th>
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
                <td class="d-flex justify-content-between">
                    {{-- {{route('editServe',$service->id)}} --}}
                    <a href="#editServe{{$service->id}}" class="btn btn-primary" data-bs-toggle="modal">Edit</a>
                    {{-- <button type="button" class="btn btn-primary float-end editbtn btn-sm " value="{{$service->id}}">Edit</button> --}}
                    <a href="{{route('delateServe',$service->id)}}" class="btn btn-danger">Delate</a>
                    @include('pages.update')
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
    </div>

</div>
@endsection
