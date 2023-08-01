


<form action="{{route('searchCategory')}}" method="post">
    @csrf
    <input type="text" name="search" id="search" value="{{isset($search)? $search : ''}}">
    <button type="submit" class="btn btn-primary">Search</button>
</form>
