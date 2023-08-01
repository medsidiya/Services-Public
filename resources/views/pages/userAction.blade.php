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
        <form action="{{route('addUser')}}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="nom">
                </div>
                <div class="form-group mb-3">
                    <label for="">email</label>
                    <input type="email" class="form-control" name="email" id=""  placeholder="email">
                </div>
                <div class="form-group mb-3">
                    <label for="">password</label>
                    <input type="password" class="form-control" name="password" id=""  placeholder="password">
                </div>
                <div class="form-group mb-3">
                    <label for="">structure</label>
                    <select class="form-control" name="cteg_id" id="">
                        @foreach ($structurs as $str)
                        <option value="{{ $str->id}}">{{ $str->nom}}</option>
                        @endforeach
                    </select>
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
{{-- @include('pages.updateuser') --}}
{{-- <div class="container"> --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Gestion de Services
                    <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop">add User</button>
                </h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Structure id</th>
                        {{-- <th scope="col">passwrd</th> --}}
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            {{-- <td>{{$user->password}}</td> --}}
                            <td>{{$user->struct_id}}</td>
                            <td class="d-flex justify-content-between">
                                {{-- {{route('edituser',$user->id)}} --}}
                                <a href="#edit{{$user->id}}" class="btn btn-primary  ml-3" data-bs-toggle="modal">Edit</a>
                                <a href="#delate{{$user->id}}" class="btn btn-danger  ml-3" data-bs-toggle="modal">delate</a>
                                {{-- <button type="button" class="btn btn-primary float-end editbtn " data-bs-toggle="modal" data-bs-target="#edit">Edit</button> --}}
                                {{-- <a href="{{route('delateuser',$user->id)}}" class="btn btn-danger">Delate</a> --}}
                                @include('pages.editUser')
                                @include('pages.delateUser')
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
