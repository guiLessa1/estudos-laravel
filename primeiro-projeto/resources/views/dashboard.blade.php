<div>
    <h1>Dashboard</h1>
    <a href="{{route('profile')}}">Atualizar Profile</a>

    @if($message = session()->get('message'))
    <div >{{ $message }}</div>
    @endif

    <a href="{{route('links.create')}}">Adicionar link</a>

    <ul>
        @foreach($links as $link)
        <li style="display: flex">
            @unless ($loop->last)
            <form action="{{route('links.down', $link)}}" method="POST">
                @csrf
                @method('PATCH')
                <button>DOWN</button>
            </form>
            @endunless
            @unless ($loop->first)
            <form action="{{route('links.up', $link)}}" method="POST">
                @csrf
                @method('PATCH')
                <button>UP</button>
            </form>
            @endunless
            <a href="{{route('links.edit', $link->id)}}">
                {{$link->id}}. {{ $link->name }}
            </a>
            <form action="{{route('links.destroy', $link)}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este link?')">
                @csrf
                @method('DELETE')
                <button>Deletar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>