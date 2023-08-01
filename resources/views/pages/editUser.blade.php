

<div class="modal fade" id="edit{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add user</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('updateUser', $user->id)}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">nom</label>
                    <input type="text" class="form-control" name="name" id="" value="{{$user->name}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">email</label>
                    <input type="text" class="form-control" name="email" id=""   value="{{$user->email}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">password</label>
                    <input type="text" class="form-control" name="password" id=""   value="{{$user->password}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">Strucure id</label>
                    <input type="text" class="form-control" name="struct_id" id=""   value="{{$user->struct_id}}">
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


  {{-- update services --}}


