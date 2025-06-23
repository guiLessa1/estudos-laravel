<div>
    <h1>Criar um link</h1>

    @if($message = session()->get('message'))
    <div >{{ $message }}</div>
    @endif

    <form action="{{ route('links.create') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <div>
            <input type="link" name="link" placeholder="Link">
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Salvar</button>

    </form>
</div>