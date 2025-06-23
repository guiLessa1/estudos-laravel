<div>
    <h1>Editar um link :: {{ $link->name }}</h1>

    @if($message = session()->get('message'))
    <div class="alert alert-danger">{{ $message }}</div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="post">
        @csrf
        @method('put')
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name', $link->name) }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <div>
            <input type="link" name="link" placeholder="Link" value="{{ old('link', $link->link) }}">
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>

        <a href="{{ route('dashboard') }}">Voltar</a>
        <button>Salvar</button>

    </form>
</div>