<div class="modal fade" id="edit{{$structure->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add structure</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('updateStucture', $structure->id)}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">nom</label>
                    <input type="text" class="form-control" name="nom" id="" value="{{$structure->nom}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">id categ</label>
                    <input type="text" class="form-control" name="cteg_id" id=""   value="{{$structure->cteg_id}}">
                </div>
                this is
            </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
        </form>
      </div>
    </div>
  </div>
