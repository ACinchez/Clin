{{-- @if(!is_null($results) && count($results) > 0)
    <ul>
        @foreach($results as $result)
            <li>{{ $result->lastname }}</li>
        @endforeach
    </ul>
@else
    <p>No results found</p>
@endif --}}


<form method="GET" action="{{ route('search') }}">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
