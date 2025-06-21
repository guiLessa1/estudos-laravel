<div>
    <h1>Dashboard</h1>

    @if($message = session()->get('message'))
    <div class="alert alert-danger">{{ $message }}</div>
    @endif

    <ul>
        @foreach($links as $link)
        <li>
            <a href="{{route('links.edit', $link->id)}}">{{ $link->name }}</a>
        </li>
        @endforeach
    </ul>
</div>