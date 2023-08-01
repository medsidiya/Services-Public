


@extends('layouts.auth')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection
@section('content')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add service</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <form action="{{route('addCategorie')}}" method="post" enctype="multipart/form-data" >
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
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input class="form-control" type="file" name="image" id="formFileMultiple">
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
                <table class="table" id="categoryTable">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">nom</th>
                        <th scope="col">description</th>
                        {{-- <th scope="col">image</th> --}}
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                        <tr>
                            <td>{{$categorie->id}}</td>
                            <td>{{$categorie->nom}}</td>
                            <td>{{$categorie->description}}</td>
                            {{-- <td><img src="{{asset($categorie->image)}}" width="50" height="50" alt="" class="img img-responsive"></td> --}}
                            <td class="d-flex justify-content-between">
                                {{-- {{route('editCategorie',$categorie->id)}} --}}
                                <a href="#edit{{$categorie->id}}" class="btn btn-primary  ml-3" data-bs-toggle="modal">Edit</a>
                                <a href="#delate{{$categorie->id}}" class="btn btn-danger ml-3" data-bs-toggle="modal">delate</a>
                                {{-- <button type="button" class="btn btn-primary float-end editbtn " data-bs-toggle="modal" data-bs-target="#edit">Edit</button> --}}
                                {{-- <a href="{{route('delateCategorie',$categorie->id)}}" class="btn btn-danger">Delate</a> --}}
                                @include('pages.test')
                                @include('pages.delate')
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </div>
    @include('sweetalert::alert')
</div>
@endsection

@push('scripts')
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#categoryTable');
</script>

@endpush
