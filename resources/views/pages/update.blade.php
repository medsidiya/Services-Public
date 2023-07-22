
<div class="modal fade" id="editServe{{$service->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
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
                <div class="form-group mb-2">
                    <label for="">nom</label>
                    <input type="text" class="form-control" name="nom" id="" value="{{$service->nom}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">document</label>
                    <input type="text" class="form-control" name="document" id=""  value="{{$service->document}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">description</label>
                    <input type="text" class="form-control" name="description" id=""   value="{{$service->descrption}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">prix</label>
                    <input type="text" class="form-control" name="prix" id=""  value="{{$service->prix}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">periode</label>
                    <input type="text"class="form-control" name="periode" id=""  value="{{$service->periode}}">
                </div>
                <div class="form-group mb-2">
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
</div>
