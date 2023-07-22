@extends('layouts.auth')

@section('content')
<div class="container">
    {{-- <form action="{{route('updateCategorie', $categorie->id)}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="nom" id="" value="{{$categorie->nom}}">
        <input type="text" name="description" id=""  value="{{$categorie->description}}">
        <button type="submit">update</button>
    </form> --}}



<div class="modal fade" id="edit{{$categorie->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add categorie</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('updateCategorie', $categorie->id)}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                {{-- <div class="form-group mb-3">
                    <label for="">nom</label>
                    <input type="text" class="form-control" name="nom" id="" value="{{$categorie->nom}}">
                </div>
                <div class="form-group mb-3">
                    <label for="">description</label>
                    <input type="text" class="form-control" name="description" id=""   value="{{$categorie->description}}">
                </div> --}}
                this is body
            </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
