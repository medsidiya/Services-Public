@extends('layouts.auth')

@section('content')
<div class="container">
    <form action="{{route('updateServe', $service->id)}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="nom" id="" value="{{$service->nom}}">
        <input type="text" name="document" id=""  value="{{$service->document}}">
        <input type="text" name="description" id=""  value="{{$service->descrption}}">
        <input type="text" name="prix" id=""  value="{{$service->prix}}">
        <input type="text" name="periode" id=""  value="{{$service->periode}}">
        <input type="text" name="cteg_id" id=""  value="{{$service->cteg_id}}">
        <input type="text" name="struct_id" id=""  value="{{$service->struct_id}}">
        <button type="submit">update</button>
    </form>
</div>
{{--
    <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">add service</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('updateServe', $service->id)}}" method="post">
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">nom</label>
                        <input type="text" class="form-control" name="nom" id="" value="{{$service->nom}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">document</label>
                        <input type="text" class="form-control" name="document" id=""  value="{{$service->document}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">description</label>
                        <input type="text" class="form-control" name="description" id=""   value="{{$service->descrption}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">prix</label>
                        <input type="text" class="form-control" name="prix" id=""  value="{{$service->prix}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">periode</label>
                        <input type="text"class="form-control" name="periode" id=""  value="{{$service->periode}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">catgorie id</label>
                        <input type="text" class="form-control" name="cteg_id" id=""  value="{{$service->cteg_id}}">
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
</div> --}}
@endsection
