
{{-- this is for delate structure --}}
<div class="modal fade" id="delate{{$structure->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Delate structure</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('delateStucture', $structure->id)}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <p>do you whant to delate this structure{{$structure->id}}</p>
                    <input type="hidden" class="form-control" name="nom" id="" value="{{$structure->id}}">
            </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">delate</button>
              </div>
        </form>
      </div>
    </div>
  </div>
