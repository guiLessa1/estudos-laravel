<div>
    <h1>Login</h1>

    @if($message = session()->get('message'))
    <div class="alert alert-danger">{{ $message }}</div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <input type="text" name="email" placeholder="Email">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Logar</button>
        <a href="{{ route('register') }}">Registrar</a>

    </form>
</div>