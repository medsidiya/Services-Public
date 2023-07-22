
@extends('layouts.auth')

@section('content')
<div class="container">
    <form action="{{route('addServe')}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="nom" id="" placeholder="nom">
        <input type="text" name="document" id=""  placeholder="document">
        <input type="text" name="description" id=""  placeholder="description">
        <input type="text" name="prix" id=""  placeholder="prix">
        <input type="text" name="periode" id=""  placeholder="periode">
        <input type="text" name="cteg_id" id=""  placeholder="cteg_id">
        <button type="submit">submit</button>
    </form>
</div>
@endsection
