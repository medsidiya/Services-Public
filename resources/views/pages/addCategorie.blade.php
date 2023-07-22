
@extends('layouts.auth')

@section('content')
<div class="container">
    <form action="{{route('addCategorie')}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="nom" id="" placeholder="nom">
        <input type="text" name="description" id=""  placeholder="description">
        <button type="submit">submit</button>
    </form>
</div>
@endsection
